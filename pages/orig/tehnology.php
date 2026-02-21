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
                            <img src="../img/proizvodstvo/proizvodstvo_vidy_foto1.webp" alt="" class="proizvodstvo_vidy_foto">
                            <p class="proizvodstvo_vidy_block_text">Собственные делянки в экологически чистых районах Псковской области</p>
                        </div>
                        <div class="proizvodstvo_vidy_block">
                            <img src="../img/proizvodstvo/proizvodstvo_vidy_foto2.webp" alt="" class="proizvodstvo_vidy_foto">
                            <p class="proizvodstvo_vidy_block_text">Сортировка леса</p>
                        </div>                        
                        <div class="proizvodstvo_vidy_block">
                            <img src="../img/proizvodstvo/proizvodstvo_vidy_foto3.webp" alt="" class="proizvodstvo_vidy_foto">
                            <p class="proizvodstvo_vidy_block_text">Изготовление погонажной продукции</p>
                        </div>                        
                        <div class="proizvodstvo_vidy_block">
                            <img src="../img/proizvodstvo/proizvodstvo_vidy_foto4.webp" alt="" class="proizvodstvo_vidy_foto">
                            <p class="proizvodstvo_vidy_block_text">Естественная или искусственная сушка</p>
                        </div>                        
                        <div class="proizvodstvo_vidy_block">
                            <img src="../img/proizvodstvo/proizvodstvo_vidy_foto5.webp" alt="" class="proizvodstvo_vidy_foto">
                            <p class="proizvodstvo_vidy_block_text">Выборка чашек под проект и обработка антисептиком «Просепт Био»</p>
                        </div>                        
                        <div class="proizvodstvo_vidy_block">
                            <img src="../img/proizvodstvo/proizvodstvo_vidy_foto6.webp" alt="" class="proizvodstvo_vidy_foto">
                            <p class="proizvodstvo_vidy_block_text">Вертикальная загрузка с помощью крана-балки</p>
                        </div>                        
                        <div class="proizvodstvo_vidy_block">
                            <img src="../img/proizvodstvo/proizvodstvo_vidy_foto7.webp" alt="" class="proizvodstvo_vidy_foto">
                            <p class="proizvodstvo_vidy_block_text">Горизонтальная загрузка с помощью погрузчика</p>
                        </div>                        
                        <div class="proizvodstvo_vidy_block">
                            <img src="../img/proizvodstvo/proizvodstvo_vidy_foto8.webp" alt="" class="proizvodstvo_vidy_foto">
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

            <?php
                $galleries = require __DIR__ . '/../../config/gallery.php';
                $productionImages = $galleries[0]['images'];
            ?>
            <section class="homepage_slider_2">
                <div class="homepage_slider_2_container">
                    <div class="sobstvennoe_proizvodstvo_slider">
                        <?php foreach ($productionImages as $i => $image): ?>
                        <div>
                            <img src="<?= htmlspecialchars($image['src']) ?>" alt="Slide <?= $i + 1 ?>">
                        </div>
                        <?php endforeach; ?>
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
