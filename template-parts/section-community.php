<?php
if (!defined('ABSPATH')) {
    exit;
}

$community_benefits = array(
    array(
        'icon' => 'fa-solid fa-comments',
        'title' => 'Deneyimini paylaş',
        'text' => 'Günlük hislerini, küçük zaferlerini ve aklındaki soruları doğal bir tonda anlat.',
    ),
    array(
        'icon' => 'fa-solid fa-heart',
        'title' => 'Yorum ve destek al',
        'text' => 'Benzer süreçten geçen annelerden sıcak ve hızlı geri bildirim gör.',
    ),
    array(
        'icon' => 'fa-solid fa-hands-holding-circle',
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
                    <i class="fa-solid fa-people-group" aria-hidden="true"></i>
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
                    <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
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
                        <span><i class="fa-solid fa-heart" aria-hidden="true"></i> 148 destek</span>
                        <span><i class="fa-solid fa-comment-dots" aria-hidden="true"></i> 32 yorum</span>
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
