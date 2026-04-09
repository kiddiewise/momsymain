<?php
if (!defined('ABSPATH')) {
    exit;
}

$footer_social_links = array(
    'instagram' => '#',
    'x' => '#',
    'tiktok' => '#',
);
?>
    <footer class="site-footer" role="contentinfo">
        <div class="container footer-shell">
            <div class="footer-main">
                <div class="footer-brand">
                    <a class="footer-brand__logo" href="<?php echo esc_url(home_url('/')); ?>">Momsy</a>
                    <p class="footer-brand__copy">Anne ve anne adayları için topluluk, takip ve rehberliği sakin bir deneyimde bir araya getiren destek platformu.</p>

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
                    </div>
                </div>

                <nav class="footer-column" aria-label="Footer menü">
                    <span class="footer-column__title">Menü</span>
                    <a href="#features">Özellikler</a>
                    <a href="#community">Topluluk</a>
                    <a href="#tracking">Gebelik Takibi</a>
                    <a href="#ai-assistant">Momsy Asistan</a>
                    <a href="#download">İndir</a>
                </nav>

                <div class="footer-column">
                    <span class="footer-column__title">İletişim</span>
                    <a href="mailto:hello@momsy.app">hello@momsy.app</a>
                    <a href="#">İletişim Formu</a>
                    <a href="#">Basın Kiti</a>
                </div>

                <div class="footer-column">
                    <span class="footer-column__title">Yasal</span>
                    <a href="#">Gizlilik Politikası</a>
                    <a href="#">KVKK</a>
                    <a href="#">Kullanım Koşulları</a>
                </div>
            </div>

            <div class="footer-bottom">
                <p class="footer-copy">Momsy &copy; <?php echo date('Y'); ?>. Toplulukla güçlenen anne yolculuğu.</p>
                <p class="footer-note">Sosyal medya, iletişim ve yasal bağlantılar için placeholder alanlar hazırlandı.</p>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>
