<?php
    $sliderImgs = get_field('houses_img_repeater');
    $chars = get_field('house_char_repeater');
    $post = get_post(get_the_id());
    $term = get_the_terms(get_the_id(), 'series')[0];
    $termUrl = get_term_link($term->term_id, $term->taxonomy);
    setup_postdata($post);
?>
    <section class="house-breadcrumb">
        <div class="container">
            <ul>
                <li><a href="<?= get_home_url()?>">Главная »</a></li>
                <li><a href="<?= $termUrl?>"><?= $term->name ?> »</a></li>
                <li class="current-item"><?= get_the_title() ?></li>
            </ul>
        </div>
    </section>
    <section class="houses-content">
        <div class="container">
            <div class="houses-content__slider">
                <?php foreach($sliderImgs as $img) : 
                            $url = $img['img']['url'];
                            $signature = $img['signature'];
                ?>
                    <div class="houses-content__slide">
                        <img src="<?= $url ?>">
                        <?php if($signature) : ?>
                            <div class="houses-content__slide-txt">
                                <p class="houses-content__slide-signature"><?= $signature ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="houses-content__descr">
                <div class="houses-content__descr-header">
                    <h1 class="houses-content__descr-title"><?php the_title() ?></h1>
                    <?php if($chars) : ?><span class="houses-content__descr-square"><?= get_field('house_square') ?></span><?php endif; ?>
                </div>
                <?php if($chars) : ?>
                    <div class="houses-content__chars">
                        <?php foreach($chars as $char) : 
                                $icon = $char['icon'];
                                $txt = $char['txt'];    
                        ?>
                            <div class="houses-content__char">
                                <img src="<?= $icon ?>" class="houses-content__char-icon">
                                <p class="houses-content__char-txt"><?= $txt ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <div class="houses-content__descr-main">
                    <?php 
                        the_content();
                    ?>
                </div>
                <div class="houses-content__footer">
                    <button class="houses-content__footer-btn">Отправить заявку</button>
                    <span class="houses-content__footer-price"><?= get_field('house_price') ?></span>
                </div>
            </div>
        </div>
    </section>
<?php
    $layoutTab = get_field('house_layouts');
    $facadesTab = get_field('house_facades');
    $exampleTab = get_field('house_example');
    $colorTab = get_field('color_layouts');
    $tabs = [
        [
            'title'   => 'Цветовые решения',
            'for'     => 'color-layouts',
            'content' => $colorTab,
        ],
        [
            'title'   => 'Планировки',
            'for'     => 'layouts',
            'content' => $layoutTab,
        ],
        [
            'title'   => 'Фасады',
            'for'     => 'facades',
            'content' => $facadesTab, 
        ],
        [
            'title'   => 'Примеры реализации',
            'for'     => 'example',
            'content' => $exampleTab,
        ],
    ];
    $counter = 0;
?>
    <section class="houses-tabs">
        <div class="container">
            <div class="houses-tabs__nav">
                <?php foreach($tabs as $tab) : ?>
                    <?php if($tab['content']) : ?>
                        <p class="houses-tab__title <?php if($counter === 0) echo 'active'; ?>" data-for="<?= $tab['for'] ?>"><?= $tab['title'] ?></p>
                    <?php $counter++; endif; ?>
                <?php endforeach; $counter = 0; ?>
            </div>
            <?php foreach($tabs as $tab) : ?>
                <?php if($tab['content'] && $tab['for'] != 'color-layouts') : ?>
                    <div class="houses-tab <?php if($counter === 0) echo 'active'; ?>" data-tab="<?= $tab['for'] ?>">
                        <div class="houses-tab__content">
                            <?php foreach($tab['content'] as $tabContent) : ?>
                                <img src="<?= $tabContent['img']['url'] ?>" alt="<?= $tabContent['img']['alt'] ?>">
                                <?php if($tabContent['more_content']) : ?>
                                    <div class="houses-tab__content-txt">
                                        <?= $tabContent['more_content'] ?>
                                    </div>
                                <?php endif; ?>
                            <?php $counter++; endforeach; ?>
                        </div>
                    </div>
                <?php elseif($tab['content'] && $tab['for'] == 'color-layouts') : ?>
                    <div class="houses-tab <?php if($counter === 0) echo 'active'; ?>" data-tab="<?= $tab['for'] ?>">
                        <div class="houses-tab__content">
                            <?php foreach($tab['content'] as $tabContent) : ?>
                                    <div class="houses-tab__content-slider-wrapper">
                                        <?php if($tabContent['txt']) : ?>
                                            <div class="houses-tab__content-header">
                                                <?= $tabContent['txt'] ?>
                                            </div>
                                        <?php endif; ?>
                                        <div class="houses-tab__content-slider">
                                            <?php foreach($tabContent['color_layout'] as $layout) : ?>
                                                <div class="houses-tab__content-slide">
                                                    <img src="<?= $layout['img'] ?>">
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                            <?php $counter++; endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </section>

<?php wp_reset_postdata(); ?>