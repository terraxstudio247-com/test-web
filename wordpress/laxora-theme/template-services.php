<?php
/**
 * Template Name: Laxora — Services
 * Description: Services page — mirrors the About page structure (simple banner → 2-col intro → dark band with stats + service grid → CTA).
 *
 * @package Laxora
 */

get_header();

// Show Elementor content only when actively editing in the Elementor iframe.
// Otherwise the curated Laxora design is always rendered.
if ( have_posts() ) {
    the_post();
    if ( laxora_is_elementor_editor() ) {
        the_content();
        get_footer();
        return;
    }
    rewind_posts();
    the_post();
}
?>

<!-- Simple page banner (no video, no subtitle) -->
<section class="laxora-simple-banner">
    <div class="laxora-simple-banner__bg" aria-hidden="true">
        <span class="laxora-glow laxora-glow--teal"></span>
        <span class="laxora-glow laxora-glow--gold"></span>
    </div>
    <div class="laxora-container laxora-simple-banner__inner">
        <nav class="laxora-breadcrumbs" aria-label="Breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'laxora' ); ?></a>
            <span class="laxora-breadcrumbs__sep">—</span>
            <span><?php esc_html_e( 'Services', 'laxora' ); ?></span>
        </nav>
        <h1 class="laxora-simple-banner__title"><?php esc_html_e( 'Our Services', 'laxora' ); ?></h1>
    </div>
</section>

<!-- Intro: 2-column with two highlight cards on left, paragraph + image on right -->
<section class="laxora-about-grid">
    <div class="laxora-container laxora-about-grid__inner">
        <div class="laxora-about-grid__left">
            <span class="laxora-eyebrow laxora-eyebrow--gold"><?php esc_html_e( 'Premium Chauffeur Services Tailored to Every Journey', 'laxora' ); ?></span>

            <div class="laxora-vm-pair">
                <div class="laxora-vm-card">
                    <span class="laxora-vm-card__icon" style="color:#14B8A6; background:rgba(20,184,166,.12);">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    </span>
                    <h3 class="laxora-vm-card__title"><?php esc_html_e( 'Our Standard', 'laxora' ); ?></h3>
                    <p><?php esc_html_e( 'Manufacturer-spec vehicles, hand-picked chauffeurs, and a service playbook refined over thousands of executive journeys. Excellence is the baseline — never the goal.', 'laxora' ); ?></p>
                </div>
                <div class="laxora-vm-card">
                    <span class="laxora-vm-card__icon" style="color:#C5A059; background:rgba(197,160,89,.14);">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M12 8v4l3 2"></path></svg>
                    </span>
                    <h3 class="laxora-vm-card__title"><?php esc_html_e( 'Our Approach', 'laxora' ); ?></h3>
                    <p><?php esc_html_e( 'Each itinerary is curated personally — vehicle, chauffeur, route, contingency. Concierge available within one business hour, twenty-four hours a day, anywhere in the world.', 'laxora' ); ?></p>
                </div>
            </div>

            <p class="laxora-about-grid__body">
                <?php esc_html_e( 'From single airport transfers to multi-city corporate roadshows and once-in-a-lifetime celebrations, Laxora orchestrates every detail end-to-end. Quiet precision, deep discretion, and an uncompromised standard of luxury — across every service we offer.', 'laxora' ); ?>
            </p>

            <div class="laxora-experience-row">
                <div class="laxora-experience-row__badge">
                    <span class="laxora-experience-row__num">5</span>
                    <span class="laxora-experience-row__label"><?php esc_html_e( 'Signature Service Lines', 'laxora' ); ?></span>
                </div>
                <ul class="laxora-checklist laxora-checklist--compact">
                    <li><?php esc_html_e( 'One business hour quotation SLA — guaranteed.', 'laxora' ); ?></li>
                    <li><?php esc_html_e( 'Dedicated concierge for every booking.', 'laxora' ); ?></li>
                    <li><?php esc_html_e( 'NDA-bound chauffeurs &amp; encrypted data discipline.', 'laxora' ); ?></li>
                    <li><?php esc_html_e( 'Complimentary onboard refreshments &amp; Wi-Fi.', 'laxora' ); ?></li>
                    <li><?php esc_html_e( 'Coverage across 20+ cities &amp; international airports.', 'laxora' ); ?></li>
                </ul>
            </div>
        </div>

        <div class="laxora-about-grid__right">
            <p class="laxora-lead">
                <?php esc_html_e( 'Whether you require a discreet airport pickup, a dedicated chauffeur for the day, or a styled convoy for a milestone occasion, our team designs the experience around you — never the other way around.', 'laxora' ); ?>
            </p>
            <div class="laxora-about-grid__image">
                <img src="<?php echo esc_url( LAXORA_URI . '/assets/images/fleet-page/sedan-service.jpg' ); ?>" alt="<?php esc_attr_e( 'Laxora chauffeur service', 'laxora' ); ?>" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Dark band: Service stats + 5 service cards -->
<section class="laxora-about-band">
    <div class="laxora-container">

        <!-- Stats header -->
        <div class="laxora-band-head">
            <div>
                <span class="laxora-eyebrow laxora-eyebrow--gold"><?php esc_html_e( 'By the Numbers', 'laxora' ); ?></span>
                <h2 class="laxora-h2"><?php esc_html_e( 'A standard you can measure.', 'laxora' ); ?></h2>
            </div>
            <p class="laxora-lead">
                <?php esc_html_e( 'Every Laxora service is built around four non-negotiables: response speed, fleet variety, around-the-clock availability, and absolute discretion. These are the metrics we are judged by — and the ones we never compromise on.', 'laxora' ); ?>
            </p>
        </div>

        <div class="laxora-stat-cards">
            <?php
            $stats = array(
                array(
                    'icon'  => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>',
                    'value' => '60',
                    'unit'  => ' min',
                    'label' => __( 'Quotation Response SLA', 'laxora' ),
                    'color' => '#14B8A6',
                ),
                array(
                    'icon'  => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M5 17h14M5 12h14M5 7h14"></path></svg>',
                    'value' => '13',
                    'unit'  => '+',
                    'label' => __( 'Vehicles Across Six Tiers', 'laxora' ),
                    'color' => '#C5A059',
                ),
                array(
                    'icon'  => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>',
                    'value' => '100',
                    'unit'  => '%',
                    'label' => __( 'NDA-Bound &amp; Discreet', 'laxora' ),
                    'color' => '#A855F7',
                ),
                array(
                    'icon'  => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>',
                    'value' => '24',
                    'unit'  => '/7',
                    'label' => __( 'Global Concierge Desk', 'laxora' ),
                    'color' => '#F472B6',
                ),
            );
            foreach ( $stats as $s ) : ?>
                <div class="laxora-stat-card">
                    <div class="laxora-stat-card__icon" style="color:<?php echo esc_attr( $s['color'] ); ?>; background:<?php echo esc_attr( $s['color'] ); ?>1A;">
                        <?php echo $s['icon']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                    </div>
                    <div class="laxora-stat-card__body">
                        <span class="laxora-stat-card__value">
                            <?php echo esc_html( $s['value'] ); ?><small><?php echo wp_kses_post( $s['unit'] ); ?></small>
                        </span>
                        <span class="laxora-stat-card__label"><?php echo wp_kses_post( $s['label'] ); ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Services header -->
        <div class="laxora-band-head laxora-band-head--center">
            <span class="laxora-eyebrow laxora-eyebrow--gold"><?php esc_html_e( 'What We Offer', 'laxora' ); ?></span>
            <h2 class="laxora-h2"><?php esc_html_e( 'Five signature services. One uncompromised standard.', 'laxora' ); ?></h2>
            <p class="laxora-lead">
                <?php esc_html_e( 'Choose the engagement that fits your itinerary — every option is delivered by the same vetted chauffeurs, the same fleet of manufacturer-spec vehicles, and the same 24/7 concierge.', 'laxora' ); ?>
            </p>
        </div>

        <!-- Service cards -->
        <?php
        $services_cards = array(
            array(
                'title'   => __( 'Airport Transfers', 'laxora' ),
                'image'   => 'fleet/mercedes-s500.jpg',
                'excerpt' => __( 'Live flight tracking, complimentary 60-minute wait time, and meet-and-greet at arrivals or curbside. From wheels-down to suite check-in without a single dropped beat.', 'laxora' ),
                'color'   => '#14B8A6',
            ),
            array(
                'title'   => __( 'Luxury Chauffeur Services', 'laxora' ),
                'image'   => 'services/luxury-chauffeur.jpg',
                'excerpt' => __( 'A dedicated chauffeur and signature vehicle by the hour, half-day, or full-day. Onboard refreshments, encrypted Wi-Fi, and absolute discretion turn transit into restorative time.', 'laxora' ),
                'color'   => '#C5A059',
            ),
            array(
                'title'   => __( 'Corporate Chauffeur', 'laxora' ),
                'image'   => 'fleet-page/sedan-service.jpg',
                'excerpt' => __( 'Multi-city executive movements with a dedicated account manager, NDA-bound chauffeurs, and a 24/7 operations desk. Built for boards, IR roadshows, and delegations.', 'laxora' ),
                'color'   => '#A855F7',
            ),
            array(
                'title'   => __( 'City Tour', 'laxora' ),
                'image'   => 'services/city-tour.jpg',
                'excerpt' => __( 'Curated 4-, 6-, and 8-hour itineraries with multilingual chauffeurs, restaurant &amp; retail appointment coordination, and private guides on request.', 'laxora' ),
                'color'   => '#F472B6',
            ),
            array(
                'title'   => __( 'Event &amp; Wedding Transport', 'laxora' ),
                'image'   => 'fleet-page/limo-service.jpg',
                'excerpt' => __( 'Styled multi-vehicle convoys for weddings, galas, and premieres — liveried chauffeurs, detailed vehicles, optional florals, and an on-site coordinator throughout.', 'laxora' ),
                'color'   => '#3B82F6',
            ),
        );
        ?>
        <div class="laxora-svc-grid laxora-svc-grid--five">
            <?php foreach ( $services_cards as $sc ) : ?>
                <article class="laxora-svc-tile laxora-svc-tile--detailed">
                    <div class="laxora-svc-tile__image">
                        <img src="<?php echo esc_url( LAXORA_URI . '/assets/images/' . $sc['image'] ); ?>" alt="<?php echo esc_attr( wp_strip_all_tags( $sc['title'] ) ); ?>" loading="lazy">
                        <div class="laxora-svc-tile__shade"></div>
                        <span class="laxora-svc-tile__accent" style="background:<?php echo esc_attr( $sc['color'] ); ?>;"></span>
                    </div>
                    <div class="laxora-svc-tile__body">
                        <h3 class="laxora-svc-tile__title"><?php echo wp_kses_post( $sc['title'] ); ?></h3>
                        <p class="laxora-svc-tile__excerpt"><?php echo wp_kses_post( $sc['excerpt'] ); ?></p>
                        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="laxora-svc-tile__link" style="color:<?php echo esc_attr( $sc['color'] ); ?>;">
                            <?php esc_html_e( 'Request Quote', 'laxora' ); ?> <span aria-hidden="true">→</span>
                        </a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Final CTA -->
<section class="laxora-cta-band">
    <div class="laxora-container laxora-cta-band__inner">
        <h2 class="laxora-h2"><?php esc_html_e( 'A bespoke quotation, in one business hour.', 'laxora' ); ?></h2>
        <p class="laxora-lead">
            <?php esc_html_e( 'Share your itinerary — our concierge will respond personally with a tailored proposal.', 'laxora' ); ?>
        </p>
        <div class="laxora-cta-band__buttons">
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="laxora-btn laxora-btn--primary"><?php esc_html_e( 'Request Quote', 'laxora' ); ?></a>
            <a href="<?php echo esc_url( home_url( '/fleet/' ) ); ?>" class="laxora-btn laxora-btn--ghost"><?php esc_html_e( 'View Fleet', 'laxora' ); ?></a>
        </div>
    </div>
</section>

<?php
// Hidden content area — empty for curated pages, lets Elementor activate later.
echo '<div class="laxora-page-content laxora-page-content--empty" hidden>';
the_content();
echo '</div>';
get_footer();
?>
