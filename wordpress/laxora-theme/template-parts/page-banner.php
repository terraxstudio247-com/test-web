<?php
/**
 * Reusable page banner (hero strip) used by inner pages.
 *
 * Variables (optional, set before get_template_part):
 *   $banner_eyebrow  - small uppercase eyebrow (e.g. "About Laxora")
 *   $banner_title    - main page heading
 *   $banner_subtitle - paragraph beneath the title
 *   $banner_image    - image URL
 *
 * @package Laxora
 */

$banner_eyebrow  = isset( $args['eyebrow'] )  ? $args['eyebrow']  : '';
$banner_title    = isset( $args['title'] )    ? $args['title']    : get_the_title();
$banner_subtitle = isset( $args['subtitle'] ) ? $args['subtitle'] : '';
$banner_image    = isset( $args['image'] )    ? $args['image']    : LAXORA_URI . '/assets/images/hero.jpg';
?>

<section class="laxora-page-banner">
    <div class="laxora-page-banner__bg">
        <img src="<?php echo esc_url( $banner_image ); ?>" alt="">
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
