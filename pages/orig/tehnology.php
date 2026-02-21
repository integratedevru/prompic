<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../icons/favicon/favicon.png" type="image/x-icon">
<link rel="stylesheet" href="../css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
        <script src="/node_modules/jquery/dist/jquery.min.js" ></script>
        <link rel="stylesheet" type="text/css" href="/node_modules/slick-carousel/slick/slick.css"/>
        <script type="text/javascript" src="/node_modules/slick-carousel/slick/slick.min.js"></script>
<title><?= htmlspecialchars($siteConfig['meta']['tehnology']['title']) ?></title>
        <meta name="description" content="<?= htmlspecialchars($siteConfig['meta']['tehnology']['description']) ?>">
        <script src="https://www.google.com/recaptcha/enterprise.js?render=<?= htmlspecialchars($_ENV['RECAPTCHA_SITE_KEY']) ?>"></script>
        <!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
            (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

            ym(<?= htmlspecialchars($siteConfig['yandex_metrika_id']) ?>, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true
            });
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/<?= htmlspecialchars($siteConfig['yandex_metrika_id']) ?>" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->
    </head>
    <body>
        <aside class="aside_sidebar">
            <?php include dirname(__DIR__, 2) . '/components/sidebar.php'; ?>
        </aside>
        <header class="header_adaptive">
            <?php include dirname(__DIR__, 2) . '/components/header_adaptive.php'; ?>
        </header>
        <main class="main_section">
            <section class="proizvodstvo">
                <div class="proizvodstvo_container">
                    <h1 class="proizvodstvo_heading">Производство и технологии</h1>
                    <p class="proizvodstvo_under_heading_text">
                        Заготавливаем высококачественный отборный лес с идеальной геометрией в Гдовском районе Псковской области. Доставляем на производство в Неелово.  Применяем механическую обработку и снимаем только верхний слой. Используем естественную и камерную сушку.
                    </p>
                </div>
            </section>
            <section class="proizvodstvo_vidy">
                <div class="proizvodstvo_vidy_container">
                    <div class="proizvodstvo_vidy_container_2">
                        <div class="proizvodstvo_vidy_block">
                            <img src="../img/proizvodstvo/proizvodstvo_vidy_foto1.jpg" alt="" class="proizvodstvo_vidy_foto">
                            <p class="proizvodstvo_vidy_block_text">Собственные делянки в экологически чистых районах Псковской области</p>
                        </div>
                        <div class="proizvodstvo_vidy_block">
                            <img src="../img/proizvodstvo/proizvodstvo_vidy_foto2.jpg" alt="" class="proizvodstvo_vidy_foto">
                            <p class="proizvodstvo_vidy_block_text">Сортировка леса</p>
                        </div>                        
                        <div class="proizvodstvo_vidy_block">
                            <img src="../img/proizvodstvo/proizvodstvo_vidy_foto3.jpg" alt="" class="proizvodstvo_vidy_foto">
                            <p class="proizvodstvo_vidy_block_text">Изготовление погонажной продукции</p>
                        </div>                        
                        <div class="proizvodstvo_vidy_block">
                            <img src="../img/proizvodstvo/proizvodstvo_vidy_foto4.jpg" alt="" class="proizvodstvo_vidy_foto">
                            <p class="proizvodstvo_vidy_block_text">Естественная или искусственная сушка</p>
                        </div>                        
                        <div class="proizvodstvo_vidy_block">
                            <img src="../img/proizvodstvo/proizvodstvo_vidy_foto5.jpg" alt="" class="proizvodstvo_vidy_foto">
                            <p class="proizvodstvo_vidy_block_text">Выборка чашек под проект и обработка антисептиком «Просепт Био»</p>
                        </div>                        
                        <div class="proizvodstvo_vidy_block">
                            <img src="../img/proizvodstvo/proizvodstvo_vidy_foto6.jpg" alt="" class="proizvodstvo_vidy_foto">
                            <p class="proizvodstvo_vidy_block_text">Вертикальная загрузка с помощью крана-балки</p>
                        </div>                        
                        <div class="proizvodstvo_vidy_block">
                            <img src="../img/proizvodstvo/proizvodstvo_vidy_foto7.jpg" alt="" class="proizvodstvo_vidy_foto">
                            <p class="proizvodstvo_vidy_block_text">Горизонтальная загрузка с помощью погрузчика</p>
                        </div>                        
                        <div class="proizvodstvo_vidy_block">
                            <img src="../img/proizvodstvo/proizvodstvo_vidy_foto8.jpg" alt="" class="proizvodstvo_vidy_foto">
                            <p class="proizvodstvo_vidy_block_text">Доставка на объект заказчика</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="process_stroitelstva">
                <div class="process_stroitelstva_container">
                    <h2 class="process_stroitelstva_heading">Производственный процесс</h2>
</div>
            </section>

            <section class="homepage_slider_2">
                <div class="homepage_slider_2_container">
                    <div class="sobstvennoe_proizvodstvo_slider">
<div>
                            <img src="../img/homepage/slider2/slider2_foto1.jpg" alt="Slide 1" class="slider_2_foto_1">
                        </div>
                        <div>
                            <img src="../img/homepage/slider2/slider2_foto2.jpg" alt="Slide 2" class="slider_2_foto_2">
                        </div>
                        <div>
                            <img src="../img/homepage/slider2/slider2_foto3.jpg" alt="Slide 3" class="slider_2_foto_3">
                        </div>
                        <div>
                            <img src="../img/homepage/slider2/slider2_foto4.jpg" alt="Slide 4" class="slider_2_foto_4">
                        </div>
                        <div>
                            <img src="../img/homepage/slider2/slider2_foto5.jpg" alt="Slide 5" class="slider_2_foto_5">
                        </div>
                        <div>
                            <img src="../img/homepage/slider2/slider2_foto6.jpg" alt="Slide 6" class="slider_2_foto_6">
                        </div>
                        <div>
                            <img src="../img/homepage/slider2/slider2_foto7.jpg" alt="Slide 7" class="slider_2_foto_7">
                        </div>
                        <div>
                            <img src="../img/homepage/slider2/slider2_foto8.jpg" alt="Slide 8" class="slider_2_foto_8">
                        </div>
                        <div>
                            <img src="../img/homepage/slider2/slider2_foto9.jpg" alt="Slide 9" class="slider_2_foto_9">
                        </div>
                        <div>
                            <img src="../img/homepage/slider2/slider2_foto10.jpg" alt="Slide 10" class="slider_2_foto_10">
                        </div>
                        <div>
                            <img src="../img/homepage/slider2/slider2_foto11.jpg" alt="Slide 11" class="slider_2_foto_11">
                        </div>
                        <div>
                            <img src="../img/homepage/slider2/slider2_foto12.jpg" alt="Slide 12" class="slider_2_foto_12">
                        </div>
                        <div>
                            <img src="../img/homepage/slider2/slider2_foto13.jpg" alt="Slide 13" class="slider_2_foto_13">
                        </div>
                        <div>
                            <img src="../img/homepage/slider2/slider2_foto14.jpg" alt="Slide 14" class="slider_2_foto_14">
                        </div>
                        <div>
                            <img src="../img/homepage/slider2/slider2_foto15.jpg" alt="Slide 15" class="slider_2_foto_14">
                        </div>
                        <div>
                            <img src="../img/homepage/slider2/slider2_foto16.jpg" alt="Slide 16" class="slider_2_foto_14">
                        </div>
                        <div>
                            <img src="../img/homepage/slider2/slider2_foto17.jpg" alt="Slide 17" class="slider_2_foto_14">
                        </div>
                        <div>
                            <img src="../img/homepage/slider2/slider2_foto18.jpg" alt="Slide 18" class="slider_2_foto_14">
                        </div>
                    </div>
                    <button type="button" class="custom-prev">
                        <img src="../img/homepage/slider2/button_custom_prev.svg" alt="Previous">
                    </button>

                    <button type="button" class="custom-next">
                        <img src="../img/homepage/slider2/button_custom_next.svg" alt="Next">
                    </button>
                </div>
            </section>

            <section class="stroitelniye_uslugi_page_text_one">
                <div class="stroitelniye_uslugi_page_text_one_container stroitelniye_uslugi_page_text_one_container_seopravki">
<p class="stroitelniye_uslugi_page_text_one_text stroitelniye_uslugi_page_text_one_text_first stroitelniye_uslugi_page_text_one_text_last">Наша компания использует поэтапную модель работы с Заказчиком: проектирование и расчет, заготовка и производство, строительство и инженерные сети. Широко используется принцип сдачи объекта “под ключ” — полный комплекс работ, т.е. объект полностью готов к заселению и эксплуатации. Вместе с Вами мы формируем необходимые разделы сметы и их наполнение (Вы сами решаете какие товары и услуги потребуются) — никакого навязывания, лишь Ваш выбор!</p>
                </div>
            </section>
        </main>
        <footer class="footer_section">
            <?php include dirname(__DIR__, 2) . '/components/footer.php'; ?>
        </footer>
        <script src="/js/index.js"></script>
    </body>
</html>