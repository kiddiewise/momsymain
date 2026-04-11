<?php
if (!defined('ABSPATH')) {
    exit;
}

$hero_highlights = array(
    array(
        'modifier' => 'community',
        'icon' => 'fa-solid fa-heart-pulse',
        'title' => 'Günlük ritim',
        'text' => 'Semptom, enerji ve ruh halini tek bakışta izle.',
    ),
    array(
        'modifier' => 'tracking',
        'icon' => 'fa-solid fa-users',
        'title' => 'Sıcak topluluk',
        'text' => 'Aynı dönemde olan annelerle güvenli şekilde bağ kur.',
    ),
    array(
        'modifier' => 'assistant',
        'icon' => 'fa-solid fa-robot',
        'title' => 'AI rehberlik',
        'text' => 'Kafa karışıklığını azaltan sakin bir destek katmanı.',
    ),
);

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
            <div class="hero-stage">
                <div class="app-shell app-shell--hero">
                    <div class="app-shell__notch"></div>
                    <div class="app-shell__screen">
                        <div class="app-shell__status">
                            <span>09:41</span>
                            <span>Momsy Live</span>
                        </div>

                        <div class="app-shell__hero-card">
                            <span class="app-shell__hero-pill">Hafta 28 • Güvende ilerliyorsun</span>
                            <h2>Bugünün akışı</h2>
                            <p>Seni yormadan takip eden, nazikçe hatırlatan ve destek sunan teknoloji.</p>
                        </div>

                        <div class="app-shell__mini-grid">
                            <article class="mini-panel mini-panel--rose">
                                <span>Günlük his</span>
                                <strong>Dengeli</strong>
                                <small>Nefes, su ve dinlenme önerildi</small>
                            </article>
                            <article class="mini-panel mini-panel--violet">
                                <span>Topluluk</span>
                                <strong>+12 yeni paylaşım</strong>
                                <small>Benzer haftadaki anneler aktif</small>
                            </article>
                        </div>

                        <article class="app-shell__timeline-card">
                            <div>
                                <span class="label-soft">Partner senkronu</span>
                                <strong>Akşam kontrol listesi hazır</strong>
                            </div>
                            <i class="fa-solid fa-link" aria-hidden="true"></i>
                        </article>

                        <div class="app-shell__list">
                            <article>
                                <i class="fa-solid fa-heart-circle-check" aria-hidden="true"></i>
                                <div>
                                    <strong>Semptom takibi</strong>
                                    <span>Bugün yumuşak bir kontrol akışı açık</span>
                                </div>
                            </article>
                            <article>
                                <i class="fa-solid fa-comments" aria-hidden="true"></i>
                                <div>
                                    <strong>Topluluk alanı</strong>
                                    <span>“Benzer şeyleri yaşayan anneler burada.”</span>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>

                <?php foreach ($hero_highlights as $highlight) : ?>
                    <article class="floating-glass floating-glass--<?php echo esc_attr($highlight['modifier']); ?>">
                        <span class="floating-glass__icon" aria-hidden="true">
                            <i class="<?php echo esc_attr($highlight['icon']); ?>"></i>
                        </span>
                        <div>
                            <strong><?php echo esc_html($highlight['title']); ?></strong>
                            <p><?php echo esc_html($highlight['text']); ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
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
