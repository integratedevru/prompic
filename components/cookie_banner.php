<div id="cookie-banner" class="cookie-banner" style="display: none;">
    <div class="cookie-banner__inner">
        <p class="cookie-banner__text">Нажимая кнопку «Принять» или продолжая пользоваться сайтом, вы соглашаетесь на обработку файлов «Cookie»</p>
        <div class="cookie-banner__buttons">
            <button id="cookie-accept" class="cookie-banner__btn cookie-banner__btn--accept">ПРИНЯТЬ</button>
            <a href="/politika" class="cookie-banner__btn cookie-banner__btn--more">ПОДРОБНЕЕ</a>
        </div>
    </div>
</div>
<script>
    (function() {
        var banner = document.getElementById('cookie-banner');
        var acceptBtn = document.getElementById('cookie-accept');
        if (document.cookie.indexOf('cookie_accepted=1') === -1) {
            banner.style.display = '';
        }
        acceptBtn.addEventListener('click', function() {
            document.cookie = 'cookie_accepted=1; path=/; max-age=' + (365 * 24 * 60 * 60);
            banner.style.display = 'none';
        });
    })();
</script>
