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
                    <i class="fa-brands fa-google-play" aria-hidden="true"></i>
                    <span class="store-badge__content">
                        <span class="store-badge__eyebrow">Şimdi indir</span>
                        <span class="store-badge__label">Google Play</span>
                    </span>
                </a>
                <a class="store-badge store-badge--hero" href="#download" aria-label="App Store'dan indir">
                    <i class="fa-brands fa-apple" aria-hidden="true"></i>
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
