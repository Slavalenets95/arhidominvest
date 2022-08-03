<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package template
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Yeseva+One&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/bb75e7d711.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header class="main-header">
        <a href="<?= get_home_url() ?>" class="main-header__logo">
            <i class="fa fa-home main-header__logo-icon gold-txt-bg" aria-hidden="true"></i>
            <span class="main-header__logo-txt gold-txt-bg">АРХИДОМИНВЕСТ</span>
        </a>
        <?php 
            wp_nav_menu( [
                'theme_location'  => 'header-menu',
                'menu'            => 'Меню в шапке',
                'container'       => 'div',
                'container_class' => 'main-header__menu-wrapper',
                'container_id'    => '',
                'menu_class'      => 'main-header__menu',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth'           => 0,
                'walker'          => '',
            ] );
        ?>
        <div class="main-header__tel-wrapper">
            <?php
                if(have_rows('tels_repeater', 'options')) :
                    while(have_rows('tels_repeater', 'options')) : the_row();
                        $tel = get_sub_field('tel');
            ?>
                <a href="tel:<?= $tel ?>" class="main-header__tel-link"><?= $tel ?></a>
            <?php
                    endwhile;
                endif;
            ?>
        </div>
        <button class="main-header__btn call-btn">Заказать звонок</button>
    </header>
