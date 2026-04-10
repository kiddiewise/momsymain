<?php
if (!defined('ABSPATH')) {
    exit;
}

// Replace this mockup image with a newer AI assistant asset when ready.
$assistant_mockup_url = 'https://momsy.com.tr/wp-content/uploads/2026/04/Adsiz-tasarim.png';

$assistant_benefits = array(
    array(
        'icon' => 'fa-solid fa-bolt',
        'title' => 'Hızlı bilgiye ulaş',
        'text' => 'Aklına takılan sorular için uzun aramalar yerine anında yönlendirme al.',
    ),
    array(
        'icon' => 'fa-solid fa-shield-heart',
        'title' => 'Güven veren ton',
        'text' => 'Telaşı artırmadan, seni rahatlatan bir dille destek sunar.',
    ),
    array(
        'icon' => 'fa-solid fa-user-doctor',
        'title' => 'Doktor yerine geçmez',
        'text' => 'Tıbbi karar vermez; doğru anda doğru soruları sormana yardımcı olur.',
    ),
);
?>
<section id="ai-assistant" class="section section--story section--story-assistant" aria-labelledby="ai-assistant-heading">
    <div class="container section__inner story-layout">
        <div class="story-visual">
            <div class="story-device-stage">
                <div class="story-device-shell">
                    <div class="story-device">
                        <img
                            class="story-device-image"
                            src="<?php echo esc_url($assistant_mockup_url); ?>"
                            alt="Momsy Asistan deneyimi için örnek ekran"
                            loading="lazy"
                        >
                    </div>
                </div>

                <article class="story-floating-card story-floating-card--top">
                    <span class="story-floating-card__icon" aria-hidden="true"><i class="fa-solid fa-sparkles"></i></span>
                    <div>
                        <p class="story-floating-card__eyebrow">Nazik destek</p>
                        <p class="story-floating-card__title">Kafan karışık olduğunda hızlı ve açık bir rehberlik sunar.</p>
                    </div>
                </article>

                <article class="story-floating-card story-floating-card--bottom story-floating-card--soft">
                    <span class="story-floating-card__icon" aria-hidden="true"><i class="fa-solid fa-stethoscope"></i></span>
                    <div>
                        <p class="story-floating-card__eyebrow">Dengeli yaklaşım</p>
                        <p class="story-floating-card__title">Tıbbi uzmanın yerini almaz, günlük kararlarını kolaylaştırır.</p>
                    </div>
                </article>
            </div>
        </div>

        <div class="story-content">
            <span class="section-label">Momsy Asistan</span>
            <h2 id="ai-assistant-heading" class="story-title">Hızlı bilgi veren, sakinleştiren ve yol gösteren bir AI destek katmanı.</h2>
            <p class="section-copy story-copy">Momsy Asistan, annelik sürecinde sık sorulan sorular için ulaşılabilir bir ilk destek noktası olur. Amacı doktorun yerini almak değil; seni gereksiz bilgi karmaşasından çıkarıp daha güvenli, daha bilinçli bir adım atmana yardım etmektir.</p>

            <ul class="story-list" aria-label="Momsy Asistan faydaları">
                <?php foreach ($assistant_benefits as $benefit) : ?>
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
                <span>Momsy Asistan'ı dene</span>
                <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
            </a>
        </div>
    </div>
</section>
