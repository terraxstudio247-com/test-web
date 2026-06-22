<?php
/**
 * Services section.
 *
 * @package Laxora
 */

$services = array(
    array( 'title' => __( 'Airport Transfers',  'laxora' ), 'desc' => __( 'Seamless meet-and-greet protocols, flight monitoring, and complimentary wait time at every major hub.', 'laxora' ), 'color' => '#14B8A6' ),
    array( 'title' => __( 'Hourly Chauffeur',   'laxora' ), 'desc' => __( 'A dedicated vehicle and chauffeur at your disposal for meetings, events, and city itineraries.',        'laxora' ), 'color' => '#C5A059' ),
    array( 'title' => __( 'Corporate Roadshows','laxora' ), 'desc' => __( 'Multi-city coordination for executive teams, with dedicated account managers and 24/7 oversight.',       'laxora' ), 'color' => '#A855F7' ),
    array( 'title' => __( 'VIP & Diplomatic',   'laxora' ), 'desc' => __( 'Discreet protective transport with vetted chauffeurs trained in international protocol and security.',  'laxora' ), 'color' => '#F472B6' ),
);
?>

<section id="services" class="laxora-services">
    <div class="laxora-container laxora-services__grid">
        <div class="laxora-services__intro">
            <div class="laxora-eyebrow-row laxora-eyebrow-row--left">
                <span class="laxora-eyebrow-line"></span>
                <span class="laxora-eyebrow"><?php esc_html_e( 'Services', 'laxora' ); ?></span>
            </div>
            <h2 class="laxora-h2"><?php esc_html_e( 'A Discreet Standard of Excellence.', 'laxora' ); ?></h2>
            <p class="laxora-lead"><?php esc_html_e( 'From international arrivals to multi-day corporate engagements, every Laxora journey is choreographed end to end.', 'laxora' ); ?></p>

            <div class="laxora-services__image">
                <img src="<?php echo esc_url( LAXORA_URI . '/assets/images/interior.jpg' ); ?>" alt="<?php esc_attr_e( 'Laxora chauffeur interior', 'laxora' ); ?>" loading="lazy">
                <div class="laxora-services__image-overlay"></div>
                <div class="laxora-services__image-caption">
                    <span class="laxora-eyebrow laxora-eyebrow--gold"><?php esc_html_e( 'Onboard', 'laxora' ); ?></span>
                    <p><?php esc_html_e( 'A private sanctuary in motion.', 'laxora' ); ?></p>
                </div>
            </div>
        </div>

        <div class="laxora-services__list">
            <?php foreach ( $services as $idx => $s ) : ?>
                <div class="laxora-service">
                    <span class="laxora-service__num" style="background-color: <?php echo esc_attr( $s['color'] ); ?>1A; color: <?php echo esc_attr( $s['color'] ); ?>;">0<?php echo absint( $idx + 1 ); ?></span>
                    <h3 class="laxora-service__title"><?php echo esc_html( $s['title'] ); ?></h3>
                    <p class="laxora-service__desc"><?php echo esc_html( $s['desc'] ); ?></p>
                    <span class="laxora-service__bar" style="background-color: <?php echo esc_attr( $s['color'] ); ?>;"></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
