<?php
if (!defined('ABSPATH')) {
    exit;
}

add_action('after_setup_theme', function () {
    load_theme_textdomain('momsymain', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));
    add_theme_support('responsive-embeds');
    add_theme_support('custom-logo');

    register_nav_menu('primary', esc_html__('Primary Menu', 'momsymain'));
});

if (!function_exists('momsymain_default_menu')) {
    function momsymain_default_menu() {
        echo '<ul class="nav-list">'
            . '<li><a href="#hero">Anasayfa</a></li>'
            . '<li><a href="#features">Özellikler</a></li>'
            . '<li><a href="#community">Topluluk</a></li>'
            . '<li><a href="#tracking">Gebelik Takibi</a></li>'
            . '<li><a href="#ai-assistant">Momsy Asistan</a></li>'
            . '<li><a href="#download">İndir</a></li>'
            . '</ul>';
    }
}
