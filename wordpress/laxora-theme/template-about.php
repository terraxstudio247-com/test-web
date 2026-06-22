<?php
/**
 * Template Name: Laxora — About
 * Description: Inspired by maza.ae/about — vision, mission, experience stat, facts & figures, services grid, CTA.
 *
 * @package Laxora
 */

get_header();

get_template_part( 'template-parts/page-banner', null, array(
    'eyebrow'  => __( 'About Laxora', 'laxora' ),
    'title'    => __( 'The Ultimate in <em>Luxury Chauffeur</em> &amp; Executive Travel.', 'laxora' ),
    'subtitle' => __( 'A globally curated chauffeur house dedicated to engineering quiet, precise, and deeply personal travel experiences for the world’s most discerning clientele.', 'laxora' ),
) );
?>

<!-- Intro -->
<section class="laxora-about-intro">
    <div class="laxora-container laxora-about-intro__grid">
        <div class="laxora-about-intro__copy">
            <div class="laxora-eyebrow-row laxora-eyebrow-row--left">
                <span class="laxora-eyebrow-line"></span>
                <span class="laxora-eyebrow"><?php esc_html_e( 'Our Story', 'laxora' ); ?></span>
            </div>
            <h2 class="laxora-h2"><?php esc_html_e( 'A discreet standard, perfected over a decade.', 'laxora' ); ?></h2>
            <p class="laxora-lead">
                <?php esc_html_e( 'At Laxora, we are passionate about delivering unforgettable journeys. As a leading name in professional chauffeur services and luxury fleet curation, we specialize in providing top-tier vehicles and tailored travel experiences for executives, dignitaries, and private clientele worldwide.', 'laxora' ); ?>
            </p>
            <p class="laxora-lead">
                <?php esc_html_e( 'Every chauffeur is hand-selected, vetted, and trained in international protocol. Every vehicle is maintained to manufacturer specification and detailed before each engagement — because the smallest detail defines the entire journey.', 'laxora' ); ?>
            </p>
        </div>
        <div class="laxora-about-intro__image">
            <img src="<?php echo esc_url( LAXORA_URI . '/assets/images/interior.jpg' ); ?>" alt="<?php esc_attr_e( 'Laxora luxury interior', 'laxora' ); ?>" loading="lazy">
        </div>
    </div>
</section>

<!-- Vision & Mission -->
<section class="laxora-vm">
    <div class="laxora-container laxora-vm__grid">
        <div class="laxora-vm__card">
            <span class="laxora-vm__num" style="color:#14B8A6;">01</span>
            <h3 class="laxora-vm__title"><?php esc_html_e( 'Our Vision', 'laxora' ); ?></h3>
            <p><?php esc_html_e( 'To lead the global luxury chauffeur industry with unmatched reliability, professionalism, and elegance — setting the standard the rest of the market aspires to.', 'laxora' ); ?></p>
            <span class="laxora-vm__bar" style="background:#14B8A6;"></span>
        </div>
        <div class="laxora-vm__card">
            <span class="laxora-vm__num" style="color:#C5A059;">02</span>
            <h3 class="laxora-vm__title"><?php esc_html_e( 'Our Mission', 'laxora' ); ?></h3>
            <p><?php esc_html_e( 'To deliver exceptional, seamless, and luxurious travel experiences that exceed client expectations — every single time, without exception or compromise.', 'laxora' ); ?></p>
            <span class="laxora-vm__bar" style="background:#C5A059;"></span>
        </div>
        <div class="laxora-vm__card">
            <span class="laxora-vm__num" style="color:#A855F7;">03</span>
            <h3 class="laxora-vm__title"><?php esc_html_e( 'Our Promise', 'laxora' ); ?></h3>
            <p><?php esc_html_e( 'Absolute confidentiality, meticulous punctuality, and a chauffeur experience worthy of the people we serve. Discretion is not a feature — it is the foundation.', 'laxora' ); ?></p>
            <span class="laxora-vm__bar" style="background:#A855F7;"></span>
        </div>
    </div>
</section>

<!-- Experience block -->
<section class="laxora-experience">
    <div class="laxora-container laxora-experience__grid">
        <div class="laxora-experience__visual">
            <img src="<?php echo esc_url( LAXORA_URI . '/assets/images/fleet/mercedes-s500.jpg' ); ?>" alt="<?php esc_attr_e( 'Mercedes-Benz S-Class', 'laxora' ); ?>" loading="lazy">
            <div class="laxora-experience__years">
                <span class="laxora-experience__num">14</span>
                <span class="laxora-experience__label"><?php esc_html_e( 'Years of Excellence', 'laxora' ); ?></span>
            </div>
        </div>
        <div class="laxora-experience__copy">
            <div class="laxora-eyebrow-row laxora-eyebrow-row--left">
                <span class="laxora-eyebrow-line"></span>
                <span class="laxora-eyebrow"><?php esc_html_e( 'What sets us apart', 'laxora' ); ?></span>
            </div>
            <h2 class="laxora-h2"><?php esc_html_e( 'A decade of curated journeys.', 'laxora' ); ?></h2>
            <p class="laxora-lead"><?php esc_html_e( 'At Laxora, we don’t simply move people from point A to point B — we orchestrate moments of refinement, productivity, and calm in between.', 'laxora' ); ?></p>
            <ul class="laxora-checklist">
                <li><?php esc_html_e( 'Commitment to excellence in every ride.', 'laxora' ); ?></li>
                <li><?php esc_html_e( 'A premium fleet curated for every occasion.', 'laxora' ); ?></li>
                <li><?php esc_html_e( 'Highly trained and courteous chauffeurs.', 'laxora' ); ?></li>
                <li><?php esc_html_e( 'Personalised service for every client.', 'laxora' ); ?></li>
                <li><?php esc_html_e( 'Coverage across 20+ international cities and airports.', 'laxora' ); ?></li>
            </ul>
        </div>
    </div>
</section>

<!-- Facts & Figures -->
<section class="laxora-stats">
    <div class="laxora-container">
        <div class="laxora-stats__header">
            <div class="laxora-eyebrow-row">
                <span class="laxora-eyebrow-line"></span>
                <span class="laxora-eyebrow"><?php esc_html_e( 'Facts &amp; Figures', 'laxora' ); ?></span>
                <span class="laxora-eyebrow-line"></span>
            </div>
            <h2 class="laxora-h2"><?php esc_html_e( 'Numbers earned in silence. Reputation built in service.', 'laxora' ); ?></h2>
        </div>
        <div class="laxora-stats__grid">
            <div class="laxora-stat"><span class="laxora-stat__num" data-target="99">99<small>%</small></span><span class="laxora-stat__label"><?php esc_html_e( 'Client Satisfaction Rate', 'laxora' ); ?></span></div>
            <div class="laxora-stat"><span class="laxora-stat__num" data-target="42000">42,000<small>+</small></span><span class="laxora-stat__label"><?php esc_html_e( 'Journeys Completed', 'laxora' ); ?></span></div>
            <div class="laxora-stat"><span class="laxora-stat__num" data-target="24">24<small>+</small></span><span class="laxora-stat__label"><?php esc_html_e( 'Cities &amp; Airports Served', 'laxora' ); ?></span></div>
            <div class="laxora-stat"><span class="laxora-stat__num" data-target="24">24<small>/7</small></span><span class="laxora-stat__label"><?php esc_html_e( 'Concierge Availability', 'laxora' ); ?></span></div>
        </div>
    </div>
</section>

<!-- Services preview grid -->
<section class="laxora-services-preview">
    <div class="laxora-container">
        <div class="laxora-services-preview__header">
            <div class="laxora-eyebrow-row">
                <span class="laxora-eyebrow-line"></span>
                <span class="laxora-eyebrow"><?php esc_html_e( 'What We Offer', 'laxora' ); ?></span>
                <span class="laxora-eyebrow-line"></span>
            </div>
            <h2 class="laxora-h2"><?php esc_html_e( 'Our Services', 'laxora' ); ?></h2>
            <p class="laxora-lead"><?php esc_html_e( 'A complete range of luxury chauffeur and premium travel options — every journey seamless, safe, and tailored to your needs.', 'laxora' ); ?></p>
        </div>

        <?php
        $services_grid = array(
            array( 'title' => __( 'Luxury Chauffeur', 'laxora' ),   'image' => LAXORA_URI . '/assets/images/interior.jpg' ),
            array( 'title' => __( 'Airport Transfers', 'laxora' ),  'image' => LAXORA_URI . '/assets/images/fleet/mercedes-s500.jpg' ),
            array( 'title' => __( 'Corporate Roadshows', 'laxora' ),'image' => LAXORA_URI . '/assets/images/fleet/bmw-7-series.jpg' ),
            array( 'title' => __( 'City Tours', 'laxora' ),         'image' => LAXORA_URI . '/assets/images/fleet/cadillac-escalade.jpg' ),
            array( 'title' => __( 'Group Transfers', 'laxora' ),    'image' => LAXORA_URI . '/assets/images/fleet/coach-bus.jpg' ),
            array( 'title' => __( 'VIP &amp; Diplomatic', 'laxora' ),   'image' => LAXORA_URI . '/assets/images/fleet/range-rover.jpg' ),
        );
        ?>
        <div class="laxora-services-preview__grid">
            <?php foreach ( $services_grid as $s ) : ?>
                <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="laxora-service-card">
                    <div class="laxora-service-card__image">
                        <img src="<?php echo esc_url( $s['image'] ); ?>" alt="<?php echo esc_attr( wp_strip_all_tags( $s['title'] ) ); ?>" loading="lazy">
                        <div class="laxora-service-card__overlay"></div>
                    </div>
                    <div class="laxora-service-card__body">
                        <h3 class="laxora-service-card__title"><?php echo wp_kses_post( $s['title'] ); ?></h3>
                        <span class="laxora-service-card__link"><?php esc_html_e( 'Learn More', 'laxora' ); ?> →</span>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="laxora-cta-band">
    <div class="laxora-container laxora-cta-band__inner">
        <h2 class="laxora-h2"><?php esc_html_e( 'Let’s make every journey memorable.', 'laxora' ); ?></h2>
        <p class="laxora-lead"><?php esc_html_e( 'Looking for a reliable, professional chauffeur service or luxury transport worldwide? Travel with confidence, comfort, and class.', 'laxora' ); ?></p>
        <div class="laxora-cta-band__buttons">
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="laxora-btn laxora-btn--primary"><?php esc_html_e( 'Book Your Ride', 'laxora' ); ?></a>
            <a href="<?php echo esc_url( home_url( '/fleet/' ) ); ?>" class="laxora-btn laxora-btn--ghost"><?php esc_html_e( 'View Fleet', 'laxora' ); ?></a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
