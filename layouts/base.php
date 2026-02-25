<?php
// Buffer page content first so pages can set $bodyClass before we render <body>
ob_start();
include $pageContent;
$_bufferedContent = ob_get_clean();
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../icons/favicon/favicon.webp" type="image/x-icon">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/responsive.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
        <script src="/node_modules/jquery/dist/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="/node_modules/slick-carousel/slick/slick.css"/>
        <script type="text/javascript" src="/node_modules/slick-carousel/slick/slick.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
        <link rel="canonical" href="<?= htmlspecialchars('https://' . $siteConfig['domain'] . (rtrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/') ?: '/')) ?>">
        <?php if (!empty($schemaData)): ?>
        <script type="application/ld+json"><?= json_encode($schemaData, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?></script>
        <?php endif; ?>
        <title><?= htmlspecialchars($siteConfig['meta'][$pageSlug]['title'] ?? 'ПромПик') ?></title>
        <meta name="description" content="<?= htmlspecialchars($siteConfig['meta'][$pageSlug]['description'] ?? '') ?>">
        <script src="https://www.google.com/recaptcha/enterprise.js?render=<?= htmlspecialchars($_ENV['RECAPTCHA_SITE_KEY']) ?>"></script>
        <!-- Yandex.Metrika counter -->
        <script type="text/javascript">
            (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

            ym(<?= htmlspecialchars($siteConfig['yandex_metrika_id']) ?>, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true
            });
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/<?= htmlspecialchars($siteConfig['yandex_metrika_id']) ?>" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->
    </head>
    <body<?= !empty($bodyClass) ? ' class="' . htmlspecialchars($bodyClass) . '"' : '' ?>>
        <aside class="aside_sidebar">
            <?php include __DIR__ . '/../components/sidebar.php'; ?>
        </aside>
        <header class="header_adaptive">
            <?php include __DIR__ . '/../components/header_adaptive.php'; ?>
        </header>
        <main class="main_section">
            <?= $_bufferedContent; ?>
        </main>
        <footer class="footer_section">
            <?php include __DIR__ . '/../components/footer.php'; ?>
        </footer>
        <?php include __DIR__ . '/../components/cookie_banner.php'; ?>
        <script src="/js/sliders.js"></script>
        <script src="/js/index.js"></script>
        <script src="/js/lightbox-init.js"></script>
    </body>
</html>
