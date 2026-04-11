<?php
if (!defined('ABSPATH')) {
    exit;
}

$footer_social_links = array(
    'instagram' => '#',
    'x' => '#',
    'tiktok' => '#',
    'youtube' => '#',
);
?>
    <footer class="site-footer" role="contentinfo">
        <div class="container footer-shell">
            <section class="footer-top-panel" data-reveal="up">
                <div class="footer-top-panel__content">
                    <span class="section-kicker">
                        <i class="fa-solid fa-sparkles" aria-hidden="true"></i>
                        Teknolojik ama sıcak bir deneyim
                    </span>
                    <h2 class="footer-top-panel__title">Anneliğin ritmini sadeleştiren uygulamayı keşfetmeye hazır mısın?</h2>
                    <p class="footer-top-panel__copy">Topluluk, gebelik takibi, partner senkronu ve AI destekli rehberlik aynı ekranda birleşsin. Momsy hem güven hissi versin hem de gerçekten indirilesi görünsün.</p>
                </div>

                <div class="footer-top-panel__actions">
                    <a class="button button--primary" href="#download">
                        <span>Hemen indir</span>
                        <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                    </a>
                    <a class="button button--ghost" href="#features">
                        <span>Deneyimi incele</span>
                    </a>
                </div>
            </section>

            <div class="footer-main">
                <div class="footer-brand">
                    <a class="footer-brand__logo" href="<?php echo esc_url(home_url('/')); ?>">
                        <span class="site-logo__mark" aria-hidden="true">
                            <i class="fa-solid fa-heart"></i>
                        </span>
                        <span class="site-logo__text">
                            <strong>Momsy</strong>
                            <span>mother care app</span>
                        </span>
                    </a>
                    <p class="footer-brand__copy">Anne ve anne adayları için tasarlanan Momsy; duygusal destek, net takip ve modern uygulama deneyimini aynı akışta buluşturan yeni nesil bir landing deneyimi sunar.</p>

                    <div class="footer-brand__chips">
                        <span>Topluluk odaklı</span>
                        <span>Gebelik takibi</span>
                        <span>Partner senkronu</span>
                    </div>

                    <div class="footer-social" aria-label="Sosyal medya alanı">
                        <a class="footer-social__link" href="<?php echo esc_url($footer_social_links['instagram']); ?>" aria-label="Instagram">
                            <i class="fa-brands fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a class="footer-social__link" href="<?php echo esc_url($footer_social_links['x']); ?>" aria-label="X">
                            <i class="fa-brands fa-x-twitter" aria-hidden="true"></i>
                        </a>
                        <a class="footer-social__link" href="<?php echo esc_url($footer_social_links['tiktok']); ?>" aria-label="TikTok">
                            <i class="fa-brands fa-tiktok" aria-hidden="true"></i>
                        </a>
                        <a class="footer-social__link" href="<?php echo esc_url($footer_social_links['youtube']); ?>" aria-label="YouTube">
                            <i class="fa-brands fa-youtube" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>

                <nav class="footer-column" aria-label="Footer menü">
                    <span class="footer-column__title">Menü</span>
                    <a href="#hero">Anasayfa</a>
                    <a href="#features">Özellikler</a>
                    <a href="#community">Topluluk</a>
                    <a href="#tracking">Gebelik Takibi</a>
                    <a href="#ai-assistant">AI Asistan</a>
                    <a href="#download">İndir</a>
                </nav>

                <div class="footer-column">
                    <span class="footer-column__title">Ürün</span>
                    <a href="#match">Partner senkronu</a>
                    <a href="#experts">Uzman katmanı</a>
                    <a href="#download">Store bağlantıları</a>
                    <a href="#">Bekleme listesi</a>
                </div>

                <div class="footer-column">
                    <span class="footer-column__title">İletişim</span>
                    <a href="mailto:hello@momsy.app">hello@momsy.app</a>
                    <a href="#">İletişim Formu</a>
                    <a href="#">İş birlikleri</a>
                    <a href="#">Basın Kiti</a>
                </div>

                <div class="footer-column">
                    <span class="footer-column__title">Yasal</span>
                    <a href="#">Gizlilik Politikası</a>
                    <a href="#">KVKK</a>
                    <a href="#">Kullanım Koşulları</a>
                    <a href="#">Çerez Tercihleri</a>
                </div>
            </div>

            <div class="footer-bottom">
                <p class="footer-copy">Momsy &copy; <?php echo esc_html(wp_date('Y')); ?>. Anne yolculuğunu daha düzenli, daha sıcak ve daha teknolojik hissettirmek için tasarlandı.</p>
                <p class="footer-note">Store, sosyal medya ve iletişim alanları şu an placeholder olarak yapılandırıldı; gerçek bağlantılar geldiğinde aynı yapı üzerinden kolayca güncellenebilir.</p>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>
