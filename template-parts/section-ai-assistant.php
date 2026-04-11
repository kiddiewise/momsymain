<?php
if (!defined('ABSPATH')) {
    exit;
}

$assistant_benefits = array(
    array(
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13,2 3,14 12,14 11,22 21,10 12,10 13,2"/></svg>',
        'title' => 'Hızlı bilgiye ulaş',
        'text' => 'Aklına takılan sorular için uzun aramalar yerine anında yönlendirme al.',
    ),
    array(
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"/><path d="m9 12 2 2 4-4"/></svg>',
        'title' => 'Güven veren ton',
        'text' => 'Telaşı artırmadan, seni rahatlatan bir dille destek sunar.',
    ),
    array(
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4.8 2.3A.3.3 0 1 0 5 2H4a2 2 0 0 0-2 2v5a6 6 0 0 0 6 6v0a6 6 0 0 0 6-6V4a2 2 0 0 0-2-2h-1a.2.2 0 1 0 .3.3"/><path d="M8 15v1a6 6 0 0 0 6 6v0a6 6 0 0 0 6-6v-4"/><circle cx="20" cy="10" r="2"/></svg>',
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect width="16" height="16" x="4" y="4" rx="2"/><rect width="6" height="6" x="9" y="9" rx="1"/><path d="M15 2v2"/><path d="M15 20v2"/><path d="M2 15h2"/><path d="M2 9h2"/><path d="M20 15h2"/><path d="M20 9h2"/><path d="M9 2v2"/><path d="M9 20v2"/></svg>
                    Momsy AI asistan
                </span>
                <h2 id="ai-assistant-heading" class="section-title">Hızlı bilgi veren, sakinleştiren ve doğru anda doğru adıma yönlendiren bir destek katmanı.</h2>
                <p class="section-copy">Momsy Asistan; annelik sürecinde ilk refleks olarak güvenli bir başlangıç noktası sunar. Teknik görünür, ama sert değildir. Yardımcıdır, ama bunaltmaz. Tam da modern annelik ürünlerinin ihtiyaç duyduğu ton budur.</p>

                <ul class="benefit-list" aria-label="Momsy Asistan faydaları">
                    <?php foreach ($assistant_benefits as $benefit) : ?>
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
        </div>
    </div>
</section>
