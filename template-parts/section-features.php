<?php
if (!defined('ABSPATH')) {
    exit;
}

$features = array(
    array(
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12,2 2,7 12,12 22,7 12,2"/><polyline points="2,17 12,22 22,17"/><polyline points="2,12 12,17 22,12"/></svg>',
        'label' => 'Tek akışta',
        'title' => 'Topluluk, takip ve rehberlik aynı ürün mimarisinde birleşir.',
        'description' => 'Kullanıcıyı ekranlar arasında kaybettirmeyen; her modülü birbiriyle konuşan, indirme isteği uyandıran bir ürün dili kurar.',
        'modifier' => 'feature-tile--wide feature-tile--primary',
    ),
    array(
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>',
        'label' => 'Sıcak sosyal yapı',
        'title' => 'Anne topluluğu',
        'description' => 'Gerçek deneyimlerin paylaşıldığı, güvenli ve yorum odaklı akış.',
        'modifier' => 'feature-tile--tall',
    ),
    array(
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12h.01"/><path d="M15 12h.01"/><path d="M10 16c.5.3 1.2.5 2 .5s1.5-.2 2-.5"/><path d="M19 6.3a9 9 0 0 1 1.8 3.9 2 2 0 0 1 0 3.6 9 9 0 0 1-17.6 0 2 2 0 0 1 0-3.6A9 9 0 0 1 12 3c2 0 3.5 1.1 3.5 2.5s-.9 2.5-2 2.5-2.5.5-2.5 2v1c0 .5.5 1 1 1s1-.5 1-1V12"/><path d="M8 21c.5 0 1-.2 1.5-.6"/><path d="M16.5 20.4c.5.4 1.1.6 1.5.6"/></svg>',
        'label' => 'Düzenli görünüm',
        'title' => 'Hafta hafta gebelik takibi',
        'description' => 'Karmaşık sağlık verilerini yormayan, sade bir görsel dilde özetler.',
        'modifier' => 'feature-tile--soft',
    ),
    array(
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .962 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.962 0z"/><path d="M20 3v4"/><path d="M22 5h-4"/><path d="M4 17v2"/><path d="M5 18H3"/></svg>',
        'label' => 'Sakin teknoloji',
        'title' => 'AI destekli rehberlik',
        'description' => 'Panik üretmeden bilgi veren ve doğru adıma yönlendiren konuşma katmanı.',
        'modifier' => 'feature-tile--accent',
    ),
    array(
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>',
        'label' => 'Paylaşılan sorumluluk',
        'title' => 'Partner senkronu',
        'description' => 'Baba adayını da akışa dahil eden görev, not ve randevu paylaşımı.',
        'modifier' => '',
    ),
    array(
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"/><path d="m9 12 2 2 4-4"/></svg>',
        'label' => 'Güven hissi',
        'title' => 'Yumuşak ama güçlü arayüz',
        'description' => 'Feminen dokunuşları kaybetmeden modern, premium ve app-first bir görünüm.',
        'modifier' => '',
    ),
    array(
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="14" height="20" x="5" y="2" rx="2" ry="2"/><path d="M12 18h.01"/></svg>',
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
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M3 9h18"/><path d="M3 15h18"/><path d="M9 3v18"/><path d="M15 3v18"/></svg>
                Özellik mimarisi
            </span>
            <h2 id="features-heading" class="section-title">Momsy’nin ön yüzü artık basit bir landing değil; gerçek bir teknoloji ürününün vitrinine dönüşüyor.</h2>
            <p class="section-copy">Bu bölümdeki bento kart yapısı, ürünün neden tek indirilebilir uygulama hissi verdiğini anlatıyor: daha düzenli alanlar, daha güçlü vurgu ve daha dengeli bir bilgi akışı.</p>
        </div>

        <div class="features-grid">
            <?php foreach ($features as $feature) : ?>
                <article class="feature-tile <?php echo esc_attr($feature['modifier']); ?>" data-reveal="up">
                    <span class="feature-tile__icon" aria-hidden="true">
                        <?php echo $feature['icon']; ?>
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
