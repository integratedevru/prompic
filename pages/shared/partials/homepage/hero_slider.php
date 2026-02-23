<?php
$sliders = require __DIR__ . '/../../../../config/homepage_sliders.php';
$hero = $sliders['hero'][$siteConfig['variant']];
?>
            <section class="homepage_slider_one">
                <div class="homepage_slider_one_component">
                    <div class="slider_1_container">
                        <?php foreach ($hero['images'] as $i => $slide): ?>
                        <div<?= $i === 0 ? ' class="slider_1_img_container"' : '' ?>>
                            <img src="<?= htmlspecialchars($slide['src']) ?>" alt="<?= htmlspecialchars($slide['alt']) ?>" class="slider_1_foto_<?= $i + 1 ?>">
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <h1 class="slider_1_heading"><?= htmlspecialchars($hero['heading']) ?></h1>
                </div>
            </section>
