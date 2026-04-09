<?php
if (!defined('ABSPATH')) {
    exit;
}

$expert_categories = array(
    array(
        'icon' => 'fa-solid fa-user-doctor',
        'title' => 'Doktor',
        'text' => 'Tıbbi süreçlerde daha güvenli yön bulmana destek olacak uzman katmanı.',
    ),
    array(
        'icon' => 'fa-solid fa-hand-holding-medical',
        'title' => 'Doula',
        'text' => 'Doğuma ve doğum sonrasına daha hazır hissettiren destekleyici rehberlik.',
    ),
    array(
        'icon' => 'fa-solid fa-brain',
        'title' => 'Psikolog',
        'text' => 'Duygusal dengeyi korumaya yardım eden profesyonel bakış açısı.',
    ),
    array(
        'icon' => 'fa-solid fa-baby',
        'title' => 'Emzirme Danışmanı',
        'text' => 'İlk günlerde sık sorulan konular için daha bilinçli adımlar atmana yardımcı olur.',
    ),
    array(
        'icon' => 'fa-solid fa-apple-whole',
        'title' => 'Diyetisyen',
        'text' => 'Gebelik ve annelik döneminde beslenme sürecini daha dengeli yönetmeni destekler.',
    ),
);
?>
<section id="experts" class="section section--experts-trust" aria-labelledby="experts-heading">
    <div class="container section__inner experts-trust">
        <div class="experts-trust__content">
            <div class="experts-trust__eyebrow-row">
                <span class="section-label">Uzman Destek Katmanı</span>
                <span class="experts-badge">
                    <i class="fa-regular fa-clock" aria-hidden="true"></i>
                    Yakında
                </span>
            </div>

            <h2 id="experts-heading" class="experts-trust__title">Topluluğun sıcaklığını korurken, zamanla uzman rehberliğiyle daha da güçlenen bir deneyim.</h2>
            <p class="section-copy experts-trust__copy">Momsy'nin bugünkü kalbi toplulukta atıyor. İlerleyen süreçte buna; doktor, doula, psikolog, emzirme danışmanı ve diyetisyen gibi uzmanlardan oluşacak dengeli bir destek katmanı eklenecek. Amaç; topluluğun samimiyetini korurken, ihtiyaç duyulan anlarda daha güvenli ve daha sürdürülebilir bir rehberlik sunmak.</p>

            <ul class="experts-trust__list" aria-label="Uzman destek yaklaşımı">
                <li>Topluluk odağını gölgelemeden, ihtiyaç halinde uzmanlığa uzanan ikinci bir güven katmanı kurulur.</li>
                <li>Anne yolculuğunun farklı anlarında doğru uzmanlık alanına erişmek daha kolay hale gelir.</li>
                <li>Hedef; daha sakin kararlar, daha güvenli yönlendirme ve uzun vadeli destek hissidir.</li>
            </ul>
        </div>

        <div class="experts-panel">
            <div class="experts-panel__header">
                <span class="experts-panel__label">Planlanan kategoriler</span>
                <p class="experts-panel__copy">Sağlık ve annelik sürecine profesyonel rehberlik katacak uzman alanları.</p>
            </div>

            <div class="experts-grid">
                <?php foreach ($expert_categories as $category) : ?>
                    <article class="expert-card">
                        <span class="expert-card__icon" aria-hidden="true">
                            <i class="<?php echo esc_attr($category['icon']); ?>"></i>
                        </span>
                        <h3 class="expert-card__title"><?php echo esc_html($category['title']); ?></h3>
                        <p class="expert-card__text"><?php echo esc_html($category['text']); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>

            <div class="experts-panel__footer">
                <span class="experts-panel__trust">
                    <i class="fa-solid fa-shield-heart" aria-hidden="true"></i>
                    Sıcak ama profesyonel bir destek katmanı olarak tasarlanıyor.
                </span>
            </div>
        </div>
    </div>
</section>
