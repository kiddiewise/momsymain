<?php
if (!defined('ABSPATH')) {
    exit;
}

$assistant_benefits = array(
    array(
        'icon' => 'fa-solid fa-bolt',
        'title' => 'Hızlı bilgiye ulaş',
        'text' => 'Aklına takılan sorular için uzun aramalar yerine anında yönlendirme al.',
    ),
    array(
        'icon' => 'fa-solid fa-shield-heart',
        'title' => 'Güven veren ton',
        'text' => 'Telaşı artırmadan, seni rahatlatan bir dille destek sunar.',
    ),
    array(
        'icon' => 'fa-solid fa-user-doctor',
        'title' => 'Doktor yerine geçmez',
        'text' => 'Tıbbi karar vermez; doğru anda doğru soruları sormana yardımcı olur.',
    ),
);
?>
<section id="ai-assistant" class="section section--assistant" aria-labelledby="ai-assistant-heading">
    <div class="container section-panel section-panel--assistant">
        <div class="showcase-layout">
            <div class="assistant-board js-tilt" data-reveal="zoom">
                <div class="assistant-board__header">
                    <span class="label-soft">Momsy AI</span>
                    <strong>Sakinleştiren konuşma akışı</strong>
                </div>

                <div class="chat-stack">
                    <article class="chat-bubble chat-bubble--ai">
                        Hafif baş dönmesi yaşadığında önce dinlenmeyi, su içmeyi ve belirtileri not etmeyi deneyebilirsin.
                    </article>
                    <article class="chat-bubble chat-bubble--user">
                        Peki ne zaman doktoruma yazmam gerekir?
                    </article>
                    <article class="chat-bubble chat-bubble--ai">
                        Şikâyet artarsa, eşlik eden ağrı olursa veya içgüdün farklı bir şey söylüyorsa doktoruna danışman en güvenlisi olur.
                    </article>
                </div>

                <div class="suggestion-grid">
                    <span>Bugün ne normal?</span>
                    <span>Randevu hazırlığı</span>
                    <span>Enerji düşüklüğü</span>
                    <span>Uyku rutini</span>
                </div>
            </div>

            <div class="showcase-copy" data-reveal="up">
                <span class="section-kicker">
                    <i class="fa-solid fa-microchip" aria-hidden="true"></i>
                    Momsy AI asistan
                </span>
                <h2 id="ai-assistant-heading" class="section-title">Hızlı bilgi veren, sakinleştiren ve doğru anda doğru adıma yönlendiren bir destek katmanı.</h2>
                <p class="section-copy">Momsy Asistan; annelik sürecinde ilk refleks olarak güvenli bir başlangıç noktası sunar. Teknik görünür, ama sert değildir. Yardımcıdır, ama bunaltmaz. Tam da modern annelik ürünlerinin ihtiyaç duyduğu ton budur.</p>

                <ul class="benefit-list" aria-label="Momsy Asistan faydaları">
                    <?php foreach ($assistant_benefits as $benefit) : ?>
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
        </div>
    </div>
</section>
