<?php
/**
 * Template Name: Laxora — About
 * Description: Multi-section About page in the dark Laxora theme.
 *
 * @package Laxora
 */

get_header();

// Show Elementor content only when actively editing in the Elementor iframe.
// Otherwise the curated Laxora design is always rendered (this is the fix
// for pages that Hostinger AI Builder flagged as "Elementor" by default).
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
            <span><?php esc_html_e( 'About', 'laxora' ); ?></span>
        </nav>
        <h1 class="laxora-simple-banner__title"><?php esc_html_e( 'About Us', 'laxora' ); ?></h1>
    </div>
</section>

<!-- Intro: 2-column with Vision/Mission cards on left, paragraph + image on right -->
<section class="laxora-about-grid">
    <div class="laxora-container laxora-about-grid__inner">
        <div class="laxora-about-grid__left">
            <span class="laxora-eyebrow laxora-eyebrow--gold"><?php esc_html_e( 'The Ultimate in Luxury Chauffeur &amp; Car Rental Services Worldwide', 'laxora' ); ?></span>

            <div class="laxora-vm-pair">
                <div class="laxora-vm-card">
                    <span class="laxora-vm-card__icon" style="color:#14B8A6; background:rgba(20,184,166,.12);">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                    </span>
                    <h3 class="laxora-vm-card__title"><?php esc_html_e( 'Our Vision', 'laxora' ); ?></h3>
                    <p><?php esc_html_e( 'To lead the global luxury chauffeur industry with unmatched reliability, professionalism, and elegance \u2014 setting the standard the market aspires to.', 'laxora' ); ?></p>
                </div>
                <div class="laxora-vm-card">
                    <span class="laxora-vm-card__icon" style="color:#C5A059; background:rgba(197,160,89,.14);">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15 9 22 9 17 14 19 22 12 18 5 22 7 14 2 9 9 9 12 2"></polygon></svg>
                    </span>
                    <h3 class="laxora-vm-card__title"><?php esc_html_e( 'Our Mission', 'laxora' ); ?></h3>
                    <p><?php esc_html_e( 'To deliver exceptional, seamless, and luxurious travel experiences that exceed client expectations \u2014 every single time, without compromise.', 'laxora' ); ?></p>
                </div>
            </div>

            <p class="laxora-about-grid__body">
                <?php esc_html_e( 'At Laxora, we specialise in delivering a professional chauffeur service with a focus on luxury, safety, and unmatched customer satisfaction. Our dedicated team and diverse fleet are at the heart of what makes each journey smooth, stylish, and memorable.', 'laxora' ); ?>
            </p>

            <div class="laxora-experience-row">
                <div class="laxora-experience-row__badge">
                    <span class="laxora-experience-row__num">14</span>
                    <span class="laxora-experience-row__label"><?php esc_html_e( 'Years of Experience', 'laxora' ); ?></span>
                </div>
                <ul class="laxora-checklist laxora-checklist--compact">
                    <li><?php esc_html_e( 'Commitment to excellence in every ride.', 'laxora' ); ?></li>
                    <li><?php esc_html_e( 'A premium fleet for all occasions.', 'laxora' ); ?></li>
                    <li><?php esc_html_e( 'Highly trained and courteous chauffeurs.', 'laxora' ); ?></li>
                    <li><?php esc_html_e( 'Personalised service for every client.', 'laxora' ); ?></li>
                    <li><?php esc_html_e( 'Coverage across 20+ cities and airports.', 'laxora' ); ?></li>
                </ul>
            </div>
        </div>

        <div class="laxora-about-grid__right">
            <p class="laxora-lead">
                <?php esc_html_e( 'At Laxora, we are passionate about delivering unforgettable journeys. As a leading name in professional chauffeur services and luxury car rentals, we specialise in providing top-tier vehicles and tailored travel experiences across more than 20 cities worldwide.', 'laxora' ); ?>
            </p>
            <div class="laxora-about-grid__image">
                <img src="<?php echo esc_url( LAXORA_URI . '/assets/images/services/luxury-chauffeur.jpg' ); ?>" alt="<?php esc_attr_e( 'Laxora luxury sedan', 'laxora' ); ?>" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Facts & Figures + Our Services on a deeper navy band -->
<section class="laxora-about-band">
    <div class="laxora-container">
        <!-- Stats header -->
        <div class="laxora-band-head">
            <div>
                <span class="laxora-eyebrow laxora-eyebrow--gold"><?php esc_html_e( 'Facts &amp; Figures', 'laxora' ); ?></span>
                <h2 class="laxora-h2"><?php esc_html_e( 'Numbers earned in silence.', 'laxora' ); ?></h2>
            </div>
            <p class="laxora-lead">
                <?php esc_html_e( 'At Laxora, we take pride in delivering exceptional service with a focus on luxury, safety, and reliability. Experience the difference \u2014 book your ride today.', 'laxora' ); ?>
            </p>
        </div>

        <!-- Stat cards -->
        <div class="laxora-stat-cards">
            <?php
            $stats = array(
                array(
                    'icon'  => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>',
                    'value' => '98',
                    'unit'  => '%',
                    'label' => __( 'Customer Satisfaction Rate', 'laxora' ),
                    'color' => '#14B8A6',
                ),
                array(
                    'icon'  => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M5 16h14l-1.5-7H6.5L5 16z"></path><path d="M5 16v3a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-3"></path><path d="M15 16v3a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-3"></path><circle cx="8" cy="12" r="1"></circle><circle cx="16" cy="12" r="1"></circle></svg>',
                    'value' => '1,000',
                    'unit'  => '+',
                    'label' => __( 'Successful Rides Completed', 'laxora' ),
                    'color' => '#C5A059',
                ),
                array(
                    'icon'  => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16v-2a2 2 0 0 0-2-2l-3-1.5L12 4 8 10.5 5 12a2 2 0 0 0-2 2v2"></path><path d="M3 18h18v2H3z"></path></svg>',
                    'value' => '20',
                    'unit'  => '+',
                    'label' => __( 'Cities &amp; Airports Served', 'laxora' ),
                    'color' => '#A855F7',
                ),
                array(
                    'icon'  => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>',
                    'value' => '24',
                    'unit'  => '/7',
                    'label' => __( 'Client Support &amp; Availability', 'laxora' ),
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
            <span class="laxora-eyebrow laxora-eyebrow--gold"><?php esc_html_e( 'Our Services', 'laxora' ); ?></span>
            <h2 class="laxora-h2"><?php esc_html_e( 'Crafted for every kind of journey.', 'laxora' ); ?></h2>
            <p class="laxora-lead">
                <?php esc_html_e( 'We offer a complete range of luxury chauffeur services and premium travel options \u2014 ensuring every journey is seamless, safe, and tailored to your needs.', 'laxora' ); ?>
            </p>
        </div>

        <!-- Services grid (6 cards) -->
        <?php
        $services_cards = array(
            array( 'title' => __( 'Luxury Chauffeur Services', 'laxora' ), 'image' => 'services/luxury-chauffeur.jpg' ),
            array( 'title' => __( 'Musandam',                   'laxora' ), 'image' => 'services/musandam.jpg' ),
            array( 'title' => __( 'City Tour',                  'laxora' ), 'image' => 'services/city-tour.jpg' ),
            array( 'title' => __( 'Hatta',                      'laxora' ), 'image' => 'services/hatta.jpg' ),
            array( 'title' => __( 'Yacht Rental',               'laxora' ), 'image' => 'services/yacht.jpg' ),
            array( 'title' => __( 'Dhow Cruise',                'laxora' ), 'image' => 'services/dhow-cruise.jpg' ),
        );
        ?>
        <div class="laxora-svc-grid">
            <?php foreach ( $services_cards as $sc ) : ?>
                <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="laxora-svc-tile">
                    <div class="laxora-svc-tile__image">
                        <img src="<?php echo esc_url( LAXORA_URI . '/assets/images/' . $sc['image'] ); ?>" alt="<?php echo esc_attr( wp_strip_all_tags( $sc['title'] ) ); ?>" loading="lazy">
                        <div class="laxora-svc-tile__shade"></div>
                    </div>
                    <div class="laxora-svc-tile__body">
                        <h3 class="laxora-svc-tile__title"><?php echo esc_html( $sc['title'] ); ?></h3>
                        <span class="laxora-svc-tile__link"><?php esc_html_e( 'Learn More', 'laxora' ); ?> <span aria-hidden="true">→</span></span>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Final CTA -->
<section class="laxora-cta-band">
    <div class="laxora-container laxora-cta-band__inner">
        <h2 class="laxora-h2"><?php esc_html_e( 'Let\u2019s make every journey memorable.', 'laxora' ); ?></h2>
        <p class="laxora-lead">
            <?php esc_html_e( 'Looking for a reliable, professional chauffeur service or luxury transport worldwide? Travel with confidence, comfort, and class.', 'laxora' ); ?>
        </p>
        <div class="laxora-cta-band__buttons">
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="laxora-btn laxora-btn--primary"><?php esc_html_e( 'Book Your Ride', 'laxora' ); ?></a>
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
