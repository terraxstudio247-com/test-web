<?php
/**
 * Reusable page banner (hero strip) used by inner pages.
 *
 * Args (optional):
 *   $args['eyebrow']  — small uppercase eyebrow (e.g. "About Laxora")
 *   $args['title']    — main page heading (HTML allowed)
 *   $args['subtitle'] — paragraph beneath the title
 *   $args['image']    — image URL (also used as video poster when video present)
 *   $args['video']    — optional .mp4 background video URL
 *
 * @package Laxora
 */

$banner_eyebrow  = isset( $args['eyebrow'] )  ? $args['eyebrow']  : '';
$banner_title    = isset( $args['title'] )    ? $args['title']    : get_the_title();
$banner_subtitle = isset( $args['subtitle'] ) ? $args['subtitle'] : '';
$banner_image    = isset( $args['image'] )    ? $args['image']    : LAXORA_URI . '/assets/images/hero.jpg';
$banner_video    = isset( $args['video'] )    ? $args['video']    : '';
?>

<section class="laxora-page-banner <?php echo $banner_video ? 'has-video' : ''; ?>">
    <div class="laxora-page-banner__bg" aria-hidden="true">
        <?php if ( $banner_video ) : ?>
            <video class="laxora-page-banner__video"
                   autoplay muted loop playsinline preload="auto"
                   poster="<?php echo esc_url( $banner_image ); ?>">
                <source src="<?php echo esc_url( $banner_video ); ?>" type="video/mp4">
            </video>
        <?php else : ?>
            <img src="<?php echo esc_url( $banner_image ); ?>" alt="">
        <?php endif; ?>
        <div class="laxora-page-banner__overlay"></div>
        <span class="laxora-glow laxora-glow--teal"></span>
        <span class="laxora-glow laxora-glow--gold"></span>
    </div>

    <div class="laxora-container laxora-page-banner__inner">
        <?php if ( $banner_eyebrow ) : ?>
            <div class="laxora-eyebrow-row">
                <span class="laxora-eyebrow-line"></span>
                <span class="laxora-eyebrow"><?php echo esc_html( $banner_eyebrow ); ?></span>
                <span class="laxora-eyebrow-line"></span>
            </div>
        <?php endif; ?>
        <h1 class="laxora-page-banner__title"><?php echo wp_kses_post( $banner_title ); ?></h1>
        <?php if ( $banner_subtitle ) : ?>
            <p class="laxora-page-banner__subtitle"><?php echo esc_html( $banner_subtitle ); ?></p>
        <?php endif; ?>
        <nav class="laxora-breadcrumbs" aria-label="Breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'laxora' ); ?></a>
            <span class="laxora-breadcrumbs__sep">—</span>
            <span><?php echo esc_html( get_the_title() ); ?></span>
        </nav>
    </div>
</section>
