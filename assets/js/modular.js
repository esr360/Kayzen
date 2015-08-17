// Get Sass modules configuration
var configJSON = document.getElementById("config-JSON");

// Remove quotes from computed JSON
function removeQuotes(string) {
    if (typeof string === 'string' || string instanceof String) {
        string = string.replace(/^['"]+|\s+|\\|(;\s?})+|['"]$/g, '');
    }
    return string;
}

// Convert the config to JS
function getConfig() {
    var style = null;
    if ( window.getComputedStyle && window.getComputedStyle(configJSON, '::before') ) {
        style = window.getComputedStyle(configJSON, '::before');
        style = style.content;
    } else {
        window.getComputedStyle = function(el) {
            this.el = el;
            this.getPropertyValue = function(prop) {
                var re = /(\-([a-z]){1})/g;
                if (re.test(prop)) {
                    prop = prop.replace(re, function () {
                        return arguments[2].toUpperCase();
                    });
                }
                return el.currentStyle[prop] ? el.currentStyle[prop] : null;
            };
            return this;
        };
        style = window.getComputedStyle(document.getElementsByTagName('head')[0]);
        style = style.getPropertyValue('font-family');
    }
    return JSON.parse( removeQuotes(style) );
}

// Store configuartion data in variable
var config = getConfig();

// Loop through each object

$.each(config, function(theme, module) {
	$.each(module, function(setting, value) {
		if (setting == "name") {
			// Create globally scoped selector
			window[value] = '.' + value + ', [class*="' + value + '-"]';
		}
	});
});

function moduleConfig(sassModule, moduleSetting) {
	$.each(config, function(theme, module) {
		$.each(module, function(setting, value) {
			if ((setting == "name") && (value == sassModule)) {
				return value;
			}
  		});
	});
}

console.log(moduleConfig("header", 'selector-type'));