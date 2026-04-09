<?php
if (!defined('ABSPATH')) {
    exit;
}

// Replace this placeholder image with your real partner tracking screen later.
$match_mockup_url = 'https://placehold.co/900x1600/1f1b26/f7f1ff?text=Partner+Tracking';

$match_benefits = array(
    array(
        'icon' => 'fa-solid fa-user-plus',
        'title' => 'Babayı davet et',
        'text' => 'Sürece babayı kolayca dahil ederek takip deneyimini paylaş.',
    ),
    array(
        'icon' => 'fa-solid fa-clipboard-list',
        'title' => 'Listeleri birlikte yönetin',
        'text' => 'Hazırlıklar, doğum çantası ve önemli notlar aynı yerde kalsın.',
    ),
    array(
        'icon' => 'fa-solid fa-calendar-check',
        'title' => 'Randevu ve semptomları senkronize et',
        'text' => 'Takvim, belirtiler ve notlar iki taraf için de görünür olsun.',
    ),
);
?>
<section id="match" class="section section--story section--story-match" aria-labelledby="match-heading">
    <div class="container section__inner story-layout story-layout--reverse">
        <div class="story-content">
            <span class="section-label">Eşinle Eşleş</span>
            <h2 id="match-heading" class="story-title">Ebeveynliği tek kişilik bir yük olmaktan çıkarıp birlikte yönetilen bir yolculuğa dönüştürür.</h2>
            <p class="section-copy story-copy">Momsy, babayı davet ederek gebelik sürecini birlikte takip etmeyi kolaylaştırır. Randevular, semptomlar, hazırlık listeleri ve önemli notlar aynı düzende toplandığında ebeveynlik daha paylaşılan, daha sakin ve daha güvenli hissettirir.</p>

            <ul class="story-list" aria-label="Eşinle eşleş faydaları">
                <?php foreach ($match_benefits as $benefit) : ?>
                    <li class="story-list__item">
                        <span class="story-list__icon" aria-hidden="true"><i class="<?php echo esc_attr($benefit['icon']); ?>"></i></span>
                        <div>
                            <strong class="story-list__title"><?php echo esc_html($benefit['title']); ?></strong>
                            <span class="story-list__text"><?php echo esc_html($benefit['text']); ?></span>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>

            <a class="story-mini-cta" href="#download">
                <span>Birlikte ebeveynliği başlat</span>
                <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
            </a>
        </div>

        <div class="story-visual">
            <div class="story-device-stage">
                <div class="story-device-shell">
                    <div class="story-device">
                        <img
                            class="story-device-image"
                            src="<?php echo esc_url($match_mockup_url); ?>"
                            alt="Eşinle ortak takip deneyimi için örnek ekran"
                            loading="lazy"
                        >
                    </div>
                </div>

                <article class="story-floating-card story-floating-card--top">
                    <span class="story-floating-card__icon" aria-hidden="true"><i class="fa-solid fa-user-group"></i></span>
                    <div>
                        <p class="story-floating-card__eyebrow">Birlikte takip</p>
                        <p class="story-floating-card__title">İki ebeveyn aynı plan üzerinden hareket eder.</p>
                    </div>
                </article>

                <article class="story-floating-card story-floating-card--bottom story-floating-card--accent">
                    <span class="story-floating-card__icon" aria-hidden="true"><i class="fa-solid fa-list-check"></i></span>
                    <div>
                        <p class="story-floating-card__eyebrow">Paylaşılan sorumluluk</p>
                        <p class="story-floating-card__title">Randevu, semptom ve hazırlık listeleri birlikte yönetilir.</p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
