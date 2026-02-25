<section class="popup_order_call_container">
    <div class="popup_order_call">
        <button type="button" class="window_close window_close_footer"></button>
        <div class="popup_order_call_left">
            <p id="popup_order_call_title" class="popup_order_call_left_h2">Заявка на бесплатный обмер и расчет проекта под ключ</p>
            <p class="popup_order_call_left_p">Отправьте свои контактные данные, и мы свяжемся с вами в ближайшее время</p>
        </div>
        <div class="popup_order_call_right">
            <form
                id="form_order_call"
                action="/handlers/send_email.php"
                class="order_call_form mt3_spb"
                method="POST"
                name="send_email"
            >
                <input type="hidden" name="source" id="popup_source" value="">
                <p class="popup_order_call_right_text">
                    <label for="popup_name" class="order_call_form_label">Имя</label>
                    <input type="text" name="name" id="popup_name" autocomplete="on" required class="order_call_form_input">
                </p>
                <p class="popup_order_call_right_text mt4_spb">
                    <label for="popup_phone" class="order_call_form_label">Телефон</label>
                    <input type="text" name="phone" id="popup_phone" placeholder="8 900 000 00 00" pattern="(8|\+7)\s?(\(\d{3}\)|\d{3})\s?\d{3}\s?\d{2}\s?\d{2}" autocomplete="on" required class="order_call_form_input" title="Введите корректный номер телефона">
                </p>
                <button
                    type="submit"
                    class="g-recaptcha order_call_form_button mt5_spb"
                    data-sitekey="<?= htmlspecialchars($_ENV['RECAPTCHA_SITE_KEY']) ?>"
                    data-callback='onOrderCallFormSubmit'
                    data-action='submit'
                >
                    Отправить
                </button>
            </form>
            <script>
                function onOrderCallFormSubmit(token) {
                    event.preventDefault();
                    const form = document.getElementById('form_order_call');
                    if (form.checkValidity()) {
                        form.submit();
                        return true;
                    } else {
                        form.reportValidity();
                        return false;
                    }
                }
            </script>
            <label class="popup_order_call_consent">
                <input type="checkbox" name="consent" id="popup_consent" required class="popup_order_call_consent_checkbox">
                <span class="popup_order_call_right_p">Даю согласие на обработку 
                    <a href='/politika' target='_blank'>персональных данных</a>
                </span>
            </label>
        </div>
    </div>
</section>
