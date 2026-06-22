<?php
/**
 * Luxury Collection (Fleet) section.
 *
 * @package Laxora
 */

$fleet      = laxora_default_fleet();
$categories = laxora_categories();

// If user has populated the Fleet CPT, prefer those entries.
$cpt_query = new WP_Query( array(
    'post_type'      => 'laxora_vehicle',
    'posts_per_page' => 24,
    'orderby'        => 'menu_order',
    'order'          => 'ASC',
) );
if ( $cpt_query->have_posts() ) {
    $fleet = array();
    while ( $cpt_query->have_posts() ) {
        $cpt_query->the_post();
        $terms     = get_the_terms( get_the_ID(), 'vehicle_category' );
        $cat_slug  = ( $terms && ! is_wp_error( $terms ) ) ? $terms[0]->slug : 'all';
        $cat_label = ( $terms && ! is_wp_error( $terms ) ) ? strtoupper( $terms[0]->name ) : 'ALL';
        $accent_map = array( 'suv' => '#14B8A6', 'sedan' => '#C5A059', 'van' => '#A855F7', 'bus' => '#3B82F6', 'buggy' => '#F97316' );
        $fleet[] = array(
            'id'         => get_post_field( 'post_name' ),
            'category'   => $cat_slug,
            'cat_label'  => $cat_label,
            'name'       => strtoupper( get_the_title() ),
            'image'      => has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_ID(), 'large' ) : LAXORA_URI . '/assets/images/fleet/mercedes-s500.jpg',
            'passengers' => (int) get_post_meta( get_the_ID(), '_laxora_passengers', true ),
            'bags'       => get_post_meta( get_the_ID(), '_laxora_bags', true ),
            'accent'     => isset( $accent_map[ $cat_slug ] ) ? $accent_map[ $cat_slug ] : '#C5A059',
        );
    }
    wp_reset_postdata();
}
?>

<section id="fleet" class="laxora-fleet">
    <span class="laxora-glow laxora-glow--purple laxora-glow--top-left"></span>
    <span class="laxora-glow laxora-glow--teal laxora-glow--bottom-right"></span>

    <div class="laxora-container">
        <div class="laxora-fleet__header">
            <span class="laxora-pill-eyebrow"><?php esc_html_e( 'The Laxora Fleet', 'laxora' ); ?></span>
            <h2 class="laxora-h2">
                <span><?php esc_html_e( 'Check our', 'laxora' ); ?></span>
                <span class="laxora-gradient-text"><?php esc_html_e( 'Luxury Collection', 'laxora' ); ?></span>
            </h2>
            <p class="laxora-lead">
                <?php esc_html_e( 'Laxora curates a premier portfolio of executive vehicles — from chauffeur-driven sedans and ultra-luxury SUVs to MPVs and coaches — delivering an uncompromised standard of comfort, privacy, and punctuality across every journey.', 'laxora' ); ?>
            </p>
        </div>

        <div class="laxora-fleet__filters" role="tablist" data-laxora-filters>
            <?php foreach ( $categories as $slug => $label ) : ?>
                <button type="button" class="laxora-pill <?php echo $slug === 'all' ? 'is-active' : ''; ?>" data-filter="<?php echo esc_attr( $slug ); ?>" aria-pressed="<?php echo $slug === 'all' ? 'true' : 'false'; ?>">
                    <?php echo esc_html( $label ); ?>
                </button>
            <?php endforeach; ?>
        </div>

        <div class="laxora-fleet__grid" data-laxora-grid>
            <?php foreach ( $fleet as $v ) :
                $whatsapp_msg = sprintf( /* translators: %s: vehicle name */ __( 'Hello Laxora, I’d like to inquire about the %s.', 'laxora' ), $v['name'] );
            ?>
                <article class="laxora-card" data-category="<?php echo esc_attr( $v['category'] ); ?>">
                    <div class="laxora-card__image">
                        <img src="<?php echo esc_url( $v['image'] ); ?>" alt="<?php echo esc_attr( $v['name'] ); ?>" loading="lazy">
                        <span class="laxora-card__chip" style="background-color: <?php echo esc_attr( $v['accent'] ); ?>;"><?php echo esc_html( $v['cat_label'] ); ?></span>
                    </div>
                    <div class="laxora-card__stripe" style="background-color: <?php echo esc_attr( $v['accent'] ); ?>;"></div>
                    <div class="laxora-card__body">
                        <h3 class="laxora-card__title"><?php echo esc_html( $v['name'] ); ?></h3>
                        <div class="laxora-card__specs">
                            <span class="laxora-card__spec">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="<?php echo esc_attr( $v['accent'] ); ?>" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                <strong><?php printf( esc_html__( '%d Passengers', 'laxora' ), absint( $v['passengers'] ) ); ?></strong>
                            </span>
                            <span class="laxora-card__divider"></span>
                            <span class="laxora-card__spec">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="<?php echo esc_attr( $v['accent'] ); ?>" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                                <strong><?php echo esc_html( $v['bags'] ); ?> <?php esc_html_e( 'Bags', 'laxora' ); ?></strong>
                            </span>
                        </div>
                        <div class="laxora-card__actions">
                            <a href="<?php echo esc_url( laxora_whatsapp_link( $whatsapp_msg ) ); ?>" class="laxora-card__btn" target="_blank" rel="noopener">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                <?php esc_html_e( 'Whatsapp', 'laxora' ); ?>
                            </a>
                            <a href="<?php echo esc_url( laxora_phone_link() ); ?>" class="laxora-card__btn">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.37 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.33 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                <?php esc_html_e( 'Call', 'laxora' ); ?>
                            </a>
                            <a href="#contact" class="laxora-card__btn"><?php esc_html_e( 'Details', 'laxora' ); ?></a>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
