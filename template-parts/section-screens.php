<?php
if (!defined('ABSPATH')) {
    exit;
}

$tracking_benefits = array(
    array(
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/><path d="M8 14l2 2 4-4"/></svg>',
        'title' => 'Hafta hafta ilerleyiş',
        'text' => 'Her haftayı sade bir akışla takip ederek süreci daha net gör.',
    ),
    array(
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a10 10 0 1 0 10 10H12V2Z"/><path d="M12 2v10"/><path d="M12 12v10"/><path d="M12 12H2"/><path d="M12 12h10"/><path d="M12 12l4-4"/><path d="M12 12l-4 4"/><path d="M12 12l4 4"/><path d="M12 12l-4-4"/></svg>',
        'title' => 'Bebeğin gelişimini izle',
        'text' => 'Gelişim sürecini anlaşılır ve sakin bir dille takip et.',
    ),
    array(
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 12h20"/><path d="M2 12l4-4"/><path d="M2 12l4 4"/><path d="M22 12l-4-4"/><path d="M22 12l-4 4"/><circle cx="12" cy="12" r="4"/><path d="M12 8v8"/><path d="M8 12h8"/></svg>',
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 12h.01"/><path d="M15 12h.01"/><path d="M10 16c.5.3 1.2.5 2 .5s1.5-.2 2-.5"/><path d="M19 6.3a9 9 0 0 1 1.8 3.9 2 2 0 0 1 0 3.6 9 9 0 0 1-17.6 0 2 2 0 0 1 0-3.6A9 9 0 0 1 12 3c2 0 3.5 1.1 3.5 2.5s-.9 2.5-2 2.5-2.5.5-2.5 2v1c0 .5.5 1 1 1s1-.5 1-1V12"/><path d="M8 21c.5 0 1-.2 1.5-.6"/><path d="M16.5 20.4c.5.4 1.1.6 1.5.6"/></svg>
                    Gebelik takibi
                </span>
                <h2 id="tracking-heading" class="section-title">Her haftayı daha anlaşılır, daha düzenli ve daha sakin bir dijital ritme dönüştürür.</h2>
                <p class="section-copy">Momsy gebelik takibi; veriyi sadece göstermekle kalmaz, kullanıcının gün içinde rahat hissedeceği bir akışa dönüştürür. Böylece ekran baktığında karmaşa değil netlik görür.</p>

                <ul class="benefit-list" aria-label="Gebelik takibi faydaları">
                    <?php foreach ($tracking_benefits as $benefit) : ?>
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
