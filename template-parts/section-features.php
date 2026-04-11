<?php
if (!defined('ABSPATH')) {
    exit;
}

$features = array(
    array(
        'icon' => 'fa-solid fa-layer-group',
        'label' => 'Tek akışta',
        'title' => 'Topluluk, takip ve rehberlik aynı ürün mimarisinde birleşir.',
        'description' => 'Kullanıcıyı ekranlar arasında kaybettirmeyen; her modülü birbiriyle konuşan, indirme isteği uyandıran bir ürün dili kurar.',
        'modifier' => 'feature-tile--wide feature-tile--primary',
    ),
    array(
        'icon' => 'fa-solid fa-comments',
        'label' => 'Sıcak sosyal yapı',
        'title' => 'Anne topluluğu',
        'description' => 'Gerçek deneyimlerin paylaşıldığı, güvenli ve yorum odaklı akış.',
        'modifier' => 'feature-tile--tall',
    ),
    array(
        'icon' => 'fa-solid fa-baby',
        'label' => 'Düzenli görünüm',
        'title' => 'Hafta hafta gebelik takibi',
        'description' => 'Karmaşık sağlık verilerini yormayan, sade bir görsel dilde özetler.',
        'modifier' => 'feature-tile--soft',
    ),
    array(
        'icon' => 'fa-solid fa-sparkles',
        'label' => 'Sakin teknoloji',
        'title' => 'AI destekli rehberlik',
        'description' => 'Panik üretmeden bilgi veren ve doğru adıma yönlendiren konuşma katmanı.',
        'modifier' => 'feature-tile--accent',
    ),
    array(
        'icon' => 'fa-solid fa-link',
        'label' => 'Paylaşılan sorumluluk',
        'title' => 'Partner senkronu',
        'description' => 'Baba adayını da akışa dahil eden görev, not ve randevu paylaşımı.',
        'modifier' => '',
    ),
    array(
        'icon' => 'fa-solid fa-shield-heart',
        'label' => 'Güven hissi',
        'title' => 'Yumuşak ama güçlü arayüz',
        'description' => 'Feminen dokunuşları kaybetmeden modern, premium ve app-first bir görünüm.',
        'modifier' => '',
    ),
    array(
        'icon' => 'fa-solid fa-mobile-screen',
        'label' => 'İndirme motivasyonu',
        'title' => 'Store-ready vitrin',
        'description' => 'Header’dan footer’a kadar uygulamanın gerçekten üretimde olduğu hissini verir.',
        'modifier' => 'feature-tile--wide feature-tile--outline',
    ),
);
?>
<section id="features" class="section section--features" aria-labelledby="features-heading">
    <div class="container">
        <div class="section-heading" data-reveal="up">
            <span class="section-kicker">
                <i class="fa-solid fa-table-cells-large" aria-hidden="true"></i>
                Özellik mimarisi
            </span>
            <h2 id="features-heading" class="section-title">Momsy’nin ön yüzü artık basit bir landing değil; gerçek bir teknoloji ürününün vitrinine dönüşüyor.</h2>
            <p class="section-copy">Bu bölümdeki bento kart yapısı, ürünün neden tek indirilebilir uygulama hissi verdiğini anlatıyor: daha düzenli alanlar, daha güçlü vurgu ve daha dengeli bir bilgi akışı.</p>
        </div>

        <div class="features-grid">
            <?php foreach ($features as $feature) : ?>
                <article class="feature-tile <?php echo esc_attr($feature['modifier']); ?>" data-reveal="up">
                    <span class="feature-tile__icon" aria-hidden="true">
                        <i class="<?php echo esc_attr($feature['icon']); ?>"></i>
                    </span>
                    <div class="feature-tile__body">
                        <span class="feature-tile__label"><?php echo esc_html($feature['label']); ?></span>
                        <h3 class="feature-tile__title"><?php echo esc_html($feature['title']); ?></h3>
                        <p class="feature-tile__description"><?php echo esc_html($feature['description']); ?></p>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
