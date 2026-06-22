<?php
/**
 * Template Name: Laxora — Contact
 * Description: Contact page with concierge details, inquiry form, and locations.
 *
 * @package Laxora
 */

get_header();

get_template_part( 'template-parts/page-banner', null, array(
    'eyebrow'  => __( 'Contact', 'laxora' ),
    'title'    => __( '<em>Concierge</em>, available 24/7.', 'laxora' ),
    'subtitle' => __( 'Reach out for a bespoke proposal, fleet availability, or to engage Laxora for an ongoing executive programme.', 'laxora' ),
    'image'    => LAXORA_URI . '/assets/images/interior.jpg',
) );

$whatsapp = get_theme_mod( 'laxora_whatsapp', '+971500000000' );
$phone    = get_theme_mod( 'laxora_phone', '+971500000000' );
$email    = get_theme_mod( 'laxora_email', 'concierge@laxora.com' );
$shortcode= get_theme_mod( 'laxora_inquiry_shortcode', '[wpforms id="1"]' );
?>

<!-- Quick contact tiles -->
<section class="laxora-contact-tiles">
    <div class="laxora-container laxora-contact-tiles__grid">
        <a href="<?php echo esc_url( laxora_whatsapp_link( __( 'Hello Laxora, I would like a quotation.', 'laxora' ) ) ); ?>" target="_blank" rel="noopener" class="laxora-contact-tile" style="--c:#14B8A6;">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
            <span class="laxora-eyebrow"><?php esc_html_e( 'WhatsApp', 'laxora' ); ?></span>
            <strong><?php echo esc_html( $whatsapp ); ?></strong>
            <span class="laxora-contact-tile__cta"><?php esc_html_e( 'Chat now →', 'laxora' ); ?></span>
        </a>
        <a href="<?php echo esc_url( laxora_phone_link() ); ?>" class="laxora-contact-tile" style="--c:#C5A059;">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.37 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.33 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
            <span class="laxora-eyebrow"><?php esc_html_e( 'Phone', 'laxora' ); ?></span>
            <strong><?php echo esc_html( $phone ); ?></strong>
            <span class="laxora-contact-tile__cta"><?php esc_html_e( 'Call now →', 'laxora' ); ?></span>
        </a>
        <a href="mailto:<?php echo esc_attr( $email ); ?>" class="laxora-contact-tile" style="--c:#A855F7;">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22 6 12 13 2 6"></polyline></svg>
            <span class="laxora-eyebrow"><?php esc_html_e( 'Email', 'laxora' ); ?></span>
            <strong><?php echo esc_html( $email ); ?></strong>
            <span class="laxora-contact-tile__cta"><?php esc_html_e( 'Write to us →', 'laxora' ); ?></span>
        </a>
    </div>
</section>

<!-- Inquiry form + concierge column -->
<section class="laxora-inquiry" id="contact">
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
                    <span class="laxora-eyebrow laxora-eyebrow--muted"><?php esc_html_e( 'Concierge Hours', 'laxora' ); ?></span>
                    <p><?php esc_html_e( '24 / 7 — Global Operations', 'laxora' ); ?></p>
                </div>
                <div>
                    <span class="laxora-eyebrow laxora-eyebrow--muted"><?php esc_html_e( 'Response SLA', 'laxora' ); ?></span>
                    <p><?php esc_html_e( 'Within one business hour', 'laxora' ); ?></p>
                </div>
                <div>
                    <span class="laxora-eyebrow laxora-eyebrow--muted"><?php esc_html_e( 'Languages', 'laxora' ); ?></span>
                    <p><?php esc_html_e( 'English · Arabic · French · Mandarin', 'laxora' ); ?></p>
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

<!-- Offices -->
<section class="laxora-offices">
    <div class="laxora-container">
        <div class="laxora-offices__header">
            <div class="laxora-eyebrow-row">
                <span class="laxora-eyebrow-line"></span>
                <span class="laxora-eyebrow"><?php esc_html_e( 'Global Offices', 'laxora' ); ?></span>
                <span class="laxora-eyebrow-line"></span>
            </div>
            <h2 class="laxora-h2"><?php esc_html_e( 'Where to find us.', 'laxora' ); ?></h2>
        </div>
        <div class="laxora-offices__grid">
            <?php
            $offices = array(
                array( 'city' => __( 'Dubai',  'laxora' ), 'addr' => __( 'DIFC — Gate Village 04, Office 502, Dubai, UAE', 'laxora' ), 'tz' => 'GMT+4',  'c' => '#14B8A6' ),
                array( 'city' => __( 'London', 'laxora' ), 'addr' => __( '12 Berkeley Square, Mayfair, London W1J 6BR, UK', 'laxora' ), 'tz' => 'GMT+0', 'c' => '#C5A059' ),
                array( 'city' => __( 'New York','laxora' ),'addr' => __( '450 Park Avenue, Suite 1701, New York, NY 10022, USA', 'laxora' ), 'tz' => 'GMT-5', 'c' => '#A855F7' ),
            );
            foreach ( $offices as $o ) : ?>
                <div class="laxora-office">
                    <span class="laxora-office__bar" style="background:<?php echo esc_attr( $o['c'] ); ?>;"></span>
                    <h3><?php echo esc_html( $o['city'] ); ?></h3>
                    <p><?php echo esc_html( $o['addr'] ); ?></p>
                    <span class="laxora-eyebrow laxora-eyebrow--muted"><?php echo esc_html( $o['tz'] ); ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
