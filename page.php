<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>
<main id="site-content" class="site-main">
    <div class="container page-content">
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                the_content();
            endwhile;
        endif;
        ?>
    </div>
</main>
<?php
get_footer();
