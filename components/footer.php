
<div class="footer_component_container_center">
    <div class="gray_background_footer gray_background_footer_2 form_hidden"></div>
    <div class="gray_background_footer_1 gray_background_footer_3 form_hidden"></div>
    <div class="gray_background_footer gray_background_footer_4 form_hidden"></div>
    <div class="gray_background_footer gray_background_footer_5 form_hidden"></div>

    <?php if(!empty($_GET['success'])) { ?>

        <div class="success_send_message_block_container">
            <div class="success_send_message_block">
                <p class="success_send_message_block_text"><span class="success_send_message_thanks">Спасибо, ваше сообщение</span> <span class="nowrap">отправлено !</span></p>
                <a href="/" id="close-btn" class="success_send_message_block_link">Закрыть</a>
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

    <?php include __DIR__ . '/popups/order_call.php'; ?>
    <?php include __DIR__ . '/popups/catalog.php'; ?>

    <div class="footer_component_container">
        <div class="footer_block_one_two_container">
            <div class="footer_block_one">
                <p class="footer_company_name">ООО «ПРОМ-ПИК»</p>
                <p class="footer_block_one_text_one">Производство срубов и строительство деревянных домов, бань и беседок с 1997 года</p>
                <p class="footer_block_one_text_two">180502, г. Псков, пос. Неелово 1, ул. Юбилейная 3А</p>
                <p class="footer_block_one_text_three">© 1997-2026</p>
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
            </div>
            <div class="footer_block_three_section_two">
                <a href="#">
                    <img class="footer_logo_metasystems" src="../icons/footer/logo_metasystems.webp" alt="">
                </a>
                <div class="footer_block_three_is_made">
                    <p class="footer_block_three_is_made_text">
                        Сайт сделали <br>в
                        <a href="https://nikisystems.ru/" class="footer_block_three_is_made_img"> nikisystems</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

