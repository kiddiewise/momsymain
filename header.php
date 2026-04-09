<?php
if (!defined('ABSPATH')) {
    exit;
}
?><!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="site-header sticky-header" role="banner">
        <div class="container header-inner">
            <a class="site-logo" href="<?php echo esc_url(home_url('/')); ?>">MomsyMain</a>
            <button class="nav-toggle" aria-expanded="false" aria-controls="primary-menu" aria-label="<?php esc_attr_e('Toggle navigation', 'momsymain'); ?>">Menu</button>
            <nav id="primary-menu" class="site-navigation" role="navigation" aria-label="<?php esc_attr_e('Primary menu', 'momsymain'); ?>">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'nav-list',
                    'fallback_cb' => 'momsymain_default_menu',
                ));
                ?>
            </nav>
        </div>
    </header>
