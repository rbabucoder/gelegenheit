<?php
// Include constants file
require_once get_template_directory() . '/constants.php';
require_once get_template_directory() . '/customizer.php';
require get_template_directory() . '/inc/custom-nav-walker.php';

// Theme setup
function theme_setup()
{
    // Add theme support features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('custom-logo', array(
        // 'height'      => 50,
        // 'width'       => 200,
        'flex-height' => true,
        'flex-width' => true,
    )
    );
    add_theme_support('customize-selective-refresh-widgets');

    // Register navigation menus
    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'text_domain'),
            'footer' => __('Footer Menu', 'text_domain'),
        )
    );

    // Add custom image sizes
    add_image_size('custom-thumb', 180, 180, true);
}
add_action('after_setup_theme', 'theme_setup');


function register_my_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu')
        )
    );
}
add_action('init', 'register_my_menus');


function gelegenheit_enqueue_scripts()
{
    // Enqueue the compiled CSS file
    wp_enqueue_style('gelegenheit-main-css', GELEGENHEIT_CSS_PATH . 'main.css', array(), GELEGENHEIT_THEME_VERSION, 'all');
    wp_enqueue_style('gel-slick-style', get_template_directory_uri() . '/slick/slick.min.css', array(), GELEGENHEIT_THEME_VERSION, 'all');
    wp_enqueue_style('aqueouss-slick-theme-style', get_template_directory_uri() . '/slick/slick-theme.min.css', array(), null);

    // Enqueue JavaScript file
    wp_enqueue_script('gelegenheit-main-js', GELEGENHEIT_JS_PATH . 'main.js', array('jquery'), GELEGENHEIT_THEME_VERSION, true);
    wp_enqueue_script('aqueouss-slick-script', get_template_directory_uri() . '/slick/slick.min.js', array('jquery'), GELEGENHEIT_THEME_VERSION, true);

}
add_action('wp_enqueue_scripts', 'gelegenheit_enqueue_scripts');









function testimonials_callback()
{
    ob_start();
    include ('include/testimonials.php');
    $output = ob_get_clean();
    return $output;
}
add_shortcode('testimonials', 'testimonials_callback');




function news_callback()
{
    ob_start();
    include ('include/news.php');
    $output = ob_get_clean();
    return $output;
}
add_shortcode('news', 'news_callback');