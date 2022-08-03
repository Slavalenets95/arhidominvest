<section class="intro-section">
    <div class="intro-section__slider">
        <?php
            if(have_rows('intro_section_repeater')) :
                while(have_rows('intro_section_repeater')) : the_row();
                    $content = get_sub_field('content');
                    $img = get_sub_field('bg_img');
                    $isBlackImg = get_sub_field('is_black_img');
        ?>
        <div class="intro-section__slide">
            <div class="container">
                <img src="<?= $img ?>" class="intro-section__slide-bg <?= $isBlackImg ? 'brightness' : '' ?>">
                <div class="wow bounceInDown"><?= $content ?></div>
            </div>
        </div>
        <?php
                endwhile;
            endif;
        ?>
    </div>
</section>