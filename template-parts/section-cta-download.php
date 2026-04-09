<?php
if (!defined('ABSPATH')) {
    exit;
}

$google_play_url = '#';
$app_store_url = '#';
?>
<section id="download" class="section section--final-cta" aria-labelledby="download-heading">
    <div class="container section__inner">
        <div class="final-cta">
            <div class="final-cta__content">
                <span class="section-label">İndirmeye Hazır</span>
                <h2 id="download-heading" class="final-cta__title">Anlaşıldığını hissettiren bir topluluğa, sakin bir takibe ve güven veren rehberliğe tek adımda katıl.</h2>
                <p class="section-copy final-cta__copy">Momsy; destek, topluluk, gebelik takibi ve yol gösterici rehberliği aynı akışta buluşturur. Anne ve anne adayları için tasarlanan bu deneyim, bugün sıcak bir toplulukla başlar; zamanla daha da güçlü bir destek ağına dönüşür.</p>

                <div class="button-group final-cta__actions">
                    <a class="store-button store-button--filled" href="<?php echo esc_url($google_play_url); ?>" aria-label="Google Play'den indir">
                        <i class="fa-brands fa-google-play" aria-hidden="true"></i>
                        <span class="store-button__content">
                            <span class="store-button__eyebrow">Hemen indir</span>
                            <span class="store-button__label">Google Play</span>
                        </span>
                    </a>
                    <a class="store-button" href="<?php echo esc_url($app_store_url); ?>" aria-label="App Store'dan indir">
                        <i class="fa-brands fa-app-store-ios" aria-hidden="true"></i>
                        <span class="store-button__content">
                            <span class="store-button__eyebrow">Hemen indir</span>
                            <span class="store-button__label">App Store</span>
                        </span>
                    </a>
                </div>
            </div>

            <div class="final-cta__meta">
                <span class="final-cta__pill">Anne ve anne adayları için</span>
                <span class="final-cta__pill">Topluluk odaklı destek</span>
                <span class="final-cta__pill">Yakında daha fazla uzman desteği</span>
            </div>
        </div>
    </div>
</section>
