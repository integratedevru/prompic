<?php $galleries = require __DIR__ . '/../../config/gallery.php'; ?>

<section class="gallery">
    <div class="gallery_container">
        <h1 class="gallery_heading">Галерея реализованных проектов</h1>
        <p class="gallery_under_heading_text">
С <span class="gallery_under_heading_text_700">1997 года</span> специалисты ООО "Пром-Пик" сдали в эксплуатацию много объектов различной сложности и назначения. Количественно больше поставлено бань и беседок, по стоимости – жилых строений. Есть в нашей рабочей коллекции и небольшие православные храмы (часовни). Оцилиндрованное бревно в настоящее время является нашим базовым строительным материалом, из которого мы сможем сделать любое деревянное строение. На этой странице вы сможете  посмотреть галерею наших строений, что поможет вам выбрать вариант для заказа или подаст идею для своего собственного проекта.
        </p>
    </div>
</section>

<section class="gallery">
    <div class="gallery_container gallery_privare_container">
        <div class="private_life_container">
            <img src="../icons/gallery/private_icon_1.svg" alt="" class="private_life_icon1">
            <p class="private_life_text">Мы охраняем частную жизнь наших клиентов и поэтому не раскрываем местоположение объектов</p>
            <img src="../icons/gallery/private_icon_2.svg" alt="" class="private_life_icon2">
        </div>
    </div>
</section>

<section class="common_section">
    <div class="common_section_container2 gallery2_common_container">
        <div class="gallery3_container">
            <?php foreach ($galleries as $gallery): ?>
            <?php
                $images = $gallery['images'];
                $firstImage = $images[0];
                $gridClass = 'grid-item' . ($gallery['css_class'] ? ' ' . $gallery['css_class'] : '');
            ?>
            <div class="<?= $gridClass ?>">
                <a href="<?= htmlspecialchars($firstImage['src']) ?>"
                   data-fancybox="<?= $gallery['id'] ?>"
                   data-caption="<?= htmlspecialchars($firstImage['caption']) ?>">
                    <img src="<?= htmlspecialchars($gallery['thumbnail']) ?>" alt="<?= htmlspecialchars($gallery['title']) ?>">
                    <div class="overlay"></div>
                    <div class="text"><?= $gallery['title'] ?></div>
                </a>
                <?php for ($i = 1, $count = count($images); $i < $count; $i++): ?>
                <a href="<?= htmlspecialchars($images[$i]['src']) ?>"
                   data-fancybox="<?= $gallery['id'] ?>"
                   data-caption="<?= htmlspecialchars($images[$i]['caption']) ?>"
                   class="hidden"></a>
                <?php endfor; ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
