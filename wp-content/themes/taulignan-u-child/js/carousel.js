(function($) {
    $(document).ready(function(){
        $('.carousel-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            adaptiveHeight: true,
            prevArrow: '<button class="slick-prev" aria-label="Previous" type="button">Previous</button>',
            nextArrow: '<button class="slick-next" aria-label="Next" type="button">Next</button>',
            responsive: [
                {
                  breakpoint: 600,
                  settings: {
                    // variableWidth: true,
                    // adaptiveHeight: false,
                  }
                }
              ]
        });
    });
    
})(jQuery);