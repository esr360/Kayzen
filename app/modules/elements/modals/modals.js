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
                    '<div class="modal_close"><i class="fa fa-times"></i></div>' +
                    '<div class="modal_content">' +
					   content +
                    '</div>' +
				'</div>'
			);
		
		}
		
	});
	
	// call function on all modals
	$.fn.extend({
		
		KayzenModal: function(options) {
			
			var defaults = {  
				overlay : true,
				animate : 'top'
			};
			
			var options = $.extend(defaults, options);	
			
			var animateStyle = options.animate;
			
			function openModal(el) {
				// close any pre-exisintg visible modals
				$(_modal).removeClass('modal-visible');
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
			
		} // modal
		
	});

}(jQuery));