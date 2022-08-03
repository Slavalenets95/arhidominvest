<?php
    $headerContent = get_sub_field('header');
    $footerContent = get_sub_field('footer');
    $seriesTax = get_sub_field('series_checkbox');
    $posts = get_sub_field('project_card_repeater');
    $btnClass = get_sub_field('btn_color');
    $class = get_sub_field('class');
    $bgColor = get_sub_field('bg_color');
    global $post;
?>

<section class="relinking-section <?= $class . ' ' . $bgColor ?>">
    <div class="relinkin-section__header">
        <div class="container">
            <?= $headerContent ?>
        </div>    
    </div>
    <div class="container">
        <div class="relinking-section__slider">
            <?php foreach($posts as $post) :
                    $txt = $post['post_obj_txt']; 
                    $post = $post['post_obj'];
                    setup_postdata($post);
                    $price = get_field('house_price');
                    $dimension = get_field('houses_dimensions');
                    $square = get_field('house_square');
                    $thumbnailId = get_post_thumbnail_id();
                    $thumbnailAlt = get_post_meta($thumbnailId, '_wp_attachment_image_alt', true); 
                    $thumbnailUrl = get_the_post_thumbnail_url();
                    $secondThumbnail = get_field('second_post_thumbnail');
                    $excerpt = get_the_excerpt();
            ?>

                <div class="relinkin-section__slide">
                    <div class="relinkin-section__slide-wrapper">
                        <div class="relinkin-section__slide-img-block">
                            <img class="active" src="<?= $thumbnailUrl ?>" alt="<?= $thumbnailAlt ?>">
                            <?php if($secondThumbnail) : ?>
                                <img class="hidden" src="<?= $secondThumbnail['url'] ?>" alt="<?= $secondThumbnail['alt'] ?>">
                            <?php endif; ?>
                        </div>
                        <div class="relinkin-section__slide-info">
                            <h3 class="relinkin-section__slide-title"><?php the_title() ?></h3>
                            <?php if($excerpt) : ?>
                                <div class="relinking-section__slide-excerpt">
                                    <?= $excerpt ?>
                                </div>
                            <?php endif; ?>
                            <?php if($dimension) : ?><span class="bold">Габариты : <span class="no-bold" ><?= $dimension . ' ' ?></span></span><?php endif;?>
                            <?php if($square) : ?><span class="bold">Площадь : <span class="no-bold" ><?= $square . ' ' ?></span></span><?php endif; ?>
                            <p><?= $txt ?></p>
                        </div>
                        <div class="relinkin-section__slide-price"><?= $price ?></div>
                        <a href="<?php the_permalink() ?>" class="relinkin-section__slide-link <?= $btnClass ?>">подробнее о проекте</a>
                    </div>
                </div>

            <?php 
                   endforeach;
                   wp_reset_postdata();       
            ?>
        </div>
    </div>
    <?php if($footerContent) : ?>
        <div class="relinking-section__footer">
            <div class="container">
                <?= $footerContent ?>
            </div>
        </div>
    <?php endif; ?>
</section>
