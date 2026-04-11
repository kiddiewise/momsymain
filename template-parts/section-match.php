<?php
if (!defined('ABSPATH')) {
    exit;
}

$match_benefits = array(
    array(
        'icon' => 'fa-solid fa-user-plus',
        'title' => 'Partneri davet et',
        'text' => 'Sürece partneri kolayca dahil ederek takip deneyimini paylaş.',
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
<section id="match" class="section section--match" aria-labelledby="match-heading">
    <div class="container section-panel section-panel--match">
        <div class="showcase-layout showcase-layout--reverse">
            <div class="showcase-copy" data-reveal="up">
                <span class="section-kicker">
                    <i class="fa-solid fa-link" aria-hidden="true"></i>
                    Partner senkronu
                </span>
                <h2 id="match-heading" class="section-title">Ebeveynliği tek kişilik yük olmaktan çıkarıp paylaşılan bir dijital akışa dönüştürür.</h2>
                <p class="section-copy">Momsy; randevuları, semptomları, görevleri ve küçük hazırlıkları iki tarafta da görünür hale getirir. Böylece kullanıcı yalnızca destek hissetmez, gerçekten birlikte hareket ettiğini görür.</p>

                <ul class="benefit-list" aria-label="Partner senkronu faydaları">
                    <?php foreach ($match_benefits as $benefit) : ?>
                        <li class="benefit-list__item" data-reveal="up">
                            <span class="benefit-list__icon" aria-hidden="true"><i class="<?php echo esc_attr($benefit['icon']); ?>"></i></span>
                            <div>
                                <strong><?php echo esc_html($benefit['title']); ?></strong>
                                <p><?php echo esc_html($benefit['text']); ?></p>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="sync-board js-tilt" data-reveal="zoom">
                <div class="sync-column">
                    <span class="label-soft">Anne görünümü</span>
                    <strong>Bugün üç görev kaldı</strong>
                    <ul>
                        <li>Doktor notunu ekle</li>
                        <li>Su tüketimini güncelle</li>
                        <li>Hastane çantası kontrolü</li>
                    </ul>
                </div>

                <div class="sync-connector" aria-hidden="true">
                    <span><i class="fa-solid fa-arrows-rotate"></i></span>
                </div>

                <div class="sync-column sync-column--secondary">
                    <span class="label-soft">Partner görünümü</span>
                    <strong>Aynı liste senkronlandı</strong>
                    <ul>
                        <li>Randevu saati kaydedildi</li>
                        <li>Eksik malzeme işaretlendi</li>
                        <li>Akşam hatırlatması açık</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
