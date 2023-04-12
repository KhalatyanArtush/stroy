$(document).ready(function() {

    $('.makeup_catalog_item_block').slick({
        // prevArrow:"<img class='a-left control-c prev slick-prev' src=\'{{asset('img/rbtn.svg')}}\'>",
        // nextArrow:"<img class='a-right control-c next slick-next' src='{{asset(\"img/rbtn.svg\")}}'>",
        dots: false,
        infinite: true,
        speed: 500,
        autoplay: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 720,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    dots: false
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });


    $('.partners_logos').slick({
        // prevArrow:"<img class='a-left control-c prev slick-prev' src='img/rbtn.svg'>",
        // nextArrow:"<img class='a-right control-c next slick-next' src='img/rbtn.svg'>",
        dots: false,
        infinite: true,
        speed: 500,
        autoplay: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    dots: false
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.buy_slider_block').slick({
        dots: true,
        infinite: true,
        speed: 700,
        autoplay: true
    });

});

