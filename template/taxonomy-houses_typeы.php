<?php get_header() ?>
<?php $term = get_queried_object(); 
      $posts = get_posts(
          array(
            'post_type'   => 'houses',
            'numberposts' => -1,
            'tax_query'   => array(
                array(
                    'taxonomy' => 'houses_type',
                    'field'    => 'slug',
                    'terms'    => 'double_decker_fahverk',
                )
            ),
          )
        );
?>
<section class="intro-section">
    <div class="intro-section__slider">
        <div class="intro-section__slide">
            <div class="container" style="color: #fff;">
                <img src="<?= get_template_directory_uri() ?>/public/img/06_Chemnitz_night_.jpg" class="intro-section__slide-bg brightness">
                <h1 style="font-size: 42px; font-weight: 500; margin-bottom: 40px;">Проекты двухэтажных</br> фахверковых домов от Velesa</h1>
                <p style="font-size: 16px; font-weight: 400; margin-bottom: 40px;">Строительство домов по технологии </br> Фахверк</p>
                <button style="padding: 15px 60px; background: #cdd443; color: #1e1f24; font-size: 16px; font-weight: 500; border: none;">Выбрать проект</button>
            </div>
        </div>
    </div>
</section>
<section class="posts">
    <div class="container">
        <h2>Наши проекты двухэтажных фахверковых домов</h2>
        <div class="post-items">
            <?php foreach($posts as $post) : 
                setup_postdata($post); 
                $icons = get_field('house_char_repeater');
                $square = get_field('house_square');   
            ?>
                <div class="post">
                    <div class="post-img-block">
                        <img src="<?= get_the_post_thumbnail_url() ?>">
                        <div class="post-square"><?= $square ?></div>
                    </div>
                    <div class="post-body">
                        <h2><?= get_the_title() ?></h2>
                        <div class="post-icon-block">
                            <?php $counter = 0; ?>
                            <?php foreach($icons as $icon) : ?>
                                <?php if($counter < 4) : ?>
                                    <div class="icon-item">
                                        <img src="<?= $icon['icon'] ?>" alt="">
                                        <span><?= $icon['txt'] ?></span>
                                    </div>
                                <?php endif; ?>
                                <?php $counter++ ?>
                            <?php endforeach; ?>
                        </div>
                        <div class="post-footer">
                            <div class="post-footer__price"><?= get_field('house_price') ?></div>
                            <a href="<?php the_permalink() ?>">Подробнее</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php foreach($posts as $post) : 
                setup_postdata($post); 
                $icons = get_field('house_char_repeater');
                $square = get_field('house_square');   
            ?>
                <div class="post">
                    <div class="post-img-block">
                        <img src="<?= get_the_post_thumbnail_url() ?>">
                        <div class="post-square"><?= $square ?></div>
                    </div>
                    <div class="post-body">
                        <h2><?= get_the_title() ?></h2>
                        <div class="post-icon-block">
                            <?php $counter = 0; ?>
                            <?php foreach($icons as $icon) : ?>
                                <?php if($counter < 4) : ?>
                                    <div class="icon-item">
                                        <img src="<?= $icon['icon'] ?>" alt="">
                                        <span><?= $icon['txt'] ?></span>
                                    </div>
                                <?php endif; ?>
                                <?php $counter++ ?>
                            <?php endforeach; ?>
                        </div>
                        <div class="post-footer">
                            <div class="post-footer__price"><?= get_field('house_price') ?></div>
                            <a href="<?php the_permalink() ?>">Подробнее</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php foreach($posts as $post) : 
                setup_postdata($post); 
                $icons = get_field('house_char_repeater');
                $square = get_field('house_square');   
            ?>
                <div class="post">
                    <div class="post-img-block">
                        <img src="<?= get_the_post_thumbnail_url() ?>">
                        <div class="post-square"><?= $square ?></div>
                    </div>
                    <div class="post-body">
                        <h2><?= get_the_title() ?></h2>
                        <div class="post-icon-block">
                            <?php $counter = 0; ?>
                            <?php foreach($icons as $icon) : ?>
                                <?php if($counter < 4) : ?>
                                    <div class="icon-item">
                                        <img src="<?= $icon['icon'] ?>" alt="">
                                        <span><?= $icon['txt'] ?></span>
                                    </div>
                                <?php endif; ?>
                                <?php $counter++ ?>
                            <?php endforeach; ?>
                        </div>
                        <div class="post-footer">
                            <div class="post-footer__price"><?= get_field('house_price') ?></div>
                            <a href="<?php the_permalink() ?>">Подробнее</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php foreach($posts as $post) : 
                setup_postdata($post); 
                $icons = get_field('house_char_repeater');
                $square = get_field('house_square');   
            ?>
                <div class="post">
                    <div class="post-img-block">
                        <img src="<?= get_the_post_thumbnail_url() ?>">
                        <div class="post-square"><?= $square ?></div>
                    </div>
                    <div class="post-body">
                        <h2><?= get_the_title() ?></h2>
                        <div class="post-icon-block">
                            <?php $counter = 0; ?>
                            <?php foreach($icons as $icon) : ?>
                                <?php if($counter < 4) : ?>
                                    <div class="icon-item">
                                        <img src="<?= $icon['icon'] ?>" alt="">
                                        <span><?= $icon['txt'] ?></span>
                                    </div>
                                <?php endif; ?>
                                <?php $counter++ ?>
                            <?php endforeach; ?>
                        </div>
                        <div class="post-footer">
                            <div class="post-footer__price"><?= get_field('house_price') ?></div>
                            <a href="<?php the_permalink() ?>">Подробнее</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php foreach($posts as $post) : 
                setup_postdata($post); 
                $icons = get_field('house_char_repeater');
                $square = get_field('house_square');   
            ?>
                <div class="post">
                    <div class="post-img-block">
                        <img src="<?= get_the_post_thumbnail_url() ?>">
                        <div class="post-square"><?= $square ?></div>
                    </div>
                    <div class="post-body">
                        <h2><?= get_the_title() ?></h2>
                        <div class="post-icon-block">
                            <?php $counter = 0; ?>
                            <?php foreach($icons as $icon) : ?>
                                <?php if($counter < 4) : ?>
                                    <div class="icon-item">
                                        <img src="<?= $icon['icon'] ?>" alt="">
                                        <span><?= $icon['txt'] ?></span>
                                    </div>
                                <?php endif; ?>
                                <?php $counter++ ?>
                            <?php endforeach; ?>
                        </div>
                        <div class="post-footer">
                            <div class="post-footer__price"><?= get_field('house_price') ?></div>
                            <a href="<?php the_permalink() ?>">Подробнее</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php foreach($posts as $post) : 
                setup_postdata($post); 
                $icons = get_field('house_char_repeater');
                $square = get_field('house_square');   
            ?>
                <div class="post">
                    <div class="post-img-block">
                        <img src="<?= get_the_post_thumbnail_url() ?>">
                        <div class="post-square"><?= $square ?></div>
                    </div>
                    <div class="post-body">
                        <h2><?= get_the_title() ?></h2>
                        <div class="post-icon-block">
                            <?php $counter = 0; ?>
                            <?php foreach($icons as $icon) : ?>
                                <?php if($counter < 4) : ?>
                                    <div class="icon-item">
                                        <img src="<?= $icon['icon'] ?>" alt="">
                                        <span><?= $icon['txt'] ?></span>
                                    </div>
                                <?php endif; ?>
                                <?php $counter++ ?>
                            <?php endforeach; ?>
                        </div>
                        <div class="post-footer">
                            <div class="post-footer__price"><?= get_field('house_price') ?></div>
                            <a href="<?php the_permalink() ?>">Подробнее</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section class="post-active">
    <div class="container">
        <div class="post-active__info-block">
            <h2 class="post-active__title">Эссен</h2>
            <span class="post-active__square">287 м²</span>
            <span class="post-active__price">от 9 008 541 р</span>
            <a href="#" class="post-active__link">Подробнее</a>
            <p class="post-active__more-info">2 спальни; 2 санузла; 2 этажа</p>
        </div>
    </div>
</section>
<section>
    <div class="container">
    <div class="post-items">
            <?php foreach($posts as $post) : 
                setup_postdata($post); 
                $icons = get_field('house_char_repeater');
                $square = get_field('house_square');   
            ?>
                <div class="post">
                    <div class="post-img-block">
                        <img src="<?= get_the_post_thumbnail_url() ?>">
                        <div class="post-square"><?= $square ?></div>
                    </div>
                    <div class="post-body">
                        <h2><?= get_the_title() ?></h2>
                        <div class="post-icon-block">
                            <?php $counter = 0; ?>
                            <?php foreach($icons as $icon) : ?>
                                <?php if($counter < 4) : ?>
                                    <div class="icon-item">
                                        <img src="<?= $icon['icon'] ?>" alt="">
                                        <span><?= $icon['txt'] ?></span>
                                    </div>
                                <?php endif; ?>
                                <?php $counter++ ?>
                            <?php endforeach; ?>
                        </div>
                        <div class="post-footer">
                            <div class="post-footer__price"><?= get_field('house_price') ?></div>
                            <a href="<?php the_permalink() ?>">Подробнее</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php foreach($posts as $post) : 
                setup_postdata($post); 
                $icons = get_field('house_char_repeater');
                $square = get_field('house_square');   
            ?>
                <div class="post">
                    <div class="post-img-block">
                        <img src="<?= get_the_post_thumbnail_url() ?>">
                        <div class="post-square"><?= $square ?></div>
                    </div>
                    <div class="post-body">
                        <h2><?= get_the_title() ?></h2>
                        <div class="post-icon-block">
                            <?php $counter = 0; ?>
                            <?php foreach($icons as $icon) : ?>
                                <?php if($counter < 4) : ?>
                                    <div class="icon-item">
                                        <img src="<?= $icon['icon'] ?>" alt="">
                                        <span><?= $icon['txt'] ?></span>
                                    </div>
                                <?php endif; ?>
                                <?php $counter++ ?>
                            <?php endforeach; ?>
                        </div>
                        <div class="post-footer">
                            <div class="post-footer__price"><?= get_field('house_price') ?></div>
                            <a href="<?php the_permalink() ?>">Подробнее</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php foreach($posts as $post) : 
                setup_postdata($post); 
                $icons = get_field('house_char_repeater');
                $square = get_field('house_square');   
            ?>
                <div class="post">
                    <div class="post-img-block">
                        <img src="<?= get_the_post_thumbnail_url() ?>">
                        <div class="post-square"><?= $square ?></div>
                    </div>
                    <div class="post-body">
                        <h2><?= get_the_title() ?></h2>
                        <div class="post-icon-block">
                            <?php $counter = 0; ?>
                            <?php foreach($icons as $icon) : ?>
                                <?php if($counter < 4) : ?>
                                    <div class="icon-item">
                                        <img src="<?= $icon['icon'] ?>" alt="">
                                        <span><?= $icon['txt'] ?></span>
                                    </div>
                                <?php endif; ?>
                                <?php $counter++ ?>
                            <?php endforeach; ?>
                        </div>
                        <div class="post-footer">
                            <div class="post-footer__price"><?= get_field('house_price') ?></div>
                            <a href="<?php the_permalink() ?>">Подробнее</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php foreach($posts as $post) : 
                setup_postdata($post); 
                $icons = get_field('house_char_repeater');
                $square = get_field('house_square');   
            ?>
                <div class="post">
                    <div class="post-img-block">
                        <img src="<?= get_the_post_thumbnail_url() ?>">
                        <div class="post-square"><?= $square ?></div>
                    </div>
                    <div class="post-body">
                        <h2><?= get_the_title() ?></h2>
                        <div class="post-icon-block">
                            <?php $counter = 0; ?>
                            <?php foreach($icons as $icon) : ?>
                                <?php if($counter < 4) : ?>
                                    <div class="icon-item">
                                        <img src="<?= $icon['icon'] ?>" alt="">
                                        <span><?= $icon['txt'] ?></span>
                                    </div>
                                <?php endif; ?>
                                <?php $counter++ ?>
                            <?php endforeach; ?>
                        </div>
                        <div class="post-footer">
                            <div class="post-footer__price"><?= get_field('house_price') ?></div>
                            <a href="<?php the_permalink() ?>">Подробнее</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php foreach($posts as $post) : 
                setup_postdata($post); 
                $icons = get_field('house_char_repeater');
                $square = get_field('house_square');   
            ?>
                <div class="post">
                    <div class="post-img-block">
                        <img src="<?= get_the_post_thumbnail_url() ?>">
                        <div class="post-square"><?= $square ?></div>
                    </div>
                    <div class="post-body">
                        <h2><?= get_the_title() ?></h2>
                        <div class="post-icon-block">
                            <?php $counter = 0; ?>
                            <?php foreach($icons as $icon) : ?>
                                <?php if($counter < 4) : ?>
                                    <div class="icon-item">
                                        <img src="<?= $icon['icon'] ?>" alt="">
                                        <span><?= $icon['txt'] ?></span>
                                    </div>
                                <?php endif; ?>
                                <?php $counter++ ?>
                            <?php endforeach; ?>
                        </div>
                        <div class="post-footer">
                            <div class="post-footer__price"><?= get_field('house_price') ?></div>
                            <a href="<?php the_permalink() ?>">Подробнее</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php foreach($posts as $post) : 
                setup_postdata($post); 
                $icons = get_field('house_char_repeater');
                $square = get_field('house_square');   
            ?>
                <div class="post">
                    <div class="post-img-block">
                        <img src="<?= get_the_post_thumbnail_url() ?>">
                        <div class="post-square"><?= $square ?></div>
                    </div>
                    <div class="post-body">
                        <h2><?= get_the_title() ?></h2>
                        <div class="post-icon-block">
                            <?php $counter = 0; ?>
                            <?php foreach($icons as $icon) : ?>
                                <?php if($counter < 4) : ?>
                                    <div class="icon-item">
                                        <img src="<?= $icon['icon'] ?>" alt="">
                                        <span><?= $icon['txt'] ?></span>
                                    </div>
                                <?php endif; ?>
                                <?php $counter++ ?>
                            <?php endforeach; ?>
                        </div>
                        <div class="post-footer">
                            <div class="post-footer__price"><?= get_field('house_price') ?></div>
                            <a href="<?php the_permalink() ?>">Подробнее</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section class="individual-project">
    <div class="individual-project__linear-bg"></div>
    <div class="container">
        <h2 class="individual-project__title">Индивидуальное проектирование <br> вашего дома!</h2>
        <div class="individual-project__form-content">
            <div role="form" class="wpcf7" id="wpcf7-f345-o2" lang="ru-RU" dir="ltr">
<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
<form action="/?houses=%D0%B4%D0%BE%D0%BC-%D0%BC%D0%B5%D1%87%D1%82%D1%8B#wpcf7-f345-o2" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="345">
<input type="hidden" name="_wpcf7_version" value="5.5.3">
<input type="hidden" name="_wpcf7_locale" value="ru_RU">
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f345-o2">
<input type="hidden" name="_wpcf7_container_post" value="0">
<input type="hidden" name="_wpcf7_posted_data_hash" value="">
</div>
<label class="individual-form__name"> 
    <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Имя"></span> </label>
<label class="individual-form__tel">
<span class="wpcf7-form-control-wrap tel-115"><input type="tel" name="tel-115" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="+ 375 (29) 777 - 77 - 77"></span>
</label>
<input type="submit" value="Отправить" class="wpcf7-form-control has-spinner wpcf7-submit"><span class="wpcf7-spinner"></span><div class="wpcf7-response-output" aria-hidden="true"></div></form></div>        </div>
    </div>
</section>
<section class="picking-section test" style="background-color: #fff; color: #1e1f24;">
    <div class="container">
        <h2 class="picking-section__title">Преимущества домов Фахверк</h2>
        <div class="picking-section__tabs">
                            <div class="picking-section__tab active" data-for="picking_0">
                    <ul class="picking-section__list">
                                                    <li class="picking-section__list-item">
                                <div class="picking-secton__list-item-header">
                                    <span class="picking-section__list-title">Общее</span>
                                    <button class="picking-section__list-btn">
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="2px" fill="none" fill-rule="evenodd" stroke-linecap="square"> <g transform="translate(1.000000, 1.000000)" stroke="#1e1f24"> <path d="M0,11 L22,11"></path> <path d="M11,0 L11,22"></path> </g> </g> </svg>
                                    </button>
                                </div>
                                <div class="picking-section__list-item-content">
                                    <ul>
<li>Доставка (по Санкт-Петербургу и Ленинградской области, не далее 50 км от КАД; условия доставки на другие расстояния и по территории РФ обсуждаются индивидуально для каждого проекта)</li>
<li>Комплект крепежных элементов, метизов (резьбовые штанги, гайки колпачковые и шайбы кузовные из нержавеющей стали, ПСУЛ, анкера, усиленные уголки, ПНД подкладки, саморезы и т.д.)</li>
<li>Монтаж специалистами Велеса</li>
<li>Инженерный и технический надзор специалистами компании</li>
<li>Гарантия 10 лет</li>
</ul>
                                </div>
                            </li>
                                                    <li class="picking-section__list-item">
                                <div class="picking-secton__list-item-header">
                                    <span class="picking-section__list-title">Проектная документация</span>
                                    <button class="picking-section__list-btn">
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="2px" fill="none" fill-rule="evenodd" stroke-linecap="square"> <g transform="translate(1.000000, 1.000000)" stroke="#1e1f24"> <path d="M0,11 L22,11"></path> <path d="M11,0 L11,22"></path> </g> </g> </svg>
                                    </button>
                                </div>
                                <div class="picking-section__list-item-content">
                                    <ul>
<li>Эскизный проект</li>
<li>Проектная документация раздел КД (конструкции деревянные)</li>
</ul>
                                </div>
                            </li>
                                                    <li class="picking-section__list-item">
                                <div class="picking-secton__list-item-header">
                                    <span class="picking-section__list-title">Силовой каркас</span>
                                    <button class="picking-section__list-btn">
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="2px" fill="none" fill-rule="evenodd" stroke-linecap="square"> <g transform="translate(1.000000, 1.000000)" stroke="#1e1f24"> <path d="M0,11 L22,11"></path> <path d="M11,0 L11,22"></path> </g> </g> </svg>
                                    </button>
                                </div>
                                <div class="picking-section__list-item-content">
                                    <ul>
<li>Силовая конструкция дома из клееного бруса по технологии «Фахверк», древесина — ель (все сечения определяются проектом):<br>
• нижняя обвязка 135х150мм (высота 150мм) с гидроизоляцией<br>
• наружные угловые столбы 270х270мм или 300 х 300мм<br>
• наружные рядовые столбы 180х270мм /180х300мм<br>
• внутренние рядовые столбы 180х225мм, 180х270мм, 225х225мм, 225х270.<br>
• горизонтальные обвязки 180х225мм, 180х270мм,180х300 мм,<br>
• сдвоенные балки 90х300мм, 90х350, 90х400<br>
• подстропильные прогоны 90х400мм, 90х450, 90х485 и доборы под стропила 90х121мм<br>
• силовые стропила 180х300мм</li>
</ul>
                                </div>
                            </li>
                                                    <li class="picking-section__list-item">
                                <div class="picking-secton__list-item-header">
                                    <span class="picking-section__list-title">Крыша</span>
                                    <button class="picking-section__list-btn">
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="2px" fill="none" fill-rule="evenodd" stroke-linecap="square"> <g transform="translate(1.000000, 1.000000)" stroke="#1e1f24"> <path d="M0,11 L22,11"></path> <path d="M11,0 L11,22"></path> </g> </g> </svg>
                                    </button>
                                </div>
                                <div class="picking-section__list-item-content">
                                    <ul>
<li>Стропила из сухой строганной доски</li>
<li>Пароизоляция с проклейкой стыков</li>
<li>Гидроветроизоляция</li>
<li>Утеплитель 250мм</li>
<li>Лобовые и боковые доски (окрашенные в заводских условиях)</li>
<li>Кровельное покрытие: цементно-песчаная черепица Braas</li>
<li>Крепления водосточной системы</li>
</ul>
                                </div>
                            </li>
                                                    <li class="picking-section__list-item">
                                <div class="picking-secton__list-item-header">
                                    <span class="picking-section__list-title">Наружные стеновые панели (заводское изготовление)</span>
                                    <button class="picking-section__list-btn">
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="2px" fill="none" fill-rule="evenodd" stroke-linecap="square"> <g transform="translate(1.000000, 1.000000)" stroke="#1e1f24"> <path d="M0,11 L22,11"></path> <path d="M11,0 L11,22"></path> </g> </g> </svg>
                                    </button>
                                </div>
                                <div class="picking-section__list-item-content">
                                    <ul>
<li>Ветрозащитная плита (снаружи)</li>
<li>Пароизоляция</li>
<li>Плита OSB-3 (внутри)</li>
<li>Каркас из сухой строганной доски</li>
<li>Утеплитель 150мм с перехлестом слоев</li>
</ul>
                                </div>
                            </li>
                                                    <li class="picking-section__list-item">
                                <div class="picking-secton__list-item-header">
                                    <span class="picking-section__list-title">Остекление</span>
                                    <button class="picking-section__list-btn">
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="2px" fill="none" fill-rule="evenodd" stroke-linecap="square"> <g transform="translate(1.000000, 1.000000)" stroke="#1e1f24"> <path d="M0,11 L22,11"></path> <path d="M11,0 L11,22"></path> </g> </g> </svg>
                                    </button>
                                </div>
                                <div class="picking-section__list-item-content">
                                    <ul>
<li>Панорамное остекление. Двухкамерный низко-эмиссионный стеклопакет с наружным мультифункциональным стеклом, с заполнением камер аргоном и теплой дистанционной рамкой</li>
<li>Рамное остекление. Двухкамерный энергосберегающий стеклопакет в профиле Rehau</li>
</ul>
                                </div>
                            </li>
                                            </ul>
                </div>
                            <div class="picking-section__tab " data-for="picking_1">
                    <ul class="picking-section__list">
                                                    <li class="picking-section__list-item">
                                <div class="picking-secton__list-item-header">
                                    <span class="picking-section__list-title">Общее</span>
                                    <button class="picking-section__list-btn">
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="2px" fill="none" fill-rule="evenodd" stroke-linecap="square"> <g transform="translate(1.000000, 1.000000)" stroke="#1e1f24"> <path d="M0,11 L22,11"></path> <path d="M11,0 L11,22"></path> </g> </g> </svg>
                                    </button>
                                </div>
                                <div class="picking-section__list-item-content">
                                    <ul>
<li>Доставка (по Санкт-Петербургу и Ленинградской области, не далее 50 км от КАД; условия доставки на другие расстояния и по территории РФ обсуждаются индивидуально для каждого проекта)</li>
<li>Комплект крепежных элементов, метизов (резьбовые штанги, гайки колпачковые и шайбы кузовные из нержавеющей стали, ПСУЛ, анкера, усиленные уголки, ПНД подкладки, саморезы и т.д.)</li>
<li>Монтаж специалистами Велеса</li>
<li>Инженерный и технический надзор специалистами компании</li>
<li>Гарантия 10 лет</li>
</ul>
                                </div>
                            </li>
                                                    <li class="picking-section__list-item">
                                <div class="picking-secton__list-item-header">
                                    <span class="picking-section__list-title">Проектная документация</span>
                                    <button class="picking-section__list-btn">
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="2px" fill="none" fill-rule="evenodd" stroke-linecap="square"> <g transform="translate(1.000000, 1.000000)" stroke="#1e1f24"> <path d="M0,11 L22,11"></path> <path d="M11,0 L11,22"></path> </g> </g> </svg>
                                    </button>
                                </div>
                                <div class="picking-section__list-item-content">
                                    <ul>
<li>Эскизный проект</li>
<li>Проектная документация раздел КД (конструкции деревянные)</li>
<li>Проекты Инженерных сетей</li>
</ul>
                                </div>
                            </li>
                                                    <li class="picking-section__list-item">
                                <div class="picking-secton__list-item-header">
                                    <span class="picking-section__list-title">Силовой каркас</span>
                                    <button class="picking-section__list-btn">
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="2px" fill="none" fill-rule="evenodd" stroke-linecap="square"> <g transform="translate(1.000000, 1.000000)" stroke="#1e1f24"> <path d="M0,11 L22,11"></path> <path d="M11,0 L11,22"></path> </g> </g> </svg>
                                    </button>
                                </div>
                                <div class="picking-section__list-item-content">
                                    <ul>
<li>Силовая конструкция дома из клееного бруса по технологии «Фахверк», древесина — ель (все сечения определяются проектом):<br>
• нижняя обвязка 135х150мм (высота 150мм) с гидроизоляцией<br>
• наружные угловые столбы 270х270мм или 300 х 300мм<br>
• наружные рядовые столбы 180х270мм /180х300мм<br>
• внутренние рядовые столбы 180х225мм, 180х270мм, 225х225мм, 225х270.<br>
• горизонтальные обвязки 180х225мм, 180х270мм,180х300 мм,<br>
• сдвоенные балки 90х300мм, 90х350, 90х400<br>
• подстропильные прогоны 90х400мм, 90х450, 90х485 и доборы под стропила 90х121мм<br>
• силовые стропила 180х300мм</li>
</ul>
                                </div>
                            </li>
                                                    <li class="picking-section__list-item">
                                <div class="picking-secton__list-item-header">
                                    <span class="picking-section__list-title">Крыша</span>
                                    <button class="picking-section__list-btn">
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="2px" fill="none" fill-rule="evenodd" stroke-linecap="square"> <g transform="translate(1.000000, 1.000000)" stroke="#1e1f24"> <path d="M0,11 L22,11"></path> <path d="M11,0 L11,22"></path> </g> </g> </svg>
                                    </button>
                                </div>
                                <div class="picking-section__list-item-content">
                                    <ul>
<li>Стропила из сухой строганной доски</li>
<li>Пароизоляция с проклейкой стыков</li>
<li>Гидроветроизоляция</li>
<li>Утеплитель 250мм</li>
<li>Лобовые и боковые доски (окрашенные в заводских условиях)</li>
<li>Кровельное покрытие: цементно-песчаная черепица Braas</li>
<li>Крепления водосточной системы</li>
</ul>
                                </div>
                            </li>
                                                    <li class="picking-section__list-item">
                                <div class="picking-secton__list-item-header">
                                    <span class="picking-section__list-title">Наружные стеновые панели (заводское изготовление)</span>
                                    <button class="picking-section__list-btn">
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="2px" fill="none" fill-rule="evenodd" stroke-linecap="square"> <g transform="translate(1.000000, 1.000000)" stroke="#1e1f24"> <path d="M0,11 L22,11"></path> <path d="M11,0 L11,22"></path> </g> </g> </svg>
                                    </button>
                                </div>
                                <div class="picking-section__list-item-content">
                                    <ul>
<li>Ветрозащитная плита (снаружи)</li>
<li>Пароизоляция</li>
<li>Плита OSB-3 (внутри)</li>
<li>Каркас из сухой строганной доски</li>
<li>Утеплитель 150мм с перехлестом слоев</li>
</ul>
                                </div>
                            </li>
                                                    <li class="picking-section__list-item">
                                <div class="picking-secton__list-item-header">
                                    <span class="picking-section__list-title">Остекление</span>
                                    <button class="picking-section__list-btn">
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="2px" fill="none" fill-rule="evenodd" stroke-linecap="square"> <g transform="translate(1.000000, 1.000000)" stroke="#1e1f24"> <path d="M0,11 L22,11"></path> <path d="M11,0 L11,22"></path> </g> </g> </svg>
                                    </button>
                                </div>
                                <div class="picking-section__list-item-content">
                                    <ul>
<li>Панорамное остекление. Двухкамерный низко-эмиссионный стеклопакет с наружным мультифункциональным стеклом, с заполнением камер аргоном и теплой дистанционной рамкой</li>
<li>Рамное остекление. Двухкамерный энергосберегающий стеклопакет в профиле Rehau</li>
</ul>
                                </div>
                            </li>
                                                    <li class="picking-section__list-item">
                                <div class="picking-secton__list-item-header">
                                    <span class="picking-section__list-title">Внутренние перегородки</span>
                                    <button class="picking-section__list-btn">
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="2px" fill="none" fill-rule="evenodd" stroke-linecap="square"> <g transform="translate(1.000000, 1.000000)" stroke="#1e1f24"> <path d="M0,11 L22,11"></path> <path d="M11,0 L11,22"></path> </g> </g> </svg>
                                    </button>
                                </div>
                                <div class="picking-section__list-item-content">
                                    <ul>
<li>Каркас внутренних перегородок из сухой строганной доски</li>
</ul>
                                </div>
                            </li>
                                                    <li class="picking-section__list-item">
                                <div class="picking-secton__list-item-header">
                                    <span class="picking-section__list-title">Междуэтажное перекрытие (черновое)</span>
                                    <button class="picking-section__list-btn">
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="2px" fill="none" fill-rule="evenodd" stroke-linecap="square"> <g transform="translate(1.000000, 1.000000)" stroke="#1e1f24"> <path d="M0,11 L22,11"></path> <path d="M11,0 L11,22"></path> </g> </g> </svg>
                                    </button>
                                </div>
                                <div class="picking-section__list-item-content">
                                    <ul>
<li>Влагостойкие шпунтованные плиты ДСП</li>
<li>Балки перекрытий из сухой строганной доски</li>
</ul>
                                </div>
                            </li>
                                                    <li class="picking-section__list-item">
                                <div class="picking-secton__list-item-header">
                                    <span class="picking-section__list-title">Инженерные сети</span>
                                    <button class="picking-section__list-btn">
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="2px" fill="none" fill-rule="evenodd" stroke-linecap="square"> <g transform="translate(1.000000, 1.000000)" stroke="#1e1f24"> <path d="M0,11 L22,11"></path> <path d="M11,0 L11,22"></path> </g> </g> </svg>
                                    </button>
                                </div>
                                <div class="picking-section__list-item-content">
                                    <ul>
<li>Водоснабжение, канализация, электрика, отопление и котельная, вентиляция</li>
</ul>
                                </div>
                            </li>
                                            </ul>
                </div>
                            <div class="picking-section__tab " data-for="picking_2">
                    <ul class="picking-section__list">
                                                    <li class="picking-section__list-item">
                                <div class="picking-secton__list-item-header">
                                    <span class="picking-section__list-title">Проектная документация</span>
                                    <button class="picking-section__list-btn">
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="2px" fill="none" fill-rule="evenodd" stroke-linecap="square"> <g transform="translate(1.000000, 1.000000)" stroke="#1e1f24"> <path d="M0,11 L22,11"></path> <path d="M11,0 L11,22"></path> </g> </g> </svg>
                                    </button>
                                </div>
                                <div class="picking-section__list-item-content">
                                    <ul>
<li>Эскизный проект</li>
<li>Проектная документация раздел КД (конструкции деревянные)</li>
<li>Проекты Инженерных сетей</li>
<li>Дизайн-проект</li>
</ul>
                                </div>
                            </li>
                                                    <li class="picking-section__list-item">
                                <div class="picking-secton__list-item-header">
                                    <span class="picking-section__list-title">Предчистовая комплектация</span>
                                    <button class="picking-section__list-btn">
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="2px" fill="none" fill-rule="evenodd" stroke-linecap="square"> <g transform="translate(1.000000, 1.000000)" stroke="#1e1f24"> <path d="M0,11 L22,11"></path> <path d="M11,0 L11,22"></path> </g> </g> </svg>
                                    </button>
                                </div>
                                <div class="picking-section__list-item-content">
                                    <ul>
<li>Работы и комплектующие, соответствующие предчистовой комплектации</li>
</ul>
                                </div>
                            </li>
                                                    <li class="picking-section__list-item">
                                <div class="picking-secton__list-item-header">
                                    <span class="picking-section__list-title">Чистовая отделка</span>
                                    <button class="picking-section__list-btn">
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="2px" fill="none" fill-rule="evenodd" stroke-linecap="square"> <g transform="translate(1.000000, 1.000000)" stroke="#1e1f24"> <path d="M0,11 L22,11"></path> <path d="M11,0 L11,22"></path> </g> </g> </svg>
                                    </button>
                                </div>
                                <div class="picking-section__list-item-content">
                                    <ul>
<li>Внутренняя и внешняя чистовая отделка дома согласно дизайн-проекту</li>
</ul>
                                </div>
                            </li>
                                            </ul>
                </div>
             
        </div>
    </div>
</section>
<?php get_footer() ?>