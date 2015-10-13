/*-----------------------------------------------------------------

Modular - JS Extension
Made by @esr360
http://github.com/esr360/Modular/
	
-----------------------------------------------------------------*/

//-----------------------------------------------------------------
// Convert CSS config to JS
//-----------------------------------------------------------------

// Get styles' configuration
var stylesConfigJSON = document.getElementById("stylesConfigJSON");

// Remove quotes from computed JSON
function removeQuotes(json) {
    json = json.replace(/^['"]+|\s+|\\|(;\s?})+|['"]$/g, '');
    return json;
}

// Convert computed JSON to camelCase
function camelCase(json) {
	json = json.replace(/-([a-z])/g, function (g) { 
		return g[1].toUpperCase(); 
	});
	return json;
}

// Convert the config to JS
function getStylesConfig(camelCase) {
    var style = null;
    style = window.getComputedStyle(stylesConfigJSON, '::before');
    style = style.content;
	style = removeQuotes(style);
	if(camelCase) {
		style = camelCase(style);
	}
    return JSON.parse(style);
}

// Store configuartion data in a variable
var module = getStylesConfig();

// CamelCase the config
var moduleCC = getStylesConfig(camelCase);

// Create a global variable to select each main component in the DOM
var componentIndex = 0;
$.each(module, function(component) {
	var componentCC = moduleCC[Object.keys(moduleCC)[componentIndex]]['name'];
	window[componentCC] = '.' + component + ', [class*="' + component + '-"]';
	componentIndex++;
});

//-----------------------------------------------------------------
// Functions
//-----------------------------------------------------------------

//	1. setting()

//-----------------------------------------------------------------

// 1. Setting
//-----------------------------------------------------------------

//	Usage
//
//	if(setting(navigation, 'sticky')) {
//		...
//	}

function setting(component, setting) {
	
	var $setting  = module[component][setting],
		$id = $('.' + component + ', [class*="' + component + '-"]'),
		$selector = $id.is('[class*="-' + setting + '"]') == true;
		
	if (typeof($setting[Object.keys($setting)[0]]) == 'boolean') {
		return $selector || $setting['default'] != false;
	} else {
		return $selector || $setting != false;
	}
	
}
//@prepros-append js/owl.carousel.js
//@prepros-append js/owl.animate.js
//@prepros-append js/owl.autoheight.js
//@prepros-append js/owl.autoplay.js
//@prepros-append js/owl.hash.js
//@prepros-append js/owl.lazyload.js
//@prepros-append js/owl.navigation.js
//@prepros-append js/owl.video.js
/******************************************************************
Animate Numbers
******************************************************************/

/** @preserve jQuery animateNumber plugin v0.0.10
 * (c) 2013, Alexandr Borisov.
 * https://github.com/aishek/jquery-animateNumber
 */

// ['...'] notation using to avoid names minification by Google Closure Compiler
(function($) {
  var reverse = function(value) {
    return value.split('').reverse().join('');
  };

  var defaults = {
    numberStep: function(now, tween) {
      var floored_number = Math.floor(now),
          target = $(tween.elem);

      target.text(floored_number);
    }
  };

  var handle = function( tween ) {
    var elem = tween.elem;
    if ( elem.nodeType && elem.parentNode ) {
      var handler = elem._animateNumberSetter;
      if (!handler) {
        handler = defaults.numberStep;
      }
      handler(tween.now, tween);
    }
  };

  if (!$.Tween || !$.Tween.propHooks) {
    $.fx.step.number = handle;
  } else {
    $.Tween.propHooks.number = {
      set: handle
    };
  }

  var extract_number_parts = function(separated_number, group_length) {
    var numbers = separated_number.split('').reverse(),
        number_parts = [],
        current_number_part,
        current_index,
        q;

    for(var i = 0, l = Math.ceil(separated_number.length / group_length); i < l; i++) {
      current_number_part = '';
      for(q = 0; q < group_length; q++) {
        current_index = i * group_length + q;
        if (current_index === separated_number.length) {
          break;
        }

        current_number_part = current_number_part + numbers[current_index];
      }
      number_parts.push(current_number_part);
    }

    return number_parts;
  };

  var remove_precending_zeros = function(number_parts) {
    var last_index = number_parts.length - 1,
        last = reverse(number_parts[last_index]);

    number_parts[last_index] = reverse(parseInt(last, 10).toString());
    return number_parts;
  };

  $.animateNumber = {
    numberStepFactories: {
      /**
       * Creates numberStep handler, which appends string to floored animated number on each step.
       *
       * @example
       * // will animate to 100 with "1 %", "2 %", "3 %", ...
       * $('#someid').animateNumber({
       *   number: 100,
       *   numberStep: $.animateNumber.numberStepFactories.append(' %')
       * });
       *
       * @params {String} suffix string to append to animated number
       * @returns {Function} numberStep-compatible function for use in animateNumber's parameters
       */
      append: function(suffix) {
        return function(now, tween) {
          var floored_number = Math.floor(now),
              target = $(tween.elem);

          target.prop('number', now).text(floored_number + suffix);
        };
      },

      /**
       * Creates numberStep handler, which format floored numbers by separating them to groups.
       *
       * @example
       * // will animate with 1 ... 217,980 ... 95,217,980 ... 7,095,217,980
       * $('#world-population').animateNumber({
       *    number: 7095217980,
       *    numberStep: $.animateNumber.numberStepFactories.separator(',')
       * });
       *
       * @params {String} [separator=' '] string to separate number groups
       * @params {String} [group_length=3] number group length
       * @returns {Function} numberStep-compatible function for use in animateNumber's parameters
       */
      separator: function(separator, group_length) {
        separator = separator || ' ';
        group_length = group_length || 3;

        return function(now, tween) {
          var floored_number = Math.floor(now),
              separated_number = floored_number.toString(),
              target = $(tween.elem);

          if (separated_number.length > group_length) {
            var number_parts = extract_number_parts(separated_number, group_length);

            separated_number = remove_precending_zeros(number_parts).join(separator);
            separated_number = reverse(separated_number);
          }

          target.prop('number', now).text(separated_number);
        };
      }
    }
  };

  $.fn.animateNumber = function() {
    var options = arguments[0],
        settings = $.extend({}, defaults, options),

        target = $(this),
        args = [settings];

    for(var i = 1, l = arguments.length; i < l; i++) {
      args.push(arguments[i]);
    }

    // needs of custom step function usage
    if (options.numberStep) {
      // assigns custom step functions
      var items = this.each(function(){
        this._animateNumberSetter = options.numberStep;
      });

      // cleanup of custom step functions after animation
      var generic_complete = settings.complete;
      settings.complete = function() {
        items.each(function(){
          delete this._animateNumberSetter;
        });

        if ( generic_complete ) {
          generic_complete.apply(this, arguments);
        }
      };
    }

    return target.animate.apply(target, args);
  };

}(jQuery));

//=================================================================
// Data-Manipulate
//=================================================================
		
function dataM() {
	
	// define data types
	var elReveal = $('[data-reveal]'),
		elReverseReveal = $('[data-reverse-reveal]'),
		elHover = $('[data-hover]'),
		elActive = $('.inactive');
		
	// function to decide if element is in viewport
	$.fn.visible = function(whole){
		// if the entire element is in view
		if (whole) {
			var a = this.offset().top + this.height();
		// if any part of the element is in view
		} else {
			var a = this.offset().top;
		}
		var b = $(window).scrollTop() + $(window).height();
		// is the element in the viewport?
		if (a < b) {
			return true;
		} else {
			return false;
		}
	}

	// [data-reveal]
	elReveal.each(function() {
		
		var el = $(this),
			styles = el.data('reveal');
							
		$(window).bind("load scroll", function() {
			
			// if element is visible in viewpoint
			if (el.visible(true)) {
				el.attr('style', styles);
			}
			
		});	
	
	}); // elReveal
	
	// [data-reverse-reveal]
	elReverseReveal.each(function() {
		
		var el = $(this),
			styles = el.data('reverse-reveal'),
			cachedStyles = null;
			
		// cache current inline styles
		if (typeof(el.attr('style')) != 'undefined') {
			var cachedStyles = el.attr('style');
		}
		
		// add new styles to element
		el.attr('style', styles)
							
		$(window).bind("load scroll", function() {
			// if element is visible in viewpoint
			if (el.visible(false)) {
				// reset the styles
				el.attr('style', cachedStyles);
			}
			
		});	
	
	}); // elReverseReveal
	
	// [data-hover]
	elHover.each(function(){
		
		var el = $(this),
			styles = el.data('hover');
						
		el.mouseenter(function(){
			
			// cache current inline styles
			cachedStyles = null;
			if (typeof(el.attr('style')) != 'undefined') {
				var cachedStyles = el.attr('style');
			}
			
			// combine cached + new styles
			el.attr('style', cachedStyles + ';' + styles);
			
			// remove new styles when mouse leaves element
			$(this).mouseleave(function(){
				el.attr('style', cachedStyles);
			});
			
		});
			
	}); // elHover
	
	// .inactive
	elActive.each(function(){
		
		// if element is visible in viewpoint
		if ($(this).visible(true)) {
			$(this)
				.removeClass('inactive')
				.addClass('active');
		}
		
	}); // elActive
	
} // dataM()

$(dataM);
/*!
 * Stellar.js v0.6.2
 * http://markdalgleish.com/projects/stellar.js
 *
 * Copyright 2014, Mark Dalgleish
 * This content is released under the MIT license
 * http://markdalgleish.mit-license.org
 */

;(function($, window, document, undefined) {

	var pluginName = 'stellar',
		defaults = {
			scrollProperty: 'scroll',
			positionProperty: 'position',
			horizontalScrolling: true,
			verticalScrolling: true,
			horizontalOffset: 0,
			verticalOffset: 0,
			responsive: false,
			parallaxBackgrounds: true,
			parallaxElements: true,
			hideDistantElements: true,
			hideElement: function($elem) { $elem.hide(); },
			showElement: function($elem) { $elem.show(); }
		},

		scrollProperty = {
			scroll: {
				getLeft: function($elem) { return $elem.scrollLeft(); },
				setLeft: function($elem, val) { $elem.scrollLeft(val); },

				getTop: function($elem) { return $elem.scrollTop();	},
				setTop: function($elem, val) { $elem.scrollTop(val); }
			},
			position: {
				getLeft: function($elem) { return parseInt($elem.css('left'), 10) * -1; },
				getTop: function($elem) { return parseInt($elem.css('top'), 10) * -1; }
			},
			margin: {
				getLeft: function($elem) { return parseInt($elem.css('margin-left'), 10) * -1; },
				getTop: function($elem) { return parseInt($elem.css('margin-top'), 10) * -1; }
			},
			transform: {
				getLeft: function($elem) {
					var computedTransform = getComputedStyle($elem[0])[prefixedTransform];
					return (computedTransform !== 'none' ? parseInt(computedTransform.match(/(-?[0-9]+)/g)[4], 10) * -1 : 0);
				},
				getTop: function($elem) {
					var computedTransform = getComputedStyle($elem[0])[prefixedTransform];
					return (computedTransform !== 'none' ? parseInt(computedTransform.match(/(-?[0-9]+)/g)[5], 10) * -1 : 0);
				}
			}
		},

		positionProperty = {
			position: {
				setLeft: function($elem, left) { $elem.css('left', left); },
				setTop: function($elem, top) { $elem.css('top', top); }
			},
			transform: {
				setPosition: function($elem, left, startingLeft, top, startingTop) {
					$elem[0].style[prefixedTransform] = 'translate3d(' + (left - startingLeft) + 'px, ' + (top - startingTop) + 'px, 0)';
				}
			}
		},

		// Returns a function which adds a vendor prefix to any CSS property name
		vendorPrefix = (function() {
			var prefixes = /^(Moz|Webkit|Khtml|O|ms|Icab)(?=[A-Z])/,
				style = $('script')[0].style,
				prefix = '',
				prop;

			for (prop in style) {
				if (prefixes.test(prop)) {
					prefix = prop.match(prefixes)[0];
					break;
				}
			}

			if ('WebkitOpacity' in style) { prefix = 'Webkit'; }
			if ('KhtmlOpacity' in style) { prefix = 'Khtml'; }

			return function(property) {
				return prefix + (prefix.length > 0 ? property.charAt(0).toUpperCase() + property.slice(1) : property);
			};
		}()),

		prefixedTransform = vendorPrefix('transform'),

		supportsBackgroundPositionXY = $('<div />', { style: 'background:#fff' }).css('background-position-x') !== undefined,

		setBackgroundPosition = (supportsBackgroundPositionXY ?
			function($elem, x, y) {
				$elem.css({
					'background-position-x': x,
					'background-position-y': y
				});
			} :
			function($elem, x, y) {
				$elem.css('background-position', x + ' ' + y);
			}
		),

		getBackgroundPosition = (supportsBackgroundPositionXY ?
			function($elem) {
				return [
					$elem.css('background-position-x'),
					$elem.css('background-position-y')
				];
			} :
			function($elem) {
				return $elem.css('background-position').split(' ');
			}
		),

		requestAnimFrame = (
			window.requestAnimationFrame       ||
			window.webkitRequestAnimationFrame ||
			window.mozRequestAnimationFrame    ||
			window.oRequestAnimationFrame      ||
			window.msRequestAnimationFrame     ||
			function(callback) {
				setTimeout(callback, 1000 / 60);
			}
		);

	function Plugin(element, options) {
		this.element = element;
		this.options = $.extend({}, defaults, options);

		this._defaults = defaults;
		this._name = pluginName;

		this.init();
	}

	Plugin.prototype = {
		init: function() {
			this.options.name = pluginName + '_' + Math.floor(Math.random() * 1e9);

			this._defineElements();
			this._defineGetters();
			this._defineSetters();
			this._handleWindowLoadAndResize();
			this._detectViewport();

			this.refresh({ firstLoad: true });

			if (this.options.scrollProperty === 'scroll') {
				this._handleScrollEvent();
			} else {
				this._startAnimationLoop();
			}
		},
		_defineElements: function() {
			if (this.element === document.body) this.element = window;
			this.$scrollElement = $(this.element);
			this.$element = (this.element === window ? $('body') : this.$scrollElement);
			this.$viewportElement = (this.options.viewportElement !== undefined ? $(this.options.viewportElement) : (this.$scrollElement[0] === window || this.options.scrollProperty === 'scroll' ? this.$scrollElement : this.$scrollElement.parent()) );
		},
		_defineGetters: function() {
			var self = this,
				scrollPropertyAdapter = scrollProperty[self.options.scrollProperty];

			this._getScrollLeft = function() {
				return scrollPropertyAdapter.getLeft(self.$scrollElement);
			};

			this._getScrollTop = function() {
				return scrollPropertyAdapter.getTop(self.$scrollElement);
			};
		},
		_defineSetters: function() {
			var self = this,
				scrollPropertyAdapter = scrollProperty[self.options.scrollProperty],
				positionPropertyAdapter = positionProperty[self.options.positionProperty],
				setScrollLeft = scrollPropertyAdapter.setLeft,
				setScrollTop = scrollPropertyAdapter.setTop;

			this._setScrollLeft = (typeof setScrollLeft === 'function' ? function(val) {
				setScrollLeft(self.$scrollElement, val);
			} : $.noop);

			this._setScrollTop = (typeof setScrollTop === 'function' ? function(val) {
				setScrollTop(self.$scrollElement, val);
			} : $.noop);

			this._setPosition = positionPropertyAdapter.setPosition ||
				function($elem, left, startingLeft, top, startingTop) {
					if (self.options.horizontalScrolling) {
						positionPropertyAdapter.setLeft($elem, left, startingLeft);
					}

					if (self.options.verticalScrolling) {
						positionPropertyAdapter.setTop($elem, top, startingTop);
					}
				};
		},
		_handleWindowLoadAndResize: function() {
			var self = this,
				$window = $(window);

			if (self.options.responsive) {
				$window.bind('load.' + this.name, function() {
					self.refresh();
				});
			}

			$window.bind('resize.' + this.name, function() {
				self._detectViewport();

				if (self.options.responsive) {
					self.refresh();
				}
			});
		},
		refresh: function(options) {
			var self = this,
				oldLeft = self._getScrollLeft(),
				oldTop = self._getScrollTop();

			if (!options || !options.firstLoad) {
				this._reset();
			}

			this._setScrollLeft(0);
			this._setScrollTop(0);

			this._setOffsets();
			this._findParticles();
			this._findBackgrounds();

			// Fix for WebKit background rendering bug
			if (options && options.firstLoad && /WebKit/.test(navigator.userAgent)) {
				$(window).load(function() {
					var oldLeft = self._getScrollLeft(),
						oldTop = self._getScrollTop();

					self._setScrollLeft(oldLeft + 1);
					self._setScrollTop(oldTop + 1);

					self._setScrollLeft(oldLeft);
					self._setScrollTop(oldTop);
				});
			}

			this._setScrollLeft(oldLeft);
			this._setScrollTop(oldTop);
		},
		_detectViewport: function() {
			var viewportOffsets = this.$viewportElement.offset(),
				hasOffsets = viewportOffsets !== null && viewportOffsets !== undefined;

			this.viewportWidth = this.$viewportElement.width();
			this.viewportHeight = this.$viewportElement.height();

			this.viewportOffsetTop = (hasOffsets ? viewportOffsets.top : 0);
			this.viewportOffsetLeft = (hasOffsets ? viewportOffsets.left : 0);
		},
		_findParticles: function() {
			var self = this,
				scrollLeft = this._getScrollLeft(),
				scrollTop = this._getScrollTop();

			if (this.particles !== undefined) {
				for (var i = this.particles.length - 1; i >= 0; i--) {
					this.particles[i].$element.data('stellar-elementIsActive', undefined);
				}
			}

			this.particles = [];

			if (!this.options.parallaxElements) return;

			this.$element.find('[data-stellar-ratio]').each(function(i) {
				var $this = $(this),
					horizontalOffset,
					verticalOffset,
					positionLeft,
					positionTop,
					marginLeft,
					marginTop,
					$offsetParent,
					offsetLeft,
					offsetTop,
					parentOffsetLeft = 0,
					parentOffsetTop = 0,
					tempParentOffsetLeft = 0,
					tempParentOffsetTop = 0;

				// Ensure this element isn't already part of another scrolling element
				if (!$this.data('stellar-elementIsActive')) {
					$this.data('stellar-elementIsActive', this);
				} else if ($this.data('stellar-elementIsActive') !== this) {
					return;
				}

				self.options.showElement($this);

				// Save/restore the original top and left CSS values in case we refresh the particles or destroy the instance
				if (!$this.data('stellar-startingLeft')) {
					$this.data('stellar-startingLeft', $this.css('left'));
					$this.data('stellar-startingTop', $this.css('top'));
				} else {
					$this.css('left', $this.data('stellar-startingLeft'));
					$this.css('top', $this.data('stellar-startingTop'));
				}

				positionLeft = $this.position().left;
				positionTop = $this.position().top;

				// Catch-all for margin top/left properties (these evaluate to 'auto' in IE7 and IE8)
				marginLeft = ($this.css('margin-left') === 'auto') ? 0 : parseInt($this.css('margin-left'), 10);
				marginTop = ($this.css('margin-top') === 'auto') ? 0 : parseInt($this.css('margin-top'), 10);

				offsetLeft = $this.offset().left - marginLeft;
				offsetTop = $this.offset().top - marginTop;

				// Calculate the offset parent
				$this.parents().each(function() {
					var $this = $(this);

					if ($this.data('stellar-offset-parent') === true) {
						parentOffsetLeft = tempParentOffsetLeft;
						parentOffsetTop = tempParentOffsetTop;
						$offsetParent = $this;

						return false;
					} else {
						tempParentOffsetLeft += $this.position().left;
						tempParentOffsetTop += $this.position().top;
					}
				});

				// Detect the offsets
				horizontalOffset = ($this.data('stellar-horizontal-offset') !== undefined ? $this.data('stellar-horizontal-offset') : ($offsetParent !== undefined && $offsetParent.data('stellar-horizontal-offset') !== undefined ? $offsetParent.data('stellar-horizontal-offset') : self.horizontalOffset));
				verticalOffset = ($this.data('stellar-vertical-offset') !== undefined ? $this.data('stellar-vertical-offset') : ($offsetParent !== undefined && $offsetParent.data('stellar-vertical-offset') !== undefined ? $offsetParent.data('stellar-vertical-offset') : self.verticalOffset));

				// Add our object to the particles collection
				self.particles.push({
					$element: $this,
					$offsetParent: $offsetParent,
					isFixed: $this.css('position') === 'fixed',
					horizontalOffset: horizontalOffset,
					verticalOffset: verticalOffset,
					startingPositionLeft: positionLeft,
					startingPositionTop: positionTop,
					startingOffsetLeft: offsetLeft,
					startingOffsetTop: offsetTop,
					parentOffsetLeft: parentOffsetLeft,
					parentOffsetTop: parentOffsetTop,
					stellarRatio: ($this.data('stellar-ratio') !== undefined ? $this.data('stellar-ratio') : 1),
					width: $this.outerWidth(true),
					height: $this.outerHeight(true),
					isHidden: false
				});
			});
		},
		_findBackgrounds: function() {
			var self = this,
				scrollLeft = this._getScrollLeft(),
				scrollTop = this._getScrollTop(),
				$backgroundElements;

			this.backgrounds = [];

			if (!this.options.parallaxBackgrounds) return;

			$backgroundElements = this.$element.find('[data-stellar-background-ratio]');

			if (this.$element.data('stellar-background-ratio')) {
                $backgroundElements = $backgroundElements.add(this.$element);
			}

			$backgroundElements.each(function() {
				var $this = $(this),
					backgroundPosition = getBackgroundPosition($this),
					horizontalOffset,
					verticalOffset,
					positionLeft,
					positionTop,
					marginLeft,
					marginTop,
					offsetLeft,
					offsetTop,
					$offsetParent,
					parentOffsetLeft = 0,
					parentOffsetTop = 0,
					tempParentOffsetLeft = 0,
					tempParentOffsetTop = 0;

				// Ensure this element isn't already part of another scrolling element
				if (!$this.data('stellar-backgroundIsActive')) {
					$this.data('stellar-backgroundIsActive', this);
				} else if ($this.data('stellar-backgroundIsActive') !== this) {
					return;
				}

				// Save/restore the original top and left CSS values in case we destroy the instance
				if (!$this.data('stellar-backgroundStartingLeft')) {
					$this.data('stellar-backgroundStartingLeft', backgroundPosition[0]);
					$this.data('stellar-backgroundStartingTop', backgroundPosition[1]);
				} else {
					setBackgroundPosition($this, $this.data('stellar-backgroundStartingLeft'), $this.data('stellar-backgroundStartingTop'));
				}

				// Catch-all for margin top/left properties (these evaluate to 'auto' in IE7 and IE8)
				marginLeft = ($this.css('margin-left') === 'auto') ? 0 : parseInt($this.css('margin-left'), 10);
				marginTop = ($this.css('margin-top') === 'auto') ? 0 : parseInt($this.css('margin-top'), 10);

				offsetLeft = $this.offset().left - marginLeft - scrollLeft;
				offsetTop = $this.offset().top - marginTop - scrollTop;
				
				// Calculate the offset parent
				$this.parents().each(function() {
					var $this = $(this);

					if ($this.data('stellar-offset-parent') === true) {
						parentOffsetLeft = tempParentOffsetLeft;
						parentOffsetTop = tempParentOffsetTop;
						$offsetParent = $this;

						return false;
					} else {
						tempParentOffsetLeft += $this.position().left;
						tempParentOffsetTop += $this.position().top;
					}
				});

				// Detect the offsets
				horizontalOffset = ($this.data('stellar-horizontal-offset') !== undefined ? $this.data('stellar-horizontal-offset') : ($offsetParent !== undefined && $offsetParent.data('stellar-horizontal-offset') !== undefined ? $offsetParent.data('stellar-horizontal-offset') : self.horizontalOffset));
				verticalOffset = ($this.data('stellar-vertical-offset') !== undefined ? $this.data('stellar-vertical-offset') : ($offsetParent !== undefined && $offsetParent.data('stellar-vertical-offset') !== undefined ? $offsetParent.data('stellar-vertical-offset') : self.verticalOffset));

				self.backgrounds.push({
					$element: $this,
					$offsetParent: $offsetParent,
					isFixed: $this.css('background-attachment') === 'fixed',
					horizontalOffset: horizontalOffset,
					verticalOffset: verticalOffset,
					startingValueLeft: backgroundPosition[0],
					startingValueTop: backgroundPosition[1],
					startingBackgroundPositionLeft: (isNaN(parseInt(backgroundPosition[0], 10)) ? 0 : parseInt(backgroundPosition[0], 10)),
					startingBackgroundPositionTop: (isNaN(parseInt(backgroundPosition[1], 10)) ? 0 : parseInt(backgroundPosition[1], 10)),
					startingPositionLeft: $this.position().left,
					startingPositionTop: $this.position().top,
					startingOffsetLeft: offsetLeft,
					startingOffsetTop: offsetTop,
					parentOffsetLeft: parentOffsetLeft,
					parentOffsetTop: parentOffsetTop,
					stellarRatio: ($this.data('stellar-background-ratio') === undefined ? 1 : $this.data('stellar-background-ratio'))
				});
			});
		},
		_reset: function() {
			var particle,
				startingPositionLeft,
				startingPositionTop,
				background,
				i;

			for (i = this.particles.length - 1; i >= 0; i--) {
				particle = this.particles[i];
				startingPositionLeft = particle.$element.data('stellar-startingLeft');
				startingPositionTop = particle.$element.data('stellar-startingTop');

				this._setPosition(particle.$element, startingPositionLeft, startingPositionLeft, startingPositionTop, startingPositionTop);

				this.options.showElement(particle.$element);

				particle.$element.data('stellar-startingLeft', null).data('stellar-elementIsActive', null).data('stellar-backgroundIsActive', null);
			}

			for (i = this.backgrounds.length - 1; i >= 0; i--) {
				background = this.backgrounds[i];

				background.$element.data('stellar-backgroundStartingLeft', null).data('stellar-backgroundStartingTop', null);

				setBackgroundPosition(background.$element, background.startingValueLeft, background.startingValueTop);
			}
		},
		destroy: function() {
			this._reset();

			this.$scrollElement.unbind('resize.' + this.name).unbind('scroll.' + this.name);
			this._animationLoop = $.noop;

			$(window).unbind('load.' + this.name).unbind('resize.' + this.name);
		},
		_setOffsets: function() {
			var self = this,
				$window = $(window);

			$window.unbind('resize.horizontal-' + this.name).unbind('resize.vertical-' + this.name);

			if (typeof this.options.horizontalOffset === 'function') {
				this.horizontalOffset = this.options.horizontalOffset();
				$window.bind('resize.horizontal-' + this.name, function() {
					self.horizontalOffset = self.options.horizontalOffset();
				});
			} else {
				this.horizontalOffset = this.options.horizontalOffset;
			}

			if (typeof this.options.verticalOffset === 'function') {
				this.verticalOffset = this.options.verticalOffset();
				$window.bind('resize.vertical-' + this.name, function() {
					self.verticalOffset = self.options.verticalOffset();
				});
			} else {
				this.verticalOffset = this.options.verticalOffset;
			}
		},
		_repositionElements: function() {
			var scrollLeft = this._getScrollLeft(),
				scrollTop = this._getScrollTop(),
				horizontalOffset,
				verticalOffset,
				particle,
				fixedRatioOffset,
				background,
				bgLeft,
				bgTop,
				isVisibleVertical = true,
				isVisibleHorizontal = true,
				newPositionLeft,
				newPositionTop,
				newOffsetLeft,
				newOffsetTop,
				i;

			// First check that the scroll position or container size has changed
			if (this.currentScrollLeft === scrollLeft && this.currentScrollTop === scrollTop && this.currentWidth === this.viewportWidth && this.currentHeight === this.viewportHeight) {
				return;
			} else {
				this.currentScrollLeft = scrollLeft;
				this.currentScrollTop = scrollTop;
				this.currentWidth = this.viewportWidth;
				this.currentHeight = this.viewportHeight;
			}

			// Reposition elements
			for (i = this.particles.length - 1; i >= 0; i--) {
				particle = this.particles[i];

				fixedRatioOffset = (particle.isFixed ? 1 : 0);

				// Calculate position, then calculate what the particle's new offset will be (for visibility check)
				if (this.options.horizontalScrolling) {
					newPositionLeft = (scrollLeft + particle.horizontalOffset + this.viewportOffsetLeft + particle.startingPositionLeft - particle.startingOffsetLeft + particle.parentOffsetLeft) * -(particle.stellarRatio + fixedRatioOffset - 1) + particle.startingPositionLeft;
					newOffsetLeft = newPositionLeft - particle.startingPositionLeft + particle.startingOffsetLeft;
				} else {
					newPositionLeft = particle.startingPositionLeft;
					newOffsetLeft = particle.startingOffsetLeft;
				}

				if (this.options.verticalScrolling) {
					newPositionTop = (scrollTop + particle.verticalOffset + this.viewportOffsetTop + particle.startingPositionTop - particle.startingOffsetTop + particle.parentOffsetTop) * -(particle.stellarRatio + fixedRatioOffset - 1) + particle.startingPositionTop;
					newOffsetTop = newPositionTop - particle.startingPositionTop + particle.startingOffsetTop;
				} else {
					newPositionTop = particle.startingPositionTop;
					newOffsetTop = particle.startingOffsetTop;
				}

				// Check visibility
				if (this.options.hideDistantElements) {
					isVisibleHorizontal = !this.options.horizontalScrolling || newOffsetLeft + particle.width > (particle.isFixed ? 0 : scrollLeft) && newOffsetLeft < (particle.isFixed ? 0 : scrollLeft) + this.viewportWidth + this.viewportOffsetLeft;
					isVisibleVertical = !this.options.verticalScrolling || newOffsetTop + particle.height > (particle.isFixed ? 0 : scrollTop) && newOffsetTop < (particle.isFixed ? 0 : scrollTop) + this.viewportHeight + this.viewportOffsetTop;
				}

				if (isVisibleHorizontal && isVisibleVertical) {
					if (particle.isHidden) {
						this.options.showElement(particle.$element);
						particle.isHidden = false;
					}

					this._setPosition(particle.$element, newPositionLeft, particle.startingPositionLeft, newPositionTop, particle.startingPositionTop);
				} else {
					if (!particle.isHidden) {
						this.options.hideElement(particle.$element);
						particle.isHidden = true;
					}
				}
			}

			// Reposition backgrounds
			for (i = this.backgrounds.length - 1; i >= 0; i--) {
				background = this.backgrounds[i];

				fixedRatioOffset = (background.isFixed ? 0 : 1);
				bgLeft = (this.options.horizontalScrolling ? (scrollLeft + background.horizontalOffset - this.viewportOffsetLeft - background.startingOffsetLeft + background.parentOffsetLeft - background.startingBackgroundPositionLeft) * (fixedRatioOffset - background.stellarRatio) + 'px' : background.startingValueLeft);
				bgTop = (this.options.verticalScrolling ? (scrollTop + background.verticalOffset - this.viewportOffsetTop - background.startingOffsetTop + background.parentOffsetTop - background.startingBackgroundPositionTop) * (fixedRatioOffset - background.stellarRatio) + 'px' : background.startingValueTop);

				setBackgroundPosition(background.$element, bgLeft, bgTop);
			}
		},
		_handleScrollEvent: function() {
			var self = this,
				ticking = false;

			var update = function() {
				self._repositionElements();
				ticking = false;
			};

			var requestTick = function() {
				if (!ticking) {
					requestAnimFrame(update);
					ticking = true;
				}
			};
			
			this.$scrollElement.bind('scroll.' + this.name, requestTick);
			requestTick();
		},
		_startAnimationLoop: function() {
			var self = this;

			this._animationLoop = function() {
				requestAnimFrame(self._animationLoop);
				self._repositionElements();
			};
			this._animationLoop();
		}
	};

	$.fn[pluginName] = function (options) {
		var args = arguments;
		if (options === undefined || typeof options === 'object') {
			return this.each(function () {
				if (!$.data(this, 'plugin_' + pluginName)) {
					$.data(this, 'plugin_' + pluginName, new Plugin(this, options));
				}
			});
		} else if (typeof options === 'string' && options[0] !== '_' && options !== 'init') {
			return this.each(function () {
				var instance = $.data(this, 'plugin_' + pluginName);
				if (instance instanceof Plugin && typeof instance[options] === 'function') {
					instance[options].apply(instance, Array.prototype.slice.call(args, 1));
				}
				if (options === 'destroy') {
					$.data(this, 'plugin_' + pluginName, null);
				}
			});
		}
	};

	$[pluginName] = function(options) {
		var $window = $(window);
		return $window.stellar.apply($window, Array.prototype.slice.call(arguments, 0));
	};

	// Expose the scroll and position property function hashes so they can be extended
	$[pluginName].scrollProperty = scrollProperty;
	$[pluginName].positionProperty = positionProperty;

	// Expose the plugin class so it can be modified
	window.Stellar = Plugin;
}(jQuery, this, document));
/*
                       _ _ _____                      _   _
                      | | |  __ \                    | | (_)
    ___  ___ _ __ ___ | | | |__) |_____   _____  __ _| |  _ ___
   / __|/ __| '__/ _ \| | |  _  // _ \ \ / / _ \/ _` | | | / __|
   \__ \ (__| | | (_) | | | | \ \  __/\ V /  __/ (_| | |_| \__ \
   |___/\___|_|  \___/|_|_|_|  \_\___| \_/ \___|\__,_|_(_) |___/ v2.3.0
                                                        _/ |
                                                       |__/

================================================================================

   scrollReveal.js (c) 2015 Julian Lloyd ( @julianlloyd )
   Licensed under MIT ( http://www.opensource.org/licenses/mit-license.php )

==============================================================================*/

window.scrollReveal = (function( window ){

  'use strict';

  var _requestAnimFrame;
  var _extend;
  var _handler;
  var self;

  function scrollReveal( config ){

    self         = this;
    self.elems   = {};
    self.serial  = 1;
    self.blocked = false;
    self.config  = _extend( self.defaults, config );

    if ( self.isMobile() && !self.config.mobile || !self.isSupported() ){
      self.destroy();
      return;
    }

    if ( self.config.viewport === window.document.documentElement ){

      window.addEventListener( 'scroll', _handler, false );
      window.addEventListener( 'resize', _handler, false );

    } else {
      self.config.viewport.addEventListener( 'scroll', _handler, false );
    }

    self.init( true );
  }

  scrollReveal.prototype = {

    defaults: {

      enter:    'bottom',
      move:     '8px',
      over:     '0.6s',
      wait:     '0s',
      easing:   'ease',

      scale:    { direction: 'up', power: '5%' },
      rotate:   { x: 0, y: 0, z: 0 },

      opacity:  0,
      mobile:   false,
      reset:    false,

      //        Expects a reference to a DOM node (the <html> node by default)
      //        which is used as the context when checking element visibility.
      viewport: window.document.documentElement,

      //        'always' — delay every time an animation resets
      //        'onload' - delay only for animations triggered by first load
      //        'once'   — delay only the first time an animation reveals
      delay:    'once',

      //        vFactor changes when an element is considered in the viewport.
      //        The default value of 0.60 means 60% of an element must be
      //        visible for its reveal animation to trigger.
      vFactor:  0.60,

      complete: function( el ){} // Note: reset animations do not complete.
    },

    // Queries the DOM, builds scrollReveal elements and triggers animation.
    // @param {boolean} flag — a hook for controlling delay on first load.
    init: function( flag ){

      var serial;
      var elem;
      var query;

      query = Array.prototype.slice.call( self.config.viewport.querySelectorAll('[data-sr]') );
      query.forEach(function( el ){

        serial      = self.serial++;
        elem        = self.elems[ serial ] = { domEl: el };
        elem.config = self.configFactory( elem );
        elem.styles = self.styleFactory( elem );
        elem.seen   = false;

        el.removeAttribute('data-sr');

        el.setAttribute( 'style',
            elem.styles.inline
          + elem.styles.initial
        );
      })

      self.scrolled = self.scrollY();
      self.animate( flag );
    },

    // Applies and removes appropriate styles.
    // @param {boolean} flag — a hook for controlling delay on first load.
    animate: function( flag ){

      var key;
      var elem;
      var visible;

      // Begin element store digest.
      for ( key in self.elems ){
        if ( self.elems.hasOwnProperty( key ) ){

          elem    = self.elems[ key ];
          visible = self.isElemInViewport( elem );

          if ( visible ){

            if ( self.config.delay === 'always'
            || ( self.config.delay === 'onload' && flag )
            || ( self.config.delay === 'once'   && !elem.seen ) ){

              // Use delay.
              elem.domEl.setAttribute( 'style',
                  elem.styles.inline
                + elem.styles.target
                + elem.styles.transition
              );

            } else {

              // Don’t use delay.
              elem.domEl.setAttribute( 'style',
                  elem.styles.inline
                + elem.styles.target
                + elem.styles.reset
              );
            }

            elem.seen = true;

            if ( !elem.config.reset && !elem.animating ){
              elem.animating = true;
              complete( key );
            }

          } else if ( !visible && elem.config.reset ){

            elem.domEl.setAttribute( 'style',
                elem.styles.inline
              + elem.styles.initial
              + elem.styles.reset
            );
          }
        }
      }

      // Digest complete, now un-block the event handler.
      self.blocked = false;

      // Cleans the DOM and removes completed elements from self.elems.
      // @param {integer} key — self.elems property key.
      function complete( key ){

        var elem = self.elems[ key ];

        setTimeout(function(){

          elem.domEl.setAttribute( 'style', elem.styles.inline );
          elem.config.complete( elem.domEl );
          delete self.elems[ key ];

        }, elem.styles.duration );
      }
    },

    // Parses an elements data-sr attribute, and returns a configuration object.
    // @param {object} elem — An object from self.elems.
    // @return {object}
    configFactory: function( elem ){

      var parsed = {};
      var config = {};
      var words  = elem.domEl.getAttribute('data-sr').split( /[, ]+/ );

      words.forEach(function( keyword, i ){
        switch ( keyword ){

          case 'enter':

            parsed.enter = words[ i + 1 ];
            break;

          case 'wait':

            parsed.wait = words[ i + 1 ];
            break;

          case 'move':

            parsed.move = words[ i + 1 ];
            break;

          case 'ease':

            parsed.move = words[ i + 1 ];
            parsed.ease = 'ease';
            break;

          case 'ease-in':

            if ( words[ i + 1 ] == 'up' || words[ i + 1 ] == 'down' ){

              parsed.scale.direction = words[ i + 1 ];
              parsed.scale.power     = words[ i + 2 ];
              parsed.easing          = 'ease-in';
              break;
            }

            parsed.move   = words[ i + 1 ];
            parsed.easing = 'ease-in';
            break;

          case 'ease-in-out':

            if ( words[ i + 1 ] == 'up' || words[ i + 1 ] == 'down' ){

              parsed.scale.direction = words[ i + 1 ];
              parsed.scale.power     = words[ i + 2 ];
              parsed.easing          = 'ease-in-out';
              break;
            }

            parsed.move   = words[ i + 1 ];
            parsed.easing = 'ease-in-out';
            break;

          case 'ease-out':

            if ( words[ i + 1 ] == 'up' || words[ i + 1 ] == 'down' ){

              parsed.scale.direction = words[ i + 1 ];
              parsed.scale.power     = words[ i + 2 ];
              parsed.easing          = 'ease-out';
              break;
            }

            parsed.move   = words[ i + 1 ];
            parsed.easing = 'ease-out';
            break;

          case 'hustle':

            if ( words[ i + 1 ] == 'up' || words[ i + 1 ] == 'down' ){

              parsed.scale.direction = words[ i + 1 ];
              parsed.scale.power     = words[ i + 2 ];
              parsed.easing          = 'cubic-bezier( 0.6, 0.2, 0.1, 1 )';
              break;
            }

            parsed.move   = words[ i + 1 ];
            parsed.easing = 'cubic-bezier( 0.6, 0.2, 0.1, 1 )';
            break;

          case 'over':

            parsed.over = words[ i + 1 ];
            break;

          case 'flip':
          case 'pitch':
            parsed.rotate   = parsed.rotate || {};
            parsed.rotate.x = words[ i + 1 ];
            break;

          case 'spin':
          case 'yaw':
            parsed.rotate   = parsed.rotate || {};
            parsed.rotate.y = words[ i + 1 ];
            break;

          case 'roll':
            parsed.rotate   = parsed.rotate || {};
            parsed.rotate.z = words[ i + 1 ];
            break;

          case 'reset':

            if ( words[ i - 1 ] == 'no' ){
              parsed.reset = false;
            } else {
              parsed.reset = true;
            }
            break;

          case 'scale':

            parsed.scale = {};

            if ( words[ i + 1 ] == 'up' || words[ i + 1 ] == 'down' ){

              parsed.scale.direction = words[ i + 1 ];
              parsed.scale.power     = words[ i + 2 ];
              break;
            }

            parsed.scale.power = words[ i + 1 ];
            break;

          case 'vFactor':
          case 'vF':
            parsed.vFactor = words[ i + 1 ];
            break;

          case 'opacity':
            parsed.opacity = words[ i + 1 ];
            break;

          default:
            return;
        }
      });

      // Build default config object, then apply any keywords parsed from the
      // data-sr attribute.
      config = _extend( config, self.config );
      config = _extend( config, parsed );

      if ( config.enter === 'top' || config.enter === 'bottom' ){
        config.axis = 'Y';
      } else if ( config.enter === 'left' || config.enter === 'right' ){
        config.axis = 'X';
      }

      // Let’s make sure our our pixel distances are negative for top and left.
      // e.g. "enter top and move 25px" starts at 'top: -25px' in CSS.
      if ( config.enter === 'top' || config.enter === 'left' ){
        config.move = '-' + config.move;
      }

      return config;
    },

    // Generates styles based on an elements configuration property.
    // @param {object} elem — An object from self.elems.
    // @return {object}
    styleFactory: function( elem ){

      var inline;
      var initial;
      var reset;
      var target;
      var transition;

      var cfg      = elem.config;
      var duration = ( parseFloat( cfg.over ) + parseFloat( cfg.wait ) ) * 1000;

      // Want to disable delay on mobile devices? Uncomment the line below.
      // if ( self.isMobile() && self.config.mobile ) cfg.wait = 0;

      if ( elem.domEl.getAttribute('style') ){
        inline = elem.domEl.getAttribute('style') + '; visibility: visible; ';
      } else {
        inline = 'visibility: visible; ';
      }

      transition = '-webkit-transition: -webkit-transform ' + cfg.over + ' ' + cfg.easing + ' ' + cfg.wait + ', opacity ' + cfg.over + ' ' + cfg.easing + ' ' + cfg.wait + '; ' +
                           'transition: transform '         + cfg.over + ' ' + cfg.easing + ' ' + cfg.wait + ', opacity ' + cfg.over + ' ' + cfg.easing + ' ' + cfg.wait + '; ' +
                  '-webkit-perspective: 1000;' +
          '-webkit-backface-visibility: hidden;';

      reset      = '-webkit-transition: -webkit-transform ' + cfg.over + ' ' + cfg.easing + ' 0s, opacity ' + cfg.over + ' ' + cfg.easing + ' 0s; ' +
                           'transition: transform '         + cfg.over + ' ' + cfg.easing + ' 0s, opacity ' + cfg.over + ' ' + cfg.easing + ' 0s; ' +
                  '-webkit-perspective: 1000; ' +
          '-webkit-backface-visibility: hidden; ';

      initial = 'transform:';
      target  = 'transform:';
      build();

      // Build again for webkit…
      initial += '-webkit-transform:';
      target  += '-webkit-transform:';
      build();

      return {
        transition: transition,
        initial:    initial,
        target:     target,
        reset:      reset,
        inline:     inline,
        duration:   duration
      };

      // Constructs initial and target styles.
      function build(){

        if ( parseInt( cfg.move ) !== 0 ){
          initial += ' translate' + cfg.axis + '(' + cfg.move + ')';
          target  += ' translate' + cfg.axis + '(0)';
        }

        if ( parseInt( cfg.scale.power ) !== 0 ){

          if ( cfg.scale.direction === 'up' ){
            cfg.scale.value = 1 - ( parseFloat( cfg.scale.power ) * 0.01 );
          } else if ( cfg.scale.direction === 'down' ){
            cfg.scale.value = 1 + ( parseFloat( cfg.scale.power ) * 0.01 );
          }

          initial += ' scale(' + cfg.scale.value + ')';
          target  += ' scale(1)';
        }

        if ( cfg.rotate.x ){
          initial += ' rotateX(' + cfg.rotate.x + ')';
          target  += ' rotateX(0)';
        }

        if ( cfg.rotate.y ){
          initial += ' rotateY(' + cfg.rotate.y + ')';
          target  += ' rotateY(0)';
        }

        if ( cfg.rotate.z ){
          initial += ' rotateZ(' + cfg.rotate.z + ')';
          target  += ' rotateZ(0)';
        }

        initial += '; opacity: ' + cfg.opacity + '; ';
        target  += '; opacity: 1; ';
      }
    },

    getViewportH: function(){

      var client = self.config.viewport['clientHeight'];
      var inner  = window['innerHeight'];

      if ( self.config.viewport === window.document.documentElement ){
        return ( client < inner ) ? inner : client;
      }

      return client;
    },

    scrollY: function(){
      if ( self.config.viewport === window.document.documentElement ){
        return window.pageYOffset;
      } else {
        return self.config.viewport.scrollTop + self.config.viewport.offsetTop;
      }
    },

    getOffset: function( el ){

      var offsetTop  = 0;
      var offsetLeft = 0;

      do {
        if ( !isNaN( el.offsetTop ) ){
          offsetTop  += el.offsetTop;
        }
        if ( !isNaN( el.offsetLeft ) ){
          offsetLeft += el.offsetLeft;
        }
      } while ( el = el.offsetParent );

      return {
        top: offsetTop,
        left: offsetLeft
      };
    },

    isElemInViewport: function( elem ){

      var elHeight = elem.domEl.offsetHeight;
      var elTop    = self.getOffset( elem.domEl ).top;
      var elBottom = elTop + elHeight;
      var vFactor  = elem.config.vFactor || 0;

      return ( confirmBounds() || isPositionFixed() );

      function confirmBounds(){

        var top        = elTop + elHeight * vFactor;
        var bottom     = elBottom - elHeight * vFactor;
        var viewBottom = self.scrolled + self.getViewportH();
        var viewTop    = self.scrolled;

        return ( top < viewBottom ) && ( bottom > viewTop );
      }

      function isPositionFixed(){

        var el    = elem.domEl;
        var style = el.currentStyle || window.getComputedStyle( el, null );

        return style.position === 'fixed';
      }
    },

    isMobile: function(){

      var agent = navigator.userAgent || navigator.vendor || window.opera;

      return (/(ipad|playbook|silk|android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test( agent )||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test( agent.substr( 0, 4 ))) ? true : false;
    },

    isSupported: function(){

      var sensor    = document.createElement('sensor');
      var cssPrefix = 'Webkit,Moz,O,'.split(',');
      var tests     = ( 'transition ' + cssPrefix.join('transition,') ).split(',');

      for ( var i = 0; i < tests.length; i++ ){
        if ( !sensor.style[tests[i]] === '' ){
          return false;
        }
      }

      return true;
    },

    destroy: function(){

      var node = self.config.viewport;
      var query = Array.prototype.slice.call( node.querySelectorAll('[data-sr]') );

      query.forEach(function( el ){
        el.removeAttribute('data-sr');
      });
    }
  } // End of the scrollReveal prototype ======================================|

  _handler = function( e ){

    if ( !self.blocked ){

      self.blocked  = true;
      self.scrolled = self.scrollY();

      _requestAnimFrame(function(){
        self.animate();
      });
    }
  }

  _extend = function( target, src ){

    for ( var prop in src ){
      if ( src.hasOwnProperty( prop ) ){
        target[ prop ] = src[ prop ];
      }
    }

    return target;
  }

  // RequestAnimationFrame polyfill.
  _requestAnimFrame = (function(){

    return window.requestAnimationFrame        ||
           window.webkitRequestAnimationFrame  ||
           window.mozRequestAnimationFrame     ||

          function( callback ){
            window.setTimeout( callback, 1000 / 60 );
          };
  }());

  return scrollReveal;

})( window );
//=================================================================
// Scroll Spy
//=================================================================

(function ($) {
	
	$.fn.extend({
	
		scrollSpy: function(options) {
			
			var defaults = {  
				selector : 'li'
			};
			
			var options = $.extend(defaults, options);
			
			return this.each(function() {
				
				var $parent   = this,
					$selector = options.selector;
				
				// Cache selectors
				var lastId,
					topMenuHeight = $($parent).outerHeight()+15,
					// All items
					items = $($parent).find($selector),
					// Anchors corresponding to menu items
					scrollItems = items.map(function() {
						if ($(this).prop('tagName') == 'A') {
							var item = $($(this).attr("href"));
						} else {
							var item = $($(this).find('a').attr("href"));
						}
						if (item.length) { return item; }
					});
			
				// Bind to scroll
				$(window).scroll(function() {
					
					// Get container scroll position
					var fromTop = $(this).scrollTop()+topMenuHeight;
					
					// Get id of current scroll item
					var cur = scrollItems.map(function(){
					if ($(this).offset().top < fromTop)
						return this;
					});
					
					// Get the id of the current element
					cur = cur[cur.length-1];
					var id = cur && cur.length ? cur[0].id : "";
					
					if (lastId !== id) {
						lastId = id;
						// Set/remove active class
						items.removeClass("active");
						if ($($selector).prop('tagName') == 'A') {
							items.filter("[href=#"+id+"]").addClass("active");
						} else {
							items.find('a').filter("[href=#"+id+"]").end().addClass("active");
						}
					}   
									
				});
			
			});
		
		} // scrollSpy
	
	});
  
}(jQuery));
/*Name : TweeCool
 *version: 1.7 
 *Description: Get the latest tweets from twitter.
 *Website: www.tweecool.com
 *Licence: No licence, feel free to do whatever you want.
 *Author: TweeCool
 */

(function($) {
    
    $.fn.extend({

        tweecool: function(options) {

            var defaults = {
                username: 'esr360',
                limit: 5,
                profile_image: true,
                show_time: true,
                show_media: false,
                show_media_size: 'thumb', //values: small, large, thumb, medium 
                show_actions: false,
                action_reply_icon: '&crarr;',
                action_retweet_icon: '&prop;',
                action_favorite_icon: '&#9733;',
                profile_img_url: 'profile', //Values: profile, tweet 
                show_retweeted_text: false //This will show the original tweet in order to avoid any truncated text, and also the "RT @tweecool:" is removed which helps with 140 character limit

            }

            var options = $.extend(defaults, options);

            function xTimeAgo(time) {
                
                var nd = new Date();
                //var gmtDate = Date.UTC(nd.getFullYear(), nd.getMonth(), nd.getDate(), nd.getHours(), nd.getMinutes(), nd.getMilliseconds());
                var gmtDate = Date.parse(nd);
                var tweetedTime = time * 1000; //convert seconds to milliseconds
                var timeDiff = (gmtDate - tweetedTime) / 1000; //convert milliseconds to seconds

                var second = 1,
                    minute = 60,
                    hour = 60 * 60,
                    day = 60 * 60 * 24,
                    week = 60 * 60 * 24 * 7,
                    month = 60 * 60 * 24 * 30,
                    year = 60 * 60 * 24 * 365;

                if (timeDiff > second && timeDiff < minute) {
                    return Math.round(timeDiff / second) + " seconds ago";
                } else if (timeDiff >= minute && timeDiff < hour) {
                    return Math.round(timeDiff / minute) + " minutes ago";
                } else if (timeDiff >= hour && timeDiff < day) {
                    return Math.round(timeDiff / hour) + " hours ago";
                } else if (timeDiff >= day && timeDiff < week) {
                    return Math.round(timeDiff / day) + " days ago";
                } else if (timeDiff >= week && timeDiff < month) {
                    return Math.round(timeDiff / week) + " weeks ago";
                } else if (timeDiff >= month && timeDiff < year) {
                    return Math.round(timeDiff / month) + " months ago";
                } else {
                    return 'over a year ago';
                }

            }

            return this.each(function() {
                
                var o = options;
                var wrapper = $(this);
                var wInner = $('<ul class="tweets">').appendTo(wrapper);
                var urlpattern = /(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig;
                var usernamepattern = /@+(\w+)/ig;
                var hashpattern = /#+(\w+)/ig;
                var pIMG, media, timestamp, abox, mtext;

                $.getJSON("https://www.api.tweecool.com/?screenname=" + o.username + "&count=" + o.limit, function(data) {

                    if (data.errors || data == null) {
                        wrapper.html('No tweets available.');
                        return false;
                    }

                    $.each(data.tweets, function(i, field) {

                        if (o.profile_image) {
                            if (o.profile_img_url == 'tweet') {
                                pIMG = '<a class="tweet-avatar" href="https://twitter.com/' + o.username + '/status/' + field.id_str + '" target="_blank"><img src="' + data.user.profile_image_url + '" alt="' + o.username + '" /></a>';
                            } else {
                                pIMG = '<a class="tweet-avatar" href="https://twitter.com/' + o.username + '" target="_blank"><img src="' + data.user.profile_image_url + '" alt="' + o.username + '" /></a>';
                            }
                        } else {
                            pIMG = '';
                        }

                        if (o.show_time) {
                            timestamp = xTimeAgo(field.timestamp);
                        } else {
                            timestamp = '';
                        }

                        if (o.show_media && field.media_url) {
                            media = '<a href="https://twitter.com/' + o.username + '/status/' + field.id_str + '" target="_blank"><img src="' + field.media_url + ':' + o.show_media_size + '" alt="' + o.username + '" class="media" /></a>';
                        } else {
                            media = '';
                        }

                        if (o.show_actions) {
                            
                            abox = '<ul class="tweet-actions">';
                            
                            // reply icon
                            abox += '<li class="tweet-reply"><a title="Reply" target="blank" href="https://twitter.com/intent/tweet?in_reply_to=' + field.id_str + '">' + o.action_reply_icon + '</a></li>';
                            
                            // retweet icon
                            abox += '<li class="retweet"><a title="Retweet" target="blank" href="https://twitter.com/intent/retweet?tweet_id=' + field.id_str + '">' + o.action_retweet_icon + (field.retweet_count_f != '' ? '<span class="retween-count"> ' + field.retweet_count_f + '</span>' : '') + '</a>' + '</li>';
                            
                            // favourite iicon
                            abox += '<li class="tweet-favorite"><a title="Favorite" target="blank" href="https://twitter.com/intent/favorite?tweet_id=' + field.id_str + '">' + o.action_favorite_icon + (field.favorite_count_f != '' ? '<span class="favourite-count"> ' + field.favorite_count_f + '</span>' : '') + '</a>' + '</li>';
                            
                            abox += '</ul>';
                            
                        } else {
                            abox = '';
                        }

                        if (o.show_retweeted_text && field.retweeted_text) {
                            mtext = field.retweeted_text;
                        } else {
                            mtext = field.text;
                        }

                        wInner.append(
                            '<li class="tweet">' + 
                                pIMG + 
                                '<div class="tweet-content">' + 
                                    '<p class="tweet-text">' + 
                                        mtext.replace(urlpattern, '<a href="$1" target="_blank">$1</a>')
                                        .replace(usernamepattern, '<a href="https://twitter.com/$1" target="_blank">@$1</a>')
                                        .replace(hashpattern, '<a href="https://twitter.com/search?q=%23$1" target="_blank">#$1</a>') + media +
                                        '<span class="tweet-timestamp"> - ' + timestamp + '</span>' +  
                                    '</p>' + 
                                    '<span class="tweet-meta">' +
                                        pIMG + 
                                        '<a class="tweet-user" href="https://twitter.com/' + o.username + '" target="blank">@' + o.username + '</a>' + 
                                    '</span>' +
                                    abox + 
                                '</div>' +
                            '</li>'
                        );
                        
                    });

                }).fail(function(jqxhr, textStatus, error) {
                    //var err = textStatus + ', ' + error;
                    wrapper.html('No tweets available');
                });

            });

        } // tweecool
        
    }); // fn.extend

})(jQuery);
//=================================================================
// Adaptive Columns
//=================================================================

$(document).ready(function() {

//-----------------------------------------------------------------
// 2 columns
//-----------------------------------------------------------------

var twoCols = $('.2-cols');

twoCols.owlCarousel({
    items: 1,
    loop: false,
    dots: false,
    nav: true,
    navText: [],
    margin: 31,
    slideBy: 1,
    mouseDrag: false,
    responsive:{
        460 :{                
            items: 2
        }
    }
});


}); // End document.ready
// Safely use .ready() before including jQuery
// http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/

(function (w, d, u) {

    // Define two queues for handlers
    w.readyQ = [];
    w.bindReadyQ = [];

    // Push a handler into the correct queue
    function pushToQ(x, y) {
        if (x == "ready") {
            w.bindReadyQ.push(y);
        } else {
            w.readyQ.push(x);
        }
    }

    // Define an alias object (for use later)
    var alias = {
        ready: pushToQ,
        bind: pushToQ
    }

    // Define the fake jQuery function to capture handlers
    w.$ = w.jQuery = function (handler) {
        if (handler === d || handler === u) {
            // Queue $(document).ready(handler), $().ready(handler)
            // and $(document).bind("ready", handler) by returning
            // an object with alias methods for pushToQ
            return alias;
        } else {
            // Queue $(handler)
            pushToQ(handler);
        }
    }

})(window, document);
// Safely use .ready() before including jQuery
// http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/

(function ($, doc) {
    $.each(readyQ, function (index, handler) {
        $(handler);
    });
    $.each(bindReadyQ, function (index, handler) {
        $(doc).bind("ready", handler);
    });
})(jQuery, document);
/*
 * Pointer Events Polyfill: Adds support for the style attribute "pointer-events: none" to browsers without this feature (namely, IE).
 * (c) 2013, Kent Mewhort, licensed under BSD. See LICENSE.txt for details.
 */

// constructor
function PointerEventsPolyfill(options){
    // set defaults
    this.options = {
        selector: '*',
        mouseEvents: ['click','dblclick','mousedown','mouseup'],
        usePolyfillIf: function(){
            if(navigator.appName == 'Microsoft Internet Explorer')
            {
                var agent = navigator.userAgent;
                if (agent.match(/MSIE ([0-9]{1,}[\.0-9]{0,})/) != null){
                    var version = parseFloat( RegExp.$1 );
                    if(version < 11)
                      return true;
                }
            }
            return false;
        }
    };
    if(options){
        var obj = this;
        $.each(options, function(k,v){
          obj.options[k] = v;
        });
    }

    if(this.options.usePolyfillIf())
      this.register_mouse_events();
}

// singleton initializer
PointerEventsPolyfill.initialize = function(options){
    if(PointerEventsPolyfill.singleton == null)
      PointerEventsPolyfill.singleton = new PointerEventsPolyfill(options);
    return PointerEventsPolyfill.singleton;
};

// handle mouse events w/ support for pointer-events: none
PointerEventsPolyfill.prototype.register_mouse_events = function(){
    // register on all elements (and all future elements) matching the selector
    $(document).on(this.options.mouseEvents.join(" "), this.options.selector, function(e){
       if($(this).css('pointer-events') == 'none'){
             // peak at the element below
             var origDisplayAttribute = $(this).css('display');
             $(this).css('display','none');

             var underneathElem = document.elementFromPoint(e.clientX, e.clientY);

            if(origDisplayAttribute)
                $(this)
                    .css('display', origDisplayAttribute);
            else
                $(this).css('display','');

             // fire the mouse event on the element below
            e.target = underneathElem;
            $(underneathElem).trigger(e);

            return false;
        }
        return true;
    });
};
//=================================================================
// Tools
//=================================================================

//-----------------------------------------------------------------
// Styles Configuration
//-----------------------------------------------------------------

// Get breakpoint value
function breakpoint(media, value) {
	return window.matchMedia('(' + media + ':' + module['grid']['breakpoints'][value] + ')').matches;
}

// Create a global variable for base transition duration
window['baseTransition'] = module['base']['transition'].slice(0,-1) * 1000;
    
//-----------------------------------------------------------------

$(document).ready(function() {

//-----------------------------------------------------------------
// Smooth Scroll
//-----------------------------------------------------------------

// set which elements should be exempt from the smooth scroll effect
var scrollExempt = [
    ':not([href*="modal"])'
]

$('a[href*=#]' + scrollExempt).click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        || location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name="' + this.hash.slice(1) +'"]');
           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top
            }, 1200);
            return false;
        }
    }
});

//-----------------------------------------------------------------
// Add Active Class
//-----------------------------------------------------------------

if(breakpoint('min-width', 'break-3')) {
    tiles = $(".inactive");
    $(window).bind("load scroll", function(d,h) { 
        tiles.each(function(i) {
            a = $(this).offset().top + $(this).height();
            b = $(window).scrollTop() + $(window).height();
            if (a < b) $(this).removeClass('inactive').addClass('active');
        });
    });
} else {
    $('.inactive').removeClass('inactive');
}

//-----------------------------------------------------------------
// Animated Numbers
//-----------------------------------------------------------------

stat = $('[id^="stat-"]');

var statsDone = true;

$(window).on("load scroll", function(d,h) {
    stat.each(function(i) {
        a = $(this).offset().top + $(this).height();
        b = $(window).scrollTop() + $(window).height();
        statSep = $.animateNumber.numberStepFactories.separator(',');
        attrStat = $(this).attr('data-val');
        if (a < b) {
            $(this).animateNumber({ 
                    number: attrStat,
                    numberStep: statSep
                }, 2000
            );
        }
    });
});

//-----------------------------------------------------------------
// Scroll Effects
//-----------------------------------------------------------------

window.sr = new scrollReveal();

//-----------------------------------------------------------------
// Parallax Scroll
//-----------------------------------------------------------------

$.stellar({
    horizontalScrolling:false
});

//-----------------------------------------------------------------
// Pointer Events Polyfill
//-----------------------------------------------------------------

PointerEventsPolyfill.initialize({});

//-----------------------------------------------------------------
// Data Background Images
//-----------------------------------------------------------------

$('[data-bg]').each(function() {
    var bg = $(this).attr('data-bg');
    $(this)
        .addClass('relative')
        .prepend('<div class="bg-img" style="background:' + bg + '"></div>')
});
    
//-----------------------------------------------------------------

}); // document.ready
//=================================================================
// Accordions
//=================================================================

function accordionInit() {

	$(accordion).find('> *.active > *:first-child + *').addClass('active');

	$(accordion).find('> * > *:first-child').click(function () {

		var $parent = $(this).parent();

		if ($(this).parents().eq(1).is(':not([class*="-keep-open"])')) {
			$parent.siblings().removeClass('active');
			$parent.siblings().find('> *:first-child + *').slideUp(baseTransition);
		}
		
		$parent.toggleClass('active');
		$(this).find('~ *').slideToggle(baseTransition);

	});
  
} // accordionInit

$(accordionInit);
//=================================================================
// Carousels
//=================================================================

(function ($) {
		
	$.fn.extend({
		
		kCarousel: function(options) {
			
			var defaults = {  
				navId: '',
				pagerId: '',
				pagerSelector: 'li',
				options : {
					items: 1,
					loop: true,
					dots: false
				}
			};
			
			var $options = $.extend(defaults, options);	
			
			var navId = $options.navId,
				pagerId = $options.pagerId,
				pagerSelector = $options.pagerSelector;
			
			return this.each(function() {
				
				var carouselId = $(this);
				
				function pagerTrigger(pagerId, pagerSelector) {
					$(pagerId).find(pagerSelector).click(function() {
						var $index = $(this).index();
						$(this).siblings().removeClass('active').end().addClass('active');
						$(carouselId).trigger('to.owl.carousel', [$index, 400, true]);
					});
				}
			
				function slideNext(navId, pagerId) {
					$(navId + " .slide-next").click(function() {
						var $activeItem = $(pagerId).find('.active');
						if ($activeItem.is(':last-child')) {
							$activeItem.removeClass('active').siblings(':first').addClass('active');
						} else {
							$activeItem.removeClass('active').next().addClass('active');
						}
						$(carouselId).trigger('next.owl.carousel');
					});
				} 
			
				function slidePrev(navId, pagerId) {
					$(navId + " .slide-prev").click(function() {
						var $activeItem = $(pagerId).find('.active');
						if ($activeItem.is(':first-child')) {
							$activeItem.removeClass('active').siblings(':last').addClass('active');
						} else {
							$activeItem.removeClass('active').prev().addClass('active');
						}
						$(carouselId).trigger('prev.owl.carousel');
					});
				} 
					
				carouselId.owlCarousel($options.options);
				
				pagerTrigger(pagerId, pagerSelector);
				
				slideNext(navId, pagerId);
				
				slidePrev(navId, pagerId);
				
			});
			
		} // kCarousel
		
	});

}(jQuery));

/*
$("#portfolio-carousel").kCarousel({
	navId: '',
	pagerId: '',
	pagerSelector: 'li',
	options : {
		items: 1,
		loop: true,
		dots: false
	}
});
*/
//=================================================================
// Modals
//=================================================================

(function ($) {
		
	// create any dynamic modals
	$('[data-modal]').each(function() {
		
		if($(this).attr('data-modal') == '') {
		
			var id = $(this).attr('href'),
				id = 'modal-' + id.substr(id.lastIndexOf("/") + 1).replace(/\.[^/.]+$/, ""),
				style = '',
				content = $(this).html();
				
			$(this).attr('href', '#' + id);
			
			if ($(this).attr('data-modal-style')) {
				var style = '-animate-' + $(this).attr('data-modal-style');
			}
			
			if ($(this).attr('data-modal-content')) {
				var content = $(this).attr('data-modal-content');
			}
				
			$('body').append(
				'<div class="modal' + style + '" id="' + id + '">' +
					content +
				'</div>'
			);
		
		}
		
	});
	
	// call function on all modals
	$.fn.extend({
		
		modalInit: function(options) {
			
			var defaults = {  
				overlay : true,
				animate : 'top'
			};
			
			var options = $.extend(defaults, options);	
			
			var animateStyle = options.animate;
			
			function openModal(el) {
				// close any pre-exisintg visible modals
				$(modal).removeClass('modal-visible');
				// show the target modal
				el.addClass('modal-visible');
				if (options.overlay) {
					$('#site-overlay').addClass('modal_visible');
				}
			}
			
			function closeModal(el) {
				el.removeClass('modal-visible');
				if (options.overlay) {
					$('#site-overlay').removeClass('modal_visible');
				}
			}
			
			return this.each(function() {
				
				var el = $(this),
					id = el.attr('id');
				
				if (el.is('[class*="-animate"]')) {
					options.animate = false;
				}
				
				if (options.animate !== false) {
					el.addClass('modal-animate-' + animateStyle);
				}
				
				$('[data-modal="' + id + '"], [href*="' + id + '"]').click(function(e) {
					openModal(el);
					e.preventDefault();
					$('.modal_visible, .modal_close').click(function() {
						closeModal(el);
					});
				});
				
			});
			
		} // tooltip
		
	});

}(jQuery));

$(modal).modalInit({
	animate: 'left'
});
//-----------------------------------------------------------------
// Progress Bars
//-----------------------------------------------------------------

$("progress.progress-bar").each(function() {
    var attrProgress = $(this).attr('data-progress');
    $(this).attr('value', attrProgress.replace(/[^-\d\.]/g, ''));
    $(this).find('.progress').css({ width : attrProgress }); 
});

/* Tabs
================================================================ */

function tabsInit() {

	$(tabs).find('[class*="tabs_nav"] > li').click(function() {

		var $section = $(this).parents(tabs).find('.tabs_content');

		$(this).siblings().removeClass('active');
		$(this).addClass('active');
		$section.fadeOut(baseTransition/2);
		setTimeout(function(){
			$section.eq($(this).index()).fadeIn(baseTransition/2);
		}, baseTransition/2);
		return false;

	});
  
}

$(tabsInit);
//=================================================================
// Tooltips
//=================================================================

(function ($) {
		
	$.fn.extend({
		
		tooltipInit: function(options) {
			
			var defaults = {  
				position : "top"
			};
			
			var options = $.extend(defaults, options);	
			
			return this.each(function() {
				
				var $content = $(this).attr("data-tooltip");			
				var $position = options.position;
				
				$(this).attr("ontouchstart", "");
				
				$(this).append(
					$("<div class='tooltip_wrapper-" + $position + "'><div class='tooltip_content'>"+ $content +"</div></div>")
				);
				
			});
			
		} // tooltip
		
	});

}(jQuery));

//-----------------------------------------------------------------
// Tooltips
//-----------------------------------------------------------------

$(window).load(function(){
	
	$(tooltip).each(function() {
		
		if ($(this).is('[class*="-top"]')) {
			
			$(this).tooltipInit({
				position : "top"
			});
			
		} else if ($(this).is('[class*="-bottom"]')) {
			
			$(this).tooltipInit({
				position : "bottom"
			});
			
		} else if ($(this).is('[class*="-left"]')) {
			
			$(this).tooltipInit({
				position : "left"
			});
			
		} else if ($(this).is('[class*="-right"]')) {
			
			$(this).tooltipInit({
				position : "right"
			});
			
		}
		
	});

});
//=================================================================
// Billboard
//=================================================================

//-----------------------------------------------------------------
// Fade/Parralax Effect
//-----------------------------------------------------------------
	
$(document).ready(function() {
	
	var heroTitle = $('#billboard-fade-parallax');

	$(window).on('scroll', function() {

		var st = $(this).scrollTop();

		heroTitle.css({ 
			'transform' : "translate3d(0px,"+(st/2.5)+"px, 0px)",
			'opacity' : 1 - st/600
		}); 

	});
	
});
//=================================================================
// Dropdown
//=================================================================

/* Earth Slider
================================================================ */

$(document).ready(function() {

    if ($('#s-welcome').length > 0) {

//-----------------------------------------------------------------
// Config
//-----------------------------------------------------------------

        var $pin = $('.earth .pin-wrapper');
        var $pinCount = $pin.length;
        var $pinRange = 165;
        var $pinFirstChild = $('.earth .pin-wrapper:first-child');
        var $pinLastChild = $('.earth .pin-wrapper:last-child');
        var $pinActive = $('.earth .pin-wrapper.active');
        var $pinIndex = $pinActive.index() + 1;

//-----------------------------------------------------------------
// Position the pins
//-----------------------------------------------------------------

        function pinRotate(pinAngle, pinNo) {

            var pinAngle = pinAngle / (pinNo + 1) + ((180 - $pinRange) / 2);
            pinAngle.toString();
            var interval = pinAngle - ((180 - $pinRange) / 2);

            for(i=1; i<$pinCount+1; i++){   
                if (i>1) {
                    pinAngle += interval;
                }
                i.toString();   
                $('.pin-wrapper:nth-child('+i+')').css({
                    transform: 'translateY(-50%) rotate(' + pinAngle + 'deg)'
                });
            }

        }

        pinRotate($pinRange, $pinCount);

//-----------------------------------------------------------------
// Change content on pin click
//-----------------------------------------------------------------

        $pin.click(function() {

            $pin.removeClass('active');
            $(this).addClass('active');
            $('.welcome-content').removeClass('active');
           
            var $pinActive = $(this);
            var $pinIndex = $(this).index() + 1; 

            setTimeout(function(){
                $('.welcome-content').removeClass('active');
                $('.welcome-content:nth-child('+$pinIndex+')').addClass('active'); 
            }, 200); 

        });
        
//-----------------------------------------------------------------
// Change content on next/prev click
//-----------------------------------------------------------------

        $('.section.welcome .nav-prev').click(function() {

            var $pinActive = $('.earth .pin-wrapper.active'); 

            $pinActive.removeClass('active');

            if ($pinActive.is(':first-child')) {
                $pinActive = $pinLastChild;
                $pinActive.addClass('active');
            } else {                
                $pinActive.prev().addClass('active');               
            }   

            $('.welcome-content').removeClass('active');
            
            setTimeout(function(){
                $('.welcome-content').removeClass('active');
                $('.welcome-content:nth-child('+$pinIndex+')').addClass('active'); 
            }, 200);            
            
            var $pinActive = $('.earth .pin-wrapper.active');
            var $pinIndex = $pinActive.index() + 1;
            
        });

        $('.section.welcome .nav-next').click(function() {

            var $pinActive = $('.earth .pin-wrapper.active');      

            $pinActive.removeClass('active');

            if ($pinActive.is(':last-child')) {
                $pinActive = $pinFirstChild;
                $pinActive.addClass('active');
            } else {                
                $pinActive.next().addClass('active');               
            }   

            $('.welcome-content').removeClass('active');
            
            setTimeout(function(){
                $('.welcome-content').removeClass('active');
                $('.welcome-content:nth-child('+$pinIndex+')').addClass('active'); 
            }, 200);  
            
            var $pinActive = $('.earth .pin-wrapper.active');
            var $pinIndex = $pinActive.index() + 1;          
            
        });

    }

}); // document.ready
//=================================================================
// Flyout Navigation
//=================================================================

$(document).ready(function() {
    
    $('#flyout')
        .addClass('flyout-nav')
        .append('<nav class="side-nav"></nav>');

    var fnContainer = $('#flyout').find(sideNav);

    // create the flyout nav HTML
    function createFlyoutNav() {
        
        // relocate the flyout-trigger in the DOM
        $("#flyout-trigger").detach().prependTo('body')
        
        // clone the main nav into the flyout nav container
        $("#app-nav > ul").clone().appendTo(fnContainer);
        
        // add collapsible functionality
        if (setting('flyout-nav', 'collapsible')) {
            
            // create open/close icon
            var openClose = '<i class="side-nav_openClose fa ' + module['side-nav']['collapsible']['icon'] + '"></i>'
            $(flyoutNav).find('a:not(:only-child)').prepend(openClose);
        
            $(flyoutNav)
                .find('li > [class*="mega-menu"]').parent()
                .find('.side-nav_openClose').remove();
                
            $(flyoutNav).on('click', '.side-nav_openClose', function(e){
                $(this).parent().find('+ ul').slideToggle(baseTransition);
            });
                
        } else {
            $(flyoutNav).find('.side-nav_openClose').remove();
        }

        // collapse by default
        var openDefault = module['flyout-nav']['collapsible']['open-by-default'];
        
        if ($(flyoutNav).is('[class*="-collapse"]') == true || openDefault == false) {
            $(flyoutNav).find('a:not(:only-child) ~ ul').hide();
        }
    
    } // createFlyoutNav()

    $(createFlyoutNav);

}); // document.ready

$(window).load(function(){

    function toggleFlyout(state) {

        function flyoutEvents(){
            $('body').toggleClass('flyout-active');
            $('#flyout-trigger').toggleClass('active');
            $('#site-overlay').toggleClass('flyout_visible');
        }
        
        // is the flyout nav currently toggled?
        if($('body').hasClass('flyout-active')) {
            // yes
            if(state != 1) {
                flyoutEvents();
            }
        } else {
            // no
            if(state != 0) {
                flyoutEvents();
            }
        }

    } // toggleFlyout()

    // toggle the flyout nav
    $('#flyout-trigger').click(function() {
        toggleFlyout();
    });

    $('#flyout-nav a, .site-overlay').click(function() {
        toggleFlyout(0);
    });

}); // $(window).load()
//=================================================================
// Footer
//=================================================================

//-----------------------------------------------------------------
// Footer Twitter Feed
//-----------------------------------------------------------------

var tweetCount = 8;

$('#footer-twitter-feed')
    .tweecool({
        username     : 'esr360', 
        limit        : tweetCount,
        show_actions : true,
        action_reply_icon : '<i class="fa fa-reply"></i>',
        action_retweet_icon : '<i class="fa fa-retweet"></i>',
        action_favorite_icon : '<i class="fa fa-star"></i>'
    })
    .find('.tweets')
    .addClass('owl-carousel');

$('body').on('DOMNodeInserted', '#footer-twitter-feed .tweet:nth-child(' + tweetCount + ')', function () {
    
    $(document).ready(function() { 
        
        var tweetCarousel = $('#footer-twitter-feed .tweets');
        
        tweetCarousel.owlCarousel({
            items: 1,
            dots: false,
            loop: true,
            margin: 20
        });
        
        $('.footer_tweets-nav .tweet-prev').click(function() {
            tweetCarousel.trigger('prev.owl.carousel');
        });
        
        $('.footer_tweets-nav .tweet-next').click(function() {
            tweetCarousel.trigger('next.owl.carousel');
        });
        
    });
    
});

//-----------------------------------------------------------------
// Footer Testimonials
//-----------------------------------------------------------------

$(document).ready(function() { 
        
    var footerTestimonials = $('#footer-testimonials');
    
    footerTestimonials.owlCarousel({
        items: 1,
        dots: false,
        loop: true,
        margin: 20
    });
        
    $('.footer_testimonials-nav .tweet-prev').click(function() {
        footerTestimonials.trigger('prev.owl.carousel');
    });
    
    $('.footer_testimonials-nav .tweet-next').click(function() {
        footerTestimonials.trigger('next.owl.carousel');
    });

});
$(document).ready(function() {

    // When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 14,

            // Disable scroll-wheel zoom
            scrollwheel: false,

            draggable: false,

            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(53.48076, -2.24263), 

            // How you would like to style the map. 
            // This is where you would paste any style found on Snazzy Maps.
            styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#713f7c"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#8f4ca2"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#8f51af"},{"lightness":-37}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#9d55b9"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#9d55b9"}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#944fab"},{"weight":2},{"gamma":0.84}]},{"elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"weight":0.6},{"color":"#6f3f7d"}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#8f4ca2"}]}]
        };

        // Get the HTML DOM element that will contain your map 
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('map');

        // Create the Google Map using out element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);
        
    }

}); // End document.ready
//=================================================================
// Header
//=================================================================

//-----------------------------------------------------------------
// Sticky Header
//-----------------------------------------------------------------

if (setting('app-header', 'sticky'))  {
	
	var stickyOffset = $(appHeader).offset().top,
		navDropdown  = $(navigation).find("> ul > li > a:not(:only-child)").parent();
	
	function stickHeader() {
		$(appHeader).addClass('fixed');
		navDropdown.hover(
			function(){ 
				$("#site-overlay").addClass('header_visible');
			},
			function(){ 
				$("#site-overlay").removeClass('header_visible');
			}
		);
	}
	
	function unStickHeader() {
		$(appHeader).removeClass('fixed');
		navDropdown.unbind('mouseenter mouseleave');
		$("#site-overlay").removeClass('header_visible');
	}
	
	$(window).on("load scroll", function(e) {
		var scroll = $(window).scrollTop();
		if (scroll > stickyOffset) {
			stickHeader();
		} else {
			unStickHeader();
		}
	});

}

//-----------------------------------------------------------------
// Side Header
//-----------------------------------------------------------------

if (setting('app-header', 'side')) {
	$(appHeader).prependTo('body');	
}
//=================================================================
// Page Overview
//=================================================================

// Get the page-overview position
var $pageOverviewPos = module['page-overview']['position'];

// Set the correct tooltip position
if ($pageOverviewPos == 'left') {
	var $tooltipPos = 'right'
} else if ($pageOverviewPos == 'right') {
	var $tooltipPos = 'left'
} else if ($pageOverviewPos == 'top') {
	var $tooltipPos = 'bottom'
} else if ($pageOverviewPos == 'bottom') {
	var $tooltipPos = 'top'
}

// Create the overview navigation
$('#page-overview')
	.clone()
	.removeAttr('class id')
	.addClass('page-overview-' + $pageOverviewPos)
	.prependTo('body')
	.children('a').each(function() {
		var $title = $(this).find(heading).first().text();
		$(this)
			.attr('class', 'page-overview_item tooltip-' + $tooltipPos)
			.attr('data-tooltip', $title);
		$(window).load(function(){
			$('.page-overview-' + $pageOverviewPos).scrollSpy({
				selector : 'a'
			});
		});
	});
//-----------------------------------------------------------------
// Scroll to Top
//-----------------------------------------------------------------

$(window).bind("scroll", function() {
    if ($(this).scrollTop() > 350) {
        $(".scroll-top").addClass('active');
    } else {
        $(".scroll-top").stop().removeClass('active');
    }
});
//=================================================================
// Search
//=================================================================

$('#search-trigger').click(function(e) {
	$(searchBox)
		.addClass('search-box-visible')
		.find('[type="search"]')
		.focus();
	e.preventDefault();
});

$('.search-box_close').click(function() {
	$(searchBox).removeClass('search-box-visible');
});
//=================================================================
// Side-Header Navigation
//=================================================================

if (setting('app-header', 'side')) {
	
	// replace navigation class
	$(navigation).removeClass (function (index, css) {
		return (css.match (/(^|\s)navigation\S+/g) || []).join(' ');
	}).addClass('app-header_side-nav');
	
	// add collapsible functionality
	if (setting('side-nav', 'collapsible')) {
		
		// create open/close icon
		var openClose = '<i class="side-nav_openClose fa ' + module['side-nav']['collapsible']['icon'] + '"></i>'
		$('.app-header_side-nav').find('a:not(:only-child)').prepend(openClose);
		
		$('.app-header_side-nav')
			.find('li > [class*="mega-menu"]').parent()
			.find('.side-nav_openClose').remove();
			
		$('.app-header_side-nav').on('click', '.side-nav_openClose', function(e){
			$(this).parent().find('+ ul').slideToggle(baseTransition);
		});
			
	}

	// collapse by default
	var openDefault = module['side-nav']['collapsible']['open-by-default'];
	
	if ($('.app-header_side-nav').is('[class*="-collapse"]') == true || openDefault == false) {
		$('.app-header_side-nav').find('a:not(:only-child) ~ ul').hide();
	}
	
}
//=================================================================
// Top Bar
//=================================================================

var topBarDropdown = $('[class*="top-bar_nav"]').find("> ul > li > a:not(:only-child)").parent();

$(window).on("load scroll", function(e) {
	
	var scroll = $(window).scrollTop(),
		topBarHeight = $(topBar).height();
		
	if (scroll > topBarHeight) {
		topBarDropdown.hover(
			function(){ 
				$("#site-overlay").addClass('top-bar_visible');
			},
			function(){ 
				$("#site-overlay").removeClass('top-bar_visible');
			}
		);
	} else {
		topBarDropdown.unbind('mouseenter mouseleave');
		$("#site-overlay").removeClass('top-bar_visible');
	}
	
});
//=================================================================
// Twitter Feed
//=================================================================

var tweetCount = 8;

$('#twitter-feed')
    .tweecool({
        username     : 'esr360', 
        limit        : tweetCount,
        show_actions : true,
        action_reply_icon : '<i class="fa fa-reply"></i>',
        action_retweet_icon : '<i class="fa fa-retweet"></i>',
        action_favorite_icon : '<i class="fa fa-star"></i>'
    })
    .find('.tweets')
    .addClass('owl-carousel');

$('body').on('DOMNodeInserted', '#twitter-feed .tweet:nth-child(' + tweetCount + ')', function () {
    
    $(document).ready(function() { 
        
        $('.loading-tweets').hide();
        $('.tweets-nav').show();
        
        var tweetCarousel = $('#twitter-feed .tweets');
        
        tweetCarousel.owlCarousel({
            items: 1,
            loop: true,
            dots: false
        });
        
        $('#twitter-feed .tweet-prev').click(function() {
            tweetCarousel.trigger('prev.owl.carousel');
        });
        
        $('#twitter-feed .tweet-next').click(function() {
            tweetCarousel.trigger('next.owl.carousel');
        });
        
    });
    
});