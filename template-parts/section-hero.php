<?php
if (!defined('ABSPATH')) {
    exit;
}

$hero_image_url = 'https://momsy.com.tr/wp-content/uploads/2026/04/momsy-hamilelik-takip-uygulamasi.webp';

$hero_metrics = array(
    array(
        'value' => '4 ana modül',
        'label' => 'Topluluk, takip, AI ve partner akışı',
    ),
    array(
        'value' => '7/24 destek hissi',
        'label' => 'Annenin gün içinde ihtiyaç duyduğu netlik için',
    ),
    array(
        'value' => 'Mobile-first düzen',
        'label' => 'Küçük ekranlarda daha güçlü görünen bir yapı',
    ),
);
?>
<section id="hero" class="section section--hero" aria-labelledby="hero-heading">
    <div class="container hero-grid">
        <div class="hero-copy" data-reveal="up">
            <h1 id="hero-heading" class="hero-title">Sizi tam olarak anlayan uygulama</h1>
            <p class="hero-description">Momsy, hamilelik ve annelik yolculuklarınızda asla yalnız hissetmemeniz için tasarlandı. &#x1F49C;</p>

            <div class="hero-store-row" data-reveal="up">
                <a class="store-badge store-badge--hero" href="#download" aria-label="Google Play'den indir">
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polygon points="6,3 20,12 6,21 6,3"/></svg>
                    <span class="store-badge__content">
                        <span class="store-badge__eyebrow">Şimdi indir</span>
                        <span class="store-badge__label">Google Play</span>
                    </span>
                </a>
                <a class="store-badge store-badge--hero" href="#download" aria-label="App Store'dan indir">
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 20.94c1.5 0 2.75 1.06 4 1.06 3 0 6-8 6-12 0-1-.5-2-1-2s-1 .5-2 1c-1 1-2 1-4 1s-3-.5-4-1c-1-.5-2-.5-3 0s-1.5.5-2 1c-.5.5-1 1-1 2 0 4 3 11 6 11Z"/><path d="M12 11c0-1 .5-2 1-2s1 .5 2 1c1 1 2 1 4 1"/><path d="M14 5c0 1-1 2-2 2s-2-1-2-2 1-2 2-2 2 1 2 2Z"/><path d="M12 22c-1.5 0-2.75-1.06-4-1.06"/></svg>
                    <span class="store-badge__content">
                        <span class="store-badge__eyebrow">Şimdi indir</span>
                        <span class="store-badge__label">App Store</span>
                    </span>
                </a>
            </div>

            <div class="hero-metrics">
                <?php foreach ($hero_metrics as $metric) : ?>
                    <article class="metric-card" data-reveal="up">
                        <strong><?php echo esc_html($metric['value']); ?></strong>
                        <span><?php echo esc_html($metric['label']); ?></span>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="hero-visual js-tilt" data-reveal="zoom">
            <div class="hero-stage hero-stage--image">
                <span class="hero-image-glow" aria-hidden="true"></span>
                <figure class="hero-image-frame">
                    <img
                        class="hero-image"
                        src="<?php echo esc_url($hero_image_url); ?>"
                        alt="Momsy hamilelik takip uygulaması ekran görüntüsü"
                        loading="eager"
                        decoding="async"
                    >
                </figure>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="hero-trustbar" data-reveal="up">
            <span>Topluluk akışı</span>
            <span>Gebelik takibi</span>
            <span>AI asistan</span>
            <span>Partner senkronu</span>
            <span>Uzman katmanı</span>
        </div>
    </div>
</section>
