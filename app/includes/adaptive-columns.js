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