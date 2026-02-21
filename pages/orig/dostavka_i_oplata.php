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
<title><?= htmlspecialchars($siteConfig['meta']['dostavka_i_oplata']['title']) ?></title>
        <meta name="description" content="<?= htmlspecialchars($siteConfig['meta']['dostavka_i_oplata']['description']) ?>">
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
            <section class="gallery">
                <div class="gallery_container">
                    <h1 class="gallery_heading page_heading1">Доставка и оплата</h1>
                </div>
            </section>
            <section class="common_section">
                <div class="stage_section_container">
                    <div class="dostavka_container">
                        <div class="dostavka_block1">
                            <h2 class="dostavka_heading1">Доставка</h2>
                            <p class="dostavka_text1">В цены, указанные на сайте, входит доставка в пределах Псковской области. Доставка в другие области рассчитывается индивидуально. Узнать точную цену вы можете у наших менеджеров, связавшись с ними по телефону.</p>
                        </div>
                        <div class="dostavka_block2">
                            <h3 class="dostavka_heading2">Порядок доставки</h3>
                            <ol class="dostavka_list1">
                                <li class="dostavka_point dostavka_point1">После согласования всех вопросов по проекту, мы договариваемся об удобном дне и времени доставки пиломатериалов.</li>
                                <li class="dostavka_point dostavka_point2">Машина приезжает в назначенное время, рабочие выгружают и складируют материал.</li>
                                <li class="dostavka_point dostavka_point3">Вы подписываете акт приёмки и мы приступаем к строительству.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="common_section">
                <div class="stage_section_container">
                    <ul class="car_icon_list">
                        <li class="car_icon_item">
                            <img src="../img/dostavka_i_oplata/car_icon1.png" alt="" class="car_icon1">
                        </li>
                        <li class="car_icon_item">
                            <img src="../img/dostavka_i_oplata/car_icon2.png" alt="" class="car_icon2">
                        </li>
                        <li class="car_icon_item">
                            <img src="../img/dostavka_i_oplata/car_icon3.png" alt="" class="car_icon3">
                        </li>
                    </ul>
                </div>
            </section>

            <section class="common_section">
                <div class="common_section_container2">
                    <h3 class="how_dostavka_heading">Как происходит доставка</h3>
                </div>
            </section>
            <section class="homepage_slider_4">
                <div class="homepage_slider_4_container">
                    <div class="dostavka_slider">
                        <div>
                            <img src="../img/homepage/slider2/slider2_foto16.jpg" alt="Slide 16" class="slider_2_foto_14">
                        </div>
                        <div>
                            <img src="../img/homepage/slider2/slider2_foto17.jpg" alt="Slide 17" class="slider_2_foto_14">
                        </div>
                        <div>
                            <img src="../img/homepage/slider2/slider2_foto18.jpg" alt="Slide 18" class="slider_2_foto_14">
                        </div>
                        <div>
                            <img src="../img/homepage/slider2/slider2_foto1.jpg" alt="Slide 1" class="slider_2_foto_1">
                        </div>
                        <div>
                            <img src="../img/homepage/slider2/slider2_foto2.jpg" alt="Slide 2" class="slider_2_foto_2">
                        </div>
<div>
                            <img src="../img/homepage/slider2/slider2_foto5.jpg" alt="Slide 5" class="slider_2_foto_5">
                        </div>
<div>
                            <img src="../img/homepage/slider2/slider2_foto11.jpg" alt="Slide 11" class="slider_2_foto_11">
                        </div>
</div>
                    <button type="button" class="dostavka-custom-prev">
                        <img src="../img/homepage/slider2/button_custom_prev.svg" alt="Previous">
                    </button>

                    <button type="button" class="dostavka-custom-next">
                        <img src="../img/homepage/slider2/button_custom_next.svg" alt="Next">
                    </button>
                </div>
            </section>
            <section class="common_section">
                <div class="stage_section_container">
                    <div class="oplata_container">
                        <div class="oplata_block1">
                            <h2 class="oplata_heading1">Оплата</h2>
                            <p class="oplata_text1">У нас действует поэтапная оплата. Это значит, что вы платите частями, а не полную сумму договора. Перед началом работ вы оплачиваете 50% стоимости. Остальную сумму вы оплачиваете только после того, как мы закончим работу и у вас не будет претензий к качеству результата. На вопросы по оплате и на все остальные готовы ответить по телефону.</p>
                        </div>
                        <div class="oplata_block2">
                            <h3 class="oplata_heading2">Способы оплаты</h3>
                            <ul class="oplata_list">
                                <li class="oplata_point">Банковский перевод</li>
                                <li class="oplata_point">Наличные</li>
                                <li class="oplata_point">Материнский капитал</li>
                                <li class="oplata_point">Военная ипотека</li>
                                <li class="oplata_point">Сельская ипотека</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section class="common_section">
                <div class="common_section_container2">
                    <h3 class="poryadok_oplaty_heading">Порядок оплаты</h3>
                </div>
            </section>
            <section class="common_section">
                <div class="stage_section_container">
                    <ul class="stage_project_list">
<li class="stage_project_point stage_project_point1">
<img src="../img/stages/stage2_icon_3.png" alt="" class="stage_project_point_photo stage_project_point_photo2">
                            <p class="stage_project_point_text stage_project_point_text1">
После подписания договора вы оплачиваете 50% стоимости работ.
                            </p>
                        </li>
                        <li class="stage_project_point stage_project_point2">
<img src="../img/stages/stage3_icon_3.png" alt="" class="stage_project_point_photo stage_project_point_photo3">
                            <p class="stage_project_point_text stage_project_point_text2">
Доставляем строительные материалы и свою бригаду к вам на участок, и приступаем к строительству
                            </p>
</li>
                        <li class="stage_project_point stage_project_point3">
<img src="../img/stages/stage4_icon_4.png" alt="" class="stage_project_point_photo stage_project_point_photo4">
                            <p class="stage_project_point_text stage_project_point_text3">
После окончания работ вы подписываете акт приёмки и оплачиваете остальные 50%
                            </p>
                        </li>
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