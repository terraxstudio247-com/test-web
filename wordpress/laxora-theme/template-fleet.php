<?php
/**
 * Template Name: Laxora — Fleet
 * Description: Full Fleet page — intro, filterable vehicle grid, service detail rows, premium CTA banner, testimonials.
 *
 * @package Laxora
 */

get_header();

// Video page banner (kept from prior task).
get_template_part( 'template-parts/page-banner', null, array(
    'eyebrow'  => __( 'Our Fleet', 'laxora' ),
    'title'    => __( 'A Curated <em>Luxury</em> Collection.', 'laxora' ),
    'subtitle' => __( 'Every vehicle is maintained to manufacturer specification and prepared with meticulous attention to detail before each journey.', 'laxora' ),
    'image'    => LAXORA_URI . '/assets/images/video-posters/fleet-poster.jpg',
    'video'    => 'https://videos.pexels.com/video-files/9520615/9520615-hd_1366_720_25fps.mp4',
) );
?>

<!-- Intro -->
<section class="laxora-fleet-intro">
    <div class="laxora-container laxora-fleet-intro__inner">
        <h2 class="laxora-h2 laxora-fleet-intro__title">
            <?php esc_html_e( 'Luxury Chauffeur Services Worldwide — ', 'laxora' ); ?>
            <span class="laxora-fleet-intro__accent"><?php esc_html_e( 'Our Executive Fleet', 'laxora' ); ?></span>
        </h2>
        <p class="laxora-lead">
            <?php esc_html_e( 'At Laxora, we take pride in offering a versatile and luxurious fleet of chauffeur-driven cars to meet every travel need. Whether you require a stylish sedan for business meetings, a spacious SUV for family tours, or a limousine for special occasions, our chauffeurs combine professionalism with high-end experience on every ride.', 'laxora' ); ?>
        </p>
        <h3 class="laxora-fleet-intro__sub">
            <?php esc_html_e( 'Discover Our Premium Chauffeur-Driven Cars Collection', 'laxora' ); ?>
        </h3>
    </div>
</section>

<!-- Filterable vehicle grid (reuses homepage Luxury Collection). -->
<?php get_template_part( 'template-parts/luxury-collection' ); ?>

<!-- Sedan service row (image left, copy right) -->
<section class="laxora-services-detail laxora-services-detail--fleet">
    <div class="laxora-container">

        <article class="laxora-service-row" id="sedan-service">
            <div class="laxora-service-row__image">
                <img src="<?php echo esc_url( LAXORA_URI . '/assets/images/fleet-page/sedan-service.jpg' ); ?>" alt="<?php esc_attr_e( 'Sedan chauffeur service', 'laxora' ); ?>" loading="lazy">
                <span class="laxora-service-row__num" style="color:#14B8A6;">01</span>
            </div>
            <div class="laxora-service-row__body">
                <span class="laxora-eyebrow" style="color:#14B8A6;"><?php esc_html_e( 'Service · 01', 'laxora' ); ?></span>
                <h2 class="laxora-h2"><?php esc_html_e( 'Sedan Chauffeur Services.', 'laxora' ); ?></h2>
                <p class="laxora-lead"><?php esc_html_e( 'Our executive sedan chauffeur fleet is designed for business travellers, airport transfers, and daily commutes across the city. With plush interiors, Wi-Fi, refreshments, and professional drivers, every ride is tailored for comfort and class.', 'laxora' ); ?></p>
                <p class="laxora-fleet-sub"><strong><?php esc_html_e( 'Popular Models Include:', 'laxora' ); ?></strong></p>
                <ul class="laxora-checklist laxora-checklist--two">
                    <li><span class="laxora-checklist__dot" style="background:#14B8A6;"></span><?php esc_html_e( 'Mercedes-Benz S-Class', 'laxora' ); ?></li>
                    <li><span class="laxora-checklist__dot" style="background:#14B8A6;"></span><?php esc_html_e( 'Audi A6 Signed', 'laxora' ); ?></li>
                    <li><span class="laxora-checklist__dot" style="background:#14B8A6;"></span><?php esc_html_e( 'GMC Yukon XL', 'laxora' ); ?></li>
                    <li><span class="laxora-checklist__dot" style="background:#14B8A6;"></span><?php esc_html_e( 'Lexus ES', 'laxora' ); ?></li>
                </ul>
                <p class="laxora-fleet-sub"><strong><?php esc_html_e( 'Perfect For:', 'laxora' ); ?></strong></p>
                <ul class="laxora-checklist laxora-checklist--two">
                    <li><span class="laxora-checklist__dot" style="background:#14B8A6;"></span><?php esc_html_e( 'Airport Transfers', 'laxora' ); ?></li>
                    <li><span class="laxora-checklist__dot" style="background:#14B8A6;"></span><?php esc_html_e( 'Business Meetings', 'laxora' ); ?></li>
                    <li><span class="laxora-checklist__dot" style="background:#14B8A6;"></span><?php esc_html_e( 'One-on-One City Tours', 'laxora' ); ?></li>
                    <li><span class="laxora-checklist__dot" style="background:#14B8A6;"></span><?php esc_html_e( 'Executive Pickups', 'laxora' ); ?></li>
                </ul>
            </div>
        </article>

        <article class="laxora-service-row is-reverse" id="suv-service">
            <div class="laxora-service-row__image">
                <img src="<?php echo esc_url( LAXORA_URI . '/assets/images/fleet-page/suv-service.jpg' ); ?>" alt="<?php esc_attr_e( 'SUV chauffeur service', 'laxora' ); ?>" loading="lazy">
                <span class="laxora-service-row__num" style="color:#C5A059;">02</span>
            </div>
            <div class="laxora-service-row__body">
                <span class="laxora-eyebrow" style="color:#C5A059;"><?php esc_html_e( 'Service · 02', 'laxora' ); ?></span>
                <h2 class="laxora-h2"><?php esc_html_e( 'SUV Chauffeur Services — Spacious &amp; Powerful Rides.', 'laxora' ); ?></h2>
                <p class="laxora-lead"><?php esc_html_e( 'Need more room, luxury, and road presence? Our luxury SUV chauffeur services offer power and elegance for groups, families, and VIP guests. Perfect for sightseeing, intercity travel, and tours with high-end safety, comfort, and discretion.', 'laxora' ); ?></p>
                <p class="laxora-fleet-sub"><strong><?php esc_html_e( 'Our SUV Lineup:', 'laxora' ); ?></strong></p>
                <ul class="laxora-checklist laxora-checklist--two">
                    <li><span class="laxora-checklist__dot" style="background:#C5A059;"></span><?php esc_html_e( 'Cadillac Escalade', 'laxora' ); ?></li>
                    <li><span class="laxora-checklist__dot" style="background:#C5A059;"></span><?php esc_html_e( 'Chevrolet Tahoe', 'laxora' ); ?></li>
                    <li><span class="laxora-checklist__dot" style="background:#C5A059;"></span><?php esc_html_e( 'Range Rover Autobiography', 'laxora' ); ?></li>
                    <li><span class="laxora-checklist__dot" style="background:#C5A059;"></span><?php esc_html_e( 'GMC Yukon XL Black', 'laxora' ); ?></li>
                </ul>
                <p class="laxora-fleet-sub"><strong><?php esc_html_e( 'Best For:', 'laxora' ); ?></strong></p>
                <ul class="laxora-checklist laxora-checklist--two">
                    <li><span class="laxora-checklist__dot" style="background:#C5A059;"></span><?php esc_html_e( 'Family City Tours', 'laxora' ); ?></li>
                    <li><span class="laxora-checklist__dot" style="background:#C5A059;"></span><?php esc_html_e( 'VIP Group Transport', 'laxora' ); ?></li>
                    <li><span class="laxora-checklist__dot" style="background:#C5A059;"></span><?php esc_html_e( 'Hotel-to-Event Transfers', 'laxora' ); ?></li>
                    <li><span class="laxora-checklist__dot" style="background:#C5A059;"></span><?php esc_html_e( 'Intercity Travel', 'laxora' ); ?></li>
                </ul>
            </div>
        </article>

        <article class="laxora-service-row" id="limo-service">
            <div class="laxora-service-row__image">
                <img src="<?php echo esc_url( LAXORA_URI . '/assets/images/fleet-page/limo-service.jpg' ); ?>" alt="<?php esc_attr_e( 'Limousine chauffeur service', 'laxora' ); ?>" loading="lazy">
                <span class="laxora-service-row__num" style="color:#A855F7;">03</span>
            </div>
            <div class="laxora-service-row__body">
                <span class="laxora-eyebrow" style="color:#A855F7;"><?php esc_html_e( 'Service · 03', 'laxora' ); ?></span>
                <h2 class="laxora-h2"><?php esc_html_e( 'Limousine Luxury Chauffeur Services — Elegance for Special Events.', 'laxora' ); ?></h2>
                <p class="laxora-lead"><?php esc_html_e( 'When only the best will do, our chauffeur-driven limousine cruisers offer an unforgettable VIP experience. Equipped with luxury lighting, climate control, privacy partitions, and audio systems, our limos are ideal for weddings, corporate launches, and red-carpet events.', 'laxora' ); ?></p>
                <p class="laxora-fleet-sub"><strong><?php esc_html_e( 'Available Options:', 'laxora' ); ?></strong></p>
                <ul class="laxora-checklist laxora-checklist--two">
                    <li><span class="laxora-checklist__dot" style="background:#A855F7;"></span><?php esc_html_e( 'Mercedes-Benz Stretch', 'laxora' ); ?></li>
                    <li><span class="laxora-checklist__dot" style="background:#A855F7;"></span><?php esc_html_e( 'GMC Yukon XL Limousine', 'laxora' ); ?></li>
                    <li><span class="laxora-checklist__dot" style="background:#A855F7;"></span><?php esc_html_e( 'Escalade Cadillac', 'laxora' ); ?></li>
                </ul>
                <p class="laxora-fleet-sub"><strong><?php esc_html_e( 'Perfect For:', 'laxora' ); ?></strong></p>
                <ul class="laxora-checklist laxora-checklist--two">
                    <li><span class="laxora-checklist__dot" style="background:#A855F7;"></span><?php esc_html_e( 'Weddings &amp; Galas', 'laxora' ); ?></li>
                    <li><span class="laxora-checklist__dot" style="background:#A855F7;"></span><?php esc_html_e( 'VIP Arrivals &amp; Celebrity Visits', 'laxora' ); ?></li>
                    <li><span class="laxora-checklist__dot" style="background:#A855F7;"></span><?php esc_html_e( 'Romantic Evenings', 'laxora' ); ?></li>
                    <li><span class="laxora-checklist__dot" style="background:#A855F7;"></span><?php esc_html_e( 'Corporate Launches', 'laxora' ); ?></li>
                </ul>
            </div>
        </article>

    </div>
</section>

<!-- Premium fleet CTA banner -->
<section class="laxora-premium-banner" style="background-image: linear-gradient(rgba(11,12,16,0.78), rgba(11,12,16,0.78)), url('<?php echo esc_url( LAXORA_URI . '/assets/images/fleet-page/premium-cta.jpg' ); ?>');">
    <div class="laxora-container laxora-premium-banner__inner">
        <h2 class="laxora-h2 laxora-premium-banner__title"><?php esc_html_e( 'Our Premium Chauffeur-Driven Fleet.', 'laxora' ); ?></h2>
        <p class="laxora-lead">
            <?php esc_html_e( 'Available 24/7, our Laxora chauffeur-driven cars feature comfort, top-tier performance, and elegance. All vehicles include premium interiors, polished exteriors, and the highest standard of service.', 'laxora' ); ?>
        </p>
        <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="laxora-btn laxora-btn--primary"><?php esc_html_e( 'Learn More', 'laxora' ); ?></a>
    </div>
</section>

<!-- Testimonials -->
<section class="laxora-testimonials">
    <div class="laxora-container">
        <div class="laxora-testimonials__header">
            <span class="laxora-eyebrow laxora-eyebrow--gold"><?php esc_html_e( 'Testimonials', 'laxora' ); ?></span>
            <h2 class="laxora-h2"><?php esc_html_e( 'What Our Clients Say About Us.', 'laxora' ); ?></h2>
        </div>

        <?php
        $testimonials = array(
            array(
                'platform' => 'Google',
                'badge'    => 'G',
                'badge_color' => '#4285F4',
                'name'     => 'Aarav Mehta',
                'date'     => '2 weeks ago',
                'rating'   => 5,
                'text'     => __( 'Top quality and on-time chauffeur every single ride. The cars are immaculate, the drivers polite, and the booking process is seamless. Laxora has become our go-to for all executive travel.', 'laxora' ),
            ),
            array(
                'platform' => 'Trustpilot',
                'badge'    => 'T',
                'badge_color' => '#00B67A',
                'name'     => 'Sophia Laurent',
                'date'     => '1 month ago',
                'rating'   => 5,
                'text'     => __( 'Very luxurious cars, very experienced chauffeurs. Booked Laxora for our wedding party and they exceeded every expectation. Will recommend to family and friends.', 'laxora' ),
            ),
            array(
                'platform' => 'Google',
                'badge'    => 'G',
                'badge_color' => '#4285F4',
                'name'     => 'Marcus Chen',
                'date'     => '3 weeks ago',
                'rating'   => 5,
                'text'     => __( 'I have been using Laxora for over a year now for my client meetings. Reliable, discreet, and the quality of vehicles is consistently top-tier. Strongly recommended.', 'laxora' ),
            ),
            array(
                'platform' => 'Google',
                'badge'    => 'G',
                'badge_color' => '#4285F4',
                'name'     => 'Priya Kapoor',
                'date'     => '5 days ago',
                'rating'   => 5,
                'text'     => __( 'Our chauffeur was incredibly professional. The car was spotless and the ride was incredibly smooth. Will absolutely book again for our next trip.', 'laxora' ),
            ),
            array(
                'platform' => 'Facebook',
                'badge'    => 'f',
                'badge_color' => '#1877F2',
                'name'     => 'James O\u2019Connor',
                'date'     => '2 months ago',
                'rating'   => 5,
                'text'     => __( 'Easily one of the best chauffeur companies I have used. From the booking experience to the actual ride, every detail was handled with care.', 'laxora' ),
            ),
        );
        ?>
        <div class="laxora-testimonials__grid">
            <?php foreach ( $testimonials as $t ) : ?>
                <article class="laxora-testimonial">
                    <header class="laxora-testimonial__head">
                        <span class="laxora-testimonial__badge" style="background:<?php echo esc_attr( $t['badge_color'] ); ?>;">
                            <?php echo esc_html( $t['badge'] ); ?>
                        </span>
                        <div>
                            <span class="laxora-testimonial__platform"><?php echo esc_html( $t['platform'] ); ?></span>
                            <span class="laxora-testimonial__name"><?php echo esc_html( $t['name'] ); ?></span>
                        </div>
                    </header>
                    <div class="laxora-testimonial__stars" aria-label="<?php printf( esc_attr__( '%d out of 5 stars', 'laxora' ), absint( $t['rating'] ) ); ?>">
                        <?php echo str_repeat( '★', max( 0, min( 5, (int) $t['rating'] ) ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                    </div>
                    <p class="laxora-testimonial__text"><?php echo esc_html( $t['text'] ); ?></p>
                    <span class="laxora-testimonial__date"><?php echo esc_html( $t['date'] ); ?></span>
                </article>
            <?php endforeach; ?>
        </div>

        <div class="laxora-testimonials__cta">
            <span class="laxora-testimonials__rating-line">
                <?php
                printf(
                    /* translators: 1: rating value, 2: total reviews count */
                    esc_html__( 'Google rating score: %1$s of 5, based on %2$s reviews', 'laxora' ),
                    '<strong>4.9</strong>',
                    '<strong>112</strong>'
                ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                ?>
            </span>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="laxora-btn laxora-btn--primary"><?php esc_html_e( 'Write a Review', 'laxora' ); ?></a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
