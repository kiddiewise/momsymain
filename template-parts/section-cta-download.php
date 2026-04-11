<?php
if (!defined('ABSPATH')) {
    exit;
}

$google_play_url = '#';
$app_store_url = '#';
?>
<section id="download" class="section section--final-cta" aria-labelledby="download-heading">
    <div class="container">
        <div class="download-panel" data-reveal="up">
            <div class="download-panel__copy">
                <span class="section-kicker">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7,10 12,15 17,10"/><line x1="12" x2="12" y1="15" y2="3"/></svg>
                    İndirmeye hazır
                </span>
                <h2 id="download-heading" class="section-title">Topluluğa, sakin takibe ve modern app deneyimine tek dokunuşla katıl.</h2>
                <p class="section-copy">Momsy’nin yeni ön yüzü artık sadece bilgi veren değil; gerçek ürün değeri gösteren, feminen ama güçlü, mobilde etkileyici ve store bağlantılarına yönlendiren tam bir uygulama vitrini olarak çalışıyor.</p>

                <div class="download-panel__actions">
                    <a class="store-badge store-badge--filled" href="<?php echo esc_url($google_play_url); ?>" aria-label="Google Play'den indir">
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polygon points="6,3 20,12 6,21 6,3"/></svg>
                        <span class="store-badge__content">
                            <span class="store-badge__eyebrow">Android için</span>
                            <span class="store-badge__label">Google Play</span>
                        </span>
                    </a>
                    <a class="store-badge" href="<?php echo esc_url($app_store_url); ?>" aria-label="App Store'dan indir">
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="M10 4v4"/><path d="M2 8h20"/><path d="M6 4v4"/></svg>
                        <span class="store-badge__content">
                            <span class="store-badge__eyebrow">iPhone için</span>
                            <span class="store-badge__label">App Store</span>
                        </span>
                    </a>
                </div>
            </div>

            <div class="download-panel__meta">
                <div class="download-stat">
                    <span>Deneyim hissi</span>
                    <strong>Premium, sıcak, mobile-first</strong>
                </div>
                <div class="download-stat">
                    <span>Modüller</span>
                    <strong>Topluluk • Takip • AI • Partner</strong>
                </div>
                <div class="download-stat">
                    <span>Bir sonraki adım</span>
                    <strong>Gerçek store linkleri ve ekran görselleri</strong>
                </div>
            </div>
        </div>
    </div>
</section>
