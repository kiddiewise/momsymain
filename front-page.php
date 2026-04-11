<?php
if (!defined('ABSPATH')) {
    exit;
}

$background_particles = array(
    array('size' => '0.35rem', 'left' => '6%', 'top' => '10%', 'delay' => '0s', 'duration' => '14s'),
    array('size' => '0.5rem', 'left' => '16%', 'top' => '26%', 'delay' => '2s', 'duration' => '18s'),
    array('size' => '0.3rem', 'left' => '28%', 'top' => '16%', 'delay' => '4s', 'duration' => '15s'),
    array('size' => '0.45rem', 'left' => '38%', 'top' => '40%', 'delay' => '1s', 'duration' => '17s'),
    array('size' => '0.25rem', 'left' => '52%', 'top' => '20%', 'delay' => '5s', 'duration' => '13s'),
    array('size' => '0.55rem', 'left' => '63%', 'top' => '12%', 'delay' => '3s', 'duration' => '19s'),
    array('size' => '0.32rem', 'left' => '72%', 'top' => '33%', 'delay' => '6s', 'duration' => '16s'),
    array('size' => '0.42rem', 'left' => '84%', 'top' => '18%', 'delay' => '2.5s', 'duration' => '20s'),
    array('size' => '0.36rem', 'left' => '90%', 'top' => '44%', 'delay' => '4.5s', 'duration' => '15s'),
    array('size' => '0.28rem', 'left' => '12%', 'top' => '62%', 'delay' => '1.4s', 'duration' => '18s'),
    array('size' => '0.48rem', 'left' => '24%', 'top' => '76%', 'delay' => '3.4s', 'duration' => '22s'),
    array('size' => '0.24rem', 'left' => '46%', 'top' => '66%', 'delay' => '0.8s', 'duration' => '12s'),
    array('size' => '0.4rem', 'left' => '58%', 'top' => '82%', 'delay' => '5.5s', 'duration' => '16s'),
    array('size' => '0.58rem', 'left' => '76%', 'top' => '70%', 'delay' => '2.2s', 'duration' => '21s'),
    array('size' => '0.3rem', 'left' => '88%', 'top' => '88%', 'delay' => '4.2s', 'duration' => '14s'),
);

get_header();
?>
<div class="site-backdrop" aria-hidden="true">
    <span class="site-backdrop__mesh"></span>
    <span class="site-backdrop__orb site-backdrop__orb--violet"></span>
    <span class="site-backdrop__orb site-backdrop__orb--rose"></span>
    <span class="site-backdrop__orb site-backdrop__orb--mint"></span>
    <div class="site-backdrop__particles">
        <?php foreach ($background_particles as $particle) : ?>
            <span
                class="site-backdrop__particle"
                style="
                    --particle-size: <?php echo esc_attr($particle['size']); ?>;
                    --particle-left: <?php echo esc_attr($particle['left']); ?>;
                    --particle-top: <?php echo esc_attr($particle['top']); ?>;
                    --particle-delay: <?php echo esc_attr($particle['delay']); ?>;
                    --particle-duration: <?php echo esc_attr($particle['duration']); ?>;
                "
            ></span>
        <?php endforeach; ?>
    </div>
</div>

<main id="site-content" class="site-main site-main--landing">
    <?php
    get_template_part('template-parts/section', 'hero');
    get_template_part('template-parts/section', 'features');
    get_template_part('template-parts/section', 'community');
    get_template_part('template-parts/section', 'screens');
    get_template_part('template-parts/section', 'ai-assistant');
    get_template_part('template-parts/section', 'match');
    get_template_part('template-parts/section', 'experts');
    get_template_part('template-parts/section', 'cta-download');
    ?>
</main>
<?php
get_footer();
