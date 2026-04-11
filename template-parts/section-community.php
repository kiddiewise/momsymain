<?php
if (!defined('ABSPATH')) {
    exit;
}

$community_benefits = array(
    array(
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>',
        'title' => 'Deneyimini paylaş',
        'text' => 'Günlük hislerini, küçük zaferlerini ve aklındaki soruları doğal bir tonda anlat.',
    ),
    array(
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.29 1.51 4.04 3 5.5l7 7Z"/></svg>',
        'title' => 'Yorum ve destek al',
        'text' => 'Benzer süreçten geçen annelerden sıcak ve hızlı geri bildirim gör.',
    ),
    array(
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.42 4.58a5.4 5.4 0 0 0-7.65 0l-.77.78-.77-.78a5.4 5.4 0 0 0-7.65 0C1.46 6.7 1.33 10.28 4 13l8 8 8-8c2.67-2.72 2.54-6.3.42-8.42z"/><path d="M12 5.5c-1.34 0-2.5.88-2.5 2s1.16 2 2.5 2 2.5-.88 2.5-2-1.16-2-2.5-2z"/><path d="M7 13c-1.34 0-2.5.88-2.5 2s1.16 2 2.5 2 2.5-.88 2.5-2-1.16-2-2.5-2z"/><path d="M17 13c-1.34 0-2.5.88-2.5 2s1.16 2 2.5 2 2.5-.88 2.5-2-1.16-2-2.5-2z"/></svg>',
        'title' => 'Yalnız hissetme',
        'text' => 'Zor anlarda bile seni anlayan bir topluluğun içinde kal.',
    ),
);
?>
<section id="community" class="section section--community" aria-labelledby="community-heading">
    <div class="container section-panel section-panel--community">
        <div class="showcase-layout showcase-layout--community">
            <div class="showcase-copy" data-reveal="up">
                <span class="section-kicker">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    Topluluk alanı
                </span>
                <h2 id="community-heading" class="section-title">Yalnız hissettirmeyen, feminen tonu güçlü ve güvenli hissettiren bir sosyal deneyim.</h2>
                <p class="section-copy">Momsy topluluğu; annelerin ve anne adaylarının günlük hayatını, duygularını ve sorularını rahatça paylaşabildiği modern bir uygulama alanı kurar. Burada kullanıcı yalnızca içerik görmez, gerçekten ait hisseder.</p>

                <ul class="benefit-list" aria-label="Topluluk faydaları">
                    <?php foreach ($community_benefits as $benefit) : ?>
                        <li class="benefit-list__item" data-reveal="up">
                            <span class="benefit-list__icon" aria-hidden="true"><i class="<?php echo esc_attr($benefit['icon']); ?>"></i></span>
                            <div>
                                <strong><?php echo esc_html($benefit['title']); ?></strong>
                                <p><?php echo esc_html($benefit['text']); ?></p>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <a class="button button--ghost" href="#download">
                    <span>Topluluğa katıl</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                </a>
            </div>

            <div class="community-board js-tilt" data-reveal="zoom">
                <article class="post-card">
                    <div class="post-card__meta">
                        <div class="avatar-cluster" aria-hidden="true">
                            <span>A</span>
                            <span>M</span>
                            <span>D</span>
                        </div>
                        <span class="label-soft">Bugünün en sıcak başlığı</span>
                    </div>
                    <h3>“Bugün biraz yoruldum ama yalnız olmadığımı hissetmek çok iyi geldi.”</h3>
                    <p>Yorumlar, kalpler ve deneyim yanıtları aynı kart içinde yumuşak bir hareket diliyle akıyor.</p>
                    <div class="post-card__actions">
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.29 1.51 4.04 3 5.5l7 7Z"/></svg> 148 destek</span>
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/><path d="M9 9h.01"/><path d="M12 9h.01"/><path d="M15 9h.01"/></svg> 32 yorum</span>
                    </div>
                </article>

                <article class="support-card support-card--gradient">
                    <span class="label-soft">Yakın çevre</span>
                    <strong>Aynı haftadaki anneler çevrimiçi</strong>
                    <p>Ortak süreçte olan kişilerle daha hızlı bağ kurma hissi.</p>
                </article>

                <article class="support-card">
                    <span class="label-soft">Güvenli alan</span>
                    <strong>DM ve yorum katmanı</strong>
                    <p>Hassas konuları daha küçük, daha samimi alanlarda konuş.</p>
                </article>
            </div>
        </div>
    </div>
</section>
