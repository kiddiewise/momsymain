<?php
if (!defined('ABSPATH')) {
    exit;
}

$expert_categories = array(
    array(
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4.8 2.3A.3.3 0 1 0 5 2H4a2 2 0 0 0-2 2v5a6 6 0 0 0 6 6v0a6 6 0 0 0 6-6V4a2 2 0 0 0-2-2h-1a.2.2 0 1 0 .3.3"/><path d="M8 15v1a6 6 0 0 0 6 6v0a6 6 0 0 0 6-6v-4"/><circle cx="20" cy="10" r="2"/></svg>',
        'title' => 'Doktor',
        'text' => 'Tıbbi süreçlerde daha güvenli yön bulmana destek olacak uzman katmanı.',
    ),
    array(
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 14h2a2 2 0 1 0 0-4h-3c-.6 0-1.1.2-1.4.6L7 12c-.3-.4-.8-.6-1.4-.6H3a2 2 0 0 0 0 4h2"/><path d="M17 18h1a2 2 0 0 0 0-4h-2"/><path d="M7 18H4a2 2 0 0 1 0-4h1"/><path d="M21 12a9 9 0 0 1-9 9 9 9 0 0 1-9-9 9 9 0 0 1 9-9 9 9 0 0 1 9 9Z"/><path d="M12 8v4"/><path d="M12 16h.01"/></svg>',
        'title' => 'Doula',
        'text' => 'Doğuma ve doğum sonrasına daha hazır hissettiren destekleyici rehberlik.',
    ),
    array(
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5a3 3 0 1 0-5.997.125 4 4 0 0 0-2.526 5.77 4 4 0 0 0 .556 6.588A4 4 0 1 0 12 18Z"/><path d="M12 5a3 3 0 1 1 0 5.997"/><path d="M9 12a2.5 2.5 0 1 0 5 0 2.5 2.5 0 0 0-5 0Z"/><path d="M12 7.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z"/><path d="M15 12a2.5 2.5 0 1 0 5 0 2.5 2.5 0 0 0-5 0Z"/><path d="M12 16.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z"/><path d="M18 12a2.5 2.5 0 1 0 5 0 2.5 2.5 0 0 0-5 0Z"/><path d="M12 7.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z"/><path d="M9 12a2.5 2.5 0 1 0 5 0 2.5 2.5 0 0 0-5 0Z"/><path d="M12 16.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z"/><path d="M15 12a2.5 2.5 0 1 0 5 0 2.5 2.5 0 0 0-5 0Z"/><path d="M12 7.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z"/><path d="M18 12a2.5 2.5 0 1 0 5 0 2.5 2.5 0 0 0-5 0Z"/><path d="M12 16.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z"/></svg>',
        'title' => 'Psikolog',
        'text' => 'Duygusal dengeyi korumaya yardım eden profesyonel bakış açısı.',
    ),
    array(
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12h.01"/><path d="M15 12h.01"/><path d="M10 16c.5.3 1.2.5 2 .5s1.5-.2 2-.5"/><path d="M19 6.3a9 9 0 0 1 1.8 3.9 2 2 0 0 1 0 3.6 9 9 0 0 1-17.6 0 2 2 0 0 1 0-3.6A9 9 0 0 1 12 3c2 0 3.5 1.1 3.5 2.5s-.9 2.5-2 2.5-2.5.5-2.5 2v1c0 .5.5 1 1 1s1-.5 1-1V12"/><path d="M8 21c.5 0 1-.2 1.5-.6"/><path d="M16.5 20.4c.5.4 1.1.6 1.5.6"/></svg>',
        'title' => 'Emzirme Danışmanı',
        'text' => 'İlk günlerde sık sorulan konular için daha bilinçli adımlar atmana yardımcı olur.',
    ),
    array(
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20.94c1.5 0 2.75 1.06 4 1.06 3 0 6-8 6-12 0-1-.5-2-1-2s-1 .5-2 1c-1 1-2 1-4 1s-3-.5-4-1c-1-.5-2-.5-3 0s-1.5.5-2 1c-.5.5-1 1-1 2 0 4 3 11 6 11Z"/><path d="M12 11c0-1 .5-2 1-2s1 .5 2 1c1 1 2 1 4 1"/><path d="M14 5c0 1-1 2-2 2s-2-1-2-2 1-2 2-2 2 1 2 2Z"/><path d="M12 22c-1.5 0-2.75-1.06-4-1.06"/></svg>',
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4.8 2.3A.3.3 0 1 0 5 2H4a2 2 0 0 0-2 2v5a6 6 0 0 0 6 6v0a6 6 0 0 0 6-6V4a2 2 0 0 0-2-2h-1a.2.2 0 1 0 .3.3"/><path d="M8 15v1a6 6 0 0 0 6 6v0a6 6 0 0 0 6-6v-4"/><circle cx="20" cy="10" r="2"/></svg>
                        Uzman destek katmanı
                    </span>
                    <span class="experts-badge">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12,6 12,12 16,14"/></svg>
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
