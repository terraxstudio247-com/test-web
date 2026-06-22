<?php
/**
 * 404 template.
 *
 * @package Laxora
 */
get_header(); ?>

<section class="laxora-section laxora-section--default laxora-404">
    <div class="laxora-container laxora-404__inner">
        <span class="laxora-eyebrow laxora-eyebrow--gold"><?php esc_html_e( 'Error 404', 'laxora' ); ?></span>
        <h1 class="laxora-h1"><?php esc_html_e( 'The route was not found.', 'laxora' ); ?></h1>
        <p class="laxora-lead"><?php esc_html_e( 'It seems your driver has taken a turn we don’t recognise. Let us guide you back.', 'laxora' ); ?></p>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="laxora-btn laxora-btn--primary"><?php esc_html_e( 'Return Home', 'laxora' ); ?></a>
    </div>
</section>

<?php get_footer(); ?>
