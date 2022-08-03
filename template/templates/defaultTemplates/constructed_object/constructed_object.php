<?php
    $headerContent = get_sub_field('header');
    $galleryObjects = get_sub_field('gallery_repeater');
    $footerContent = get_sub_field('footer');
?>
    <section class="gallery-section">
        <div class="gallery-section__header">
            <div class="continaer">
                <?= $headerContent ?>
            </div>
        </div>
        <div class="gallery-section__content">
            <?php foreach($galleryObjects as $img) :
                    $img = array_shift($img); 
                    $url = $img['url'];
                    $alt = $img['alt'];
            ?>
                <div>
                    <div>
                        <div><img src="<?= $url ?>" alt="<?= $alt ?>"></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="gallery-section__footer">
            <div class="container">
                <?= $footerContent ?>
            </div>
        </div>
    </section>