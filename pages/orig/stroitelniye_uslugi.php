<?php
    $galleries = require __DIR__ . '/../../config/gallery.php';
    $constructionImages = $galleries[1]['images'];
?>
<section class="stroitelniye_uslugi">
                <div class="stroitelniye_uslugi_container">
<h1 class="stroitelniye_uslugi_heading">Строительные услуги</h1>
                    <section class="stroitelniye_uslugi_domokomplekt">
                        <ul class="stroitelniye_uslugi_domokomplekt_list">
                            <li class="stroitelniye_uslugi_domokomplekt_list_point">
                                <div class="stroitelniye_uslugi_domokomplekt_list_img_link">
                                    <img loading="lazy" src="../img/page_stroitelniye_uslugi/domokomplekt2.webp" class="stroitelniye_uslugi_domokomplekt_list_img" alt="">
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
                                    <img loading="lazy" src="../img/page_stroitelniye_uslugi/pod_krishu.webp" class="stroitelniye_uslugi_domokomplekt_list_img" alt="">
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
                                    <img loading="lazy" src="../img/page_stroitelniye_uslugi/pod_kluch2.webp" class="stroitelniye_uslugi_domokomplekt_list_img" alt="">
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
                        <?php foreach ($constructionImages as $i => $image): ?>
                        <div>
                            <img loading="lazy" src="<?= htmlspecialchars($image['src']) ?>" alt="Slide <?= $i + 1 ?>">
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <button type="button" class="uslugi-custom-prev">
                        <img loading="lazy" src="../img/homepage/slider2/button_custom_prev.svg" alt="Previous">
                    </button>

                    <button type="button" class="uslugi-custom-next">
                        <img loading="lazy" src="../img/homepage/slider2/button_custom_next.svg" alt="Next">
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
