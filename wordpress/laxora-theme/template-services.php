<?php
/**
 * Template Name: Laxora — Services
 * Description: Dedicated Services page with video hero + 5 curated services + process timeline.
 *
 * @package Laxora
 */

get_header();

// Cinematic video hero.
get_template_part( 'template-parts/service-hero', null, array(
    'title'    => __( 'Experience Laxora&rsquo;s Elite Rides', 'laxora' ),
    'subtitle' => __( 'Seamless chauffeur services tailored for your every journey.', 'laxora' ),
    'cta_text' => __( 'Book Now', 'laxora' ),
    'cta_url'  => 'https://car.givemepopularity.ae/home/',
    'rating'   => __( 'Top rated by 100+ clients', 'laxora' ),
) );

// The 5 curated services.
$services = array(
    array(
        'title'    => __( 'Airport Transfers', 'laxora' ),
        'desc'     => __( 'Arrive and depart in absolute calm. Our chauffeurs track every flight in real time, offer complimentary wait windows, and meet you airside or curbside with porter assistance \u2014 so you move from terminal to cabin without a single dropped beat.', 'laxora' ),
        'image'    => LAXORA_URI . '/assets/images/fleet/mercedes-s500.jpg',
        'color'    => '#14B8A6',
        'features' => array(
            __( 'Live flight tracking & adaptive scheduling', 'laxora' ),
            __( 'Complimentary 60-minute wait time', 'laxora' ),
            __( 'Meet-and-greet at arrivals hall or curbside', 'laxora' ),
            __( 'Luggage handling by trained staff', 'laxora' ),
        ),
    ),
    array(
        'title'    => __( 'Luxury Chauffeur Services', 'laxora' ),
        'desc'     => __( 'A dedicated chauffeur and signature vehicle at your disposal \u2014 for an hour, a day, or an extended engagement. Onboard refreshments, climate-balanced cabins, encrypted Wi-Fi and absolute discretion turn every transit into productive, restorative time.', 'laxora' ),
        'image'    => LAXORA_URI . '/assets/images/interior.jpg',
        'color'    => '#C5A059',
        'features' => array(
            __( 'Hourly, half-day &amp; full-day terms', 'laxora' ),
            __( 'Dedicated chauffeur for the entire engagement', 'laxora' ),
            __( 'Unlimited stops within agreed itinerary', 'laxora' ),
            __( 'Onboard refreshments &amp; encrypted Wi-Fi', 'laxora' ),
        ),
    ),
    array(
        'title'    => __( 'Corporate Chauffeur', 'laxora' ),
        'desc'     => __( 'Built for executive teams, roadshows, and investor relations. A dedicated account manager orchestrates multi-city movements, vehicle protocols, and real-time itinerary updates \u2014 so your principals focus on the meeting, never the logistics.', 'laxora' ),
        'image'    => LAXORA_URI . '/assets/images/fleet/bmw-7-series.jpg',
        'color'    => '#A855F7',
        'features' => array(
            __( 'Dedicated account manager &amp; ops desk', 'laxora' ),
            __( 'Multi-city scheduling &amp; coordination', 'laxora' ),
            __( 'NDA-bound chauffeurs &amp; data discipline', 'laxora' ),
            __( 'Real-time itinerary updates &amp; reporting', 'laxora' ),
        ),
    ),
    array(
        'title'    => __( 'City Tour', 'laxora' ),
        'desc'     => __( 'Discover landmarks, hidden quarters, and the soul of a city in unhurried elegance. Each tour is curated to your interests \u2014 architecture, cuisine, retail, culture \u2014 and accompanied by a chauffeur briefed in local fluency and protocol.', 'laxora' ),
        'image'    => LAXORA_URI . '/assets/images/fleet/cadillac-escalade.jpg',
        'color'    => '#F472B6',
        'features' => array(
            __( 'Curated 4-, 6- &amp; 8-hour itineraries', 'laxora' ),
            __( 'Multilingual, locally fluent chauffeurs', 'laxora' ),
            __( 'Restaurant &amp; retail appointment coordination', 'laxora' ),
            __( 'Private guide on request', 'laxora' ),
        ),
    ),
    array(
        'title'    => __( 'Event &amp; Wedding Transport', 'laxora' ),
        'desc'     => __( 'For weddings, galas, premieres and milestone celebrations \u2014 a styled convoy of liveried chauffeurs and meticulously detailed vehicles, choreographed to your colour palette, run-of-show, and the emotion of the day.', 'laxora' ),
        'image'    => LAXORA_URI . '/assets/images/fleet/mercedes-maybach.jpg',
        'color'    => '#3B82F6',
        'features' => array(
            __( 'Multi-vehicle convoys &amp; logistics', 'laxora' ),
            __( 'Liveried chauffeurs &amp; detailed vehicles', 'laxora' ),
            __( 'Optional florals, ribbons &amp; bespoke styling', 'laxora' ),
            __( 'On-site coordinator for the full event', 'laxora' ),
        ),
    ),
);
?>

<section class="laxora-services-detail">
    <div class="laxora-container">
        <?php foreach ( $services as $idx => $s ) : $reverse = $idx % 2 === 1; ?>
            <article class="laxora-service-row <?php echo $reverse ? 'is-reverse' : ''; ?>" id="service-<?php echo absint( $idx + 1 ); ?>">
                <div class="laxora-service-row__image">
                    <img src="<?php echo esc_url( $s['image'] ); ?>" alt="<?php echo esc_attr( wp_strip_all_tags( $s['title'] ) ); ?>" loading="lazy">
                    <span class="laxora-service-row__num" style="color:<?php echo esc_attr( $s['color'] ); ?>;">0<?php echo absint( $idx + 1 ); ?></span>
                </div>
                <div class="laxora-service-row__body">
                    <span class="laxora-eyebrow" style="color:<?php echo esc_attr( $s['color'] ); ?>;"><?php esc_html_e( 'Service', 'laxora' ); ?> · 0<?php echo absint( $idx + 1 ); ?></span>
                    <h2 class="laxora-h2"><?php echo wp_kses_post( $s['title'] ); ?></h2>
                    <p class="laxora-lead"><?php echo esc_html( $s['desc'] ); ?></p>
                    <ul class="laxora-checklist">
                        <?php foreach ( $s['features'] as $f ) : ?>
                            <li><span class="laxora-checklist__dot" style="background:<?php echo esc_attr( $s['color'] ); ?>;"></span><?php echo wp_kses_post( $f ); ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="laxora-btn laxora-btn--outline"><?php esc_html_e( 'Request Quote', 'laxora' ); ?></a>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<!-- Process timeline -->
<section class="laxora-process">
    <div class="laxora-container">
        <div class="laxora-process__header">
            <div class="laxora-eyebrow-row">
                <span class="laxora-eyebrow-line"></span>
                <span class="laxora-eyebrow"><?php esc_html_e( 'How it Works', 'laxora' ); ?></span>
                <span class="laxora-eyebrow-line"></span>
            </div>
            <h2 class="laxora-h2"><?php esc_html_e( 'From inquiry to itinerary, in four refined steps.', 'laxora' ); ?></h2>
        </div>
        <div class="laxora-process__grid">
            <?php
            $steps = array(
                array( 'n' => '01', 't' => __( 'Inquiry', 'laxora' ),       'd' => __( 'Share your itinerary, preferences, and any bespoke requirements via our concierge.', 'laxora' ), 'c' => '#14B8A6' ),
                array( 'n' => '02', 't' => __( 'Curation', 'laxora' ),      'd' => __( 'A dedicated agent designs a tailored proposal — vehicle, chauffeur, route, and contingency.', 'laxora' ), 'c' => '#C5A059' ),
                array( 'n' => '03', 't' => __( 'Confirmation', 'laxora' ),  'd' => __( 'Review and approve. Receive your confirmation, chauffeur profile, and direct concierge line.', 'laxora' ), 'c' => '#A855F7' ),
                array( 'n' => '04', 't' => __( 'Execution', 'laxora' ),     'd' => __( 'Travel in absolute discretion. Real-time oversight, 24/7 concierge — every detail handled.', 'laxora' ), 'c' => '#F472B6' ),
            );
            foreach ( $steps as $st ) : ?>
                <div class="laxora-step">
                    <span class="laxora-step__num" style="color:<?php echo esc_attr( $st['c'] ); ?>;"><?php echo esc_html( $st['n'] ); ?></span>
                    <h3 class="laxora-step__title"><?php echo esc_html( $st['t'] ); ?></h3>
                    <p><?php echo esc_html( $st['d'] ); ?></p>
                    <span class="laxora-step__bar" style="background:<?php echo esc_attr( $st['c'] ); ?>;"></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="laxora-cta-band">
    <div class="laxora-container laxora-cta-band__inner">
        <h2 class="laxora-h2"><?php esc_html_e( 'A bespoke quotation, in one business hour.', 'laxora' ); ?></h2>
        <p class="laxora-lead"><?php esc_html_e( 'Tell us about your journey — our concierge will respond personally with a tailored proposal.', 'laxora' ); ?></p>
        <div class="laxora-cta-band__buttons">
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="laxora-btn laxora-btn--primary"><?php esc_html_e( 'Request Quote', 'laxora' ); ?></a>
            <a href="https://car.givemepopularity.ae/home/" class="laxora-btn laxora-btn--ghost"><?php esc_html_e( 'Book Now', 'laxora' ); ?></a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
