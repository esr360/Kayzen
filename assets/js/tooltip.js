
/* Tooltips
================================================================ */

function tooltip() {
		
	$("[data-tooltip]").on({
		mouseenter: function () {
			var $content = $(this).attr("data-tooltip");
			$(this).append(
				$('<div class="tooltip-wrapper"><div class="tooltip-content">'+ $content +'</div></div>')
			);
		},
		mouseleave: function () {
			$(this).find(".tooltip-content").remove();
		}
	});

}

$(tooltip);