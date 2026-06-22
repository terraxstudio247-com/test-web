<?php
/**
 * Template Name: Laxora — Services
 * Description: Detailed services page with feature blocks, process, and CTA.
 *
 * @package Laxora
 */

get_header();

get_template_part( 'template-parts/page-banner', null, array(
    'eyebrow'  => __( 'Services', 'laxora' ),
    'title'    => __( 'A Discreet Standard <em>of Excellence.</em>', 'laxora' ),
    'subtitle' => __( 'From international arrivals to multi-day corporate engagements — every Laxora journey is choreographed end to end.', 'laxora' ),
    'image'    => LAXORA_URI . '/assets/images/fleet/mercedes-s500.jpg',
) );

$services = array(
    array(
        'title' => __( 'Airport Transfers', 'laxora' ),
        'desc'  => __( 'Seamless meet-and-greet protocols, real-time flight monitoring, complimentary wait time, and porter assistance across every major international hub.', 'laxora' ),
        'image' => LAXORA_URI . '/assets/images/fleet/mercedes-s500.jpg',
        'color' => '#14B8A6',
        'features' => array(
            __( 'Flight tracking & adaptive scheduling', 'laxora' ),
            __( 'Complimentary 60-minute wait time', 'laxora' ),
            __( 'Curbside or arrivals-hall meet-and-greet', 'laxora' ),
            __( 'Luggage handling by trained staff', 'laxora' ),
        ),
    ),
    array(
        'title' => __( 'Hourly Chauffeur', 'laxora' ),
        'desc'  => __( 'A dedicated vehicle and chauffeur at your disposal — by the hour, half-day, or full-day — for meetings, events, and discreet city itineraries.', 'laxora' ),
        'image' => LAXORA_URI . '/assets/images/fleet/bmw-7-series.jpg',
        'color' => '#C5A059',
        'features' => array(
            __( 'Flexible hourly, half-day & full-day terms', 'laxora' ),
            __( 'Dedicated chauffeur for the entire engagement', 'laxora' ),
            __( 'Unlimited stops within agreed itinerary', 'laxora' ),
            __( 'On-board refreshments & Wi-Fi', 'laxora' ),
        ),
    ),
    array(
        'title' => __( 'Corporate Roadshows', 'laxora' ),
        'desc'  => __( 'Multi-city, multi-day orchestration for executive teams and investor relations engagements, with dedicated account management and 24/7 oversight.', 'laxora' ),
        'image' => LAXORA_URI . '/assets/images/fleet/cadillac-escalade.jpg',
        'color' => '#A855F7',
        'features' => array(
            __( 'Dedicated account manager & ops desk', 'laxora' ),
            __( 'Multi-city scheduling & coordination', 'laxora' ),
            __( 'Tier-1 city coverage worldwide', 'laxora' ),
            __( 'Real-time itinerary updates', 'laxora' ),
        ),
    ),
    array(
        'title' => __( 'VIP &amp; Diplomatic', 'laxora' ),
        'desc'  => __( 'Discreet protective transport with security-vetted chauffeurs trained in international protocol, situational awareness, and confidential operations.', 'laxora' ),
        'image' => LAXORA_URI . '/assets/images/fleet/range-rover.jpg',
        'color' => '#F472B6',
        'features' => array(
            __( 'Security-vetted chauffeurs', 'laxora' ),
            __( 'Armoured vehicles available on request', 'laxora' ),
            __( 'Protocol training & cultural fluency', 'laxora' ),
            __( 'Strict NDA & confidentiality policy', 'laxora' ),
        ),
    ),
    array(
        'title' => __( 'Wedding &amp; Events', 'laxora' ),
        'desc'  => __( 'Tailored multi-vehicle convoys for weddings, galas, premieres, and milestone celebrations — styled to your colour palette and bespoke timeline.', 'laxora' ),
        'image' => LAXORA_URI . '/assets/images/fleet/mercedes-maybach.jpg',
        'color' => '#3B82F6',
        'features' => array(
            __( 'Multi-vehicle convoys & coordination', 'laxora' ),
            __( 'Liveried chauffeurs & detailed vehicles', 'laxora' ),
            __( 'Optional florals & bespoke styling', 'laxora' ),
            __( 'On-site coordinator', 'laxora' ),
        ),
    ),
    array(
        'title' => __( 'Group Transfers', 'laxora' ),
        'desc'  => __( 'Executive vans and luxury coaches for board retreats, delegations, and corporate offsites — with the same protocol standards as our solo executive service.', 'laxora' ),
        'image' => LAXORA_URI . '/assets/images/fleet/coach-bus.jpg',
        'color' => '#F97316',
        'features' => array(
            __( '7–50 passenger vehicles', 'laxora' ),
            __( 'Luxury MPV, van & coach options', 'laxora' ),
            __( 'Climate-controlled cabins', 'laxora' ),
            __( 'On-board entertainment & Wi-Fi', 'laxora' ),
        ),
    ),
);
?>

<section class="laxora-services-detail">
    <div class="laxora-container">
        <?php foreach ( $services as $idx => $s ) : $reverse = $idx % 2 === 1; ?>
            <article class="laxora-service-row <?php echo $reverse ? 'is-reverse' : ''; ?>">
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
                            <li><span class="laxora-checklist__dot" style="background:<?php echo esc_attr( $s['color'] ); ?>;"></span><?php echo esc_html( $f ); ?></li>
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
        </div>
    </div>
</section>

<?php get_footer(); ?>
