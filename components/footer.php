
<div class="footer_component_container_center">
    <div class="gray_background_footer gray_background_footer_first form_hidden"></div>
    <div class="gray_background_footer gray_background_footer_2 form_hidden"></div>
        <!-- <div class="gray_background_footer gray_background_footer_first"></div> -->

    <?php if(!empty($_GET['success'])) { ?>
                
        <div class="success_send_message_block_container">
            <div class="success_send_message_block">
                <p class="success_send_message_block_text"><span class="success_send_message_thanks">Спасибо, ваше сообщение</span> <span class="nowrap">отправлено !</span></p>
                    <a href="/" id="close-btn" class="success_send_message_block_link">Закрыть</a>
                <!-- <button id="close-btn">Закрыть</button> -->
            </div>
        </div>
        <a href="/">    
            <div class="gray_background_header_sendMessage"></div>
        </a>

    <?php } ?>
    <?php if(!empty($_GET['error'])) { ?>
        
        <div class="success_send_message_block_container">
            <div class="success_send_message_block">
                <p class="success_send_message_block_text">Ошибка отправки</p>
                <a href="/" id="close-btn" class="success_send_message_block_link">Закрыть</a>
            </div>
        </div>  
        <div class="gray_background_header_sendMessage"></div>

    <?php } ?>
    <section class="popup_order_call_container">
        <div class="popup_order_call popup_order_call_2">
            <button type="button" class="window_close window_close_footer_2"></button>
            <div class="popup_order_call_left">
                <!-- <p class="popup_order_call_left_h2">Заявка <br>на расчет проекта</p> -->
                <p class="popup_order_call_left_h2">Заявка на бесплатный обмер и расчет проекта под ключ</p>
                <p class="popup_order_call_left_p">Отправьте свои контактные данные, и мы свяжемся с вами в ближайшее время</p>
            </div>
            <div class="popup_order_call_right">
                <!-- <form class="order_call_form"> -->
                <form
                    id="form1" 
                    action="/handlers/send_email1.php"
                    class="order_call_form mt3_spb" 
                    method="POST" 
                    name="send_email
                ">
                    <p class="popup_order_call_right_text">
                        <label for="name" class="order_call_form_label">Имя</label>
                        <input type="text" name="name" id="name" autocomplete="on" required class="order_call_form_input">
                    </p>
                    <!-- <p class="popup_order_call_right_text mt4_spb">
                        <label for="email" class="order_call_form_label">Почта</label>
                        <input type="text" name="mailform" id="email" autocomplete="on" required class="order_call_form_input">
                    </p> -->
                    <p class="popup_order_call_right_text mt4_spb">
                        <label for="phone" class="order_call_form_label">Телефон</label>
                        <input type="text" name="phone" id="phone" placeholder="8 900 000 00 00" pattern="(8|\+7)\s?(\(\d{3}\)|\d{3})\s?\d{3}\s?\d{2}\s?\d{2}" autocomplete="on" required class="order_call_form_input" title="Введите корректный номер телефона">
                    </p>
                    <!-- <button type="submit" class="order_call_form_button" form="send_email">Отправить</button> -->
                    <button 
                        type="submit" 
                        class="g-recaptcha order_call_form_button mt5_spb"
                        data-sitekey="<?= htmlspecialchars($_ENV['RECAPTCHA_SITE_KEY']) ?>"
                        data-callback='onSelectionFormSubmit1'
                        data-action='submit'
                    >
                        Отправить
                    </button>
                </form>
                <script>
                    function onSelectionFormSubmit1(token) {
                        event.preventDefault();
                        const form = document.getElementById("form1");
                        if (form.checkValidity()) {
                            form.submit();
                            return true;
                        } else {
                            form.reportValidity();
                            return false;
                        }
                    }
                </script>
                <p class="popup_order_call_right_p">Нажимая на кнопку Отправить, вы даете согласие на обработку ваших персональных данных и соглашаетесь <span class="types_foundations_red_text">с политикой конфиденциальности</span></p>
            </div>
        </div>
    </section>
    <!-- <form action="" name="send_email2">
        <input type="text" name="phone" id="phone" autocomplete="on" required class="order_call_form_input">
        <button type="submit" class="order_call_form_button">Отправить</button>
    </form> -->

    <section class="popup_order_call_container2">
        <div class="popup_order_call popup_order_call_first">
            <button type="button" class="window_close window_close_footer_first"></button>
            <div class="popup_order_call_left">
                <p class="popup_order_call_left_h2">Заказать обратный звонок</p>
                <p class="popup_order_call_left_p">Отправьте свои контактные данные, и мы свяжемся с вами в ближайшее время</p>
            </div>
            <div class="popup_order_call_right">
                <!-- <form class="order_call_form"> -->
                <form 
                    id="form2"
                    action="/handlers/send_email2_callback.php"
                    class="order_call_form" 
                    method="POST" 
                    name="order_call_form"
                >
                    <!-- <p>
                        <input type="text" placeholder="ваш телефон" name="phone" id="phone" autocomplete="on" required class="order_call_form_input">
                        <label for="phone" class="order_call_form_label">без спама</label>
                    </p>
                    <button type="submit" class="order_call_form_button">Отправить</button> -->
                    <p class="popup_order_call_right_text mt3_spb">
                        <label for="name" class="order_call_form_label">Имя</label>
                        <input type="text" name="namecallback" id="name" autocomplete="on" required class="order_call_form_input">
                    </p>
                    <p class="popup_order_call_right_text mt4_spb">
                        <label for="phone" class="order_call_form_label">Телефон</label>
                        <!-- <input type="text" name="phonecallback" id="phone" placeholder="8 900 000 00 00" pattern="8\s?(\(\d{3}\)|\d{3})\s?\d{3}\s?\d{2}\s?\d{2}" autocomplete="on" required class="order_call_form_input"> -->
                        <input 
                            type="text" 
                            name="phonecallback" 
                            id="phone" 
                            placeholder="8 900 000 00 00" 
                            pattern="(8|\+7)\s?(\(\d{3}\)|\d{3})\s?\d{3}\s?\d{2}\s?\d{2}" 
                            autocomplete="on" 
                            required 
                            class="order_call_form_input"
                            title="Введите корректный номер телефона"
                        >
                    </p>
                    <button 
                        type="submit" 
                        class="g-recaptcha order_call_form_button mt5_spb"
                        data-sitekey="<?= htmlspecialchars($_ENV['RECAPTCHA_SITE_KEY']) ?>"
                        data-callback='onSelectionFormSubmit2'
                        data-action='submit'
                    >
                        Отправить
                    </button>
                </form>
                <script>
                    function onSelectionFormSubmit2(token) {
                        event.preventDefault();
                        const form = document.getElementById("form2");
                        if (form.checkValidity()) {
                            form.submit();
                            return true;
                        } else {
                            form.reportValidity();
                            return false;
                        }
                    }
                </script>
                <p class="popup_order_call_right_p">Нажимая на кнопку Отправить, вы даете согласие на обработку ваших персональных данных и соглашаетесь <span class="types_foundations_red_text">с политикой конфиденциальности</span></p>
            </div>
        </div>
    </section>

    <!-- окно-каталог 1 -->
    <section class="popup_order_call_container3">
        <div class="popup_order_call_container_projects">
            <button type="button" class="window_close window_close_footer_4"></button>
            <div>
                <h2 class="common_header common_header2">
                    Каталог лучших проектов
                </h2>
            </div>
            <section class="dom_container">

                <section class="buttons_bath_houses_maf">
                    <!-- <a  class="buttons_houses buttons_bath_houses_maf_active" href="/catalog-domov">дома</a> -->
                    <div class="buttons_houses buttons_bath_houses_maf_active"><span class="buttons_houses_point">дома</span></div>
                    <!-- <a href="/catalog-bani" class="buttons_bath project_open2">бани</a> -->
                    <div class="buttons_bath project_open4"><bath_ class="buttons_bath_point">бани</bath_></div>
                    <!-- <a href="/catalog-besedki" class="buttons_maf project_open3">маф</a> -->
                    <div class="buttons_maf project_open5"><span class="buttons_maf_point">маф</span></div>


                    <!-- <div class="buttons_houses buttons_bath_houses_maf_active">дома</div> -->
                    <!-- <div class="buttons_bath">бани</div> -->
                    <!-- <div class="buttons_maf">маф</div> -->
                </section>

                <section class="catalog">
                    <div class="catalog_container">
                        <section class="houses_block houses_bath_maf_active">
                            <ul class="houses_block_list">
                                <li class="houses_block_list_point houses_block_list_point1">
                                    <div class="houses_block_foto_section">
                                        <div class="houses_block_foto_section1">
                                            <img src="../img/page_catalog/doma/Dom01_1_1.jpeg" alt="" class="houses_block_foto_1 houses_block_foto_1_1 houses_block_foto_active">
                                            <!-- <img src="../img/page_catalog/catalog_house1_planirovka.svg" alt="" class="houses_block_foto_1 houses_block_foto_1_2"> -->
                                            <img src="../img/page_catalog/doma/Dom01_2.jpeg" alt="" class="houses_block_foto_1 houses_block_foto_1_2">
                                        </div>
                                        <div class="houses_block_foto_section2">
                                            <img src="../img/page_catalog/doma/Dom01_1_1.jpeg" alt="" class="houses_block_foto_2 houses1_button1 active_houses_block_foto">
                                            <!-- <img src="../img/page_catalog/catalog_house1_planirovka.svg" alt="" class="houses_block_foto_3 houses1_button2 non_active_houses_block_foto"> -->
                                            <img src="../img/page_catalog/doma/Dom01_2.jpeg" alt="" class="houses_block_foto_3 houses1_button2 non_active_houses_block_foto">
                                        </div>
                                    </div>
                                    <div class="houses_block_parameters_section">
                                        <h2 class="houses_block_heading">Одноэтажный дом 1</h2>
                                        <!-- <div class="houses_block_parameters">
                                            <div class="houses_block_parameters1">
                                                <p class="houses_block_parameters1_text">Диаметр бревна</p>
                                                <p class="houses_block_parameters1_text">Площадь</p>
                                                <p class="houses_block_parameters1_text">Кол-комнат</p>
                                                <p class="houses_block_parameters1_text">Размеры</p>
                                            </div>
                                            <div class="houses_block_parameters2">
                                                <p class="houses_block_parameters2_text">от Ø 200 </p>
                                                <p class="houses_block_parameters2_text">34,9 м²</p>
                                                <p class="houses_block_parameters2_text">1</p>
                                                <p class="houses_block_parameters2_text">6x6 м</p>
                                            </div> -->
                                        <div class="houses_block_parameters">
                                            <div class="houses_block_parameters1">
                                                <p class="houses_block_parameters1_text">Этажность</p>
                                                <p class="houses_block_parameters1_text no_wrap">Размер по осям, м</p>
                                                <p class="houses_block_parameters1_text">S общ. жил., м2</p>
                                                <p class="houses_block_parameters1_text">Кол-во комнат</p>
                                            </div>
                                            <div class="houses_block_parameters2">
                                                <p class="houses_block_parameters2_text">1</p>
                                                <p class="houses_block_parameters2_text">6 х 6</p>
                                                <p class="houses_block_parameters2_text">34,9</p>
                                                <p class="houses_block_parameters2_text">1,0</p>
                                            </div>
                                        </div>
                                        <!-- <p class="houses_block_text1">от 3 200 000 ₽ </p> -->
                                        <p class="houses_block_text1">260 000 ₽</p>
                                        <p class="houses_block_text2">Стоимость фундамента, доставка и строительные работы рассчитываются отдельно</p>
                                        <button class="houses_block_button project_calculation6">Рассчитать проект</button>
                                    </div>
                                </li>

                                <li class="houses_block_list_point houses_block_list_point2">
                                    <div class="houses_block_foto_section">
                                        <div class="houses_block_foto_section1">
                                            <img src="../img/page_catalog/doma/Dom03_1_1.jpeg" alt="" class="houses_block_foto_1 houses_block_foto_2_1 houses_block_foto_active">
                                            <img src="../img/page_catalog/doma/Dom03_2.jpeg" alt="" class="houses_block_foto_1 houses_block_foto_2_2">
                                        </div>
                                        <div class="houses_block_foto_section2">
                                            <img src="../img/page_catalog/doma/Dom03_1_1.jpeg" alt="" class="houses_block_foto_2 houses2_button1 active_houses_block_foto">
                                            <img src="../img/page_catalog/doma/Dom03_2.jpeg" alt="" class="houses_block_foto_3 houses2_button2 non_active_houses_block_foto">
                                        </div>
                                    </div>
                                    <div class="houses_block_parameters_section">
                                        <h2 class="houses_block_heading">Одноэтажный дом 3</h2>
                                        <div class="houses_block_parameters">
                                            <div class="houses_block_parameters1">
                                                <p class="houses_block_parameters1_text">Этажность</p>
                                                <p class="houses_block_parameters1_text no_wrap">Размер по осям, м</p>
                                                <p class="houses_block_parameters1_text">S общ. жил., м2</p>
                                                <p class="houses_block_parameters1_text">Кол-во комнат</p>
                                            </div>
                                            <div class="houses_block_parameters2">
                                                <p class="houses_block_parameters2_text">1</p>
                                                <p class="houses_block_parameters2_text">8 х 6</p>
                                                <p class="houses_block_parameters2_text">42,3</p>
                                                <p class="houses_block_parameters2_text">2,0</p>
                                            </div>
                                        </div>
                                        <p class="houses_block_text1">320 000 ₽ </p>
                                        <p class="houses_block_text2">Стоимость фундамента, доставка и строительные работы рассчитываются отдельно</p>
                                        <button class="houses_block_button project_calculation7">Рассчитать проект</button>
                                    </div>
                                </li>

                                <li class="houses_block_list_point houses_block_list_point1">
                                    <div class="houses_block_foto_section">
                                        <div class="houses_block_foto_section1">
                                            <img src="../img/page_catalog/doma/Dom08_1_1.jpeg" alt="" class="houses_block_foto_1 houses_block_foto_3_1 houses_block_foto_active">
                                            <img src="../img/page_catalog/doma/Dom08_2.jpeg" alt="" class="houses_block_foto_1 houses_block_foto_3_2">
                                        </div>
                                        <div class="houses_block_foto_section2">
                                            <img src="../img/page_catalog/doma/Dom08_1_1.jpeg" alt="" class="houses_block_foto_2 houses3_button1 active_houses_block_foto">
                                            <img src="../img/page_catalog/doma/Dom08_2.jpeg" alt="" class="houses_block_foto_3 houses3_button2 non_active_houses_block_foto">
                                        </div>
                                    </div>
                                    <div class="houses_block_parameters_section">
                                        <h2 class="houses_block_heading">Одноэтажный дом 8</h2>
                                        <div class="houses_block_parameters">
                                            <div class="houses_block_parameters1">
                                                <p class="houses_block_parameters1_text">Этажность</p>
                                                <p class="houses_block_parameters1_text no_wrap">Размер по осям, м</p>
                                                <p class="houses_block_parameters1_text">S общ. жил., м2</p>
                                                <p class="houses_block_parameters1_text">Кол-во комнат</p>
                                            </div>
                                            <div class="houses_block_parameters2">
                                                <p class="houses_block_parameters2_text">1</p>
                                                <p class="houses_block_parameters2_text">12 х 12</p>
                                                <p class="houses_block_parameters2_text">92,2</p>
                                                <p class="houses_block_parameters2_text">3,0</p>
                                            </div>
                                        </div>
                                        <p class="houses_block_text1">480 000 ₽ </p>
                                        <p class="houses_block_text2">Стоимость фундамента, доставка и строительные работы рассчитываются отдельно</p>
                                        <button class="houses_block_button project_calculation17">Рассчитать проект</button>
                                    </div>
                                </li>

                                <li class="houses_block_list_point houses_block_list_point1">
                                    <div class="houses_block_foto_section">
                                        <div class="houses_block_foto_section1">
                                            <img src="../img/page_catalog/doma/Dom24_1_1.jpeg" alt="" class="houses_block_foto_1 houses_block_foto_4_1 houses_block_foto_active">
                                            <img src="../img/page_catalog/doma/Dom24_2.jpeg" alt="" class="houses_block_foto_1 houses_block_foto_4_2">
                                            <img src="../img/page_catalog/doma/Dom24_3.jpeg" alt="" class="houses_block_foto_1 houses_block_foto_4_3">
                                        </div>
                                        <div class="houses_block_foto_section2">
                                            <img src="../img/page_catalog/doma/Dom24_1_1.jpeg" alt="" class="houses_block_foto_2 houses4_button1 active_houses_block_foto">
                                            <img src="../img/page_catalog/doma/Dom24_2.jpeg" alt="" class="houses_block_foto_3 houses4_button2 non_active_houses_block_foto">
                                            <img src="../img/page_catalog/doma/Dom24_3.jpeg" alt="" class="houses_block_foto_3 houses4_button3 non_active_houses_block_foto">
                                        </div>
                                    </div>
                                    <div class="houses_block_parameters_section">
                                        <h2 class="houses_block_heading">Двухэтажный дом 24</h2>
                                        <div class="houses_block_parameters">
                                            <div class="houses_block_parameters1">
                                                <p class="houses_block_parameters1_text">Этажность</p>
                                                <p class="houses_block_parameters1_text no_wrap">Размер по осям, м</p>
                                                <p class="houses_block_parameters1_text">S общ. жил., м2</p>
                                                <p class="houses_block_parameters1_text">Кол-во комнат</p>
                                            </div>
                                            <div class="houses_block_parameters2">
                                                <p class="houses_block_parameters2_text">2</p>
                                                <p class="houses_block_parameters2_text">9 х 8</p>
                                                <p class="houses_block_parameters2_text">103,6</p>
                                                <p class="houses_block_parameters2_text">3,0</p>
                                            </div>
                                        </div>
                                        <p class="houses_block_text1">650 000 ₽ </p>
                                        <p class="houses_block_text2">Стоимость фундамента, доставка и строительные работы рассчитываются отдельно</p>
                                        <button class="houses_block_button project_calculation18">Рассчитать проект</button>
                                    </div>
                                </li>

                                <li class="houses_block_list_point houses_block_list_point1">
                                    <div class="houses_block_foto_section">
                                        <div class="houses_block_foto_section1">
                                            <img src="../img/page_catalog/doma/Dom26_1_1.jpeg" alt="" class="houses_block_foto_1 houses_block_foto_5_1 houses_block_foto_active">
                                            <img src="../img/page_catalog/doma/Dom26_2.jpeg" alt="" class="houses_block_foto_1 houses_block_foto_5_2">
                                            <img src="../img/page_catalog/doma/Dom26_3.jpeg" alt="" class="houses_block_foto_1 houses_block_foto_5_3">
                                        </div>
                                        <div class="houses_block_foto_section2">
                                            <img src="../img/page_catalog/doma/Dom26_1_1.jpeg" alt="" class="houses_block_foto_2 houses5_button1 active_houses_block_foto">
                                            <img src="../img/page_catalog/doma/Dom26_2.jpeg" alt="" class="houses_block_foto_3 houses5_button2 non_active_houses_block_foto">
                                            <img src="../img/page_catalog/doma/Dom26_3.jpeg" alt="" class="houses_block_foto_3 houses5_button3 non_active_houses_block_foto">
                                        </div>
                                    </div>
                                    <div class="houses_block_parameters_section">
                                        <h2 class="houses_block_heading">Двухэтажный дом 26</h2>
                                        <div class="houses_block_parameters">
                                            <div class="houses_block_parameters1">
                                                <p class="houses_block_parameters1_text">Этажность</p>
                                                <p class="houses_block_parameters1_text no_wrap">Размер по осям, м</p>
                                                <p class="houses_block_parameters1_text">S общ. жил., м2</p>
                                                <p class="houses_block_parameters1_text">Кол-во комнат</p>
                                            </div>
                                            <div class="houses_block_parameters2">
                                                <p class="houses_block_parameters2_text">2</p>
                                                <p class="houses_block_parameters2_text">9 х 7</p>
                                                <p class="houses_block_parameters2_text">105,4</p>
                                                <p class="houses_block_parameters2_text">3,0</p>
                                            </div>
                                        </div>
                                        <p class="houses_block_text1">840 000 ₽ </p>
                                        <p class="houses_block_text2">Стоимость фундамента, доставка и строительные работы рассчитываются отдельно</p>
                                        <button class="houses_block_button project_calculation19">Рассчитать проект</button>
                                    </div>
                                </li>

                                <li class="houses_block_list_point houses_block_list_point1">
                                    <div class="houses_block_foto_section">
                                        <div class="houses_block_foto_section1">
                                            <img src="../img/page_catalog/doma/Dom29_1_1.jpeg" alt="" class="houses_block_foto_1 houses_block_foto_6_1 houses_block_foto_active">
                                            <img src="../img/page_catalog/doma/Dom29_2.jpeg" alt="" class="houses_block_foto_1 houses_block_foto_6_2">
                                            <img src="../img/page_catalog/doma/Dom29_3.jpeg" alt="" class="houses_block_foto_1 houses_block_foto_6_3">
                                        </div>
                                        <div class="houses_block_foto_section2">
                                            <img src="../img/page_catalog/doma/Dom29_1_1.jpeg" alt="" class="houses_block_foto_2 houses6_button1 active_houses_block_foto">
                                            <img src="../img/page_catalog/doma/Dom29_2.jpeg" alt="" class="houses_block_foto_3 houses6_button2 non_active_houses_block_foto">
                                            <img src="../img/page_catalog/doma/Dom29_3.jpeg" alt="" class="houses_block_foto_3 houses6_button3 non_active_houses_block_foto">
                                        </div>
                                    </div>
                                    <div class="houses_block_parameters_section">
                                        <h2 class="houses_block_heading">Двухэтажный дом 29</h2>
                                        <div class="houses_block_parameters">
                                            <div class="houses_block_parameters1">
                                                <p class="houses_block_parameters1_text">Этажность</p>
                                                <p class="houses_block_parameters1_text no_wrap">Размер по осям, м</p>
                                                <p class="houses_block_parameters1_text">S общ. жил., м2</p>
                                                <p class="houses_block_parameters1_text">Кол-во комнат</p>
                                            </div>
                                            <div class="houses_block_parameters2">
                                                <p class="houses_block_parameters2_text">1</p>
                                                <p class="houses_block_parameters2_text">9 х 9</p>
                                                <p class="houses_block_parameters2_text">116,7</p>
                                                <p class="houses_block_parameters2_text">4,0</p>
                                            </div>
                                        </div>
                                        <p class="houses_block_text1">960 000 ₽ </p>
                                        <p class="houses_block_text2">Стоимость фундамента, доставка и строительные работы рассчитываются отдельно</p>
                                        <button class="houses_block_button project_calculation20">Рассчитать проект</button>
                                    </div>
                                </li>

                                <li class="houses_block_list_point houses_block_list_point1">
                                    <div class="houses_block_foto_section">
                                        <div class="houses_block_foto_section1">
                                            <img src="../img/page_catalog/doma/Dom30_1_1.jpeg" alt="" class="houses_block_foto_1 houses_block_foto_7_1 houses_block_foto_active">
                                            <img src="../img/page_catalog/doma/Dom30_2.jpeg" alt="" class="houses_block_foto_1 houses_block_foto_7_2">
                                            <img src="../img/page_catalog/doma/Dom30_3.jpeg" alt="" class="houses_block_foto_1 houses_block_foto_7_3">
                                        </div>
                                        <div class="houses_block_foto_section2">
                                            <img src="../img/page_catalog/doma/Dom30_1_1.jpeg" alt="" class="houses_block_foto_2 houses7_button1 active_houses_block_foto">
                                            <img src="../img/page_catalog/doma/Dom30_2.jpeg" alt="" class="houses_block_foto_3 houses7_button2 non_active_houses_block_foto">
                                            <img src="../img/page_catalog/doma/Dom30_3.jpeg" alt="" class="houses_block_foto_3 houses7_button3 non_active_houses_block_foto">
                                        </div>
                                    </div>
                                    <div class="houses_block_parameters_section">
                                        <h2 class="houses_block_heading">Двухэтажный дом 30</h2>
                                        <div class="houses_block_parameters">
                                            <div class="houses_block_parameters1">
                                                <p class="houses_block_parameters1_text">Этажность</p>
                                                <p class="houses_block_parameters1_text no_wrap">Размер по осям, м</p>
                                                <p class="houses_block_parameters1_text">S общ. жил., м2</p>
                                                <p class="houses_block_parameters1_text">Кол-во комнат</p>
                                            </div>
                                            <div class="houses_block_parameters2">
                                                <p class="houses_block_parameters2_text">2</p>
                                                <p class="houses_block_parameters2_text">9 х 10</p>
                                                <p class="houses_block_parameters2_text">121,8</p>
                                                <p class="houses_block_parameters2_text">3,0</p>
                                            </div>
                                        </div>
                                        <p class="houses_block_text1">1 180 000 ₽ </p>
                                        <p class="houses_block_text2">Стоимость фундамента, доставка и строительные работы рассчитываются отдельно</p>
                                        <button class="houses_block_button project_calculation21">Рассчитать проект</button>
                                    </div>
                                </li>

                                <li class="houses_block_list_point houses_block_list_point1">
                                    <div class="houses_block_foto_section">
                                        <div class="houses_block_foto_section1">
                                            <img src="../img/page_catalog/doma/Dom31_1_1.jpeg" alt="" class="houses_block_foto_1 houses_block_foto_8_1 houses_block_foto_active">
                                            <img src="../img/page_catalog/doma/Dom31_2.jpeg" alt="" class="houses_block_foto_1 houses_block_foto_8_2">
                                            <img src="../img/page_catalog/doma/Dom31_3.jpeg" alt="" class="houses_block_foto_1 houses_block_foto_8_3">
                                        </div>
                                        <div class="houses_block_foto_section2">
                                            <img src="../img/page_catalog/doma/Dom31_1_1.jpeg" alt="" class="houses_block_foto_2 houses8_button1 active_houses_block_foto">
                                            <img src="../img/page_catalog/doma/Dom31_2.jpeg" alt="" class="houses_block_foto_3 houses8_button2 non_active_houses_block_foto">
                                            <img src="../img/page_catalog/doma/Dom31_3.jpeg" alt="" class="houses_block_foto_3 houses8_button3 non_active_houses_block_foto">
                                        </div>
                                    </div>
                                    <div class="houses_block_parameters_section">
                                        <h2 class="houses_block_heading">Двухэтажный дом 31</h2>
                                        <div class="houses_block_parameters">
                                            <div class="houses_block_parameters1">
                                                <p class="houses_block_parameters1_text">Этажность</p>
                                                <p class="houses_block_parameters1_text no_wrap">Размер по осям, м</p>
                                                <p class="houses_block_parameters1_text">S общ. жил., м2</p>
                                                <p class="houses_block_parameters1_text">Кол-во комнат</p>
                                            </div>
                                            <div class="houses_block_parameters2">
                                                <p class="houses_block_parameters2_text">2</p>
                                                <p class="houses_block_parameters2_text">11 х 8</p>
                                                <p class="houses_block_parameters2_text">131,6</p>
                                                <p class="houses_block_parameters2_text">4,0</p>
                                            </div>
                                        </div>
                                        <p class="houses_block_text1">1 310 000 ₽ </p>
                                        <p class="houses_block_text2">Стоимость фундамента, доставка и строительные работы рассчитываются отдельно</p>
                                        <button class="houses_block_button project_calculation22">Рассчитать проект</button>
                                    </div>
                                </li>

                            </ul>
                        </section>


                        <!-- <section class="bath_block">
                            <ul class="houses_block_list">
                                <li class="houses_block_list_point houses_block_list_point1">
                                    <div class="houses_block_foto_section">
                                        <div class="houses_block_foto_section1">
                                            <img src="../img/page_catalog/catalog_bath1.jpg" alt="" class="houses_block_foto_1 baths_block_foto_1_1 houses_block_foto_active">
                                            <img src="../img/page_catalog/catalog_house1_planirovka.svg" alt="" class="houses_block_foto_1 baths_block_foto_1_2">
                                        </div>
                                        <div class="houses_block_foto_section2">
                                            <img src="../img/page_catalog/catalog_bath1.jpg" alt="" class="houses_block_foto_2 baths1_button1 active_houses_block_foto">
                                            <img src="../img/page_catalog/catalog_house1_planirovka.svg" alt="" class="houses_block_foto_3 baths1_button2 non_active_houses_block_foto">
                                        </div>
                                    </div>
                                    <div class="houses_block_parameters_section">
                                        <h2 class="houses_block_heading">Баня 1</h2>
                                        <div class="houses_block_parameters">
                                            <div class="houses_block_parameters1">
                                                <p class="houses_block_parameters1_text">Диаметр бревна</p>
                                                <p class="houses_block_parameters1_text">Площадь</p>
                                                <p class="houses_block_parameters1_text">Размеры</p>
                                            </div>
                                            <div class="houses_block_parameters2">
                                                <p class="houses_block_parameters2_text">Ø 180 или 200 </p>
                                                <p class="houses_block_parameters2_text">24 м²</p>
                                                <p class="houses_block_parameters2_text">2x2 м</p>
                                            </div>
                                        </div>
                                        <p class="bath_block_text1">от 800 000 ₽ </p>
                                        <p class="houses_block_text2">Стоимость фундамента, доставка и строительные работы рассчитываются отдельно</p>
                                        <button class="houses_block_button project_calculation8">Рассчитать проект</button>
                                    </div>
                                </li>

                                <li class="houses_block_list_point houses_block_list_point2">
                                    <div class="houses_block_foto_section">
                                        <div class="houses_block_foto_section1">
                                            <img src="../img/page_catalog/catalog_bath1.jpg" alt="" class="houses_block_foto_1 baths_block_foto_2_1 houses_block_foto_active">
                                            <img src="../img/page_catalog/catalog_house1_planirovka.svg" alt="" class="houses_block_foto_1 baths_block_foto_2_2">
                                        </div>
                                        <div class="houses_block_foto_section2">
                                            <img src="../img/page_catalog/catalog_bath1.jpg" alt="" class="houses_block_foto_2 baths2_button1 active_houses_block_foto">
                                            <img src="../img/page_catalog/catalog_house1_planirovka.svg" alt="" class="houses_block_foto_3 baths2_button2 non_active_houses_block_foto">
                                        </div>
                                    </div>
                                    <div class="houses_block_parameters_section">
                                        <h2 class="houses_block_heading">Баня 2</h2>
                                        <div class="houses_block_parameters">
                                            <div class="houses_block_parameters1">
                                                <p class="houses_block_parameters1_text">Диаметр бревна</p>
                                                <p class="houses_block_parameters1_text">Площадь</p>
                                                <p class="houses_block_parameters1_text">Размеры</p>
                                            </div>
                                            <div class="houses_block_parameters2">
                                                <p class="houses_block_parameters2_text">Ø 180 или 200 </p>
                                                <p class="houses_block_parameters2_text">24 м²</p>
                                                <p class="houses_block_parameters2_text">2x2 м</p>
                                            </div>
                                        </div>
                                        <p class="bath_block_text1">от 800 000 ₽ </p>
                                        <p class="houses_block_text2">Стоимость фундамента, доставка и строительные работы рассчитываются отдельно</p>
                                        <button class="houses_block_button project_calculation9">Рассчитать проект</button>
                                    </div>
                                </li>
                            </ul>
                        </section> -->

                        <!-- <section class="maf_block">
                            <ul class="houses_block_list">
                                <li class="houses_block_list_point houses_block_list_point1">
                                    <div class="houses_block_foto_section">
                                        <div class="houses_block_foto_section1">
                                            <img src="../img/page_catalog/catalog_maf1.jpg" alt="" class="houses_block_foto_1 maf_block_foto_1_1 houses_block_foto_active">
                                            <img src="../img/page_catalog/catalog_maf1_planirovka.svg" alt="" class="houses_block_foto_1 maf_block_foto_1_2">
                                        </div>
                                        <div class="houses_block_foto_section2">
                                            <img src="../img/page_catalog/catalog_maf1.jpg" alt="" class="houses_block_foto_2 maf1_button1 active_houses_block_foto">
                                            <img src="../img/page_catalog/catalog_maf1_planirovka.svg" alt="" class="houses_block_foto_3 maf1_button2 non_active_houses_block_foto">
                                        </div>
                                    </div>
                                    <div class="houses_block_parameters_section">
                                        <h2 class="houses_block_heading">Беседка 1</h2>
                                        <div class="houses_block_parameters">
                                            <div class="houses_block_parameters1">
                                                <p class="houses_block_parameters1_text">Диаметр бревна</p>
                                                <p class="houses_block_parameters1_text">Площадь</p>
                                                <p class="houses_block_parameters1_text">Размеры</p>
                                            </div>
                                            <div class="houses_block_parameters2">
                                                <p class="houses_block_parameters2_text">Ø 180 или 200 </p>
                                                <p class="houses_block_parameters2_text">4 м²</p>
                                                <p class="houses_block_parameters2_text">2x2 м</p>
                                            </div>
                                        </div>
                                        <p class="bath_block_text1">от 500 000 ₽ </p>
                                        <p class="houses_block_text2">Стоимость фундамента, доставка и строительные работы рассчитываются отдельно</p>
                                        <button class="houses_block_button project_calculation10">Рассчитать проект</button>
                                    </div>
                                </li>

                                <li class="houses_block_list_point houses_block_list_point2">
                                    <div class="houses_block_foto_section">
                                        <div class="houses_block_foto_section1">
                                            <img src="../img/page_catalog/catalog_maf1.jpg" alt="" class="houses_block_foto_1 maf_block_foto_2_1 houses_block_foto_active">
                                            <img src="../img/page_catalog/catalog_maf1_planirovka.svg" alt="" class="houses_block_foto_1 maf_block_foto_2_2">
                                        </div>
                                        <div class="houses_block_foto_section2">
                                            <img src="../img/page_catalog/catalog_maf1.jpg" alt="" class="houses_block_foto_2 maf2_button1 active_houses_block_foto">
                                            <img src="../img/page_catalog/catalog_maf1_planirovka.svg" alt="" class="houses_block_foto_3 maf2_button2 non_active_houses_block_foto">
                                        </div>
                                    </div>
                                    <div class="houses_block_parameters_section">
                                        <h2 class="houses_block_heading">Беседка 2</h2>
                                        <div class="houses_block_parameters">
                                            <div class="houses_block_parameters1">
                                                <p class="houses_block_parameters1_text">Диаметр бревна</p>
                                                <p class="houses_block_parameters1_text">Площадь</p>
                                                <p class="houses_block_parameters1_text">Размеры</p>
                                            </div>
                                            <div class="houses_block_parameters2">
                                                <p class="houses_block_parameters2_text">Ø 180 или 200 </p>
                                                <p class="houses_block_parameters2_text">4 м²</p>
                                                <p class="houses_block_parameters2_text">2x2 м</p>
                                            </div>
                                        </div>
                                        <p class="bath_block_text1">от 500 000 ₽ </p>
                                        <p class="houses_block_text2">Стоимость фундамента, доставка и строительные работы рассчитываются отдельно</p>
                                        <button class="houses_block_button project_calculation11">Рассчитать проект</button>
                                    </div>
                                </li>
                            </ul>
                        </section> -->

                    </div>
                </section>
            </section>

        </div>
    </section>

    <!-- окно-каталог 2 -->
    <section class="popup_order_call_container4">
        <div class="popup_order_call_container_projects2">
        <button type="button" class="window_close window_close_footer_5"></button>
            <div>
                <h2 class="common_header common_header2">
                    Каталог лучших проектов
                </h2>
            </div>
            <section class="bania_container">

                <section class="buttons_bath_houses_maf">
                    <!-- <a  class="buttons_houses" href="/catalog-domov">дома</a> -->
                    <div class="buttons_houses project_open6">дома</div>
                    <!-- <a href="/catalog-bani" class="buttons_bath buttons_bath_houses_maf_active">бани</a> -->
                    <div class="buttons_bath buttons_bath_houses_maf_active">бани</div>
                    <!-- <a href="/catalog-besedki" class="buttons_maf">маф</a> -->
                    <div class="buttons_maf project_open7">маф</div>
                    


                    <!-- <div class="buttons_houses buttons_bath_houses_maf_active">дома</div> -->
                    <!-- <div class="buttons_bath">бани</div> -->
                    <!-- <div class="buttons_maf">маф</div> -->
                </section>

                <section class="catalog">
                    <div class="catalog_container">
                        <section class="bath_block houses_bath_maf_active">
                            <ul class="houses_block_list">
                                <li class="houses_block_list_point houses_block_list_point1">
                                    <div class="houses_block_foto_section">
                                        <div class="houses_block_foto_section1">
                                            <img src="../img/page_catalog/bani/Bania01_1_1.jpeg" alt="" class="houses_block_foto_1 baths_block_foto_1_1 houses_block_foto_active">
                                            <img src="../img/page_catalog/bani/Bania01_2.jpeg" alt="" class="houses_block_foto_1 baths_block_foto_1_2">
                                        </div>
                                        <div class="houses_block_foto_section2">
                                            <img src="../img/page_catalog//bani/Bania01_1_1.jpeg" alt="" class="houses_block_foto_2 baths1_button1 active_houses_block_foto">
                                            <img src="../img/page_catalog/bani/Bania01_2.jpeg" alt="" class="houses_block_foto_3 baths1_button2 non_active_houses_block_foto">
                                        </div>
                                    </div>
                                    <div class="houses_block_parameters_section">
                                        <h2 class="houses_block_heading">Баня 1</h2>
                                        <div class="houses_block_parameters">
                                            <div class="houses_block_parameters1">
                                                <!-- <p class="houses_block_parameters1_text">Диаметр бревна</p>
                                                <p class="houses_block_parameters1_text">Площадь</p>
                                                <p class="houses_block_parameters1_text">Размеры</p> -->
                                                <p class="houses_block_parameters1_text">Этажность</p>
                                                <p class="houses_block_parameters1_text no_wrap">Размер по осям, м</p>
                                                <p class="houses_block_parameters1_text">S общ. жил., м2</p>
                                                <p class="houses_block_parameters1_text">Кол-во комнат</p>
                                            </div>
                                            <div class="houses_block_parameters2">
                                                <!-- <p class="houses_block_parameters2_text">Ø 180 или 200 </p>
                                                <p class="houses_block_parameters2_text">20,2 м²</p>
                                                <p class="houses_block_parameters2_text">4x5 м</p> -->
                                                <p class="houses_block_parameters2_text">1</p>
                                                <p class="houses_block_parameters2_text">4 х 5</p>
                                                <p class="houses_block_parameters2_text">20,2</p>
                                                <p class="houses_block_parameters2_text">1</p>
                                            </div>
                                        </div>
                                        <p class="bath_block_text1">160 000 ₽ </p>
                                        <p class="houses_block_text2">Стоимость фундамента, доставка и строительные работы рассчитываются отдельно</p>
                                        <button class="houses_block_button project_calculation8">Рассчитать проект</button>
                                    </div>
                                </li>

                                <li class="houses_block_list_point houses_block_list_point2">
                                    <div class="houses_block_foto_section">
                                        <div class="houses_block_foto_section1">
                                            <img src="../img/page_catalog/bani/Bania02_1_1.jpeg" alt="" class="houses_block_foto_1 baths_block_foto_2_1 houses_block_foto_active">
                                            <img src="../img/page_catalog/bani/Bania02_2.jpeg" alt="" class="houses_block_foto_1 baths_block_foto_2_2">
                                        </div>
                                        <div class="houses_block_foto_section2">
                                            <img src="../img/page_catalog/bani/Bania02_1_1.jpeg" alt="" class="houses_block_foto_2 baths2_button1 active_houses_block_foto">
                                            <img src="../img/page_catalog/bani/Bania02_2.jpeg" alt="" class="houses_block_foto_3 baths2_button2 non_active_houses_block_foto">
                                        </div>
                                    </div>
                                    <div class="houses_block_parameters_section">
                                        <h2 class="houses_block_heading">Баня 2</h2>
                                        <div class="houses_block_parameters">
                                            <div class="houses_block_parameters1">
                                                <p class="houses_block_parameters1_text">Этажность</p>
                                                <p class="houses_block_parameters1_text no_wrap">Размер по осям, м</p>
                                                <p class="houses_block_parameters1_text">S общ. жил., м2</p>
                                                <p class="houses_block_parameters1_text">Кол-во комнат</p>
                                            </div>
                                            <div class="houses_block_parameters2">
                                                <p class="houses_block_parameters2_text">1</p>
                                                <p class="houses_block_parameters2_text">5,5 х 5,5</p>
                                                <p class="houses_block_parameters2_text">29,2</p>
                                                <p class="houses_block_parameters2_text">1</p>
                                            </div>
                                        </div>
                                        <p class="bath_block_text1">220 000 ₽ </p>
                                        <p class="houses_block_text2">Стоимость фундамента, доставка и строительные работы рассчитываются отдельно</p>
                                        <button class="houses_block_button project_calculation9">Рассчитать проект</button>
                                    </div>
                                </li>

                                <li class="houses_block_list_point houses_block_list_point2">
                                    <div class="houses_block_foto_section">
                                        <div class="houses_block_foto_section1">
                                            <img src="../img/page_catalog/bani/Bania03_1_1.jpeg" alt="" class="houses_block_foto_1 baths_block_foto_3_1 houses_block_foto_active">
                                            <img src="../img/page_catalog/bani/Bania03_2.jpeg" alt="" class="houses_block_foto_1 baths_block_foto_3_2">
                                        </div>
                                        <div class="houses_block_foto_section2">
                                            <img src="../img/page_catalog/bani/Bania03_1_1.jpeg" alt="" class="houses_block_foto_2 baths3_button1 active_houses_block_foto">
                                            <img src="../img/page_catalog/bani/Bania03_2.jpeg" alt="" class="houses_block_foto_3 baths3_button2 non_active_houses_block_foto">
                                        </div>
                                    </div>
                                    <div class="houses_block_parameters_section">
                                        <h2 class="houses_block_heading">Баня 3</h2>
                                        <div class="houses_block_parameters">
                                            <div class="houses_block_parameters1">
                                                <p class="houses_block_parameters1_text">Этажность</p>
                                                <p class="houses_block_parameters1_text no_wrap">Размер по осям, м</p>
                                                <p class="houses_block_parameters1_text">S общ. жил., м2</p>
                                                <p class="houses_block_parameters1_text">Кол-во комнат</p>
                                            </div>
                                            <div class="houses_block_parameters2">
                                                <p class="houses_block_parameters2_text">1</p>
                                                <p class="houses_block_parameters2_text">6 х 6</p>
                                                <p class="houses_block_parameters2_text">35,2</p>
                                                <p class="houses_block_parameters2_text">1</p>
                                            </div>
                                        </div>
                                        <p class="bath_block_text1">265 000 ₽ </p>
                                        <p class="houses_block_text2">Стоимость фундамента, доставка и строительные работы рассчитываются отдельно</p>
                                        <button class="houses_block_button project_calculation23">Рассчитать проект</button>
                                    </div>
                                </li>

                                <li class="houses_block_list_point houses_block_list_point2">
                                    <div class="houses_block_foto_section">
                                        <div class="houses_block_foto_section1">
                                            <img src="../img/page_catalog/bani/Bania04_1_1.jpeg" alt="" class="houses_block_foto_1 baths_block_foto_4_1 houses_block_foto_active">
                                            <img src="../img/page_catalog/bani/Bania04_2.jpeg" alt="" class="houses_block_foto_1 baths_block_foto_4_2">
                                        </div>
                                        <div class="houses_block_foto_section2">
                                            <img src="../img/page_catalog/bani/Bania04_1_1.jpeg" alt="" class="houses_block_foto_2 baths4_button1 active_houses_block_foto">
                                            <img src="../img/page_catalog/bani/Bania04_2.jpeg" alt="" class="houses_block_foto_3 baths4_button2 non_active_houses_block_foto">
                                        </div>
                                    </div>
                                    <div class="houses_block_parameters_section">
                                        <h2 class="houses_block_heading">Баня 4</h2>
                                        <div class="houses_block_parameters">
                                            <div class="houses_block_parameters1">
                                                <p class="houses_block_parameters1_text">Этажность</p>
                                                <p class="houses_block_parameters1_text no_wrap">Размер по осям, м</p>
                                                <p class="houses_block_parameters1_text">S общ. жил., м2</p>
                                                <p class="houses_block_parameters1_text">Кол-во комнат</p>
                                            </div>
                                            <div class="houses_block_parameters2">
                                                <p class="houses_block_parameters2_text">1</p>
                                                <p class="houses_block_parameters2_text">8 х 6</p>
                                                <p class="houses_block_parameters2_text">45,0</p>
                                                <p class="houses_block_parameters2_text">1</p>
                                            </div>
                                        </div>
                                        <p class="bath_block_text1">345 000 ₽ </p>
                                        <p class="houses_block_text2">Стоимость фундамента, доставка и строительные работы рассчитываются отдельно</p>
                                        <button class="houses_block_button project_calculation24">Рассчитать проект</button>
                                    </div>
                                </li>

                                <li class="houses_block_list_point houses_block_list_point2">
                                    <div class="houses_block_foto_section">
                                        <div class="houses_block_foto_section1">
                                            <img src="../img/page_catalog/bani/Bania05_1_1.jpeg" alt="" class="houses_block_foto_1 baths_block_foto_5_1 houses_block_foto_active">
                                            <img src="../img/page_catalog/bani/Bania05_2.jpeg" alt="" class="houses_block_foto_1 baths_block_foto_5_2">
                                        </div>
                                        <div class="houses_block_foto_section2">
                                            <img src="../img/page_catalog/bani/Bania05_1_1.jpeg" alt="" class="houses_block_foto_2 baths5_button1 active_houses_block_foto">
                                            <img src="../img/page_catalog/bani/Bania05_2.jpeg" alt="" class="houses_block_foto_3 baths5_button2 non_active_houses_block_foto">
                                        </div>
                                    </div>
                                    <div class="houses_block_parameters_section">
                                        <h2 class="houses_block_heading">Баня 5</h2>
                                        <div class="houses_block_parameters">
                                            <div class="houses_block_parameters1">
                                                <p class="houses_block_parameters1_text">Этажность</p>
                                                <p class="houses_block_parameters1_text no_wrap">Размер по осям, м</p>
                                                <p class="houses_block_parameters1_text">S общ. жил., м2</p>
                                                <p class="houses_block_parameters1_text">Кол-во комнат</p>
                                            </div>
                                            <div class="houses_block_parameters2">
                                                <p class="houses_block_parameters2_text">1</p>
                                                <p class="houses_block_parameters2_text">6 х 8</p>
                                                <p class="houses_block_parameters2_text">46,3</p>
                                                <p class="houses_block_parameters2_text">1</p>
                                            </div>
                                        </div>
                                        <p class="bath_block_text1">384 000 ₽ </p>
                                        <p class="houses_block_text2">Стоимость фундамента, доставка и строительные работы рассчитываются отдельно</p>
                                        <button class="houses_block_button project_calculation25">Рассчитать проект</button>
                                    </div>
                                </li>

                                <li class="houses_block_list_point houses_block_list_point2">
                                    <div class="houses_block_foto_section">
                                        <div class="houses_block_foto_section1">
                                            <img src="../img/page_catalog/bani/Bania06_1_1.jpeg" alt="" class="houses_block_foto_1 baths_block_foto_6_1 houses_block_foto_active">
                                            <img src="../img/page_catalog/bani/Bania06_2.jpeg" alt="" class="houses_block_foto_1 baths_block_foto_6_2">
                                        </div>
                                        <div class="houses_block_foto_section2">
                                            <img src="../img/page_catalog/bani/Bania06_1_1.jpeg" alt="" class="houses_block_foto_2 baths6_button1 active_houses_block_foto">
                                            <img src="../img/page_catalog/bani/Bania06_2.jpeg" alt="" class="houses_block_foto_3 baths6_button2 non_active_houses_block_foto">
                                        </div>
                                    </div>
                                    <div class="houses_block_parameters_section">
                                        <h2 class="houses_block_heading">Баня 6</h2>
                                        <div class="houses_block_parameters">
                                            <div class="houses_block_parameters1">
                                                <p class="houses_block_parameters1_text">Этажность</p>
                                                <p class="houses_block_parameters1_text no_wrap">Размер по осям, м</p>
                                                <p class="houses_block_parameters1_text">S общ. жил., м2</p>
                                                <p class="houses_block_parameters1_text">Кол-во комнат</p>
                                            </div>
                                            <div class="houses_block_parameters2">
                                                <p class="houses_block_parameters2_text">1</p>
                                                <p class="houses_block_parameters2_text">8 х 9</p>
                                                <p class="houses_block_parameters2_text">71,0</p>
                                                <p class="houses_block_parameters2_text">1</p>
                                            </div>
                                        </div>
                                        <p class="bath_block_text1">495 000 ₽ </p>
                                        <p class="houses_block_text2">Стоимость фундамента, доставка и строительные работы рассчитываются отдельно</p>
                                        <button class="houses_block_button project_calculation26">Рассчитать проект</button>
                                    </div>
                                </li>

                                <li class="houses_block_list_point houses_block_list_point2">
                                    <div class="houses_block_foto_section">
                                        <div class="houses_block_foto_section1">
                                            <img src="../img/page_catalog/bani/Bania07_1_1.jpeg" alt="" class="houses_block_foto_1 baths_block_foto_7_1 houses_block_foto_active">
                                            <img src="../img/page_catalog/bani/Bania07_2.jpeg" alt="" class="houses_block_foto_1 baths_block_foto_7_2">
                                        </div>
                                        <div class="houses_block_foto_section2">
                                            <img src="../img/page_catalog/bani/Bania07_1_1.jpeg" alt="" class="houses_block_foto_2 baths7_button1 active_houses_block_foto">
                                            <img src="../img/page_catalog/bani/Bania07_2.jpeg" alt="" class="houses_block_foto_3 baths7_button2 non_active_houses_block_foto">
                                        </div>
                                    </div>
                                    <div class="houses_block_parameters_section">
                                        <h2 class="houses_block_heading">Баня 7</h2>
                                        <div class="houses_block_parameters">
                                            <div class="houses_block_parameters1">
                                                <p class="houses_block_parameters1_text">Этажность</p>
                                                <p class="houses_block_parameters1_text no_wrap">Размер по осям, м</p>
                                                <p class="houses_block_parameters1_text">S общ. жил., м2</p>
                                                <p class="houses_block_parameters1_text">Кол-во комнат</p>
                                            </div>
                                            <div class="houses_block_parameters2">
                                                <p class="houses_block_parameters2_text">1</p>
                                                <p class="houses_block_parameters2_text">10 х 10</p>
                                                <p class="houses_block_parameters2_text">110,0</p>
                                                <p class="houses_block_parameters2_text">3</p>
                                            </div>
                                        </div>
                                        <p class="bath_block_text1">657 000 ₽ </p>
                                        <p class="houses_block_text2">Стоимость фундамента, доставка и строительные работы рассчитываются отдельно</p>
                                        <button class="houses_block_button project_calculation27">Рассчитать проект</button>
                                    </div>
                                </li>

                                <li class="houses_block_list_point houses_block_list_point2">
                                    <div class="houses_block_foto_section">
                                        <div class="houses_block_foto_section1">
                                            <img src="../img/page_catalog/bani/Bania08_1_1.jpeg" alt="" class="houses_block_foto_1 baths_block_foto_8_1 houses_block_foto_active">
                                            <img src="../img/page_catalog/bani/Bania08_2.jpeg" alt="" class="houses_block_foto_1 baths_block_foto_8_2">
                                            <img src="../img/page_catalog/bani/Bania08_3.jpeg" alt="" class="houses_block_foto_1 baths_block_foto_8_3">
                                        </div>
                                        <div class="houses_block_foto_section2">
                                            <img src="../img/page_catalog/bani/Bania08_1_1.jpeg" alt="" class="houses_block_foto_2 baths8_button1 active_houses_block_foto">
                                            <img src="../img/page_catalog/bani/Bania08_2.jpeg" alt="" class="houses_block_foto_3 baths8_button2 non_active_houses_block_foto">
                                            <img src="../img/page_catalog/bani/Bania08_3.jpeg" alt="" class="houses_block_foto_3 baths8_button3 non_active_houses_block_foto">
                                        </div>
                                    </div>
                                    <div class="houses_block_parameters_section">
                                        <h2 class="houses_block_heading">Баня 8</h2>
                                        <div class="houses_block_parameters">
                                            <div class="houses_block_parameters1">
                                                <p class="houses_block_parameters1_text">Этажность</p>
                                                <p class="houses_block_parameters1_text no_wrap">Размер по осям, м</p>
                                                <p class="houses_block_parameters1_text">S общ. жил., м2</p>
                                                <p class="houses_block_parameters1_text">Кол-во комнат</p>
                                            </div>
                                            <div class="houses_block_parameters2">
                                                <p class="houses_block_parameters2_text">2</p>
                                                <p class="houses_block_parameters2_text">10 х 6</p>
                                                <p class="houses_block_parameters2_text">135,0</p>
                                                <p class="houses_block_parameters2_text">5</p>
                                            </div>
                                        </div>
                                        <p class="bath_block_text1">840 000 ₽ </p>
                                        <p class="houses_block_text2">Стоимость фундамента, доставка и строительные работы рассчитываются отдельно</p>
                                        <button class="houses_block_button project_calculation28">Рассчитать проект</button>
                                    </div>
                                </li>
                            </ul>
                        </section>
                    </div>
                </section>
            </section>
        </div>
    </section>

    <!-- окно-каталог 3 -->
    <section class="popup_order_call_container5">
        <div class="popup_order_call_container_projects3">
            <button type="button" class="window_close window_close_footer_6"></button>
            <div>
                <h2 class="common_header common_header2">
                    Каталог лучших проектов
                </h2>
            </div>

            <section class="maf_container">
                
                <section class="buttons_bath_houses_maf">
                    <div class="buttons_houses project_open8">дома</div>
                    <!-- <div class="buttons_houses buttons_bath_houses_maf_active">дома</div> -->
                    <div class="buttons_bath project_open9">бани</div>
                    <div class="buttons_maf buttons_bath_houses_maf_active">маф</div>
                    <!-- <div class="buttons_bath">бани</div> -->
                    <!-- <div class="buttons_maf">маф</div> -->
                </section>

                <section class="catalog">
                    <div class="catalog_container">
                        <!-- <section class="houses_block houses_bath_maf_active">
                            <ul class="houses_block_list">
                                <li class="houses_block_list_point houses_block_list_point1">
                                    <div class="houses_block_foto_section">
                                        <div class="houses_block_foto_section1">
                                            <img src="../img/page_catalog/catalog_house1.jpg" alt="" class="houses_block_foto_1 houses_block_foto_1_1 houses_block_foto_active">
                                            <img src="../img/page_catalog/catalog_house1_planirovka.svg" alt="" class="houses_block_foto_1 houses_block_foto_1_2">
                                        </div>
                                        <div class="houses_block_foto_section2">
                                            <img src="../img/page_catalog/catalog_house1.jpg" alt="" class="houses_block_foto_2 houses1_button1 active_houses_block_foto">
                                            <img src="../img/page_catalog/catalog_house1_planirovka.svg" alt="" class="houses_block_foto_3 houses1_button2 non_active_houses_block_foto">
                                        </div>
                                    </div>
                                    <div class="houses_block_parameters_section">
                                        <h2 class="houses_block_heading">Одноэтажный дом 1</h2>
                                        <div class="houses_block_parameters">
                                            <div class="houses_block_parameters1">
                                                <p class="houses_block_parameters1_text">Диаметр бревна</p>
                                                <p class="houses_block_parameters1_text">Площадь</p>
                                                <p class="houses_block_parameters1_text">Кол-комнат</p>
                                                <p class="houses_block_parameters1_text">Размеры</p>
                                            </div>
                                            <div class="houses_block_parameters2">
                                                <p class="houses_block_parameters2_text">от Ø 200 </p>
                                                <p class="houses_block_parameters2_text">72 м²</p>
                                                <p class="houses_block_parameters2_text">5</p>
                                                <p class="houses_block_parameters2_text">6x6 м</p>
                                            </div>
                                        </div>
                                        <p class="houses_block_text1">от 3 200 000 ₽ </p>
                                        <p class="houses_block_text2">Стоимость фундамента, доставка и строительные работы рассчитываются отдельно</p>
                                        <button class="houses_block_button project_calculation6">Рассчитать проект</button>
                                    </div>
                                </li>

                                <li class="houses_block_list_point houses_block_list_point2">
                                    <div class="houses_block_foto_section">
                                        <div class="houses_block_foto_section1">
                                            <img src="../img/page_catalog/catalog_house1.jpg" alt="" class="houses_block_foto_1 houses_block_foto_2_1 houses_block_foto_active">
                                            <img src="../img/page_catalog/catalog_house1_planirovka.svg" alt="" class="houses_block_foto_1 houses_block_foto_2_2">
                                        </div>
                                        <div class="houses_block_foto_section2">
                                            <img src="../img/page_catalog/catalog_house1.jpg" alt="" class="houses_block_foto_2 houses2_button1 active_houses_block_foto">
                                            <img src="../img/page_catalog/catalog_house1_planirovka.svg" alt="" class="houses_block_foto_3 houses2_button2 non_active_houses_block_foto">
                                        </div>
                                    </div>
                                    <div class="houses_block_parameters_section">
                                        <h2 class="houses_block_heading">Одноэтажный дом 2</h2>
                                        <div class="houses_block_parameters">
                                            <div class="houses_block_parameters1">
                                                <p class="houses_block_parameters1_text">Диаметр бревна</p>
                                                <p class="houses_block_parameters1_text">Площадь</p>
                                                <p class="houses_block_parameters1_text">Кол-комнат</p>
                                                <p class="houses_block_parameters1_text">Размеры</p>
                                            </div>
                                            <div class="houses_block_parameters2">
                                                <p class="houses_block_parameters2_text">от Ø 200 </p>
                                                <p class="houses_block_parameters2_text">72 м²</p>
                                                <p class="houses_block_parameters2_text">5</p>
                                                <p class="houses_block_parameters2_text">6x6 м</p>
                                            </div>
                                        </div>
                                        <p class="houses_block_text1">от 3 200 000 ₽ </p>
                                        <p class="houses_block_text2">Стоимость фундамента, доставка и строительные работы рассчитываются отдельно</p>
                                        <button class="houses_block_button project_calculation7">Рассчитать проект</button>
                                    </div>
                                </li>
                            </ul>
                        </section> -->

                        <!-- <section class="bath_block">
                            <ul class="houses_block_list">
                                <li class="houses_block_list_point houses_block_list_point1">
                                    <div class="houses_block_foto_section">
                                        <div class="houses_block_foto_section1">
                                            <img src="../img/page_catalog/catalog_bath1.jpg" alt="" class="houses_block_foto_1 baths_block_foto_1_1 houses_block_foto_active">
                                            <img src="../img/page_catalog/catalog_house1_planirovka.svg" alt="" class="houses_block_foto_1 baths_block_foto_1_2">
                                        </div>
                                        <div class="houses_block_foto_section2">
                                            <img src="../img/page_catalog/catalog_bath1.jpg" alt="" class="houses_block_foto_2 baths1_button1 active_houses_block_foto">
                                            <img src="../img/page_catalog/catalog_house1_planirovka.svg" alt="" class="houses_block_foto_3 baths1_button2 non_active_houses_block_foto">
                                        </div>
                                    </div>
                                    <div class="houses_block_parameters_section">
                                        <h2 class="houses_block_heading">Баня 1</h2>
                                        <div class="houses_block_parameters">
                                            <div class="houses_block_parameters1">
                                                <p class="houses_block_parameters1_text">Диаметр бревна</p>
                                                <p class="houses_block_parameters1_text">Площадь</p>
                                                <p class="houses_block_parameters1_text">Размеры</p>
                                            </div>
                                            <div class="houses_block_parameters2">
                                                <p class="houses_block_parameters2_text">Ø 180 или 200 </p>
                                                <p class="houses_block_parameters2_text">24 м²</p>
                                                <p class="houses_block_parameters2_text">2x2 м</p>
                                            </div>
                                        </div>
                                        <p class="bath_block_text1">от 800 000 ₽ </p>
                                        <p class="houses_block_text2">Стоимость фундамента, доставка и строительные работы рассчитываются отдельно</p>
                                        <button class="houses_block_button project_calculation8">Рассчитать проект</button>
                                    </div>
                                </li>

                                <li class="houses_block_list_point houses_block_list_point2">
                                    <div class="houses_block_foto_section">
                                        <div class="houses_block_foto_section1">
                                            <img src="../img/page_catalog/catalog_bath1.jpg" alt="" class="houses_block_foto_1 baths_block_foto_2_1 houses_block_foto_active">
                                            <img src="../img/page_catalog/catalog_house1_planirovka.svg" alt="" class="houses_block_foto_1 baths_block_foto_2_2">
                                        </div>
                                        <div class="houses_block_foto_section2">
                                            <img src="../img/page_catalog/catalog_bath1.jpg" alt="" class="houses_block_foto_2 baths2_button1 active_houses_block_foto">
                                            <img src="../img/page_catalog/catalog_house1_planirovka.svg" alt="" class="houses_block_foto_3 baths2_button2 non_active_houses_block_foto">
                                        </div>
                                    </div>
                                    <div class="houses_block_parameters_section">
                                        <h2 class="houses_block_heading">Баня 2</h2>
                                        <div class="houses_block_parameters">
                                            <div class="houses_block_parameters1">
                                                <p class="houses_block_parameters1_text">Диаметр бревна</p>
                                                <p class="houses_block_parameters1_text">Площадь</p>
                                                <p class="houses_block_parameters1_text">Размеры</p>
                                            </div>
                                            <div class="houses_block_parameters2">
                                                <p class="houses_block_parameters2_text">Ø 180 или 200 </p>
                                                <p class="houses_block_parameters2_text">24 м²</p>
                                                <p class="houses_block_parameters2_text">2x2 м</p>
                                            </div>
                                        </div>
                                        <p class="bath_block_text1">от 800 000 ₽ </p>
                                        <p class="houses_block_text2">Стоимость фундамента, доставка и строительные работы рассчитываются отдельно</p>
                                        <button class="houses_block_button project_calculation9">Рассчитать проект</button>
                                    </div>
                                </li>
                            </ul>
                        </section> -->

                        <section class="maf_block houses_bath_maf_active">
                            <ul class="houses_block_list">
                                <li class="houses_block_list_point houses_block_list_point1">
                                    <div class="houses_block_foto_section">
                                        <div class="houses_block_foto_section1">
                                            <img src="../img/page_catalog/maf/Besedka01_1_1.jpeg" alt="" class="houses_block_foto_1 maf_block_foto_1_1 houses_block_foto_active">
                                            <img src="../img/page_catalog/maf/Besedka01_2.jpeg" alt="" class="houses_block_foto_1 maf_block_foto_1_2">
                                        </div>
                                        <div class="houses_block_foto_section2">
                                            <img src="../img/page_catalog/maf/Besedka01_1_1.jpeg" alt="" class="houses_block_foto_2 maf1_button1 active_houses_block_foto">
                                            <img src="../img/page_catalog/maf/Besedka01_2.jpeg" alt="" class="houses_block_foto_3 maf1_button2 non_active_houses_block_foto">
                                        </div>
                                    </div>
                                    <div class="houses_block_parameters_section">
                                        <h2 class="houses_block_heading">Беседка 1</h2>
                                        <div class="houses_block_parameters">
                                            <div class="houses_block_parameters1">
                                                <p class="houses_block_parameters1_text no_wrap">Размер по осям, м</p>
                                                <p class="houses_block_parameters1_text">S общ., м2</p>
                                                <!-- <p class="houses_block_parameters1_text">Размеры</p> -->
                                            </div>
                                            <div class="houses_block_parameters2">
                                                <p class="houses_block_parameters2_text">2,5 х 2,5 </p>
                                                <p class="houses_block_parameters2_text">6,2</p>
                                                <!-- <p class="houses_block_parameters2_text">2,5x2,5 м</p> -->
                                            </div>
                                        </div>
                                        <p class="bath_block_text1 bath_block_text1_besedki">52 000 ₽ </p>
                                        <p class="houses_block_text2">Стоимость фундамента, доставка и строительные работы рассчитываются отдельно</p>
                                        <button class="houses_block_button project_calculation10">Рассчитать проект</button>
                                    </div>
                                </li>

                                <li class="houses_block_list_point houses_block_list_point2">
                                    <div class="houses_block_foto_section">
                                        <div class="houses_block_foto_section1">
                                            <img src="../img/page_catalog/maf/Besedka02_1_1.jpeg" alt="" class="houses_block_foto_1 maf_block_foto_2_1 houses_block_foto_active">
                                            <img src="../img/page_catalog/maf/Besedka02_2.jpeg" alt="" class="houses_block_foto_1 maf_block_foto_2_2">
                                        </div>
                                        <div class="houses_block_foto_section2">
                                            <img src="../img/page_catalog/maf/Besedka02_1_1.jpeg" alt="" class="houses_block_foto_2 maf2_button1 active_houses_block_foto">
                                            <img src="../img/page_catalog/maf/Besedka02_2.jpeg" alt="" class="houses_block_foto_3 maf2_button2 non_active_houses_block_foto">
                                        </div>
                                    </div>
                                    <div class="houses_block_parameters_section">
                                        <h2 class="houses_block_heading">Беседка 2</h2>
                                        <div class="houses_block_parameters">
                                            <div class="houses_block_parameters1">
                                                <p class="houses_block_parameters1_text no_wrap">Размер по осям, м</p>
                                                <p class="houses_block_parameters1_text">S общ., м2</p>
                                            </div>
                                            <div class="houses_block_parameters2">
                                                <p class="houses_block_parameters2_text">5,0 х 2,5 </p>
                                                <p class="houses_block_parameters2_text">12,5</p>
                                            </div>
                                        </div>
                                        <p class="bath_block_text1 bath_block_text1_besedki">74 000 ₽ </p>
                                        <p class="houses_block_text2">Стоимость фундамента, доставка и строительные работы рассчитываются отдельно</p>
                                        <button class="houses_block_button project_calculation11">Рассчитать проект</button>
                                    </div>
                                </li>

                                
                                <li class="houses_block_list_point houses_block_list_point2">
                                    <div class="houses_block_foto_section">
                                        <div class="houses_block_foto_section1">
                                            <img src="../img/page_catalog/maf/Besedka03_1_1.jpeg" alt="" class="houses_block_foto_1 maf_block_foto_3_1 houses_block_foto_active">
                                            <img src="../img/page_catalog/maf/Besedka03_2.jpeg" alt="" class="houses_block_foto_1 maf_block_foto_3_2">
                                        </div>
                                        <div class="houses_block_foto_section2">
                                            <img src="../img/page_catalog/maf/Besedka03_1_1.jpeg" alt="" class="houses_block_foto_2 maf3_button1 active_houses_block_foto">
                                            <img src="../img/page_catalog/maf/Besedka03_2.jpeg" alt="" class="houses_block_foto_3 maf3_button2 non_active_houses_block_foto">
                                        </div>
                                    </div>
                                    <div class="houses_block_parameters_section">
                                        <h2 class="houses_block_heading">Беседка 3</h2>
                                        <div class="houses_block_parameters">
                                            <div class="houses_block_parameters1">
                                                <p class="houses_block_parameters1_text no_wrap">Размер по осям, м</p>
                                                <p class="houses_block_parameters1_text">S общ., м2</p>
                                            </div>
                                            <div class="houses_block_parameters2">
                                                <p class="houses_block_parameters2_text">3,8 х 3,8 </p>
                                                <p class="houses_block_parameters2_text">12,0</p>
                                            </div>
                                        </div>
                                        <p class="bath_block_text1 bath_block_text1_besedki">96 000 ₽ </p>
                                        <p class="houses_block_text2">Стоимость фундамента, доставка и строительные работы рассчитываются отдельно</p>
                                        <button class="houses_block_button project_calculation29">Рассчитать проект</button>
                                    </div>
                                </li>

                                
                                <li class="houses_block_list_point houses_block_list_point2">
                                    <div class="houses_block_foto_section">
                                        <div class="houses_block_foto_section1">
                                            <img src="../img/page_catalog/maf/Besedka04_1_1.jpeg" alt="" class="houses_block_foto_1 maf_block_foto_4_1 houses_block_foto_active">
                                            <img src="../img/page_catalog/maf/Besedka04_2.jpeg" alt="" class="houses_block_foto_1 maf_block_foto_4_2">
                                        </div>
                                        <div class="houses_block_foto_section2">
                                            <img src="../img/page_catalog/maf/Besedka04_1_1.jpeg" alt="" class="houses_block_foto_2 maf4_button1 active_houses_block_foto">
                                            <img src="../img/page_catalog/maf/Besedka04_2.jpeg" alt="" class="houses_block_foto_3 maf4_button2 non_active_houses_block_foto">
                                        </div>
                                    </div>
                                    <div class="houses_block_parameters_section">
                                        <h2 class="houses_block_heading">Беседка 4</h2>
                                        <div class="houses_block_parameters">
                                            <div class="houses_block_parameters1">
                                                <p class="houses_block_parameters1_text no_wrap">Размер по осям, м</p>
                                                <p class="houses_block_parameters1_text">S общ., м2</p>
                                            </div>
                                            <div class="houses_block_parameters2">
                                                <p class="houses_block_parameters2_text">4,0 х 4,0 </p>
                                                <p class="houses_block_parameters2_text">16,0</p>
                                            </div>
                                        </div>
                                        <p class="bath_block_text1 bath_block_text1_besedki">102 000 ₽ </p>
                                        <p class="houses_block_text2">Стоимость фундамента, доставка и строительные работы рассчитываются отдельно</p>
                                        <button class="houses_block_button project_calculation30">Рассчитать проект</button>
                                    </div>
                                </li>

                                
                                <li class="houses_block_list_point houses_block_list_point2">
                                    <div class="houses_block_foto_section">
                                        <div class="houses_block_foto_section1">
                                            <img src="../img/page_catalog/maf/Besedka05_1_1.jpeg" alt="" class="houses_block_foto_1 maf_block_foto_5_1 houses_block_foto_active">
                                            <img src="../img/page_catalog/maf/Besedka05_2.jpeg" alt="" class="houses_block_foto_1 maf_block_foto_5_2">
                                        </div>
                                        <div class="houses_block_foto_section2">
                                            <img src="../img/page_catalog/maf/Besedka05_1_1.jpeg" alt="" class="houses_block_foto_2 maf5_button1 active_houses_block_foto">
                                            <img src="../img/page_catalog/maf/Besedka05_2.jpeg" alt="" class="houses_block_foto_3 maf5_button2 non_active_houses_block_foto">
                                        </div>
                                    </div>
                                    <div class="houses_block_parameters_section">
                                        <h2 class="houses_block_heading">Беседка 5</h2>
                                        <div class="houses_block_parameters">
                                            <div class="houses_block_parameters1">
                                                <p class="houses_block_parameters1_text no_wrap">Размер по осям, м</p>
                                                <p class="houses_block_parameters1_text">S общ., м2</p>
                                            </div>
                                            <div class="houses_block_parameters2">
                                                <p class="houses_block_parameters2_text">5,4 х 5,4 </p>
                                                <p class="houses_block_parameters2_text">29,1</p>   
                                            </div>
                                        </div>
                                        <p class="bath_block_text1 bath_block_text1_besedki">125 000 ₽ </p>
                                        <p class="houses_block_text2">Стоимость фундамента, доставка и строительные работы рассчитываются отдельно</p>
                                        <button class="houses_block_button project_calculation31">Рассчитать проект</button>
                                    </div>
                                </li>
                                

                            </ul>
                        </section>

                    </div>
                </section>

            </section>
        </div>
    </section>

    <!-- окно-попап(форма) в каталоге (попап в попапе) -->
    <!-- <section class="popup_order_call_container4">
        <div>

        </div>
    </section> -->


    <div class="gray_background_footer gray_background_footer_first form_hidden"></div>
    <div class="gray_background_footer gray_background_footer_2 form_hidden"></div>
    <div class="gray_background_footer_1 gray_background_footer_3 form_hidden"></div>
    <div class="gray_background_footer gray_background_footer_4 form_hidden"></div>
    <div class="gray_background_footer gray_background_footer_5 form_hidden"></div>
    <!-- <div class="gray_background_footer gray_background_footer_first"></div> -->

    <?php if(!empty($_GET['success'])) { ?>
                
        <div class="success_send_message_block_container">
            <div class="success_send_message_block">
                <p class="success_send_message_block_text"><span class="success_send_message_thanks">Спасибо, ваше сообщение</span> <span class="nowrap">отправлено !</span></p>
                <a href="/" id="close-btn" class="success_send_message_block_link">Закрыть</a>
                <!-- <button id="close-btn">Закрыть</button> -->
            </div>
        </div>
        <a href="/">    
            <div class="gray_background_header_sendMessage"></div>
        </a>

    <?php } ?>
    <?php if(!empty($_GET['error'])) { ?>
        
        <div class="success_send_message_block_container">
            <div class="success_send_message_block">
                <p class="success_send_message_block_text">Ошибка отправки</p>
                <a href="/" id="close-btn" class="success_send_message_block_link">Закрыть</a>
            </div>
        </div>  
        <div class="gray_background_header_sendMessage"></div>

    <?php } ?>

    <div class="footer_component_container">
        <div class="footer_block_one_two_container">
            <div class="footer_block_one">
                <p class="footer_company_name">ООО «ПРОМ-ПИК»</p>
                <p class="footer_block_one_text_one">Производство срубов и строительство деревянных домов, бань и беседок с 1997 года</p>
                <p class="footer_block_one_text_two">180502, г. Псков, пос. Неелово 1, ул. Юбилейная 3А</p>
                <p class="footer_block_one_text_three">© 1997-2024</p>
            </div>
            <div class="footer_block_two">
                <ul class="footer_block_two_list">
                    <li class="footer_block_two_list_point">
                        <a href="tel: +79113603030" class="footer_block_two_list_point_link">+7 (911) 360-30-30</a>
                    </li>
                    <li class="footer_block_two_list_point">
                        <a href="tel: +78112672600" class="footer_block_two_list_point_link">+7 (8112) 672-600 </a>
                    </li>
                    <li class="footer_block_two_list_point">
                        <a href="tel: +79113974773" class="footer_block_two_list_point_link">+7 (911) 397-47-73 </a>
                    </li>
                </ul>
                <p class="footer_block_two_working_hours">Работаем с 9 до 19 по будням</p>
                <a class="footer_block_two_mail" href="">pp-dom@mail.ru</a>
            </div>
        </div>
        <div class="footer_block_three">
            <div class="footer_block_three_section_one">
                <a href="/politika" class="footer_block_three_section_one_politics">Политика в отношении обработки персональных данных</a>
                <!-- <p class="footer_block_three_section_one_politics">Политика в отношении обработки персональных данных</p> -->
                <!-- <p class="footer_block_three_section_one_user_agreement">Пользовательское соглашение</p> -->
            </div>
            <div class="footer_block_three_section_two">
                <a href="#">
                    <img class="footer_logo_metasystems" src="../icons/footer/logo_metasystems.png" alt="">
                </a>
                <div class="footer_block_three_is_made">
                    <p class="footer_block_three_is_made_text">
                        Сайт сделали <br>в
                        <a href="https://nikisystems.ru/" class="footer_block_three_is_made_img"> nikisystems</a>
                        <!-- <span class="footer_block_three_is_made_img"> nikisystems</span> -->
                    </p>
                </div>
            </div>
        </div>
    </div>


</div>
