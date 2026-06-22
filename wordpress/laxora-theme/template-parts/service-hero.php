<?php
/**
 * Service page hero — full-bleed video background.
 *
 * Args (optional):
 *   $args['video']    - URL of the .mp4 background video
 *   $args['poster']   - Poster image URL
 *   $args['title']    - Heading
 *   $args['subtitle'] - Subheading
 *   $args['cta_text'] - Button text
 *   $args['cta_url']  - Button URL
 *   $args['rating']   - Rating caption (e.g. "Top rated by 100+ clients")
 *
 * @package Laxora
 */

$video    = isset( $args['video'] )    ? $args['video']    : 'https://videos.pexels.com/video-files/5309381/5309381-hd_1280_720_25fps.mp4';
$poster   = isset( $args['poster'] )   ? $args['poster']   : LAXORA_URI . '/assets/images/hero.jpg';
$title    = isset( $args['title'] )    ? $args['title']    : __( 'Experience Laxora\u2019s Elite Rides', 'laxora' );
$subtitle = isset( $args['subtitle'] ) ? $args['subtitle'] : __( 'Seamless chauffeur services tailored for your every journey.', 'laxora' );
$cta_text = isset( $args['cta_text'] ) ? $args['cta_text'] : __( 'Book Now', 'laxora' );
$cta_url  = isset( $args['cta_url'] )  ? $args['cta_url']  : 'https://car.givemepopularity.ae/home/';
$rating   = isset( $args['rating'] )   ? $args['rating']   : __( 'Top rated by 100+ clients', 'laxora' );
?>

<section class="laxora-video-hero" data-laxora-reveal>
    <div class="laxora-video-hero__bg" aria-hidden="true">
        <video class="laxora-video-hero__video"
               autoplay
               muted
               loop
               playsinline
               preload="metadata"
               poster="<?php echo esc_url( $poster ); ?>">
            <source src="<?php echo esc_url( $video ); ?>" type="video/mp4">
        </video>
        <div class="laxora-video-hero__overlay"></div>
        <span class="laxora-glow laxora-glow--gold"></span>
        <span class="laxora-glow laxora-glow--teal"></span>
    </div>

    <div class="laxora-container laxora-video-hero__inner">
        <h1 class="laxora-video-hero__title"><?php echo wp_kses_post( $title ); ?></h1>
        <p class="laxora-video-hero__subtitle"><?php echo esc_html( $subtitle ); ?></p>
        <a href="<?php echo esc_url( $cta_url ); ?>" class="laxora-btn laxora-btn--primary laxora-video-hero__cta"><?php echo esc_html( $cta_text ); ?></a>
        <div class="laxora-video-hero__rating">
            <span class="laxora-video-hero__stars" aria-label="<?php esc_attr_e( '5 out of 5 stars', 'laxora' ); ?>">★★★★★</span>
            <span class="laxora-video-hero__rating-text"><?php echo esc_html( $rating ); ?></span>
        </div>
    </div>
</section>
