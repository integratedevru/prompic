<?php
$sliders = require __DIR__ . '/../../../../config/homepage_sliders.php';
$projects = $sliders['projects'];
?>
<section class="homepage_slider_2">
    <div class="homepage_slider_2_container">
        <div class="sobstvennoe_proizvodstvo_slider">
            <?php foreach ($projects['images'] as $i => $slide): ?>
            <div>
                <img src="<?= htmlspecialchars($slide['src']) ?>" alt="<?= htmlspecialchars($slide['alt']) ?>" loading="lazy" class="slider_2_foto_<?= $i + 1 ?>">
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
