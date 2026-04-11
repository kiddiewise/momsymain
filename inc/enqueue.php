<?php
if (!defined('ABSPATH')) {
    exit;
}

add_action('wp_enqueue_scripts', function () {
    $main_css_path = get_theme_file_path('/assets/css/main.css');
    $main_js_path = get_theme_file_path('/assets/js/main.js');

    wp_enqueue_style(
        'momsymain-google-fonts',
        'https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Outfit:wght@400;500;600;700;800&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'momsymain-style',
        get_template_directory_uri() . '/assets/css/main.css',
        array('momsymain-google-fonts'),
        file_exists($main_css_path) ? filemtime($main_css_path) : '1.0.0'
    );

    wp_enqueue_script(
        'momsymain-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        file_exists($main_js_path) ? filemtime($main_js_path) : '1.0.0',
        true
    );
});
