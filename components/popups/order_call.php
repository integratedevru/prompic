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
                <p class="popup_order_call_right_text mt4_spb">
                    <label for="phone" class="order_call_form_label">Телефон</label>
                    <input type="text" name="phone" id="phone" placeholder="8 900 000 00 00" pattern="(8|\+7)\s?(\(\d{3}\)|\d{3})\s?\d{3}\s?\d{2}\s?\d{2}" autocomplete="on" required class="order_call_form_input" title="Введите корректный номер телефона">
                </p>
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
                <p class="popup_order_call_right_text mt3_spb">
                    <label for="name" class="order_call_form_label">Имя</label>
                    <input type="text" name="namecallback" id="name" autocomplete="on" required class="order_call_form_input">
                </p>
                <p class="popup_order_call_right_text mt4_spb">
                    <label for="phone" class="order_call_form_label">Телефон</label>
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
