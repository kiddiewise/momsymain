<?php
if (!defined('ABSPATH')) {
    exit;
}

// Replace this remote placeholder with your real app screenshot when ready.
$hero_mockup_url = 'https://placehold.co/390x844/f3ecff/655b79?text=Momsy+Screen';

$hero_highlights = array(
    array(
        'modifier' => 'community',
        'icon' => 'fa-solid fa-comments',
        'title' => 'Topluluk',
        'text' => 'Benzer yolculuklardan geçen annelerle aynı akışta buluş.',
    ),
    array(
        'modifier' => 'tracking',
        'icon' => 'fa-solid fa-calendar-check',
        'title' => 'Gebelik Takibi',
        'text' => 'Hafta hafta ilerleyişi ve önemli anları birlikte izle.',
    ),
    array(
        'modifier' => 'assistant',
        'icon' => 'fa-solid fa-robot',
        'title' => 'Momsy Asistan',
        'text' => 'Sorularına hızlı yanıtlar ve günlük destek tek yerde.',
    ),
);
?>
<section id="hero" class="section section--hero" aria-labelledby="hero-heading">
    <div class="container section__inner hero-layout">
        <div class="hero-content">
            <span class="hero-eyebrow">
                <span class="hero-eyebrow__dot" aria-hidden="true"></span>
                Momsy
            </span>
            <p class="hero-tagline">Burada herkes seni tam olarak anlıyor.</p>
            <h1 id="hero-heading" class="hero-title">Anne ve anne adayları için bir topluluk ve destek platformu.</h1>
            <p class="hero-text">Momsy; sosyal topluluk, gebelik takibi, AI asistan ve eşinle ortak takip deneyimini tek bir güven veren uygulamada bir araya getirir.</p>

            <div class="button-group hero-actions">
                <a class="store-button store-button--filled" href="#download" aria-label="Google Play'den indir">
                    <i class="fa-brands fa-google-play" aria-hidden="true"></i>
                    <span class="store-button__content">
                        <span class="store-button__eyebrow">Hemen indir</span>
                        <span class="store-button__label">Google Play</span>
                    </span>
                </a>
                <a class="store-button" href="#download" aria-label="App Store'dan indir">
                    <i class="fa-brands fa-app-store-ios" aria-hidden="true"></i>
                    <span class="store-button__content">
                        <span class="store-button__eyebrow">Hemen indir</span>
                        <span class="store-button__label">App Store</span>
                    </span>
                </a>
                <a class="hero-link-button" href="#features">
                    <span>Özellikleri keşfet</span>
                    <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>

        <div class="hero-visual">
            <div class="hero-device-stage">
                <div class="hero-device-shell">
                    <div class="hero-device">
                        <span class="hero-device-notch" aria-hidden="true"></span>
                        <img
                            class="hero-device-image"
                            src="<?php echo esc_url($hero_mockup_url); ?>"
                            alt="Momsy uygulama ekranları için örnek görsel"
                            loading="eager"
                        >
                    </div>
                </div>
                <p class="hero-visual-caption">Gerçek ekran görüntülerin geldiğinde bu alan tek görsel URL&apos;i ile kolayca değiştirilebilir.</p>
            </div>

            <?php foreach ($hero_highlights as $highlight) : ?>
                <article class="hero-floating-card hero-floating-card--<?php echo esc_attr($highlight['modifier']); ?>">
                    <span class="hero-floating-card__icon" aria-hidden="true">
                        <i class="<?php echo esc_attr($highlight['icon']); ?>"></i>
                    </span>
                    <div>
                        <h3 class="hero-floating-card__title"><?php echo esc_html($highlight['title']); ?></h3>
                        <p class="hero-floating-card__text"><?php echo esc_html($highlight['text']); ?></p>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
