document.addEventListener('DOMContentLoaded', function() {
    $('.slider_1_container').slick({
        autoplay: false,
        autoplaySpeed: 8000,
        arrows: true,
        dots: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
        variableWidth: true,
        swipeToSlide: true,
        cssEase: 'linear',
        prevArrow: '<button type="button" class="slick-prev">' +
            '<svg xmlns="http://www.w3.org/2000/svg" width="58" height="58" viewBox="0 0 58 58" fill="none">' +
                '<circle cx="28.7461" cy="28.7461" r="27.2461" stroke="white" stroke-width="3"/>' +
                '<path d="M37.1152 29.8822C37.9437 29.8822 38.6152 29.2106 38.6152 28.3822C38.6152 27.5538 37.9437 26.8822 37.1152 26.8822V29.8822ZM17.8609 27.3215C17.2751 27.9073 17.2751 28.8571 17.8609 29.4429L27.4068 38.9888C27.9926 39.5746 28.9423 39.5746 29.5281 38.9888C30.1139 38.403 30.1139 37.4533 29.5281 36.8675L21.0428 28.3822L29.5281 19.8969C30.1139 19.3111 30.1139 18.3614 29.5281 17.7756C28.9423 17.1898 27.9926 17.1898 27.4068 17.7756L17.8609 27.3215ZM37.1152 26.8822L18.9215 26.8822V29.8822L37.1152 29.8822V26.8822Z" fill="white"/>' +
            '</svg></button>',
        nextArrow: '<button type="button" class="slick-next">' +
            '<svg xmlns="http://www.w3.org/2000/svg" width="58" height="58" viewBox="0 0 58 58" fill="none">' +
                '<circle cx="28.7461" cy="28.7461" r="27.2461" transform="matrix(-1 0 0 1 57.4922 0)" stroke="white" stroke-width="3"/>' +
                '<path d="M20.377 29.8822C19.5485 29.8822 18.877 29.2106 18.877 28.3822C18.877 27.5538 19.5485 26.8822 20.377 26.8822V29.8822ZM39.6313 27.3215C40.2171 27.9073 40.2171 28.8571 39.6313 29.4429L30.0854 38.9888C29.4996 39.5746 28.5499 39.5746 27.9641 38.9888C27.3783 38.403 27.3783 37.4533 27.9641 36.8675L36.4494 28.3822L27.9641 19.8969C27.3783 19.3111 27.3783 18.3614 27.9641 17.7756C28.5499 17.1898 29.4996 17.1898 30.0854 17.7756L39.6313 27.3215ZM20.377 26.8822L38.5707 26.8822V29.8822L20.377 29.8822V26.8822Z" fill="white"/>' +
            '</svg></button>',
        customPaging: function(slider, i) {
            return '<button type="button" data-role="none"></button>';
        },
        responsive: [
            {
                breakpoint: 1170,
                settings: {
                    slidesToScroll: 1,
                    variableWidth: true,
                    centerMode: false,
                    swipeToSlide: true,
                    cssEase: 'linear',
                    speed: 100,
                    slideWidth: $(window).width() / 3,
                }
            },
            {
                breakpoint: 700,
                settings: {
                    swipeThreshold: 20,
                    swipeToSlide: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    variableWidth: true,
                    cssEase: 'linear',
                    speed: 100,
                }
            }
        ],
    });
});

document.addEventListener('DOMContentLoaded', function() {
    $('.sobstvennoe_proizvodstvo_slider').slick({
        autoplay: false,
        autoplaySpeed: 8000,
        arrows: false,
        dots: false,
        speed: 500,
        slidesToShow: 5,
        slidesToScroll: 1,
        variableWidth: true,
        swipeToSlide: true,
        adaptiveHeight: true,
        cssEase: 'linear',
        customPaging: function(slider, i) {
            return '<button type="button" data-role="none"></button>';
        },
        responsive: [
            {
                breakpoint: 1170,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    variableWidth: true,
                    centerMode: false,
                    swipeToSlide: true,
                    cssEase: 'linear',
                    speed: 100,
                    slideWidth: $(window).width() / 3,
                }
            },
            {
                breakpoint: 700,
                settings: {
                    swipeThreshold: 20,
                    swipeToSlide: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    variableWidth: true,
                    cssEase: 'linear',
                    speed: 100,
                }
            }
        ],
    });
    $('.custom-prev').click(function() {
        $('.sobstvennoe_proizvodstvo_slider').slick('slickPrev');
    });
    $('.custom-next').click(function() {
        $('.sobstvennoe_proizvodstvo_slider').slick('slickNext');
    });
});

document.addEventListener('DOMContentLoaded', function() {
    $('.dostavka_slider').slick({
        autoplay: false,
        arrows: false,
        dots: false,
        speed: 500,
        slidesToShow: 3,
        slidesToScroll: 1,
        variableWidth: true,
        swipeToSlide: true,
        adaptiveHeight: true,
        cssEase: 'linear',
        responsive: [
            {
                breakpoint: 1170,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    variableWidth: true,
                    swipeToSlide: true,
                    cssEase: 'linear',
                    speed: 100,
                }
            },
            {
                breakpoint: 700,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    variableWidth: true,
                    swipeToSlide: true,
                    cssEase: 'linear',
                    speed: 100,
                }
            }
        ],
    });
    $('.dostavka-custom-prev').click(function() {
        $('.dostavka_slider').slick('slickPrev');
    });
    $('.dostavka-custom-next').click(function() {
        $('.dostavka_slider').slick('slickNext');
    });
});

document.addEventListener('DOMContentLoaded', function() {
    $('.stroitelniye_uslugi_slider').slick({
        autoplay: false,
        autoplaySpeed: 8000,
        arrows: false,
        dots: false,
        speed: 500,
        slidesToShow: 4,
        slidesToScroll: 1,
        variableWidth: true,
        swipeToSlide: true,
        adaptiveHeight: true,
        cssEase: 'linear',
        customPaging: function(slider, i) {
            return '<button type="button" data-role="none"></button>';
        },
        responsive: [
            {
                breakpoint: 1170,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    variableWidth: true,
                    centerMode: false,
                    swipeToSlide: true,
                    cssEase: 'linear',
                    speed: 100,
                }
            },
            {
                breakpoint: 700,
                settings: {
                    swipeThreshold: 20,
                    swipeToSlide: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    variableWidth: true,
                    cssEase: 'linear',
                    speed: 100,
                }
            }
        ],
    });
    $('.uslugi-custom-prev').click(function() {
        $('.stroitelniye_uslugi_slider').slick('slickPrev');
    });
    $('.uslugi-custom-next').click(function() {
        $('.stroitelniye_uslugi_slider').slick('slickNext');
    });
});
