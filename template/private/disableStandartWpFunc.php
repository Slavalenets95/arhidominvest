<?php
// Не показывать версию WordPress и wlmanifest в коде
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');

//Json, rest-api, oembed
add_filter( 'json_enabled', '__return_false' );
add_filter( 'json_jsonp_enabled', '__return_false' );
add_filter( 'rest_enabled', '__return_false' );
add_filter( 'rest_jsonp_enabled', '__return_false' );

// Редирект со страниц */wp-json
function jsonredirect() {
if ( preg_match( '#\/wp-json\/.*?#', $_SERVER['REQUEST_URI'] ) ) {
wp_redirect( get_option( 'siteurl' ), 301 );
die();
}
}
add_action( 'template_redirect', 'jsonredirect' );

// Удалить ссылки на xmlrpc и api в коде
remove_action( 'xmlrpc_rsd_apis', 'rest_output_rsd' );
remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
remove_action( 'template_redirect', 'rest_output_link_header', 11 );

// Отключить фильтры rest api
remove_action( 'xmlrpc_rsd_apis', 'rest_output_rsd' );
remove_action( 'auth_cookie_malformed', 'rest_cookie_collect_status' );
remove_action( 'auth_cookie_expired', 'rest_cookie_collect_status' );
remove_action( 'auth_cookie_bad_username', 'rest_cookie_collect_status' );
remove_action( 'auth_cookie_bad_hash', 'rest_cookie_collect_status' );
remove_action( 'auth_cookie_valid', 'rest_cookie_collect_status' );
remove_filter( 'rest_authentication_errors', 'rest_cookie_check_errors', 100 );

// Отключить события rest api
remove_action( 'init', 'rest_api_init' );
remove_action( 'rest_api_init', 'rest_api_default_filters', 10, 1 );
remove_action( 'parse_request', 'rest_api_loaded' );

// Отключить Embeds
remove_action( 'rest_api_init', 'wp_oembed_register_route' );
remove_filter( 'rest_pre_serve_request', '_oembed_rest_pre_serve_request', 10, 4 );

// Убрать ссылки на oembed в коде сайта
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'wp_head', 'wp_oembed_add_host_js' );

// Отключить Emojii (смайлики)
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
add_filter( 'tiny_mce_plugins', 'disable_wp_emojis_in_tinymce' );
function disable_wp_emojis_in_tinymce( $plugins ) {
if ( is_array( $plugins ) ) {
return array_diff( $plugins, array( 'wpemoji' ) );
} else {
return array();
}
}

/*** Remove Posts  ***/

function remove_menus(){
//    remove_menu_page( 'index.php' );                  //Консоль
remove_menu_page( 'edit.php' );                   //Записи
//    remove_menu_page( 'upload.php' );                 //Медиафайлы
//    remove_menu_page( 'edit.php?post_type=page' );    //Страницы
remove_menu_page( 'edit-comments.php' );          //Комментарии
//    remove_menu_page( 'themes.php' );                 //Внешний вид
//    remove_menu_page( 'plugins.php' );                //Плагины
//    remove_menu_page( 'users.php' );                  //Пользователи
//    remove_menu_page( 'tools.php' );                  //Инструменты
//    remove_menu_page( 'options-general.php' );        //Настройки
}
add_action( 'admin_menu', 'remove_menus' );

remove_action( 'wp_head', 'rsd_link' );

function disable_pingback( &$links ) {
    foreach ( $links as $l => $link )
        if ( 0 === strpos( $link, get_option( 'home' ) ) )
            unset($links[$l]);
}
add_action( 'pre_ping', 'disable_pingback' );

add_filter('show_admin_bar', '__return_false');
add_filter('use_block_editor_for_post_type', '__return_false', 10);