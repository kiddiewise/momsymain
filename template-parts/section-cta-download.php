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
                    <i class="fa-solid fa-circle-down" aria-hidden="true"></i>
                    İndirmeye hazır
                </span>
                <h2 id="download-heading" class="section-title">Topluluğa, sakin takibe ve modern app deneyimine tek dokunuşla katıl.</h2>
                <p class="section-copy">Momsy’nin yeni ön yüzü artık sadece bilgi veren değil; gerçek ürün değeri gösteren, feminen ama güçlü, mobilde etkileyici ve store bağlantılarına yönlendiren tam bir uygulama vitrini olarak çalışıyor.</p>

                <div class="download-panel__actions">
                    <a class="store-badge store-badge--filled" href="<?php echo esc_url($google_play_url); ?>" aria-label="Google Play'den indir">
                        <i class="fa-brands fa-google-play" aria-hidden="true"></i>
                        <span class="store-badge__content">
                            <span class="store-badge__eyebrow">Android için</span>
                            <span class="store-badge__label">Google Play</span>
                        </span>
                    </a>
                    <a class="store-badge" href="<?php echo esc_url($app_store_url); ?>" aria-label="App Store'dan indir">
                        <i class="fa-brands fa-app-store-ios" aria-hidden="true"></i>
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
