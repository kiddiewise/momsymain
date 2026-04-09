<?php
if (!defined('ABSPATH')) {
    exit;
}

$features = array(
    array(
        'icon' => 'fa-solid fa-square-plus',
        'title' => 'Sosyal Paylaşım Akışı',
        'description' => 'Instagram benzeri akışta güncellemelerini, duygularını ve günlük anlarını kolayca paylaş.',
        'benefit' => 'Kendini ifade ederken yalnız hissetmez, aynı yoldan geçen annelerle doğal bağ kurarsın.',
        'modifier' => 'wide',
    ),
    array(
        'icon' => 'fa-regular fa-paper-plane',
        'title' => 'Direkt Mesajlar',
        'description' => 'DM ile bire bir mesajlaş, daha özel soruları rahat ve güvenli bir alanda konuş.',
        'benefit' => 'Hassas konularda kalabalığa açılmadan destek almanı kolaylaştırır.',
    ),
    array(
        'icon' => 'fa-solid fa-baby',
        'title' => 'Hafta Hafta Gebelik Takibi',
        'description' => 'Gebelik sürecini haftalık gelişim bilgileri, hatırlatmalar ve net bir ilerleyiş akışıyla izle.',
        'benefit' => 'Belirsizlik azalır, her haftada ne olduğunu daha sakin ve kontrollü takip edersin.',
    ),
    array(
        'icon' => 'fa-solid fa-sparkles',
        'title' => 'Momsy Asistan',
        'description' => 'AI destekli asistanla aklındaki sorulara hızlı yanıt al, günlük kararlarını daha rahat ver.',
        'benefit' => 'Doğru bilgiye hızla ulaşarak zihinsel yükünü hafifletir.',
    ),
    array(
        'icon' => 'fa-solid fa-heart-circle-check',
        'title' => 'Eşinle Ortak Takip',
        'description' => 'Eşinle eşleşerek bebek gelişimini, notları ve önemli adımları aynı ekranda birlikte yönetin.',
        'benefit' => 'Süreci tek başına taşımak yerine ebeveynlik yolculuğunu ortaklaştırır.',
    ),
    array(
        'icon' => 'fa-solid fa-calendar-days',
        'title' => 'Ortak Süreç Yönetimi',
        'description' => 'Hastane randevuları, semptom kayıtları, doğum çantası ve hazırlık listeleri tek yerde toplansın.',
        'benefit' => 'Küçük ama kritik detayları kaçırmadan günlük düzeni korumana yardım eder.',
    ),
    array(
        'icon' => 'fa-solid fa-user-group',
        'title' => 'Topluluk Desteği ve Yorumlar',
        'description' => 'Deneyim paylaşımları, yorumlar ve gerçek annelerden gelen geri bildirimlerle daha güçlü ilerle.',
        'benefit' => 'Bilgiyi sadece okumaz, yaşayan insanlardan gelen güven duygusunu da hissedersin.',
    ),
);
?>
<section id="features" class="section section--features" aria-labelledby="features-heading">
    <div class="container section__inner">
        <div class="features-intro">
            <div class="features-intro__content">
                <span class="section-label">Özellikler</span>
                <h2 id="features-heading">Annelik yolculuğundaki her kritik ihtiyacı tek bir akışta birleştirir.</h2>
                <p class="section-copy">Momsy; topluluktan takibe, AI desteğinden ortak ebeveynlik planlamasına kadar günlük ihtiyaçları sade ama güçlü bir deneyimde toplar.</p>
            </div>

            <aside class="features-highlight" aria-label="Temel değerler">
                <span class="features-highlight__label">Tek uygulamada</span>
                <p class="features-highlight__title">Topluluk, takip ve ortak planlama aynı merkezde buluşur.</p>
                <p class="features-highlight__text">Kullanıcıya sadece araçlar değil; netlik, destek ve paylaşılan sorumluluk hissi verir.</p>
            </aside>
        </div>

        <div class="features-grid">
            <?php foreach ($features as $feature) : ?>
                <?php
                $card_classes = 'feature-card';
                if (!empty($feature['modifier'])) {
                    $card_classes .= ' feature-card--' . $feature['modifier'];
                }
                ?>
                <article class="<?php echo esc_attr($card_classes); ?>">
                    <span class="feature-card__icon" aria-hidden="true">
                        <i class="<?php echo esc_attr($feature['icon']); ?>"></i>
                    </span>
                    <div class="feature-card__body">
                        <h3 class="feature-card__title"><?php echo esc_html($feature['title']); ?></h3>
                        <p class="feature-card__description"><?php echo esc_html($feature['description']); ?></p>
                    </div>
                    <p class="feature-card__benefit"><?php echo esc_html($feature['benefit']); ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
