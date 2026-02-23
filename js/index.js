//slick slider настройки

// $(document).ready(function(){
//   $('.slider_1_container').slick({
//     autoplay: true,
//     autoplaySpeed: 2000, // Время показа каждого слайда в миллисекундах
//     dots: true, // Показывать точки навигации
//     arrows: true // Показывать стрелки навигации
//   });
// });

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

document.addEventListener('DOMContentLoaded', function() {
    $('.sobstvennoe_proizvodstvo_slider').slick({
        // настройки слайдера
        autoplay: false, // автоматическое проигрывание слайдов
        autoplaySpeed: 8000, // скорость автоматического проигрывания (в миллисекундах)
        // arrows: true, // отображение стрелок для навигации по слайдеру
        arrows: false, // отображение стрелок для навигации по слайдеру
        dots: false, // отображение точек для навигации по слайдеру
        speed: 500, // скорость переключения слайдов (в миллисекундах)
        slidesToShow: 5, // количество слайдов, отображаемых за один раз
        slidesToScroll: 1, // количество слайдов, которые прокручиваются за один раз
        variableWidth: true,
        swipeToSlide: true,
        // margin: 20,
        adaptiveHeight: true, // Этот параметр важен для адаптации высоты слайда к содержимому
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
    $('.custom-prev').click(function(){
        $('.sobstvennoe_proizvodstvo_slider').slick('slickPrev');
    });
    
    $('.custom-next').click(function(){
        $('.sobstvennoe_proizvodstvo_slider').slick('slickNext');
    });
});

// Слайдер на странице Доставка и оплата
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
    $('.dostavka-custom-prev').click(function(){
        $('.dostavka_slider').slick('slickPrev');
    });
    $('.dostavka-custom-next').click(function(){
        $('.dostavka_slider').slick('slickNext');
    });
});

document.addEventListener('DOMContentLoaded', function() {
    $('.stroitelniye_uslugi_slider').slick({
        // настройки слайдера
        autoplay: false, // автоматическое проигрывание слайдов
        autoplaySpeed: 8000, // скорость автоматического проигрывания (в миллисекундах)
        // arrows: true, // отображение стрелок для навигации по слайдеру
        arrows: false, // отображение стрелок для навигации по слайдеру
        dots: false, // отображение точек для навигации по слайдеру
        speed: 500, // скорость переключения слайдов (в миллисекундах)
        slidesToShow: 4, // количество слайдов, отображаемых за один раз
        slidesToScroll: 1, // количество слайдов, которые прокручиваются за один раз
        variableWidth: true,
        swipeToSlide: true,
        // margin: 20,
        adaptiveHeight: true, // Этот параметр важен для адаптации высоты слайда к содержимому
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
                    // slideWidth: $(window).width() / 3
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
    $('.uslugi-custom-prev').click(function(){
        $('.stroitelniye_uslugi_slider').slick('slickPrev');
    });
    
    $('.uslugi-custom-next').click(function(){
        $('.stroitelniye_uslugi_slider').slick('slickNext');
    });
});

// на первый слайдер на домашней странице ставим картинки стрелочек
$('.slider_1_container').slick({
  prevArrow: '<button type="button" class="slick-prev">' +
                  '<svg xmlns="http://www.w3.org/2000/svg" width="58" height="58" viewBox="0 0 58 58" fill="none">' +
                      '<circle cx="28.7461" cy="28.7461" r="27.2461" stroke="white" stroke-width="3"/>' +
                      '<path d="M37.1152 29.8822C37.9437 29.8822 38.6152 29.2106 38.6152 28.3822C38.6152 27.5538 37.9437 26.8822 37.1152 26.8822V29.8822ZM17.8609 27.3215C17.2751 27.9073 17.2751 28.8571 17.8609 29.4429L27.4068 38.9888C27.9926 39.5746 28.9423 39.5746 29.5281 38.9888C30.1139 38.403 30.1139 37.4533 29.5281 36.8675L21.0428 28.3822L29.5281 19.8969C30.1139 19.3111 30.1139 18.3614 29.5281 17.7756C28.9423 17.1898 27.9926 17.1898 27.4068 17.7756L17.8609 27.3215ZM37.1152 26.8822L18.9215 26.8822V29.8822L37.1152 29.8822V26.8822Z" fill="white"/>' +
                  '</svg>' +
              '</button>',
  nextArrow: '<button type="button" class="slick-next">' +
                  '<svg xmlns="http://www.w3.org/2000/svg" width="58" height="58" viewBox="0 0 58 58" fill="none">' +
                      '<circle cx="28.7461" cy="28.7461" r="27.2461" transform="matrix(-1 0 0 1 57.4922 0)" stroke="white" stroke-width="3"/>' +
                      '<path d="M20.377 29.8822C19.5485 29.8822 18.877 29.2106 18.877 28.3822C18.877 27.5538 19.5485 26.8822 20.377 26.8822V29.8822ZM39.6313 27.3215C40.2171 27.9073 40.2171 28.8571 39.6313 29.4429L30.0854 38.9888C29.4996 39.5746 28.5499 39.5746 27.9641 38.9888C27.3783 38.403 27.3783 37.4533 27.9641 36.8675L36.4494 28.3822L27.9641 19.8969C27.3783 19.3111 27.3783 18.3614 27.9641 17.7756C28.5499 17.1898 29.4996 17.1898 30.0854 17.7756L39.6313 27.3215ZM20.377 26.8822L38.5707 26.8822V29.8822L20.377 29.8822V26.8822Z" fill="white"/>' +
                  '</svg>' +
              '</button>',
  dots: true,
  autoplay: true, // автоматическое проигрывание слайдов
  autoplaySpeed: 5000, // скорость автоматического проигрывания (в миллисекундах)
  customPaging: function(slider, i) {
    return '<button type="button" data-role="none"></button>';
  }
});

// открытие меню гамбургера
window.addEventListener('DOMContentLoaded', () => {
    const menu = document.querySelector('.menu'),
    menuItem = document.querySelectorAll('.menu_item'),
    hamburger = document.querySelector('.menu_hamburger');
    // grayBackgroundHeaderGamburger = document.querySelector('.gray_background_header');


    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('hamburger_active');
        menu.classList.toggle('menu_active');
        // grayBackgroundHeaderGamburger.classList.remove('form_hidden');
    });

    menuItem.forEach(item => {
        item.addEventListener('click', () => {
            hamburger.classList.toggle('hamburger_active');
            // menu.classList.toggle('menu_active'); эта строка должна была убирать мобильное меню гамбургер(оно плавно уезжало), но происходила перезагрузка страницы и на середине уезжания загружалась другая(перезагружалась эта) страница, и выглядело как "дерганье". Убрал, страница и так перезагружается и меню пропадает, не плавно, но без дёрганий
        })
    })
})

// закрытие меню гамбургера по клику на пункте в меню
window.addEventListener('DOMContentLoaded', () => {
    const menu1 = document.querySelector('.menu'),
    // menuItem = document.querySelectorAll('.menu_item'),
    hamburger1 = document.querySelector('.menu_hamburger');


    hamburger1.addEventListener('click', () => {
        hamburger1.classList.toggle('hamburger_active');
        menu1.classList.toggle('menu_active');
    });

})

let houses1Button1 = document.querySelector('.houses1_button1');
let houses1Button2 = document.querySelector('.houses1_button2');

let houses1Foto1 = document.querySelector('.houses_block_foto_1_1');
let houses1Foto2 = document.querySelector('.houses_block_foto_1_2');

let houses2Button1 = document.querySelector('.houses2_button1');
let houses2Button2 = document.querySelector('.houses2_button2');

let houses2Foto1 = document.querySelector('.houses_block_foto_2_1');
let houses2Foto2 = document.querySelector('.houses_block_foto_2_2');


let houses3Button1 = document.querySelector('.houses3_button1');
let houses3Button2 = document.querySelector('.houses3_button2');

let houses3Foto1 = document.querySelector('.houses_block_foto_3_1');
let houses3Foto2 = document.querySelector('.houses_block_foto_3_2');

let houses4Button1 = document.querySelector('.houses4_button1');
let houses4Button2 = document.querySelector('.houses4_button2');
let houses4Button3 = document.querySelector('.houses4_button3');

let houses4Foto1 = document.querySelector('.houses_block_foto_4_1');
let houses4Foto2 = document.querySelector('.houses_block_foto_4_2');
let houses4Foto3 = document.querySelector('.houses_block_foto_4_3');

let houses5Button1 = document.querySelector('.houses5_button1');
let houses5Button2 = document.querySelector('.houses5_button2');
let houses5Button3 = document.querySelector('.houses5_button3');

let houses5Foto1 = document.querySelector('.houses_block_foto_5_1');
let houses5Foto2 = document.querySelector('.houses_block_foto_5_2');
let houses5Foto3 = document.querySelector('.houses_block_foto_5_3');

let houses6Button1 = document.querySelector('.houses6_button1');
let houses6Button2 = document.querySelector('.houses6_button2');
let houses6Button3 = document.querySelector('.houses6_button3');

let houses6Foto1 = document.querySelector('.houses_block_foto_6_1');
let houses6Foto2 = document.querySelector('.houses_block_foto_6_2');
let houses6Foto3 = document.querySelector('.houses_block_foto_6_3');

let houses7Button1 = document.querySelector('.houses7_button1');
let houses7Button2 = document.querySelector('.houses7_button2');
let houses7Button3 = document.querySelector('.houses7_button3');

let houses7Foto1 = document.querySelector('.houses_block_foto_7_1');
let houses7Foto2 = document.querySelector('.houses_block_foto_7_2');
let houses7Foto3 = document.querySelector('.houses_block_foto_7_3');

let houses8Button1 = document.querySelector('.houses8_button1');
let houses8Button2 = document.querySelector('.houses8_button2');
let houses8Button3 = document.querySelector('.houses8_button3');

let houses8Foto1 = document.querySelector('.houses_block_foto_8_1');
let houses8Foto2 = document.querySelector('.houses_block_foto_8_2');
let houses8Foto3 = document.querySelector('.houses_block_foto_8_3');

houses1Button1 ? houses1Button1.onclick = function() {
    // alert("111");
    houses1Button1.classList.add('active_houses_block_foto');
    houses1Button2.classList.add('non_active_houses_block_foto');
    houses1Button1.classList.remove('non_active_houses_block_foto');
    houses1Button2.classList.remove('active_houses_block_foto');

    houses1Foto1.classList.add('houses_block_foto_active');
    houses1Foto2.classList.remove('houses_block_foto_active');

} : null;

houses1Button2 ? houses1Button2.onclick = function() {
    // alert("111");
    houses1Button1.classList.add('non_active_houses_block_foto');
    houses1Button2.classList.add('active_houses_block_foto');
    houses1Button1.classList.remove('active_houses_block_foto');
    houses1Button2.classList.remove('non_active_houses_block_foto');

    houses1Foto1.classList.remove('houses_block_foto_active');
    houses1Foto2.classList.add('houses_block_foto_active');

} : null;

houses2Button1 ? houses2Button1.onclick = function() {
    // alert("111");
    houses2Button1.classList.add('active_houses_block_foto');
    houses2Button2.classList.add('non_active_houses_block_foto');
    houses2Button1.classList.remove('non_active_houses_block_foto');
    houses2Button2.classList.remove('active_houses_block_foto');

    houses2Foto1.classList.add('houses_block_foto_active');
    houses2Foto2.classList.remove('houses_block_foto_active');


} : null;

houses2Button2 ? houses2Button2.onclick = function() {
    // alert("111");
    houses2Button1.classList.add('non_active_houses_block_foto');
    houses2Button2.classList.add('active_houses_block_foto');
    houses2Button1.classList.remove('active_houses_block_foto');
    houses2Button2.classList.remove('non_active_houses_block_foto');

    houses2Foto1.classList.remove('houses_block_foto_active');
    houses2Foto2.classList.add('houses_block_foto_active');

} : null;


houses3Button1 ? houses3Button1.onclick = function() {
    // alert("111");
    houses3Button1.classList.add('active_houses_block_foto');
    houses3Button2.classList.add('non_active_houses_block_foto');
    houses3Button1.classList.remove('non_active_houses_block_foto');
    houses3Button2.classList.remove('active_houses_block_foto');

    houses3Foto1.classList.add('houses_block_foto_active');
    houses3Foto2.classList.remove('houses_block_foto_active');

} : null;

houses3Button2 ? houses3Button2.onclick = function() {
    // alert("111");
    houses3Button1.classList.add('non_active_houses_block_foto');
    houses3Button2.classList.add('active_houses_block_foto');
    houses3Button1.classList.remove('active_houses_block_foto');
    houses3Button2.classList.remove('non_active_houses_block_foto');

    houses3Foto1.classList.remove('houses_block_foto_active');
    houses3Foto2.classList.add('houses_block_foto_active');

} : null;



houses4Button1 ? houses4Button1.onclick = function() {
    // alert("111");
    houses4Button1.classList.add('active_houses_block_foto');
    houses4Button2.classList.add('non_active_houses_block_foto');
    houses4Button3.classList.add('non_active_houses_block_foto');
    houses4Button1.classList.remove('non_active_houses_block_foto');
    houses4Button2.classList.remove('active_houses_block_foto');
    houses4Button3.classList.remove('active_houses_block_foto');

    houses4Foto1.classList.add('houses_block_foto_active');
    houses4Foto2.classList.remove('houses_block_foto_active');
    houses4Foto3.classList.remove('houses_block_foto_active');

} : null;

houses4Button2 ? houses4Button2.onclick = function() {
    // alert("111");
    houses4Button1.classList.add('non_active_houses_block_foto');
    houses4Button2.classList.add('active_houses_block_foto');
    houses4Button3.classList.add('non_active_houses_block_foto');
    houses4Button1.classList.remove('active_houses_block_foto');
    houses4Button2.classList.remove('non_active_houses_block_foto');
    houses4Button3.classList.remove('active_houses_block_foto');

    houses4Foto1.classList.remove('houses_block_foto_active');
    houses4Foto2.classList.add('houses_block_foto_active');
    houses4Foto3.classList.remove('houses_block_foto_active');

} : null;

houses4Button3 ? houses4Button3.onclick = function() {
    // alert("111");
    houses4Button1.classList.add('non_active_houses_block_foto');
    houses4Button2.classList.add('non_active_houses_block_foto');
    houses4Button3.classList.add('active_houses_block_foto');
    houses4Button1.classList.remove('active_houses_block_foto');
    houses4Button2.classList.remove('active_houses_block_foto');
    houses4Button3.classList.remove('non_active_houses_block_foto');

    houses4Foto1.classList.remove('houses_block_foto_active');
    houses4Foto2.classList.remove('houses_block_foto_active');
    houses4Foto3.classList.add('houses_block_foto_active');

} : null;

houses5Button1 ? houses5Button1.onclick = function() {
    // alert("111");
    houses5Button1.classList.add('active_houses_block_foto');
    houses5Button2.classList.add('non_active_houses_block_foto');
    houses5Button3.classList.add('non_active_houses_block_foto');
    houses5Button1.classList.remove('non_active_houses_block_foto');
    houses5Button2.classList.remove('active_houses_block_foto');
    houses5Button3.classList.remove('active_houses_block_foto');

    houses5Foto1.classList.add('houses_block_foto_active');
    houses5Foto2.classList.remove('houses_block_foto_active');
    houses5Foto3.classList.remove('houses_block_foto_active');

} : null;

houses5Button2 ? houses5Button2.onclick = function() {
    // alert("111");
    houses5Button1.classList.add('non_active_houses_block_foto');
    houses5Button2.classList.add('active_houses_block_foto');
    houses5Button3.classList.add('non_active_houses_block_foto');
    houses5Button1.classList.remove('active_houses_block_foto');
    houses5Button2.classList.remove('non_active_houses_block_foto');
    houses5Button3.classList.remove('active_houses_block_foto');

    houses5Foto1.classList.remove('houses_block_foto_active');
    houses5Foto2.classList.add('houses_block_foto_active');
    houses5Foto3.classList.remove('houses_block_foto_active');

} : null;

houses5Button3 ? houses5Button3.onclick = function() {
    // alert("111");
    houses5Button1.classList.add('non_active_houses_block_foto');
    houses5Button2.classList.add('non_active_houses_block_foto');
    houses5Button3.classList.add('active_houses_block_foto');
    houses5Button1.classList.remove('active_houses_block_foto');
    houses5Button2.classList.remove('active_houses_block_foto');
    houses5Button3.classList.remove('non_active_houses_block_foto');

    houses5Foto1.classList.remove('houses_block_foto_active');
    houses5Foto2.classList.remove('houses_block_foto_active');
    houses5Foto3.classList.add('houses_block_foto_active');

} : null;

houses6Button1 ? houses6Button1.onclick = function() {
    // alert("111");
    houses6Button1.classList.add('active_houses_block_foto');
    houses6Button2.classList.add('non_active_houses_block_foto');
    houses6Button3.classList.add('non_active_houses_block_foto');
    houses6Button1.classList.remove('non_active_houses_block_foto');
    houses6Button2.classList.remove('active_houses_block_foto');
    houses6Button3.classList.remove('active_houses_block_foto');

    houses6Foto1.classList.add('houses_block_foto_active');
    houses6Foto2.classList.remove('houses_block_foto_active');
    houses6Foto3.classList.remove('houses_block_foto_active');

} : null;

houses6Button2 ? houses6Button2.onclick = function() {
    // alert("111");
    houses6Button1.classList.add('non_active_houses_block_foto');
    houses6Button2.classList.add('active_houses_block_foto');
    houses6Button3.classList.add('non_active_houses_block_foto');
    houses6Button1.classList.remove('active_houses_block_foto');
    houses6Button2.classList.remove('non_active_houses_block_foto');
    houses6Button3.classList.remove('active_houses_block_foto');

    houses6Foto1.classList.remove('houses_block_foto_active');
    houses6Foto2.classList.add('houses_block_foto_active');
    houses6Foto3.classList.remove('houses_block_foto_active');

} : null;

houses6Button3 ? houses6Button3.onclick = function() {
    // alert("111");
    houses6Button1.classList.add('non_active_houses_block_foto');
    houses6Button2.classList.add('non_active_houses_block_foto');
    houses6Button3.classList.add('active_houses_block_foto');
    houses6Button1.classList.remove('active_houses_block_foto');
    houses6Button2.classList.remove('active_houses_block_foto');
    houses6Button3.classList.remove('non_active_houses_block_foto');

    houses6Foto1.classList.remove('houses_block_foto_active');
    houses6Foto2.classList.remove('houses_block_foto_active');
    houses6Foto3.classList.add('houses_block_foto_active');

} : null;

houses7Button1 ? houses7Button1.onclick = function() {
    // alert("111");
    houses7Button1.classList.add('active_houses_block_foto');
    houses7Button2.classList.add('non_active_houses_block_foto');
    houses7Button3.classList.add('non_active_houses_block_foto');
    houses7Button1.classList.remove('non_active_houses_block_foto');
    houses7Button2.classList.remove('active_houses_block_foto');
    houses7Button3.classList.remove('active_houses_block_foto');

    houses7Foto1.classList.add('houses_block_foto_active');
    houses7Foto2.classList.remove('houses_block_foto_active');
    houses7Foto3.classList.remove('houses_block_foto_active');

} : null;

houses7Button2 ? houses7Button2.onclick = function() {
    // alert("111");
    houses7Button1.classList.add('non_active_houses_block_foto');
    houses7Button2.classList.add('active_houses_block_foto');
    houses7Button3.classList.add('non_active_houses_block_foto');
    houses7Button1.classList.remove('active_houses_block_foto');
    houses7Button2.classList.remove('non_active_houses_block_foto');
    houses7Button3.classList.remove('active_houses_block_foto');

    houses7Foto1.classList.remove('houses_block_foto_active');
    houses7Foto2.classList.add('houses_block_foto_active');
    houses7Foto3.classList.remove('houses_block_foto_active');

} : null;

houses7Button3 ? houses7Button3.onclick = function() {
    // alert("111");
    houses7Button1.classList.add('non_active_houses_block_foto');
    houses7Button2.classList.add('non_active_houses_block_foto');
    houses7Button3.classList.add('active_houses_block_foto');
    houses7Button1.classList.remove('active_houses_block_foto');
    houses7Button2.classList.remove('active_houses_block_foto');
    houses7Button3.classList.remove('non_active_houses_block_foto');

    houses7Foto1.classList.remove('houses_block_foto_active');
    houses7Foto2.classList.remove('houses_block_foto_active');
    houses7Foto3.classList.add('houses_block_foto_active');

} : null;

houses8Button1 ? houses8Button1.onclick = function() {
    // alert("111");
    houses8Button1.classList.add('active_houses_block_foto');
    houses8Button2.classList.add('non_active_houses_block_foto');
    houses8Button3.classList.add('non_active_houses_block_foto');
    houses8Button1.classList.remove('non_active_houses_block_foto');
    houses8Button2.classList.remove('active_houses_block_foto');
    houses8Button3.classList.remove('active_houses_block_foto');

    houses8Foto1.classList.add('houses_block_foto_active');
    houses8Foto2.classList.remove('houses_block_foto_active');
    houses8Foto3.classList.remove('houses_block_foto_active');

} : null;

houses8Button2 ? houses8Button2.onclick = function() {
    // alert("111");
    houses8Button1.classList.add('non_active_houses_block_foto');
    houses8Button2.classList.add('active_houses_block_foto');
    houses8Button3.classList.add('non_active_houses_block_foto');
    houses8Button1.classList.remove('active_houses_block_foto');
    houses8Button2.classList.remove('non_active_houses_block_foto');
    houses8Button3.classList.remove('active_houses_block_foto');

    houses8Foto1.classList.remove('houses_block_foto_active');
    houses8Foto2.classList.add('houses_block_foto_active');
    houses8Foto3.classList.remove('houses_block_foto_active');

} : null;

houses8Button3 ? houses8Button3.onclick = function() {
    // alert("111");
    houses8Button1.classList.add('non_active_houses_block_foto');
    houses8Button2.classList.add('non_active_houses_block_foto');
    houses8Button3.classList.add('active_houses_block_foto');
    houses8Button1.classList.remove('active_houses_block_foto');
    houses8Button2.classList.remove('active_houses_block_foto');
    houses8Button3.classList.remove('non_active_houses_block_foto');

    houses8Foto1.classList.remove('houses_block_foto_active');
    houses8Foto2.classList.remove('houses_block_foto_active');
    houses8Foto3.classList.add('houses_block_foto_active');

} : null;

// страница /catalog, кнопки во вкладке "БАНИ" houses_block_foto_2 и houses_block_foto_3, переключение между баней и планом
let baths1Button1 = document.querySelector('.baths1_button1');
let baths1Button2 = document.querySelector('.baths1_button2');

let baths1Foto1 = document.querySelector('.baths_block_foto_1_1');
let baths1Foto2 = document.querySelector('.baths_block_foto_1_2');

let baths2Button1 = document.querySelector('.baths2_button1');
let baths2Button2 = document.querySelector('.baths2_button2');

let baths2Foto1 = document.querySelector('.baths_block_foto_2_1');
let baths2Foto2 = document.querySelector('.baths_block_foto_2_2');


let baths3Button1 = document.querySelector('.baths3_button1');
let baths3Button2 = document.querySelector('.baths3_button2');

let baths3Foto1 = document.querySelector('.baths_block_foto_3_1');
let baths3Foto2 = document.querySelector('.baths_block_foto_3_2');

let baths4Button1 = document.querySelector('.baths4_button1');
let baths4Button2 = document.querySelector('.baths4_button2');

let baths4Foto1 = document.querySelector('.baths_block_foto_4_1');
let baths4Foto2 = document.querySelector('.baths_block_foto_4_2');

let baths5Button1 = document.querySelector('.baths5_button1');
let baths5Button2 = document.querySelector('.baths5_button2');

let baths5Foto1 = document.querySelector('.baths_block_foto_5_1');
let baths5Foto2 = document.querySelector('.baths_block_foto_5_2');

let baths6Button1 = document.querySelector('.baths6_button1');
let baths6Button2 = document.querySelector('.baths6_button2');

let baths6Foto1 = document.querySelector('.baths_block_foto_6_1');
let baths6Foto2 = document.querySelector('.baths_block_foto_6_2');

let baths7Button1 = document.querySelector('.baths7_button1');
let baths7Button2 = document.querySelector('.baths7_button2');

let baths7Foto1 = document.querySelector('.baths_block_foto_7_1');
let baths7Foto2 = document.querySelector('.baths_block_foto_7_2');

let baths8Button1 = document.querySelector('.baths8_button1');
let baths8Button2 = document.querySelector('.baths8_button2');
let baths8Button3 = document.querySelector('.baths8_button3');

let baths8Foto1 = document.querySelector('.baths_block_foto_8_1');
let baths8Foto2 = document.querySelector('.baths_block_foto_8_2');
let baths8Foto3 = document.querySelector('.baths_block_foto_8_3');

baths1Button1 ? baths1Button1.onclick = function() {
    // alert("111");
    baths1Button1.classList.add('active_houses_block_foto');
    baths1Button2.classList.add('non_active_houses_block_foto');
    baths1Button1.classList.remove('non_active_houses_block_foto');
    baths1Button2.classList.remove('active_houses_block_foto');

    baths1Foto1.classList.add('houses_block_foto_active');
    baths1Foto2.classList.remove('houses_block_foto_active');

} : null;

baths1Button2 ? baths1Button2.onclick = function() {
    // alert("111");
    baths1Button1.classList.add('non_active_houses_block_foto');
    baths1Button2.classList.add('active_houses_block_foto');
    baths1Button1.classList.remove('active_houses_block_foto');
    baths1Button2.classList.remove('non_active_houses_block_foto');

    baths1Foto1.classList.remove('houses_block_foto_active');
    baths1Foto2.classList.add('houses_block_foto_active');

} : null;

baths2Button1 ? baths2Button1.onclick = function() {
    // alert("111");
    baths2Button1.classList.add('active_houses_block_foto');
    baths2Button2.classList.add('non_active_houses_block_foto');
    baths2Button1.classList.remove('non_active_houses_block_foto');
    baths2Button2.classList.remove('active_houses_block_foto');

    baths2Foto1.classList.add('houses_block_foto_active');
    baths2Foto2.classList.remove('houses_block_foto_active');

} : null;

baths2Button2 ? baths2Button2.onclick = function() {
    // alert("111");
    baths2Button1.classList.add('non_active_houses_block_foto');
    baths2Button2.classList.add('active_houses_block_foto');
    baths2Button1.classList.remove('active_houses_block_foto');
    baths2Button2.classList.remove('non_active_houses_block_foto');

    baths2Foto1.classList.remove('houses_block_foto_active');
    baths2Foto2.classList.add('houses_block_foto_active');

} : null;

baths3Button1 ? baths3Button1.onclick = function() {
    // alert("111");
    baths3Button1.classList.add('active_houses_block_foto');
    baths3Button2.classList.add('non_active_houses_block_foto');
    baths3Button1.classList.remove('non_active_houses_block_foto');
    baths3Button2.classList.remove('active_houses_block_foto');

    baths3Foto1.classList.add('houses_block_foto_active');
    baths3Foto2.classList.remove('houses_block_foto_active');

} : null;

baths3Button2 ? baths3Button2.onclick = function() {
    // alert("111");
    baths3Button1.classList.add('non_active_houses_block_foto');
    baths3Button2.classList.add('active_houses_block_foto');
    baths3Button1.classList.remove('active_houses_block_foto');
    baths3Button2.classList.remove('non_active_houses_block_foto');

    baths3Foto1.classList.remove('houses_block_foto_active');
    baths3Foto2.classList.add('houses_block_foto_active');

} : null;

baths4Button1 ? baths4Button1.onclick = function() {
    // alert("111");
    baths4Button1.classList.add('active_houses_block_foto');
    baths4Button2.classList.add('non_active_houses_block_foto');
    baths4Button1.classList.remove('non_active_houses_block_foto');
    baths4Button2.classList.remove('active_houses_block_foto');

    baths4Foto1.classList.add('houses_block_foto_active');
    baths4Foto2.classList.remove('houses_block_foto_active');

} : null;

baths4Button2 ? baths4Button2.onclick = function() {
    // alert("111");
    baths4Button1.classList.add('non_active_houses_block_foto');
    baths4Button2.classList.add('active_houses_block_foto');
    baths4Button1.classList.remove('active_houses_block_foto');
    baths4Button2.classList.remove('non_active_houses_block_foto');

    baths4Foto1.classList.remove('houses_block_foto_active');
    baths4Foto2.classList.add('houses_block_foto_active');

} : null;

baths5Button1 ? baths5Button1.onclick = function() {
    // alert("111");
    baths5Button1.classList.add('active_houses_block_foto');
    baths5Button2.classList.add('non_active_houses_block_foto');
    baths5Button1.classList.remove('non_active_houses_block_foto');
    baths5Button2.classList.remove('active_houses_block_foto');

    baths5Foto1.classList.add('houses_block_foto_active');
    baths5Foto2.classList.remove('houses_block_foto_active');

} : null;

baths5Button2 ? baths5Button2.onclick = function() {
    // alert("111");
    baths5Button1.classList.add('non_active_houses_block_foto');
    baths5Button2.classList.add('active_houses_block_foto');
    baths5Button1.classList.remove('active_houses_block_foto');
    baths5Button2.classList.remove('non_active_houses_block_foto');

    baths5Foto1.classList.remove('houses_block_foto_active');
    baths5Foto2.classList.add('houses_block_foto_active');

} : null;

baths6Button1 ? baths6Button1.onclick = function() {
    // alert("111");
    baths6Button1.classList.add('active_houses_block_foto');
    baths6Button2.classList.add('non_active_houses_block_foto');
    baths6Button1.classList.remove('non_active_houses_block_foto');
    baths6Button2.classList.remove('active_houses_block_foto');

    baths6Foto1.classList.add('houses_block_foto_active');
    baths6Foto2.classList.remove('houses_block_foto_active');

} : null;

baths6Button2 ? baths6Button2.onclick = function() {
    // alert("111");
    baths6Button1.classList.add('non_active_houses_block_foto');
    baths6Button2.classList.add('active_houses_block_foto');
    baths6Button1.classList.remove('active_houses_block_foto');
    baths6Button2.classList.remove('non_active_houses_block_foto');

    baths6Foto1.classList.remove('houses_block_foto_active');
    baths6Foto2.classList.add('houses_block_foto_active');

} : null;

baths7Button1 ? baths7Button1.onclick = function() {
    // alert("111");
    baths7Button1.classList.add('active_houses_block_foto');
    baths7Button2.classList.add('non_active_houses_block_foto');
    baths7Button1.classList.remove('non_active_houses_block_foto');
    baths7Button2.classList.remove('active_houses_block_foto');

    baths7Foto1.classList.add('houses_block_foto_active');
    baths7Foto2.classList.remove('houses_block_foto_active');

} : null;

baths7Button2 ? baths7Button2.onclick = function() {
    // alert("111");
    baths7Button1.classList.add('non_active_houses_block_foto');
    baths7Button2.classList.add('active_houses_block_foto');
    baths7Button1.classList.remove('active_houses_block_foto');
    baths7Button2.classList.remove('non_active_houses_block_foto');

    baths7Foto1.classList.remove('houses_block_foto_active');
    baths7Foto2.classList.add('houses_block_foto_active');

} : null;

baths8Button1 ? baths8Button1.onclick = function() {
    // alert("111");
    baths8Button1.classList.add('active_houses_block_foto');
    baths8Button2.classList.add('non_active_houses_block_foto');
    baths8Button3.classList.add('non_active_houses_block_foto');
    baths8Button1.classList.remove('non_active_houses_block_foto');
    baths8Button2.classList.remove('active_houses_block_foto');
    baths8Button3.classList.remove('active_houses_block_foto');

    baths8Foto1.classList.add('houses_block_foto_active');
    baths8Foto2.classList.remove('houses_block_foto_active');
    baths8Foto3.classList.remove('houses_block_foto_active');

} : null;

baths8Button2 ? baths8Button2.onclick = function() {
    // alert("111");
    baths8Button1.classList.add('non_active_houses_block_foto');
    baths8Button2.classList.add('active_houses_block_foto');
    baths8Button3.classList.add('non_active_houses_block_foto');
    baths8Button1.classList.remove('active_houses_block_foto');
    baths8Button2.classList.remove('non_active_houses_block_foto');
    baths8Button3.classList.remove('active_houses_block_foto');

    baths8Foto1.classList.remove('houses_block_foto_active');
    baths8Foto2.classList.add('houses_block_foto_active');
    baths8Foto3.classList.remove('houses_block_foto_active');

} : null;

baths8Button3 ? baths8Button3.onclick = function() {
    // alert("111");
    baths8Button1.classList.add('non_active_houses_block_foto');
    baths8Button2.classList.add('non_active_houses_block_foto');
    baths8Button3.classList.add('active_houses_block_foto');
    baths8Button1.classList.remove('active_houses_block_foto');
    baths8Button2.classList.remove('active_houses_block_foto');
    baths8Button3.classList.remove('non_active_houses_block_foto');

    baths8Foto1.classList.remove('houses_block_foto_active');
    baths8Foto2.classList.remove('houses_block_foto_active');
    baths8Foto3.classList.add('houses_block_foto_active');

} : null;

// страница /catalog, кнопки во вкладке "МАФ" houses_block_foto_2 и houses_block_foto_3, переключение между МАФ и планом
let maf1Button1 = document.querySelector('.maf1_button1');
let maf1Button2 = document.querySelector('.maf1_button2');

let maf1Foto1 = document.querySelector('.maf_block_foto_1_1');
let maf1Foto2 = document.querySelector('.maf_block_foto_1_2');

let maf2Button1 = document.querySelector('.maf2_button1');
let maf2Button2 = document.querySelector('.maf2_button2');

let maf2Foto1 = document.querySelector('.maf_block_foto_2_1');
let maf2Foto2 = document.querySelector('.maf_block_foto_2_2');

let maf3Button1 = document.querySelector('.maf3_button1');
let maf3Button2 = document.querySelector('.maf3_button2');

let maf3Foto1 = document.querySelector('.maf_block_foto_3_1');
let maf3Foto2 = document.querySelector('.maf_block_foto_3_2');

let maf4Button1 = document.querySelector('.maf4_button1');
let maf4Button2 = document.querySelector('.maf4_button2');

let maf4Foto1 = document.querySelector('.maf_block_foto_4_1');
let maf4Foto2 = document.querySelector('.maf_block_foto_4_2');

let maf5Button1 = document.querySelector('.maf5_button1');
let maf5Button2 = document.querySelector('.maf5_button2');

let maf5Foto1 = document.querySelector('.maf_block_foto_5_1');
let maf5Foto2 = document.querySelector('.maf_block_foto_5_2');

maf1Button1 ? maf1Button1.onclick = function() {
    // alert("111");
    maf1Button1.classList.add('active_houses_block_foto');
    maf1Button2.classList.add('non_active_houses_block_foto');
    maf1Button1.classList.remove('non_active_houses_block_foto');
    maf1Button2.classList.remove('active_houses_block_foto');

    maf1Foto1.classList.add('houses_block_foto_active');
    maf1Foto2.classList.remove('houses_block_foto_active');

} : null;

maf1Button2 ? maf1Button2.onclick = function() {
    // alert("111");
    maf1Button1.classList.add('non_active_houses_block_foto');
    maf1Button2.classList.add('active_houses_block_foto');
    maf1Button1.classList.remove('active_houses_block_foto');
    maf1Button2.classList.remove('non_active_houses_block_foto');

    maf1Foto1.classList.remove('houses_block_foto_active');
    maf1Foto2.classList.add('houses_block_foto_active');

} : null;

maf2Button1 ? maf2Button1.onclick = function() {
    // alert("111");
    maf2Button1.classList.add('active_houses_block_foto');
    maf2Button2.classList.add('non_active_houses_block_foto');
    maf2Button1.classList.remove('non_active_houses_block_foto');
    maf2Button2.classList.remove('active_houses_block_foto');

    maf2Foto1.classList.add('houses_block_foto_active');
    maf2Foto2.classList.remove('houses_block_foto_active');

} : null;

maf2Button2 ? maf2Button2.onclick = function() {
    // alert("111");
    maf2Button1.classList.add('non_active_houses_block_foto');
    maf2Button2.classList.add('active_houses_block_foto');
    maf2Button1.classList.remove('active_houses_block_foto');
    maf2Button2.classList.remove('non_active_houses_block_foto');

    maf2Foto1.classList.remove('houses_block_foto_active');
    maf2Foto2.classList.add('houses_block_foto_active');

} : null;

maf3Button1 ? maf3Button1.onclick = function() {
    // alert("111");
    maf3Button1.classList.add('active_houses_block_foto');
    maf3Button2.classList.add('non_active_houses_block_foto');
    maf3Button1.classList.remove('non_active_houses_block_foto');
    maf3Button2.classList.remove('active_houses_block_foto');

    maf3Foto1.classList.add('houses_block_foto_active');
    maf3Foto2.classList.remove('houses_block_foto_active');

} : null;

maf3Button2 ? maf3Button2.onclick = function() {
    // alert("111");
    maf3Button1.classList.add('non_active_houses_block_foto');
    maf3Button2.classList.add('active_houses_block_foto');
    maf3Button1.classList.remove('active_houses_block_foto');
    maf3Button2.classList.remove('non_active_houses_block_foto');

    maf3Foto1.classList.remove('houses_block_foto_active');
    maf3Foto2.classList.add('houses_block_foto_active');

} : null;

maf4Button1 ? maf4Button1.onclick = function() {
    // alert("111");
    maf4Button1.classList.add('active_houses_block_foto');
    maf4Button2.classList.add('non_active_houses_block_foto');
    maf4Button1.classList.remove('non_active_houses_block_foto');
    maf4Button2.classList.remove('active_houses_block_foto');

    maf4Foto1.classList.add('houses_block_foto_active');
    maf4Foto2.classList.remove('houses_block_foto_active');

} : null;

maf4Button2 ? maf4Button2.onclick = function() {
    // alert("111");
    maf4Button1.classList.add('non_active_houses_block_foto');
    maf4Button2.classList.add('active_houses_block_foto');
    maf4Button1.classList.remove('active_houses_block_foto');
    maf4Button2.classList.remove('non_active_houses_block_foto');

    maf4Foto1.classList.remove('houses_block_foto_active');
    maf4Foto2.classList.add('houses_block_foto_active');

} : null;

maf5Button1 ? maf5Button1.onclick = function() {
    // alert("111");
    maf5Button1.classList.add('active_houses_block_foto');
    maf5Button2.classList.add('non_active_houses_block_foto');
    maf5Button1.classList.remove('non_active_houses_block_foto');
    maf5Button2.classList.remove('active_houses_block_foto');

    maf5Foto1.classList.add('houses_block_foto_active');
    maf5Foto2.classList.remove('houses_block_foto_active');

} : null;

maf5Button2 ? maf5Button2.onclick = function() {
    // alert("111");
    maf5Button1.classList.add('non_active_houses_block_foto');
    maf5Button2.classList.add('active_houses_block_foto');
    maf5Button1.classList.remove('active_houses_block_foto');
    maf5Button2.classList.remove('non_active_houses_block_foto');

    maf5Foto1.classList.remove('houses_block_foto_active');
    maf5Foto2.classList.add('houses_block_foto_active');

} : null;

// ниже - форма "заказать обратный звонок" из футера

let buttonOrderingCall01 = document.querySelector('.ordering_call_first'); //кнопка "заказать обратный звонок" в боковой панели
let buttonOrderingCall02 = document.querySelector('.ordering_call_2'); //кнопка "заказать обратный звонок" в меню гамбургер
let grayBackgroundFooterButtonFirst = document.querySelector('.gray_background_footer_first'); //серый экран
let formFooterCloseButton = document.querySelector('.window_close_footer_first'); //кнопка, закрывающая окно формы
let formOrderCall = document.querySelector('.popup_order_call_first'); //окно формы
let grayBackgroundHeaderFirst = document.querySelector('.gray_background_footer_first'); //серый экран

buttonOrderingCall01 ? buttonOrderingCall01.onclick = function() {
    // alert("111");
    formOrderCall.classList.add('active_form');
    grayBackgroundHeaderFirst.classList.remove('form_hidden');
} : null;

buttonOrderingCall02 ? buttonOrderingCall02.onclick = function() {
    // alert("111");
    formOrderCall.classList.add('active_form');
    grayBackgroundHeaderFirst.classList.remove('form_hidden');
} : null;

grayBackgroundFooterButtonFirst ? grayBackgroundFooterButtonFirst.onclick = function() {
    // alert("111");
    formOrderCall.classList.remove('active_form');
    grayBackgroundHeaderFirst.classList.add('form_hidden');
} : null;

formFooterCloseButton ? formFooterCloseButton.onclick = function() {
    // alert("111");
    formOrderCall.classList.remove('active_form');
    grayBackgroundHeaderFirst.classList.add('form_hidden');
} : null;

// ниже - форма "заявка на расчет проекта" из футера

let buttonProjectCalculation1 = document.querySelector('.project_calculation1'); //кнопка "Оставьте заявку" в боковой панели
let buttonProjectCalculation2 = document.querySelector('.project_calculation2'); //кнопка "Оставьте заявку" в меню гамбургер
let buttonProjectCalculation3 = document.querySelector('.project_calculation3'); //кнопка "Оставьте заявку" на /homepage (chramy_chasovni_button) 
let buttonProjectCalculation4 = document.querySelector('.project_calculation4'); //кнопка "Оставьте заявку" на /homepage (button_zayavka_na_dom)
let buttonProjectCalculation5 = document.querySelector('.project_calculation5'); //кнопка "Оставьте заявку" на /catalog (button_zayavka_na_dom)
let buttonProjectCalculation6 = document.querySelector('.project_calculation6'); //кнопка "Рассчитать проект"(дом #1) на /catalog-domov (houses_block_button)
let buttonProjectCalculation7 = document.querySelector('.project_calculation7'); //кнопка "Рассчитать проект"(дом№2) на /catalog-domov (houses_block_button)
let buttonProjectCalculation8 = document.querySelector('.project_calculation8'); //кнопка "Рассчитать проект"(баня№1) на /catalog-bani (houses_block_button)
let buttonProjectCalculation9 = document.querySelector('.project_calculation9'); //кнопка "Рассчитать проект"(баня№2) на /catalog-bani (houses_block_button)
let buttonProjectCalculation10 = document.querySelector('.project_calculation10'); //кнопка "Рассчитать проект"(маф№1) на /catalog-besedki (houses_block_button)
let buttonProjectCalculation11 = document.querySelector('.project_calculation11'); //кнопка "Рассчитать проект"(маф№2) на /catalog-besedki (houses_block_button)
let buttonProjectCalculation12 = document.querySelector('.project_calculation12'); //кнопка "Оставьте заявку" на /products (button_card_ocilindrovannoe_brevno_price)
let buttonProjectCalculation13 = document.querySelector('.project_calculation13'); //кнопка "Оставьте заявку" на /products (button_card_okoryonnoe_brevno_price)
let buttonProjectCalculation14 = document.querySelector('.project_calculation14'); //кнопка "Оставьте заявку" на /stroitelniye_uslugi (button_stroitelniye_uslugi_domokomplekt_domokomplekt)
let buttonProjectCalculation15 = document.querySelector('.project_calculation15'); //кнопка "Оставьте заявку" на /stroitelniye_uslugi (button_stroitelniye_uslugi_domokomplekt_pod_krishu)
let buttonProjectCalculation16 = document.querySelector('.project_calculation16'); //кнопка "Оставьте заявку" на /stroitelniye_uslugi (button_stroitelniye_uslugi_domokomplekt_pod_kluch)

let buttonProjectCalculation17 = document.querySelector('.project_calculation17'); //кнопка "Рассчитать проект"(дом№3) на /catalog-domov (houses_block_button)
let buttonProjectCalculation18 = document.querySelector('.project_calculation18'); //кнопка "Рассчитать проект"(дом№4) на /catalog-domov (houses_block_button)
let buttonProjectCalculation19 = document.querySelector('.project_calculation19'); //кнопка "Рассчитать проект"(дом№5) на /catalog-domov (houses_block_button)
let buttonProjectCalculation20 = document.querySelector('.project_calculation20'); //кнопка "Рассчитать проект"(дом№6) на /catalog-domov (houses_block_button)
let buttonProjectCalculation21 = document.querySelector('.project_calculation21'); //кнопка "Рассчитать проект"(дом№7) на /catalog-domov (houses_block_button)
let buttonProjectCalculation22 = document.querySelector('.project_calculation22'); //кнопка "Рассчитать проект"(дом№8) на /catalog-domov (houses_block_button)

let buttonProjectCalculation23 = document.querySelector('.project_calculation23'); //кнопка "Рассчитать проект"(баня№3) на /catalog-bani (houses_block_button)
let buttonProjectCalculation24 = document.querySelector('.project_calculation24'); //кнопка "Рассчитать проект"(баня№4) на /catalog-bani (houses_block_button)
let buttonProjectCalculation25 = document.querySelector('.project_calculation25'); //кнопка "Рассчитать проект"(баня№5) на /catalog-bani (houses_block_button)
let buttonProjectCalculation26 = document.querySelector('.project_calculation26'); //кнопка "Рассчитать проект"(баня№6) на /catalog-bani (houses_block_button)
let buttonProjectCalculation27 = document.querySelector('.project_calculation27'); //кнопка "Рассчитать проект"(баня№7) на /catalog-bani (houses_block_button)
let buttonProjectCalculation28 = document.querySelector('.project_calculation28'); //кнопка "Рассчитать проект"(баня№8) на /catalog-bani (houses_block_button)

let buttonProjectCalculation29 = document.querySelector('.project_calculation29'); //кнопка "Рассчитать проект"(маф№3) на /catalog-besedki (houses_block_button)
let buttonProjectCalculation30 = document.querySelector('.project_calculation30'); //кнопка "Рассчитать проект"(маф№4) на /catalog-besedki (houses_block_button)
let buttonProjectCalculation31 = document.querySelector('.project_calculation31'); //кнопка "Рассчитать проект"(маф№5) на /catalog-besedki (houses_block_button)

let buttonProjectCalculation32 = document.querySelector('.project_calculation32'); //кнопка "Оставьте заявку" на /stroitelniye_uslugi (button_stroitelniye_uslugi_domokomplekt_pod_krishu)

let grayBackgroundFooterButtonCalculation = document.querySelector('.gray_background_footer_2'); //серый экран
let formFooterCloseButton2 = document.querySelector('.window_close_footer_2'); //кнопка, закрывающая окно формы
let formOrderCall2 = document.querySelector('.popup_order_call_2'); //окно формы
let grayBackgroundHeaderCalculation = document.querySelector('.gray_background_footer_2'); //серый экран

buttonProjectCalculation1 ? buttonProjectCalculation1.onclick = function() {
    // alert("111");
    formOrderCall2.classList.add('active_form');
    grayBackgroundHeaderCalculation.classList.remove('form_hidden');
} : null;

buttonProjectCalculation2 ? buttonProjectCalculation2.onclick = function() {
    // alert("111");
    formOrderCall2.classList.add('active_form');
    grayBackgroundHeaderCalculation.classList.remove('form_hidden');
} : null;

buttonProjectCalculation3 ? buttonProjectCalculation3.onclick = function() {
    // alert("111");
    formOrderCall2.classList.add('active_form');
    grayBackgroundHeaderCalculation.classList.remove('form_hidden');
} : null;

buttonProjectCalculation4 ? buttonProjectCalculation4.onclick = function() {
    // alert("111");
    formOrderCall2.classList.add('active_form');
    grayBackgroundHeaderCalculation.classList.remove('form_hidden');
} : null;

buttonProjectCalculation5 ? buttonProjectCalculation5.onclick = function() {
    // alert("111");
    formOrderCall2.classList.add('active_form');
    grayBackgroundHeaderCalculation.classList.remove('form_hidden');
} : null;

buttonProjectCalculation6 ? buttonProjectCalculation6.onclick = function() {
    // alert("111");
    formOrderCall2.classList.add('active_form');
    grayBackgroundHeaderCalculation.classList.remove('form_hidden');
} : null;

buttonProjectCalculation7 ? buttonProjectCalculation7.onclick = function() {
    // alert("111");
    formOrderCall2.classList.add('active_form');
    grayBackgroundHeaderCalculation.classList.remove('form_hidden');
} : null;

buttonProjectCalculation8 ? buttonProjectCalculation8.onclick = function() {
    // alert("111");
    formOrderCall2.classList.add('active_form');
    grayBackgroundHeaderCalculation.classList.remove('form_hidden');
} : null;

buttonProjectCalculation9 ? buttonProjectCalculation9.onclick = function() {
    // alert("111");
    formOrderCall2.classList.add('active_form');
    grayBackgroundHeaderCalculation.classList.remove('form_hidden');
} : null;

buttonProjectCalculation10 ? buttonProjectCalculation10.onclick = function() {
    // alert("111");
    formOrderCall2.classList.add('active_form');
    grayBackgroundHeaderCalculation.classList.remove('form_hidden');
} : null;

buttonProjectCalculation11 ? buttonProjectCalculation11.onclick = function() {
    // alert("111");
    formOrderCall2.classList.add('active_form');
    grayBackgroundHeaderCalculation.classList.remove('form_hidden');
} : null;

buttonProjectCalculation12 ? buttonProjectCalculation12.onclick = function() {
    // alert("111");
    formOrderCall2.classList.add('active_form');
    grayBackgroundHeaderCalculation.classList.remove('form_hidden');
} : null;

buttonProjectCalculation13 ? buttonProjectCalculation13.onclick = function() {
    // alert("111");
    formOrderCall2.classList.add('active_form');
    grayBackgroundHeaderCalculation.classList.remove('form_hidden');
} : null;

buttonProjectCalculation14 ? buttonProjectCalculation14.onclick = function() {
    // alert("111");
    formOrderCall2.classList.add('active_form');
    grayBackgroundHeaderCalculation.classList.remove('form_hidden');
} : null;

buttonProjectCalculation15 ? buttonProjectCalculation15.onclick = function() {
    // alert("111");
    formOrderCall2.classList.add('active_form');
    grayBackgroundHeaderCalculation.classList.remove('form_hidden');
} : null;

buttonProjectCalculation16 ? buttonProjectCalculation16.onclick = function() {
    // alert("111");
    formOrderCall2.classList.add('active_form');
    grayBackgroundHeaderCalculation.classList.remove('form_hidden');
} : null;

buttonProjectCalculation17 ? buttonProjectCalculation17.onclick = function() {
    // alert("111");
    formOrderCall2.classList.add('active_form');
    grayBackgroundHeaderCalculation.classList.remove('form_hidden');
} : null;

buttonProjectCalculation18 ? buttonProjectCalculation18.onclick = function() {
    // alert("111");
    formOrderCall2.classList.add('active_form');
    grayBackgroundHeaderCalculation.classList.remove('form_hidden');
} : null;

buttonProjectCalculation19 ? buttonProjectCalculation19.onclick = function() {
    // alert("111");
    formOrderCall2.classList.add('active_form');
    grayBackgroundHeaderCalculation.classList.remove('form_hidden');
} : null;

buttonProjectCalculation20 ? buttonProjectCalculation20.onclick = function() {
    // alert("111");
    formOrderCall2.classList.add('active_form');
    grayBackgroundHeaderCalculation.classList.remove('form_hidden');
} : null;

buttonProjectCalculation21 ? buttonProjectCalculation21.onclick = function() {
    // alert("111");
    formOrderCall2.classList.add('active_form');
    grayBackgroundHeaderCalculation.classList.remove('form_hidden');
} : null;

buttonProjectCalculation22 ? buttonProjectCalculation22.onclick = function() {
    // alert("111");
    formOrderCall2.classList.add('active_form');
    grayBackgroundHeaderCalculation.classList.remove('form_hidden');
} : null;

buttonProjectCalculation23 ? buttonProjectCalculation23.onclick = function() {
    // alert("111");
    formOrderCall2.classList.add('active_form');
    grayBackgroundHeaderCalculation.classList.remove('form_hidden');
} : null;

buttonProjectCalculation24 ? buttonProjectCalculation24.onclick = function() {
    // alert("111");
    formOrderCall2.classList.add('active_form');
    grayBackgroundHeaderCalculation.classList.remove('form_hidden');
} : null;

buttonProjectCalculation25 ? buttonProjectCalculation25.onclick = function() {
    // alert("111");
    formOrderCall2.classList.add('active_form');
    grayBackgroundHeaderCalculation.classList.remove('form_hidden');
} : null;

buttonProjectCalculation26 ? buttonProjectCalculation26.onclick = function() {
    // alert("111");
    formOrderCall2.classList.add('active_form');
    grayBackgroundHeaderCalculation.classList.remove('form_hidden');
} : null;

buttonProjectCalculation27 ? buttonProjectCalculation27.onclick = function() {
    // alert("111");
    formOrderCall2.classList.add('active_form');
    grayBackgroundHeaderCalculation.classList.remove('form_hidden');
} : null;

buttonProjectCalculation28 ? buttonProjectCalculation28.onclick = function() {
    // alert("111");
    formOrderCall2.classList.add('active_form');
    grayBackgroundHeaderCalculation.classList.remove('form_hidden');
} : null;

buttonProjectCalculation29 ? buttonProjectCalculation29.onclick = function() {
    // alert("111");
    formOrderCall2.classList.add('active_form');
    grayBackgroundHeaderCalculation.classList.remove('form_hidden');
} : null;

buttonProjectCalculation30 ? buttonProjectCalculation30.onclick = function() {
    // alert("111");
    formOrderCall2.classList.add('active_form');
    grayBackgroundHeaderCalculation.classList.remove('form_hidden');
} : null;

buttonProjectCalculation31 ? buttonProjectCalculation31.onclick = function() {
    // alert("111");
    formOrderCall2.classList.add('active_form');
    grayBackgroundHeaderCalculation.classList.remove('form_hidden');
} : null;

buttonProjectCalculation32 ? buttonProjectCalculation32.onclick = function() {
    // alert("111");
    formOrderCall2.classList.add('active_form');
    grayBackgroundHeaderCalculation.classList.remove('form_hidden');
} : null;

grayBackgroundFooterButtonCalculation ? grayBackgroundFooterButtonCalculation.onclick = function() {
    // alert("111");
    formOrderCall2.classList.remove('active_form');
    grayBackgroundHeaderCalculation.classList.add('form_hidden');
} : null;

formFooterCloseButton2 ? formFooterCloseButton2.onclick = function() {
    // alert("111");
    formOrderCall2.classList.remove('active_form');
    grayBackgroundHeaderCalculation.classList.add('form_hidden');
} : null;


/* 24/06/2024 работа попапа с каталогом */

// // Сохраняем позицию прокрутки перед перезагрузкой
// window.addEventListener('beforeunload', function() {
//     sessionStorage.setItem('scrollPosition', window.scrollY);
// });

// if ('scrollRestoration' in history) {
//     history.scrollRestoration = 'manual';
// }

// // Восстанавливаем позицию прокрутки после полной загрузки страницы
// window.addEventListener('load', function() {
//     const scrollPosition = sessionStorage.getItem('scrollPosition');
//     if (scrollPosition !== null) {
//         window.scrollTo(0, parseInt(scrollPosition));
//         sessionStorage.removeItem('scrollPosition'); // очищаем сохранённую позицию после её восстановления
//     }
// });

let buttonProjectOpen = document.querySelector('.project_open'); // картинка "Проекты домов" в качестве кнопки
let buttonProjectOpen2 = document.querySelector('.project_open2'); // картинка "Проекты бань" в качестве кнопки
let buttonProjectOpen3 = document.querySelector('.project_open3'); // картинка "Проекты беседок и маф" в качестве кнопки

let buttonProjectOpen4 = document.querySelector('.project_open4'); // кнопка перехода из 1 окна во 2-е
let buttonProjectOpen5 = document.querySelector('.project_open5'); // кнопка перехода из 1 окна в 3-е

let buttonProjectOpen6 = document.querySelector('.project_open6'); // кнопка перехода из 2 окна в 1-е
let buttonProjectOpen7 = document.querySelector('.project_open7'); // кнопка перехода из 2 окна в 3-е

let buttonProjectOpen8 = document.querySelector('.project_open8'); // кнопка перехода из 3 окна в 1-е
let buttonProjectOpen9 = document.querySelector('.project_open9'); // кнопка перехода из 3 окна во 2-е

let grayBackgroundFooterButtonCalculation3 = document.querySelector('.gray_background_footer_3'); //серый экран
let grayBackgroundFooterButtonCalculation4 = document.querySelector('.gray_background_footer_4'); //серый экран
let grayBackgroundFooterButtonCalculation5 = document.querySelector('.gray_background_footer_5'); //серый экран
let formFooterCloseButton4 = document.querySelector('.window_close_footer_4'); //кнопка, закрывающая окно формы
let formFooterCloseButton5 = document.querySelector('.window_close_footer_5'); //кнопка, закрывающая окно формы
let formFooterCloseButton6 = document.querySelector('.window_close_footer_6'); //кнопка, закрывающая окно формы

let popupOrderCallProjects = document.querySelector('.popup_order_call_container_projects'); //окно формы 1
let popupOrderCallProjects2 = document.querySelector('.popup_order_call_container_projects2'); //окно формы 2
let popupOrderCallProjects3 = document.querySelector('.popup_order_call_container_projects3'); //окно формы 3

function scrollToTop() {
    window.scrollTo({
        top: 0,
        // behavior: 'smooth' // плавная прокрутка
    });
}

// function scrollToTop2() {
//     window.scrollTo({
//         top: 880,
//         // behavior: 'smooth' // плавная прокрутка
//     });
// }

function scrollToTop2() {
    targetElement.scrollIntoView({
        // behavior: 'smooth' // Плавная прокрутка
    });
}

buttonProjectOpen ? buttonProjectOpen.onclick = function() {
    // alert("111");
    popupOrderCallProjects.classList.add('active_form');
    grayBackgroundFooterButtonCalculation3.classList.remove('form_hidden');
    scrollToTop();
} : null;
buttonProjectOpen2 ? buttonProjectOpen2.onclick = function() {
    // alert("111");
    popupOrderCallProjects2.classList.add('active_form');
    grayBackgroundFooterButtonCalculation3.classList.remove('form_hidden');
    scrollToTop();
} : null;
buttonProjectOpen3 ? buttonProjectOpen3.onclick = function() {
    // alert("111");
    popupOrderCallProjects3.classList.add('active_form');
    grayBackgroundFooterButtonCalculation3.classList.remove('form_hidden');
    scrollToTop();
} : null;

// buttonProjectOpen4 ? buttonProjectOpen5.onclick = function() {
//     alert("111");
//     popupOrderCallProjects.classList.remove('active_form');
//     popupOrderCallProjects2.classList.add('active_form');
//     popupOrderCallProjects3.classList.remove('active_form');
//     grayBackgroundFooterButtonCalculation3.classList.remove('form_hidden');
//     scrollToTop();
// } : null;
buttonProjectOpen4 ? buttonProjectOpen4.onclick = function() {
    // alert("111");
    popupOrderCallProjects.classList.remove('active_form');
    popupOrderCallProjects2.classList.add('active_form');
    popupOrderCallProjects3.classList.remove('active_form');
    grayBackgroundFooterButtonCalculation3.classList.remove('form_hidden');
    scrollToTop();
} : null;
buttonProjectOpen5 ? buttonProjectOpen5.onclick = function() {
    // alert("111");
    popupOrderCallProjects.classList.remove('active_form');
    popupOrderCallProjects2.classList.remove('active_form');
    popupOrderCallProjects3.classList.add('active_form');
    grayBackgroundFooterButtonCalculation3.classList.remove('form_hidden');
    scrollToTop();
} : null;

buttonProjectOpen6 ? buttonProjectOpen6.onclick = function() {
    // alert("111");
    popupOrderCallProjects.classList.add('active_form');
    popupOrderCallProjects2.classList.remove('active_form');
    popupOrderCallProjects3.classList.remove('active_form');
    grayBackgroundFooterButtonCalculation3.classList.remove('form_hidden');
    scrollToTop();
} : null;
buttonProjectOpen7 ? buttonProjectOpen7.onclick = function() {
    // alert("111");
    popupOrderCallProjects.classList.remove('active_form');
    popupOrderCallProjects2.classList.remove('active_form');
    popupOrderCallProjects3.classList.add('active_form');
    grayBackgroundFooterButtonCalculation3.classList.remove('form_hidden');
    scrollToTop();
} : null;

buttonProjectOpen8 ? buttonProjectOpen8.onclick = function() {
    // alert("111");
    popupOrderCallProjects.classList.add('active_form');
    popupOrderCallProjects2.classList.remove('active_form');
    popupOrderCallProjects3.classList.remove('active_form');
    grayBackgroundFooterButtonCalculation3.classList.remove('form_hidden');
    scrollToTop();
} : null;
buttonProjectOpen9 ? buttonProjectOpen9.onclick = function() {
    // alert("111");
    popupOrderCallProjects.classList.remove('active_form');
    popupOrderCallProjects2.classList.add('active_form');
    popupOrderCallProjects3.classList.remove('active_form');
    grayBackgroundFooterButtonCalculation3.classList.remove('form_hidden');
    scrollToTop();
} : null;

formFooterCloseButton4 ? formFooterCloseButton4.onclick = function() {
    // alert("111");
    popupOrderCallProjects.classList.remove('active_form');
    grayBackgroundFooterButtonCalculation3.classList.add('form_hidden');
    scrollToTop2();
} : null;
formFooterCloseButton5 ? formFooterCloseButton5.onclick = function() {
    // alert("222");
    popupOrderCallProjects2.classList.remove('active_form');
    grayBackgroundFooterButtonCalculation3.classList.add('form_hidden');
    scrollToTop2();
} : null;
formFooterCloseButton6 ? formFooterCloseButton6.onclick = function() {
    // alert("333");
    popupOrderCallProjects3.classList.remove('active_form');
    grayBackgroundFooterButtonCalculation3.classList.add('form_hidden');
    scrollToTop2();
} : null;


grayBackgroundFooterButtonCalculation3 ? grayBackgroundFooterButtonCalculation3.onclick = function() {
    // alert("111");
    popupOrderCallProjects.classList.remove('active_form');
    popupOrderCallProjects2.classList.remove('active_form');
    popupOrderCallProjects3.classList.remove('active_form');
    grayBackgroundFooterButtonCalculation3.classList.add('form_hidden');
    scrollToTop2();
} : null;

// Десктопная версия 
document.addEventListener('DOMContentLoaded', () => {
    const desktopMenuItems = document.querySelectorAll('.scrollButtonDesktop[data-target-desktop]');

    console.log("Desktop DOM fully loaded and parsed");

    // Проверяем существование десктопных элементов меню
    if (desktopMenuItems.length === 0) {
        console.warn("No desktop menu items found");
    } else {
        console.log(`Found ${desktopMenuItems.length} desktop menu items`);
    }

    // Обработчики для пунктов меню в сайдбаре (десктопная версия)
    desktopMenuItems.forEach(item => {
        item.addEventListener('click', () => {
            console.log("Desktop menu item clicked");
            const targetClass = item.getAttribute('data-target-desktop');
            const offsetDesktop = parseInt(item.getAttribute('data-offset-desktop'), 10);

            if (isNaN(offsetDesktop)) {
                console.warn(`Invalid offset for desktop menu item: ${targetClass}`);
                return;
            }

            console.log(`Scrolling to ${targetClass} with offset ${offsetDesktop}`);

            scrollToElementWithOffset(targetClass, offsetDesktop);
        });
    });
});

// Функция прокрутки с учетом смещения для десктопной версии
function scrollToElementWithOffset(targetClass, offsetDesktop) {
    const targetElement = document.querySelector(`.${targetClass}`);
    if (targetElement) {
        const elementPosition = targetElement.getBoundingClientRect().top + window.pageYOffset + offsetDesktop;

        // Плавная прокрутка к позиции элемента
        window.scrollTo({
            top: elementPosition,
            behavior: 'smooth'
        });
    } else {
        console.warn(`Элемент с классом ${targetClass} не найден`);
    }
}

// мобильная версия

document.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.querySelector('.menu_hamburger');
    const menu = document.querySelector('.menu');
    const mobileMenuItems = document.querySelectorAll('.scrollButtonMobile[data-target-mobile]');

    console.log("Mobile DOM fully loaded and parsed");

    // Переключаем классы для открытия/закрытия гамбургер-меню
    hamburger.addEventListener('click', () => {
        console.log("Hamburger clicked");
        hamburger.classList.toggle('hamburger_active');
        menu.classList.toggle('menu_active');
    });

    // Проверяем существование мобильных элементов меню
    if (mobileMenuItems.length === 0) {
        console.warn("No mobile menu items found");
    } else {
        console.log(`Found ${mobileMenuItems.length} mobile menu items`);
    }

    // Обработчики для пунктов гамбургер-меню (мобильная версия)
    mobileMenuItems.forEach(item => {
        item.addEventListener('click', () => {
            console.log("Mobile menu item clicked");
            const targetClass = item.getAttribute('data-target-mobile');
            const offsetMobile = parseInt(item.getAttribute('data-offset-mobile'), 10);

            if (isNaN(offsetMobile)) {
                console.warn(`Invalid offset for mobile menu item: ${targetClass}`);
                return;
            }

            console.log(`Scrolling to ${targetClass} with offset ${offsetMobile}`);

            // Закрываем гамбургер-меню
            hamburger.classList.remove('hamburger_active');
            menu.classList.add('menu_active');

            scrollToElementWithOffset(targetClass, offsetMobile);
        });
    });
});

// Функция прокрутки с учетом смещения для мобильной версии
function scrollToElementWithOffset(targetClass, offsetMobile) {
    const targetElement = document.querySelector(`.${targetClass}`);
    if (targetElement) {
        const elementPosition = targetElement.getBoundingClientRect().top + window.pageYOffset + offsetMobile;

        // Плавная прокрутка к позиции элемента
        window.scrollTo({
            top: elementPosition,
            behavior: 'smooth'
        });
    } else {
        console.warn(`Элемент с классом ${targetClass} не найден`);
    }
}

/**/

/* устанавливаем полупрозрачность ссылке в сайдбаре и гамбургере (той, которая сейчас открыта) + /catalog-bani и /catalog-besedki если открыты, то подсвечиваем /catalog-domov */
document.addEventListener("DOMContentLoaded", function() {
    // Получаем текущий путь страницы
    const currentPath = window.location.pathname;

    // Находим все ссылки в сайдбаре
    const sidebarLinks = document.querySelectorAll(".nav_logo_and_links_list_link");
    const hamburgerLinks = document.querySelectorAll(".header_logo_and_links_list_link");

    // Проходимся по каждой ссылке и устанавливаем полупрозрачность, если она соответствует текущему пути
    sidebarLinks.forEach(function(link) {
        if (
            link.getAttribute("href") === currentPath ||
            (currentPath === "/catalog-bani" || currentPath === "/catalog-besedki") &&
            link.getAttribute("href") === "/catalog-domov"
        ) {
            link.classList.add("opasity_link");
        }
    });

    hamburgerLinks.forEach(function(link) {
        if (
            link.getAttribute("href") === currentPath ||
            (currentPath === "/catalog-bani" || currentPath === "/catalog-besedki") &&
            link.getAttribute("href") === "/catalog-domov"
        ) {
            link.classList.add("opasity_link");
        }
    });
});

