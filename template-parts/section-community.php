<?php
if (!defined('ABSPATH')) {
    exit;
}

// Replace this mockup image with a newer community asset when ready.
$community_mockup_url = 'https://momsy.com.tr/wp-content/uploads/2026/04/Adsiz-tasarim.png';

$community_benefits = array(
    array(
        'icon' => 'fa-solid fa-comments',
        'title' => 'Deneyimini paylaş',
        'text' => 'Günlük hislerini, sorularını ve küçük zaferlerini rahatça anlat.',
    ),
    array(
        'icon' => 'fa-solid fa-heart',
        'title' => 'Yorum ve destek al',
        'text' => 'Benzer süreçten geçen annelerden sıcak ve hızlı geri bildirim gör.',
    ),
    array(
        'icon' => 'fa-solid fa-hands-holding-circle',
        'title' => 'Yalnız hissetme',
        'text' => 'Zor anlarda bile seni anlayan bir topluluğun içinde kal.',
    ),
);
?>
<section id="community" class="section section--story section--story-community" aria-labelledby="community-heading">
    <div class="container section__inner story-layout">
        <div class="story-visual">
            <div class="story-device-stage">
                <div class="story-device-shell">
                    <div class="story-device">
                        <img
                            class="story-device-image"
                            src="<?php echo esc_url($community_mockup_url); ?>"
                            alt="Momsy topluluk deneyimi için örnek ekran"
                            loading="lazy"
                        >
                    </div>
                </div>

                <article class="story-floating-card story-floating-card--top">
                    <span class="story-floating-card__icon" aria-hidden="true"><i class="fa-solid fa-comment-dots"></i></span>
                    <div>
                        <p class="story-floating-card__eyebrow">Gerçek destek</p>
                        <p class="story-floating-card__title">Yorumlar ve deneyimler aynı akışta buluşur.</p>
                    </div>
                </article>

                <article class="story-floating-card story-floating-card--bottom">
                    <span class="story-floating-card__icon" aria-hidden="true"><i class="fa-solid fa-hand-holding-heart"></i></span>
                    <div>
                        <p class="story-floating-card__eyebrow">Topluluk hissi</p>
                        <p class="story-floating-card__title">Kendini açıkça ifade ettiğin güvenli bir alan.</p>
                    </div>
                </article>
            </div>
        </div>

        <div class="story-content">
            <span class="section-label">Topluluk</span>
            <h2 id="community-heading" class="story-title">Yalnız hissettirmeyen, gerçek deneyimlerle güçlenen bir anne topluluğu.</h2>
            <p class="section-copy story-copy">Momsy topluluğu; annelerin ve anne adaylarının günlük hayatını, kaygılarını ve sevincini paylaşabildiği sıcak bir alan sunar. Burada insanlar sadece içerik görmez; anlaşıldığını, destek bulduğunu ve aynı yoldan geçenlerle bağ kurduğunu hisseder.</p>

            <ul class="story-list" aria-label="Topluluk faydaları">
                <?php foreach ($community_benefits as $benefit) : ?>
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
                <span>Topluluğu hissetmeye başla</span>
                <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
            </a>
        </div>
    </div>
</section>
