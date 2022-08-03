<?php
/**
 * template functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package template
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Enqueue scripts and styles.
 */
function template_scripts() {
    wp_deregister_style('dashicons');
    wp_dequeue_style( 'wp-block-library' ); // WordPress core
    wp_dequeue_style( 'wp-block-library-theme' ); // WordPress core
    wp_dequeue_style( 'wc-block-style' ); // WooCommerce
    wp_dequeue_style( 'storefront-gutenberg-blocks' ); // Storefront theme
	wp_deregister_script('jquery');
	wp_enqueue_script('jQuery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), null, true);

    wp_enqueue_script( 'slick-script', get_template_directory_uri() . '/public/libs/slick.min.js', array('jQuery'), _S_VERSION, true );
    wp_enqueue_script( 'wow-script', get_template_directory_uri() . '/public/libs/wow.min.js', array('jQuery'), _S_VERSION, true );
    // wp_enqueue_script( 'parallax-script', get_template_directory_uri() . '/public/libs/parallax.js', array('jQuery'), _S_VERSION, true );
    wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/public/js/custom.js', array('jQuery'), _S_VERSION, false );

	wp_enqueue_style( 'template-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'reset-styles', get_template_directory_uri() . '/public/css/user/reset.css', array(), _S_VERSION );
	wp_enqueue_style( 'slick-styles', get_template_directory_uri() . '/public/libs/slick.css', array(), _S_VERSION );
	wp_enqueue_style( 'slick-theme-styles', get_template_directory_uri() . '/public/libs/slick-theme.css', array(), _S_VERSION );
	wp_enqueue_style( 'animate-styles', get_template_directory_uri() . '/public/libs/animate.css', array(), _S_VERSION );
	wp_enqueue_style( 'main-styles', get_template_directory_uri() . '/public/css/user/styles.css', array(), _S_VERSION );
}
add_action( 'wp_enqueue_scripts', 'template_scripts' );

/*** Admin Enqueue ***/

function admin_scripts(){
    wp_enqueue_style("style-admin",get_bloginfo('stylesheet_directory')."/public/css/admin/admin-styles.css");
}
add_action('admin_head', 'admin_scripts');

require_once(__DIR__ . '/private/disableStandartWpFunc.php');

/*** Acf Post Type Selector ***/
add_action( 'acf/include_fields', 'my_register_fields' );
function my_register_fields() {
     include_once( __DIR__ . '/private/acf-post-type-selector/post-type-selector-v5.php' );
}

add_filter( 'post_type_selector_post_types', function( $post_types, $field ) {
	$exclude = ['fonts', 'feedback', 'wpcf7_contact_form', 'section_templates', 'templates_type', 'attachment', 'page'];

	return array_diff_key($post_types, array_flip($exclude));
}, 10, 2 );

/*** Configurator Admin Page ***/

add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {
    if( function_exists('acf_add_options_sub_page') ) {

        $parent = acf_add_options_page(array(
            'page_title'  => __('Конфигуратор'),
            'menu_title'  => __('Конфигуратор'),
            'menu_slug'   => 'configurator',
            'redirect'    => false,
        ));

        $child = acf_add_options_sub_page(array(
            'page_title'  => __('Социальные сети'),
            'menu_title'  => __('Социальные сети'),
            'menu_slug'   => 'socials',
            'parent_slug' => $parent['menu_slug'],
        ));
    }
}

require_once(__DIR__ . '/private/configurator.php');
require_once(__DIR__ . '/private/initialize.php');



// function createConstructor() {
//     $constructor = json_decode(file_get_contents(__DIR__ . '/acf-json/group_61acb97ace7bb.json'));
//     $constructor = json_decode(json_encode($constructor), true);
//     $constructor['active'] = true;
    
//     $typesSetting = get_field('custom_post_type_repeater', 'option');
//     $constructorLocation = [];
//     $count=0;
//     if($typesSetting) {
//     	foreach($typesSetting as $el) {
//     		if($el['custom_posts_constructor_flag'] && $count === 0) {
//     			$constructorLocation[] = array(
//     				'param' => 'post_type',
//     				'operator' => '==',
//     				'value' => strtolower($el['custom_posts_name']),
//     			);
//     		}
//             $count++;
//         }
//     }
//     array_push($constructor['location'], $constructorLocation);

//     var_dump(acf_add_local_field_group(array($constructor)));
// }

// add_action('init', 'createConstructor');


add_filter('acf/get_field_group', 'my_change_field_group');

function my_change_field_group($group) {
    if($group['title'] === 'Конструктор') {
        $typesSetting = get_field('custom_post_type_repeater', 'option');
        $location = array(
            array(
                array(
                    'param'    => 'post_type',
                    'operator' => '==',
                    'value'    => 'page' 
                )
            ),
            array(
                array(
                    'param'    => 'post_type',
                    'operator' => '==',
                    'value'    => 'templates_type'
                ) 
            ),
            array(
                array(
                    'param'    => 'post_type',
                    'operator' => '==',
                    'value'    => 'section_templates'
                ) 
            ),
            

        );

        if($typesSetting) {
        	foreach($typesSetting as $el) {
        		if($el['custom_posts_constructor_flag']) {
        			$location[] = array(
        				array(
                            'param' => 'post_type',
        				    'operator' => '==',
        				    'value' => strtolower($el['custom_posts_slug']),
                        )
        			);
        		}
            }
        }
        $group['location'] = $location;
        
    }    
    return $group;
}


add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
	register_nav_menu( 'header-menu', 'Меню в шапке' );
    register_nav_menu( 'footer-menu', 'Меню в подвале' );
}

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Основные настройки',
		'menu_title'	=> 'Настройки темы',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

function allow_type($type) {
    $type['svg'] = 'image/svg+xml';
    return $type;
}
add_filter('upload_mimes', 'allow_type');

// Шорткод кнопки

add_shortcode( 'button' , 'btn_shortcode' );

function btn_shortcode ( $atts, $content )
{
    if($atts['href']) {
        return '<a class="' . $atts['class'] . '" href="' . $atts['href'] . '">' . $content . '</a>';
    }

    return '<button class="' . $atts['class'] . '">' . $content . '</button>';
}

add_theme_support( 'post-thumbnails' );

add_filter('wpcf7_autop_or_not', '__return_false');