<?php
/**
 * Inquiry section — renders a configurable form shortcode (WPForms recommended).
 *
 * @package Laxora
 */

$shortcode = get_theme_mod( 'laxora_inquiry_shortcode', '[wpforms id="1"]' );
?>

<section id="contact" class="laxora-inquiry">
    <div class="laxora-inquiry__side-image" aria-hidden="true">
        <img src="<?php echo esc_url( LAXORA_URI . '/assets/images/interior.jpg' ); ?>" alt="">
        <div class="laxora-inquiry__side-overlay"></div>
    </div>

    <div class="laxora-container laxora-inquiry__grid">
        <div class="laxora-inquiry__intro">
            <div class="laxora-eyebrow-row laxora-eyebrow-row--left">
                <span class="laxora-eyebrow-line"></span>
                <span class="laxora-eyebrow"><?php esc_html_e( 'Inquiry Engine', 'laxora' ); ?></span>
            </div>
            <h2 class="laxora-h2"><?php esc_html_e( 'Request a Bespoke Quotation.', 'laxora' ); ?></h2>
            <p class="laxora-lead">
                <?php esc_html_e( 'Share your itinerary, and a dedicated concierge will respond within one business hour with a tailored proposal — discretion guaranteed.', 'laxora' ); ?>
            </p>

            <div class="laxora-inquiry__meta">
                <div>
                    <span class="laxora-eyebrow laxora-eyebrow--muted"><?php esc_html_e( 'Concierge', 'laxora' ); ?></span>
                    <p><?php echo esc_html( get_theme_mod( 'laxora_email', 'concierge@laxora.com' ) ); ?></p>
                </div>
                <div>
                    <span class="laxora-eyebrow laxora-eyebrow--muted"><?php esc_html_e( 'Hours', 'laxora' ); ?></span>
                    <p><?php esc_html_e( '24 / 7 — Global Operations', 'laxora' ); ?></p>
                </div>
            </div>
        </div>

        <div class="laxora-inquiry__form">
            <?php
            if ( ! empty( $shortcode ) ) {
                echo do_shortcode( wp_kses_post( $shortcode ) );
            } else {
                echo '<p class="laxora-lead">' . esc_html__( 'Configure the inquiry shortcode in Appearance → Customize → Laxora — Brand & Contact.', 'laxora' ) . '</p>';
            }
            ?>
        </div>
    </div>
</section>
