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
<title><?= htmlspecialchars($siteConfig['meta']['stroitelniye_uslugi']['title']) ?></title>
        <meta name="description" content="<?= htmlspecialchars($siteConfig['meta']['stroitelniye_uslugi']['description']) ?>">
        <script src="https://www.google.com/recaptcha/enterprise.js?render=<?= htmlspecialchars($_ENV['RECAPTCHA_SITE_KEY']) ?>"></script>
       <!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function(m,e,t,r,i,k,a){
        m[i]=m[i]function(){(m[i].a=m[i].a[]).push(arguments)};
        m[i].l=1*new Date();
        for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)
    })(window, document,'script','https://mc.yandex.ru/metrika/tag.js', 'ym');
    ym(<?= htmlspecialchars($siteConfig['yandex_metrika_id']) ?>, 'init', {webvisor:true, clickmap:true, accurateTrackBounce:true, trackLinks:true});
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/<?= htmlspecialchars($siteConfig['yandex_metrika_id']) ?>" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter-->
    </head>
    <body>
        <aside class="aside_sidebar">
            <?php include dirname(__DIR__, 2) . '/components/sidebar.php'; ?>
        </aside>
        <header class="header_adaptive">
            <?php include dirname(__DIR__, 2) . '/components/header_adaptive.php'; ?>
        </header>
        <main class="main_section">
            <section class="stroitelniye_uslugi">
                <div class="stroitelniye_uslugi_container">
<h1 class="stroitelniye_uslugi_heading">Строительные услуги</h1>
                    <section class="stroitelniye_uslugi_domokomplekt">
                        <ul class="stroitelniye_uslugi_domokomplekt_list">
                            <li class="stroitelniye_uslugi_domokomplekt_list_point">
                                <div class="stroitelniye_uslugi_domokomplekt_list_img_link">
                                    <img src="../img/page_stroitelniye_uslugi/domokomplekt2.jpg" class="stroitelniye_uslugi_domokomplekt_list_img" alt="">
                                </div>
<div class="stroitelniye_uslugi_domokomplekt_domokomplekt">
                                    <h3 class="stroitelniye_uslugi_domokomplekt_domokomplekt_heading">Домокомплект</h3>
                                    <ul class="stroitelniye_uslugi_domokomplekt_domokomplekt_list">
                                        <li class="stroitelniye_uslugi_domokomplekt_point_grey">Фундамент</li>
                                        <li class="stroitelniye_uslugi_domokomplekt_point_black">Сруб</li>
                                        <li class="stroitelniye_uslugi_domokomplekt_point_grey">Монтаж</li>
                                        <li class="stroitelniye_uslugi_domokomplekt_point_grey">Полы и потолки</li>
                                        <li class="stroitelniye_uslugi_domokomplekt_point_grey">Стропильная и кровельная системы</li>
                                        <li class="stroitelniye_uslugi_domokomplekt_point_grey">Окна и двери</li>
                                        <li class="stroitelniye_uslugi_domokomplekt_point_grey">Инженерные системы</li>
                                    </ul>
                                    <button class="button_stroitelniye_uslugi_domokomplekt_domokomplekt project_calculation14">Оставить заявку</button>
                                </div>
                            </li>
                            <li class="stroitelniye_uslugi_domokomplekt_list_point">
                                <div class="stroitelniye_uslugi_domokomplekt_list_img_link">
                                    <img src="../img/page_stroitelniye_uslugi/pod_krishu.jpg" class="stroitelniye_uslugi_domokomplekt_list_img" alt="">
                                </div>
                                <div class="stroitelniye_uslugi_domokomplekt_pod_krishu">
                                    <h3 class="stroitelniye_uslugi_domokomplekt_pod_krishu_heading">Строительство под крышу</h3>
                                    <ul class="stroitelniye_uslugi_domokomplekt_pod_krishu_list">
                                        <li class="stroitelniye_uslugi_domokomplekt_point_black">Фундамент</li>
                                        <li class="stroitelniye_uslugi_domokomplekt_point_black">Сруб</li>
                                        <li class="stroitelniye_uslugi_domokomplekt_point_black">Монтаж</li>
                                        <li class="stroitelniye_uslugi_domokomplekt_point_black">Полы и потолки</li>
                                        <li class="stroitelniye_uslugi_domokomplekt_point_black">Стропильная и кровельная системы</li>
                                        <li class="stroitelniye_uslugi_domokomplekt_point_grey">Окна и двери</li>
                                        <li class="stroitelniye_uslugi_domokomplekt_point_grey">Инженерные системы</li>
                                    </ul>
                                    <button class="button_stroitelniye_uslugi_domokomplekt_pod_krishu project_calculation15">Оставить заявку</button>
                                </div>
                            </li>
                            <li class="stroitelniye_uslugi_domokomplekt_list_point">
                                <div class="stroitelniye_uslugi_domokomplekt_list_img_link">
                                    <img src="../img/page_stroitelniye_uslugi/pod_kluch2.jpg" class="stroitelniye_uslugi_domokomplekt_list_img" alt="">
                                </div>
                                <div class="stroitelniye_uslugi_domokomplekt_pod_kluch">
                                    <h3 class="stroitelniye_uslugi_domokomplekt_pod_kluch_heading">Строительство под ключ</h3>
                                    <ul class="stroitelniye_uslugi_domokomplekt_pod_kluch_list">
                                        <li class="stroitelniye_uslugi_domokomplekt_point_black">Фундамент</li>
                                        <li class="stroitelniye_uslugi_domokomplekt_point_black">Сруб</li>
                                        <li class="stroitelniye_uslugi_domokomplekt_point_black">Монтаж</li>
                                        <li class="stroitelniye_uslugi_domokomplekt_point_black">Полы и потолки</li>
                                        <li class="stroitelniye_uslugi_domokomplekt_point_black">Стропильная и кровельная системы</li>
                                        <li class="stroitelniye_uslugi_domokomplekt_point_black">Окна и двери</li>
                                        <li class="stroitelniye_uslugi_domokomplekt_point_black">Инженерные системы</li>
                                    </ul>
                                    <button class="button_stroitelniye_uslugi_domokomplekt_pod_kluch project_calculation16">Оставить заявку</button>
                                </div>
                            </li>
                        </ul>
                    </section>
                </div>
            </section>
            <section class="process_stroitelstva">
                <div class="process_stroitelstva_container">
                    <h2 class="process_stroitelstva_heading">Строительный процесс</h2>
</div>
            </section>
            
            <section class="homepage_slider_3 stroitelniye_uslugi_page_text_one_bottom">
                <div class="homepage_slider_3_container">
<div class="stroitelniye_uslugi_slider">
<div>
                            <img src="../img/proizvodstvo/slider3/slider3_foto1.jpg" alt="Slide 1" class="slider_3_foto_1">
                        </div>
                        <div>
                            <img src="../img/proizvodstvo/slider3/slider3_foto2.jpg" alt="Slide 2" class="slider_3_foto_2">
                        </div>
                        <div>
                            <img src="../img/proizvodstvo/slider3/slider3_foto3.jpg" alt="Slide 3" class="slider_3_foto_3">
                        </div>
                        <div>
                            <img src="../img/proizvodstvo/slider3/slider3_foto4.jpg" alt="Slide 4" class="slider_3_foto_4">
                        </div>
                        <div>
                            <img src="../img/proizvodstvo/slider3/slider3_foto5.jpg" alt="Slide 5" class="slider_3_foto_5">
                        </div>
                        <div>
                            <img src="../img/proizvodstvo/slider3/slider3_foto6.jpg" alt="Slide 6" class="slider_3_foto_6">
                        </div>
                        <div>
                            <img src="../img/proizvodstvo/slider3/slider3_foto7.jpg" alt="Slide 7" class="slider_3_foto_7">
                        </div>
                        <div>
                            <img src="../img/proizvodstvo/slider3/slider3_foto8.jpg" alt="Slide 8" class="slider_3_foto_8">
                        </div>
                        <div>
                            <img src="../img/proizvodstvo/slider3/slider3_foto9.jpg" alt="Slide 9" class="slider_3_foto_9">
                        </div>
                        <div>
                            <img src="../img/proizvodstvo/slider3/slider3_foto10.jpg" alt="Slide 10" class="slider_3_foto_10">
                        </div>
                        <div>
                            <img src="../img/proizvodstvo/slider3/slider3_foto11.jpg" alt="Slide 11" class="slider_3_foto_11">
                        </div>
                        <div>
                            <img src="../img/proizvodstvo/slider3/slider3_foto12.jpg" alt="Slide 12" class="slider_3_foto_12">
                        </div>
                        <div>
                            <img src="../img/proizvodstvo/slider3/slider3_foto13.jpg" alt="Slide 13" class="slider_3_foto_13">
                        </div>
                        <div>
                            <img src="../img/proizvodstvo/slider3/slider3_foto14.jpg" alt="Slide 14" class="slider_3_foto_14">
                        </div>
                        <div>
                            <img src="../img/proizvodstvo/slider3/slider3_foto15.jpg" alt="Slide 15" class="slider_3_foto_15">
                        </div>
                        <div>
                            <img src="../img/proizvodstvo/slider3/slider3_foto16.jpg" alt="Slide 16" class="slider_3_foto_16">
                        </div>
                        <div>
                            <img src="../img/proizvodstvo/slider3/slider3_foto17.jpg" alt="Slide 17" class="slider_3_foto_17">
                        </div>
                        <div>
                            <img src="../img/proizvodstvo/slider3/slider3_foto18.jpg" alt="Slide 18" class="slider_3_foto_18">
                        </div>
                        <div>
                            <img src="../img/proizvodstvo/slider3/slider3_foto19.jpg" alt="Slide 19" class="slider_3_foto_19">
                        </div>
                        <div>
                            <img src="../img/proizvodstvo/slider3/slider3_foto20.jpg" alt="Slide 20" class="slider_3_foto_20">
                        </div>
                        <div>
                            <img src="../img/proizvodstvo/slider3/slider3_foto21.jpg" alt="Slide 21" class="slider_3_foto_21">
                        </div>
                        <div>
                            <img src="../img/proizvodstvo/slider3/slider3_foto22.jpg" alt="Slide 22" class="slider_3_foto_22">
                        </div>
                        <div>
                            <img src="../img/proizvodstvo/slider3/slider3_foto23.jpg" alt="Slide 23" class="slider_3_foto_23">
                        </div>
                        <div>
                            <img src="../img/proizvodstvo/slider3/slider3_foto24.jpg" alt="Slide 24" class="slider_3_foto_24">
                        </div>
                        <div>
                            <img src="../img/proizvodstvo/slider3/slider3_foto25.jpg" alt="Slide 25" class="slider_3_foto_25">
                        </div>
                        <div>
                            <img src="../img/proizvodstvo/slider3/slider3_foto26.jpg" alt="Slide 26" class="slider_3_foto_26">
                        </div>
                        <div>
                            <img src="../img/proizvodstvo/slider3/slider3_foto27.jpg" alt="Slide 27" class="slider_3_foto_27">
                        </div>
                        <div>
                            <img src="../img/proizvodstvo/slider3/slider3_foto28.jpg" alt="Slide 28" class="slider_3_foto_28">
                        </div>
                        <div>
                            <img src="../img/proizvodstvo/slider3/slider3_foto29.jpg" alt="Slide 29" class="slider_3_foto_28">
                        </div>
                        <div>
                            <img src="../img/proizvodstvo/slider3/slider3_foto30.jpg" alt="Slide 30" class="slider_3_foto_28">
                        </div>
                        <div>
                            <img src="../img/proizvodstvo/slider3/slider3_foto31.jpg" alt="Slide 31" class="slider_3_foto_28">
                        </div>
                        <div>
                            <img src="../img/proizvodstvo/slider3/slider3_foto32.jpg" alt="Slide 32" class="slider_3_foto_28">
                        </div>
                        <div>
                            <img src="../img/proizvodstvo/slider3/slider3_foto33.jpg" alt="Slide 33" class="slider_3_foto_28">
                        </div>
                    </div>
                    <button type="button" class="uslugi-custom-prev">
                        <img src="../img/homepage/slider2/button_custom_prev.svg" alt="Previous">
                    </button>

                    <button type="button" class="uslugi-custom-next">
                        <img src="../img/homepage/slider2/button_custom_next.svg" alt="Next">
                    </button>
                </div>
            </section>

            <section class="stroitelniye_uslugi_page_text_one stroitelniye_uslugi_page_text_one_bottom">
                <div class="stroitelniye_uslugi_page_text_one_container">
                    <h2 class="stroitelniye_uslugi_page_text_one_heading stroitelniye_uslugi_page_text_one_heading__pravki uslugi_page_text_one_heading">Строительство деревянных домов под ключ в Пскове</h2>
                    <p class="stroitelniye_uslugi_page_text_one_text">Компания «ПромПик» предлагает полный комплекс услуг по монтажу деревянных домов под ключ в Пскове и области. Мы также занимаемся возведением бань, террас, беседок. В нашем арсенале — большой опыт строительства загородных домов и коттеджей под ключ. Мы берем на себя все этапы работ: от подготовки участка и заливки фундамента до монтажа электрики, сантехники. Все строительные работы выполняются строго по проекту с учетом требований ГОСТов и СНИПов. Мы разделяем все работы на этапы, что делает процесс оплаты прозрачным и предсказуемым, а смета, предоставленная на начальном этапе, включает все необходимые материалы и работы.</p>
                    <p class="stroitelniye_uslugi_page_text_one_text">Наша компания обладает собственными производственными мощностями и квалифицированными специалистами, которые строго соблюдают технологии, что позволяет нам выполнять задачи быстро и с гарантией высокого качества. Мы ценим доверие клиентов и всегда гарантируем выполнение всех обязательств!</p>
                    <h3 class="stroitelniye_uslugi_page_text_one_heading stroitelniye_uslugi_page_text_one_heading__pravki uslugi_page_text_one_heading1">Преимущества работы с нами</h3>
                    <ul class="stroitelniye_uslugi_domokomplekt_domokomplekt_list uslugi_list1">
                        <li class="stroitelniye_uslugi_domokomplekt_point_black uslugi_point1">Комплексный подход: мы берем на себя все этапы строительства, что позволяет заказчику не беспокоиться о процессе и получить готовый дом из бревна "под ключ".</li>
                        <li class="stroitelniye_uslugi_domokomplekt_point_black uslugi_point1">Высокое качество материалов: мы используем высококачественное бревно собственного производства.</li>
                        <li class="stroitelniye_uslugi_domokomplekt_point_black uslugi_point1">Индивидуальный подход: учитываем все пожелания клиентов, предлагая уникальные решения и варианты исполнения.</li>
                        <li class="stroitelniye_uslugi_domokomplekt_point_black uslugi_point1">Гарантия и поддержка: На все выполненные работы и построенные дома предоставляется гарантия.</li>
                    </ul>
                </div>
            </section>
        </main>
        <footer class="footer_section">
            <?php include dirname(__DIR__, 2) . '/components/footer.php'; ?>
        </footer>
        <script src="/js/index.js"></script>
    </body>
</html>