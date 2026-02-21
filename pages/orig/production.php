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
<title><?= htmlspecialchars($siteConfig['meta']['production']['title']) ?></title>
        <meta name="description" content="<?= htmlspecialchars($siteConfig['meta']['production']['description']) ?>">
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
            <section class="products_component">
                <div class="products_component_container">
                    <h1 class="products_component_heading">Продукция</h1>
                    <section class="before_after">
                        <div class="before_after_block1">
                            <div class="before_after_block1_foto">
                                <img src="../img/page_products/brevno_do.png" alt="" class="before_after_brevno_do">
                                <img src="../img/page_products/brevno_posle.png" alt="" class="before_after_brevno_posle">
                            </div>
                            <div class="before_after_block1_text_container">
                                <h2 class="before_after_block1_heading">Производим бревна высокого качества по собственной ноу хау технологии</h2>
                                <p class="before_after_block1_text">При обработке снимаем только тонкий слой с корой, что препятствует растрескиванию бревна при дальнейшей эксплуатации.</p>
                            </div>
                        </div>
                        <div class="before_after_block2">

                        </div>
                    </section>
                </div>
            </section>

            <section class="products_component1">
                <div class="products_component_container1">
                    <section class="before_after_pluses">
                        <ul class="before_after_pluses_list">
                            <li class="before_after_pluses_list_point"><span class="before_after_pluses_list_point_interval">Сортируем</span> деловой лес (срубный лес, ровный по геометрии, отличный от итогового диаметра на 1-2 мм);</li>
                            <li class="before_after_pluses_list_point">Используем <span class="before_after_pluses_list_point_interval">финскую линию обработки древесины</span> (идеальные геометрия и посадка бревен, минимум трещин);</li>
                            <li class="before_after_pluses_list_point"><span class="before_after_pluses_list_point_interval">Опытные операторы</span> линии оцилиндровки и нарезки (идеальные лунный паз и русская чаша);</li>
                            <li class="before_after_pluses_list_point">На производстве применяются <span class="before_after_pluses_list_point_interval">эффективные растворы</span> обработки древесины;</li>
                        </ul>
                    </section>
                </div>
            </section>

            <section class="products_component2">
                <div class="products_component_container2">
                    <section class="type_of_brevno">
                        <div class="card_ocilindrovannoe_brevno">
                            <img src="../img/page_products/ocilindrovannoe_brevno.png" alt="" class="card_ocilindrovannoe_brevno_img">
                            <div class="card_ocilindrovannoe_brevno_text_container">
                                <div class="card_ocilindrovannoe_brevno_text">
                                    <h3 class="card_ocilindrovannoe_brevno_heading">Оцилиндрованное бревно</h3>
                                    <ul class="card_ocilindrovannoe_brevno_list">
<li class="card_ocilindrovannoe_brevno_list_point">Не требует отделки;</li>
                                        <li class="card_ocilindrovannoe_brevno_list_point">Удобство монтажа;</li>
                                        <li class="card_ocilindrovannoe_brevno_list_point">Идеальная геометрия бревен;</li>
                                        <li class="card_ocilindrovannoe_brevno_list_point">Короткие сроки возведения;</li>
                                        <li class="card_ocilindrovannoe_brevno_list_point">Небольшая усадка</li>
                                    </ul>
                                </div>
                                <div class="card_ocilindrovannoe_brevno_price">
                                    <p class="card_ocilindrovannoe_brevno_price_text">от 15 000 руб/м<sup>3</sup></p>
                                    <button class="button_card_ocilindrovannoe_brevno_price project_calculation12">Оставить заявку</button>
                                </div>
                            </div>
                        </div>
                        <div class="card_okoryonnoe_brevno">
                            <img src="../img/page_products/okoryonnoe_brevno.png" alt="" class="card_okoryonnoe_brevno_img">
                            <div class="card_okoryonnoe_brevno_text_container">
                                <div class="card_okoryonnoe_brevno_text">
                                    <h3 class="card_okoryonnoe_brevno_heading">Строганное бревно</h3>
                                    <ul class="card_okoryonnoe_brevno_list">
                                        <li class="card_okoryonnoe_brevno_list_point">Окоренное бревно</li>
                                        <li class="card_okoryonnoe_brevno_list_point">Ручная рубка;</li>
                                        <li class="card_okoryonnoe_brevno_list_point">Уменьшение затрат на производство;</li>
                                        <li class="card_okoryonnoe_brevno_list_point">Традиционный внешний вид;</li>
                                        <li class="card_okoryonnoe_brevno_list_point">Качество, проверенное веками.</li>
                                    </ul>
                                </div>
                                <div class="card_okoryonnoe_brevno_price">
                                    <p class="card_okoryonnoe_brevno_price_text">от 17 000 руб/м<sup>3</sup></p>
                                    <button class="button_card_okoryonnoe_brevno_price project_calculation13">Оставить заявку</button>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
<section class="products_component3">
                <div class="products_component_container3">
                    <section class="products_page_text_one">
<p class="stroitelniye_uslugi_page_text_one_text stroitelniye_uslugi_page_text_one_text_first">Оцилиндрованное бревно - это уникальный строительный материал, который объединяет в себе природную красоту и выдающиеся технические характеристики. Оно получается путем обработки ствола дерева, удаления коры, придание бревну форму цилиндра и обработки его поверхность. Этот процесс делает оцилиндрованное бревно отличным выбором для строительства домов, бань, беседок и других сооружений.</p>
                        <p class="stroitelniye_uslugi_page_text_one_text">Если вы рассматриваете покупку оцилиндрованного бревна, то у вас есть отличный вкус и понимание качества. Это вложение в красоту и комфорт вашего дома. Независимо от того, строите ли вы загородный коттедж или небольшую баню, это материал, который не только удовлетворит ваши потребности, но и превратит ваше жилище в настоящее произведение искусства природы.</p>
                        <p class="stroitelniye_uslugi_page_text_one_text">Оцилиндрованное бревно - это не просто строительный материал, это настоящий символ надежности и экологичности в мире строительства. Когда дело касается создания уютных домов, гостиниц, бань или других сооружений, наше предприятие предлагает вам продажу оцилиндрованного бревна высочайшего качества.</p>
                        <h2 class="stroitelniye_uslugi_page_text_one_heading">Преимущества оцилиндрованного бревна из Пскова</h2>
                        <p class="stroitelniye_uslugi_page_text_one_text">В чем заключается уникальность псковского оцилиндрованного бревна? Ответ прост: это материал, который сочетает в себе долговечность, природную красоту и превосходные изоляционные свойства.</p>
                        <p class="stroitelniye_uslugi_page_text_one_text">Приобретая оцилиндрованное бревно у нас, вы получаете следующие преимущества:</p>
                        <ol class="catalog_domov_list1">
                            <li class="catalog_domov_list1_point">Долговечность: Оцилиндрованное бревно служит десятилетиями без заметного износа. Его устойчивость к влаге и насекомым делает его отличным выбором для строительства домов, которые будут служить вашей семье не одно поколение.</li>
                            <li class="catalog_domov_list1_point">Экологичность: Бревно - это натуральный материал, без использования химических добавок. Строительство с его использованием способствует сохранению окружающей среды и созданию здоровых жилых помещений.</li>
                            <li class="catalog_domov_list1_point">Эстетика: Оцилиндрованное бревно обладает природной красотой. Его текстура и оттенок придают вашему дому уникальный и теплый вид. Независимо от стиля, ваши строительные проекты будут выглядеть великолепно.</li>
                            <li class="catalog_domov_list1_point">Изоляционные свойства: Бревно обладает отличными изоляционными характеристиками. Это значит, что ваши помещения будут комфортными и энергоэффективными в любое время года.</li>
                        </ol>
                        <p class="stroitelniye_uslugi_page_text_one_text">Мы гарантируем высокий стандарт качества нашего оцилиндрованного бревна из Пскова. Мы – опытные мастера, следим за каждой деталью производства и предоставляем вам продукт, который будет радовать вас многие годы.</p>
                        <p class="stroitelniye_uslugi_page_text_one_text stroitelniye_uslugi_page_text_one_text_last">Если вы ищете надежный и экологичный материал для вашего строительного проекта, обратитесь к нам. Мы рады предложить вам купить оцилиндрованное бревно, которое принесет надежность и красоту вашему будущему дому. Доверьтесь нам, и ваше строительство станет знаком качества и экологической ответственности.</p>
                    </section>
                </div>
            </section>
        </main>
        <footer class="footer_section">
            <?php include dirname(__DIR__, 2) . '/components/footer.php'; ?>
        </footer>
        <script src="/js/index.js"></script>
    </body>
</html>