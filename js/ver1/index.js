//slick slider настройки
document.addEventListener('DOMContentLoaded', function() {
    $('.slider_1_container').slick({
        // настройки слайдера
        autoplay: false, // автоматическое проигрывание слайдов
        autoplaySpeed: 8000, // скорость автоматического проигрывания (в миллисекундах)
        arrows: true, // отображение стрелок для навигации по слайдеру
        dots: true, // отображение точек для навигации по слайдеру
        speed: 500, // скорость переключения слайдов (в миллисекундах)
        slidesToShow: 1, // количество слайдов, отображаемых за один раз
        slidesToScroll: 1, // количество слайдов, которые прокручиваются за один раз
        variableWidth: true,
        swipeToSlide: true,
        cssEase: 'linear',
        responsive: [
            {
                breakpoint: 1170,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    variableWidth: true,
                    centerMode: false,
                    // swipeToSlide: false,
                    swipeToSlide: true,
                    cssEase: 'linear',
  
                    // cssEase: 'ease-in-out',
                    // speed: 800,
                    speed: 100, // уменьшено значение для ускорения перехода
                    // Установка фиксированной ширины слайда
                    // В данном случае, ширина экрана делится на 2, т.к. отображается 2 слайда за раз
                    // Можно поэкспериментировать с этим значением
                    // и установить другое, например 90% ширины экрана
                    // и затем настроить отступы между слайдами через CSS
                    variableWidth: true,
                    slideWidth: $(window).width() / 3
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
                    speed: 100, // уменьшено значение для ускорения перехода
                }
            }
        ],
    });
  });