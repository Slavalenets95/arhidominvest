<?php
    $content = get_sub_field('content');
    $img = get_sub_field('img');
    $imgUrl = $img['url'];
    $imgAlt = get_post_meta($img['ID'] , '_wp_attachment_image_alt', true);
    $imgPosition = get_sub_field('img_position');
    $bg = get_sub_field('bg');
    $cssClass = get_sub_field('class');
?>

    <section class="content-block <?= $cssClass . ' ' . $bg . ' ' . $imgPosition ?>">
        <div class="container">
            <div class="content-block__txt-block">
                <?= $content ?>
            </div>
            <div class="content-block__img-block">
                <img src="<?= $imgUrl ?>" alt="<?= $imgAlt ?>">
            </div>
            <?php if($bg == 'linear-orange') : ?>
                <div class="linear-bg"></div>
            <?php endif; ?>
        </div>
    </section>
    