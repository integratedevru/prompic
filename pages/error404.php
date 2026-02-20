<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../icons/favicon/favicon.png" type="image/x-icon">
        <!-- <link rel="shortcut icon" href="../icons/favicon/favicon1_32x32.png" type="image/x-icon"> -->
        <!-- <link rel="shortcut icon" href="../icons/favicon/favicon.ico" type="image/x-icon"> -->
        <link rel="stylesheet" href="../css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="/node_modules/jquery/dist/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="/node_modules/slick-carousel/slick/slick.css"/>
        <script type="text/javascript" src="/node_modules/slick-carousel/slick/slick.min.js"></script>
        <!-- <link rel="stylesheet" href="../Magnific-Popup-master/dist/magnific-popup.css"> -->
        <!-- <script src="../Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script> -->
        <title>Страница 404</title>
        <meta name="description" content="страница 404 для сайта pp-dom">
        <script src="https://www.google.com/recaptcha/enterprise.js?render=6LfCYJIqAAAAAAiK5f7EhUzFzufHKuN7DEjAr35t"></script>
    </head>
    <body class="position_body">
        <aside class="aside_sidebar">
            <?php
                include 'components/sidebar.php';        
            ?>
        </aside>
        <header class="header_adaptive">
            <?php
                include 'components/header_adaptive.php';        
            ?>
        </header>
        <main class="main_section">
            <section class="contacts_component">
                <div class="contacts_component_container error_page2_flex">  
                    <p class="error_page2_flex--p1">Извините, тут нет ничего интересного</p>  
                    <p class="error_page2_flex--p2">Это страница 404</p>
                </div>
            </section>
        </main>
        <footer class="footer_section">
            <?php
                include 'components/footer.php';        
            ?>
        </footer>
        <script src="/js/index.js"></script>
    </body>
</html>