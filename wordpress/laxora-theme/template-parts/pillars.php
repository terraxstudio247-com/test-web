<?php
/**
 * Corporate Pillars section.
 *
 * @package Laxora
 */

$pillars = array(
    array(
        'title' => __( 'Absolute Punctuality', 'laxora' ),
        'desc'  => __( 'Real-time tracking protocols and meticulously orchestrated logistics ensure your chauffeur arrives precisely when expected — every time.', 'laxora' ),
        'color' => '#14B8A6',
        'icon'  => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>',
    ),
    array(
        'title' => __( 'Elite Chauffeur Protocol', 'laxora' ),
        'desc'  => __( 'Each chauffeur undergoes rigorous vetting, advanced driving certifications, and continuous training in international etiquette and discretion.', 'laxora' ),
        'color' => '#C5A059',
        'icon'  => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><polyline points="9 12 11 14 15 10"></polyline></svg>',
    ),
    array(
        'title' => __( 'Discreet Security', 'laxora' ),
        'desc'  => __( 'Absolute confidentiality of your itinerary, conversations, and personal data — guarded by ironclad operational protocols and trained professionals.', 'laxora' ),
        'color' => '#A855F7',
        'icon'  => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>',
    ),
);
?>

<section id="corporate" class="laxora-pillars">
    <div class="laxora-container">
        <div class="laxora-pillars__head">
            <div class="laxora-pillars__intro">
                <div class="laxora-eyebrow-row laxora-eyebrow-row--left">
                    <span class="laxora-eyebrow-line"></span>
                    <span class="laxora-eyebrow"><?php esc_html_e( 'The Laxora Standard', 'laxora' ); ?></span>
                </div>
                <h2 class="laxora-h2"><?php esc_html_e( 'Three Pillars. Zero Compromise.', 'laxora' ); ?></h2>
                <p class="laxora-lead"><?php esc_html_e( 'Our service philosophy is engineered around the three non-negotiables of executive travel.', 'laxora' ); ?></p>
            </div>
            <div class="laxora-pillars__image">
                <img src="<?php echo esc_url( LAXORA_URI . '/assets/images/hero.jpg' ); ?>" alt="<?php esc_attr_e( 'Laxora chauffeur at night', 'laxora' ); ?>" loading="lazy">
                <div class="laxora-pillars__image-overlay"></div>
                <div class="laxora-pillars__image-caption">
                    <span class="laxora-dot laxora-dot--teal"></span>
                    <span><?php esc_html_e( 'Live operations · 24/7 worldwide', 'laxora' ); ?></span>
                </div>
            </div>
        </div>

        <div class="laxora-pillars__grid">
            <?php foreach ( $pillars as $idx => $p ) : ?>
                <div class="laxora-pillar">
                    <span class="laxora-pillar__num" style="color: <?php echo esc_attr( $p['color'] ); ?>;">0<?php echo absint( $idx + 1 ); ?></span>
                    <span class="laxora-pillar__icon" style="background-color: <?php echo esc_attr( $p['color'] ); ?>22; color: <?php echo esc_attr( $p['color'] ); ?>;"><?php echo $p['icon']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
                    <h3 class="laxora-pillar__title"><?php echo esc_html( $p['title'] ); ?></h3>
                    <p class="laxora-pillar__desc"><?php echo esc_html( $p['desc'] ); ?></p>
                    <span class="laxora-pillar__bar" style="background-color: <?php echo esc_attr( $p['color'] ); ?>;"></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
