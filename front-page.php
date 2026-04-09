<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>
<main id="site-content" class="site-main">
    <?php
    get_template_part('template-parts/section', 'hero');
    get_template_part('template-parts/section', 'features');
    get_template_part('template-parts/section', 'screens');
    get_template_part('template-parts/section', 'community');
    get_template_part('template-parts/section', 'match');
    get_template_part('template-parts/section', 'ai-assistant');
    get_template_part('template-parts/section', 'experts');
    get_template_part('template-parts/section', 'cta-download');
    ?>
</main>
<?php
get_footer();
