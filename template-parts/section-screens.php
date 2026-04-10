<?php
if (!defined('ABSPATH')) {
    exit;
}

// Replace this mockup image with a newer pregnancy tracking asset when ready.
$tracking_mockup_url = 'https://momsy.com.tr/wp-content/uploads/2026/04/Adsiz-tasarim.png';

$tracking_benefits = array(
    array(
        'icon' => 'fa-solid fa-calendar-week',
        'title' => 'Hafta hafta ilerleyiş',
        'text' => 'Her haftayı sade bir akışla takip ederek süreci daha net gör.',
    ),
    array(
        'icon' => 'fa-solid fa-seedling',
        'title' => 'Bebeğin gelişimini izle',
        'text' => 'Gelişim sürecini anlaşılır ve sakin bir dille takip et.',
    ),
    array(
        'icon' => 'fa-solid fa-spa',
        'title' => 'Annelik farkındalığı kazan',
        'text' => 'Kendi bedenindeki değişimleri fark ederek daha hazır hisset.',
    ),
);
?>
<section id="tracking" class="section section--story section--story-tracking" aria-labelledby="tracking-heading">
    <div class="container section__inner story-layout story-layout--reverse">
        <div class="story-content">
            <span class="section-label">Gebelik Takibi</span>
            <h2 id="tracking-heading" class="story-title">Her haftayı daha anlaşılır, daha düzenli ve daha sakin bir deneyime dönüştürür.</h2>
            <p class="section-copy story-copy">Momsy gebelik takibi; süreci sadece sayılarla değil, anlamlı bir ritimle sunar. Bebeğin gelişimini izlerken annenin kendi farkındalığını da destekler; böylece her yeni haftaya daha hazır ve daha huzurlu başlanır.</p>

            <ul class="story-list" aria-label="Gebelik takibi faydaları">
                <?php foreach ($tracking_benefits as $benefit) : ?>
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
                <span>Takip deneyimini keşfet</span>
                <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
            </a>
        </div>

        <div class="story-visual">
            <div class="story-device-stage">
                <img
                    class="story-device-image"
                    src="<?php echo esc_url($tracking_mockup_url); ?>"
                    alt="Gebelik takibi deneyimi için örnek ekran"
                    loading="lazy"
                >

                <article class="story-floating-card story-floating-card--top story-floating-card--accent">
                    <span class="story-floating-card__icon" aria-hidden="true"><i class="fa-solid fa-baby"></i></span>
                    <div>
                        <p class="story-floating-card__eyebrow">Hafta 24</p>
                        <p class="story-floating-card__title">Gelişim notları ve önemli değişimler tek bakışta.</p>
                    </div>
                </article>

                <article class="story-floating-card story-floating-card--bottom">
                    <span class="story-floating-card__icon" aria-hidden="true"><i class="fa-solid fa-check"></i></span>
                    <div>
                        <p class="story-floating-card__eyebrow">Daha düzenli</p>
                        <p class="story-floating-card__title">Takip ettikçe belirsizlik azalır, ritim netleşir.</p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
