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
            <span class="section-kicker section-kicker--hero">
                <i class="fa-solid fa-wand-magic-sparkles" aria-hidden="true"></i>
                2026 mobile app landing deneyimi
            </span>
            <h1 id="hero-heading" class="hero-title">Anne yolculuğunu tek uygulamada düzenleyen, sakinleştiren ve gerçekten indirilesi hissettiren bir deneyim.</h1>
            <p class="hero-description">Momsy; anne ve anne adayları için topluluk akışını, gebelik takibini, AI destekli rehberliği ve partner senkronunu zarif bir teknoloji katmanında birleştirir. Daha feminen, daha sıcak ve daha düzenli bir ön yüz deneyimi burada başlar.</p>

            <div class="hero-actions">
                <a class="button button--primary" href="#download" aria-label="Google Play ve App Store bağlantılarına git">
                    <span>Uygulamayı indir</span>
                    <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                </a>
                <a class="button button--ghost" href="#features">
                    <span>Özellikleri keşfet</span>
                </a>
            </div>

            <div class="hero-store-row" data-reveal="up">
                <a class="store-badge store-badge--filled" href="#download" aria-label="Google Play'den indir">
                    <i class="fa-brands fa-google-play" aria-hidden="true"></i>
                    <span class="store-badge__content">
                        <span class="store-badge__eyebrow">Şimdi indir</span>
                        <span class="store-badge__label">Google Play</span>
                    </span>
                </a>
                <a class="store-badge" href="#download" aria-label="App Store'dan indir">
                    <i class="fa-brands fa-app-store-ios" aria-hidden="true"></i>
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
