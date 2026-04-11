<?php
if (!defined('ABSPATH')) {
    exit;
}

$match_benefits = array(
    array(
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M19 8v6"/><path d="M22 11h-6"/></svg>',
        'title' => 'Partneri davet et',
        'text' => 'Sürece partneri kolayca dahil ederek takip deneyimini paylaş.',
    ),
    array(
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="8" height="4" x="8" y="2" rx="1" ry="1"/><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><path d="M12 11h4"/><path d="M12 16h4"/><path d="M8 11h2"/><path d="M8 16h2"/></svg>',
        'title' => 'Listeleri birlikte yönetin',
        'text' => 'Hazırlıklar, doğum çantası ve önemli notlar aynı yerde kalsın.',
    ),
    array(
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/><path d="m9 16 2 2 4-4"/></svg>',
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
                    Partner senkronu
                </span>
                <h2 id="match-heading" class="section-title">Ebeveynliği tek kişilik yük olmaktan çıkarıp paylaşılan bir dijital akışa dönüştürür.</h2>
                <p class="section-copy">Momsy; randevuları, semptomları, görevleri ve küçük hazırlıkları iki tarafta da görünür hale getirir. Böylece kullanıcı yalnızca destek hissetmez, gerçekten birlikte hareket ettiğini görür.</p>

                <ul class="benefit-list" aria-label="Partner senkronu faydaları">
                    <?php foreach ($match_benefits as $benefit) : ?>
                        <li class="benefit-list__item" data-reveal="up">
                            <span class="benefit-list__icon" aria-hidden="true"><?php echo $benefit['icon']; ?></span>
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
