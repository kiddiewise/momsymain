<?php
if (!defined('ABSPATH')) {
    exit;
}

$tracking_benefits = array(
    array(
        'icon' => 'fa-solid fa-calendar-week',
        'title' => 'Hafta hafta ilerleyiş',
        'text' => 'Her haftayı sade bir akışla takip ederek süreci daha net gör.',
    ),
    array(
        'icon' => 'fa-solid fa-seedling',
        'title' => 'Bebeğin gelişimini izle',
        'text' => 'Gelişim sürecini anlaşılır ve sakin bir dille takip et.',
    ),
    array(
        'icon' => 'fa-solid fa-spa',
        'title' => 'Annelik farkındalığı kazan',
        'text' => 'Kendi bedenindeki değişimleri fark ederek daha hazır hisset.',
    ),
);
?>
<section id="tracking" class="section section--tracking" aria-labelledby="tracking-heading">
    <div class="container section-panel section-panel--tracking">
        <div class="showcase-layout showcase-layout--reverse">
            <div class="showcase-copy" data-reveal="up">
                <span class="section-kicker">
                    <i class="fa-solid fa-baby-carriage" aria-hidden="true"></i>
                    Gebelik takibi
                </span>
                <h2 id="tracking-heading" class="section-title">Her haftayı daha anlaşılır, daha düzenli ve daha sakin bir dijital ritme dönüştürür.</h2>
                <p class="section-copy">Momsy gebelik takibi; veriyi sadece göstermekle kalmaz, kullanıcının gün içinde rahat hissedeceği bir akışa dönüştürür. Böylece ekran baktığında karmaşa değil netlik görür.</p>

                <ul class="benefit-list" aria-label="Gebelik takibi faydaları">
                    <?php foreach ($tracking_benefits as $benefit) : ?>
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

            <div class="timeline-board js-tilt" data-reveal="zoom">
                <div class="timeline-board__header">
                    <span class="label-soft">Hafta 28 görünümü</span>
                    <strong>Bu hafta daha hafif bir tempo öneriliyor</strong>
                </div>

                <div class="timeline-ring">
                    <div class="timeline-ring__inner">
                        <span>28</span>
                        <small>hafta</small>
                    </div>
                </div>

                <div class="timeline-progress">
                    <span style="width: 72%;"></span>
                </div>

                <div class="timeline-list">
                    <article class="timeline-list__item">
                        <strong>Bugün</strong>
                        <p>Su takibi, kısa yürüyüş ve hafif nefes egzersizi.</p>
                    </article>
                    <article class="timeline-list__item">
                        <strong>Bu hafta</strong>
                        <p>Bebek hareketlerini kaydet, notları partnerinle paylaş.</p>
                    </article>
                    <article class="timeline-list__item">
                        <strong>Hazırlık</strong>
                        <p>Hastane çantası listesinde 3 madde tamamlandı.</p>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
