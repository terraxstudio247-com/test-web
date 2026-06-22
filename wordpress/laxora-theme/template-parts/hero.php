<?php
/**
 * Home hero section — full-bleed autoplay video background.
 *
 * @package Laxora
 */

$home_video  = 'https://videos.pexels.com/video-files/8344927/8344927-hd_1280_720_25fps.mp4';
$home_poster = LAXORA_URI . '/assets/images/video-posters/home-poster.jpg';
?>
<section id="hero" class="laxora-hero">
    <div class="laxora-hero__bg" aria-hidden="true">
        <video class="laxora-hero__video"
               autoplay muted loop playsinline preload="metadata"
               poster="<?php echo esc_url( $home_poster ); ?>">
            <source src="<?php echo esc_url( $home_video ); ?>" type="video/mp4">
        </video>
        <div class="laxora-hero__overlay"></div>
        <span class="laxora-glow laxora-glow--teal"></span>
        <span class="laxora-glow laxora-glow--gold"></span>
        <span class="laxora-glow laxora-glow--purple"></span>
    </div>

    <div class="laxora-container laxora-hero__inner">
        <div class="laxora-eyebrow-row">
            <span class="laxora-eyebrow-line"></span>
            <span class="laxora-eyebrow"><?php esc_html_e( 'Executive Chauffeur Service', 'laxora' ); ?></span>
            <span class="laxora-eyebrow-line"></span>
        </div>

        <h1 class="laxora-hero__title">
            <span class="is-teal"><?php esc_html_e( 'Precision', 'laxora' ); ?></span>, <span class="is-gold"><?php esc_html_e( 'Privacy', 'laxora' ); ?></span>,<br>
            <?php esc_html_e( 'and', 'laxora' ); ?> <em class="laxora-gradient-text"><?php esc_html_e( 'Uncompromised', 'laxora' ); ?></em> <?php esc_html_e( 'Luxury.', 'laxora' ); ?>
        </h1>

        <p class="laxora-hero__lead">
            <?php esc_html_e( 'Laxora delivers a discreet, world-class chauffeur experience for executives, dignitaries, and private clientele across the world’s most demanding cities.', 'laxora' ); ?>
        </p>

        <div class="laxora-hero__ctas">
            <a href="#contact" class="laxora-btn laxora-btn--primary"><?php esc_html_e( 'Request Quote', 'laxora' ); ?></a>
            <a href="#fleet" class="laxora-btn laxora-btn--ghost"><?php esc_html_e( 'Explore Fleet', 'laxora' ); ?></a>
        </div>
    </div>

    <a href="#fleet" class="laxora-hero__scroll" aria-label="<?php esc_attr_e( 'Scroll to fleet', 'laxora' ); ?>">
        <span><?php esc_html_e( 'SCROLL', 'laxora' ); ?></span>
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg>
    </a>
</section>
