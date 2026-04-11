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
    <div class="container section-panel section-panel--experts">
        <div class="showcase-layout showcase-layout--experts">
            <div class="showcase-copy" data-reveal="up">
                <div class="experts-header-row">
                    <span class="section-kicker">
                        <i class="fa-solid fa-user-doctor" aria-hidden="true"></i>
                        Uzman destek katmanı
                    </span>
                    <span class="experts-badge">
                        <i class="fa-regular fa-clock" aria-hidden="true"></i>
                        Yakında
                    </span>
                </div>

                <h2 id="experts-heading" class="section-title">Topluluğun sıcaklığını korurken zamanla profesyonel rehberlikle güçlenecek bir yapı.</h2>
                <p class="section-copy">Momsy’nin bugünkü kalbi toplulukta atıyor. İlerleyen sürüm yol haritasında doktor, doula, psikolog, emzirme danışmanı ve diyetisyen gibi uzmanlarla desteklenecek bir güven katmanı planlanıyor.</p>

                <ul class="benefit-list benefit-list--compact" aria-label="Uzman destek yaklaşımı">
                    <li class="benefit-list__item" data-reveal="up">
                        <span class="benefit-list__icon" aria-hidden="true"><i class="fa-solid fa-shield-heart"></i></span>
                        <div>
                            <strong>İkinci güven halkası</strong>
                            <p>Topluluğu gölgelemeyen ama ihtiyaç anında profesyonel desteğe uzanan akış.</p>
                        </div>
                    </li>
                    <li class="benefit-list__item" data-reveal="up">
                        <span class="benefit-list__icon" aria-hidden="true"><i class="fa-solid fa-wave-square"></i></span>
                        <div>
                            <strong>Daha sakin kararlar</strong>
                            <p>Kullanıcıyı yormayan, net şekilde yönlendiren bilgi katmanı.</p>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="experts-panel" data-reveal="zoom">
                <div class="experts-panel__header">
                    <span class="label-soft">Planlanan kategoriler</span>
                    <strong>Sağlık ve annelik sürecine profesyonel rehberlik katacak uzman alanları.</strong>
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
    </div>
</section>
