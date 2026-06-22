<?php
/**
 * Template Name: Laxora — Fleet
 * Description: Full fleet listing page — reuses the Luxury Collection section.
 *
 * @package Laxora
 */

get_header();

get_template_part( 'template-parts/page-banner', null, array(
    'eyebrow'  => __( 'Our Fleet', 'laxora' ),
    'title'    => __( 'A Curated <em>Luxury</em> Collection.', 'laxora' ),
    'subtitle' => __( 'Every vehicle is maintained to manufacturer specification and prepared with meticulous attention to detail before each journey.', 'laxora' ),
    'image'    => LAXORA_URI . '/assets/images/fleet/mercedes-maybach.jpg',
) );

// Reuse the homepage fleet section.
get_template_part( 'template-parts/luxury-collection' );
?>

<!-- Standards strip -->
<section class="laxora-fleet-standards">
    <div class="laxora-container">
        <div class="laxora-fleet-standards__grid">
            <?php
            $items = array(
                array( 't' => __( 'Manufacturer-Spec Service', 'laxora' ), 'd' => __( 'Every vehicle is maintained by certified specialists at OEM standards.', 'laxora' ), 'c' => '#14B8A6' ),
                array( 't' => __( 'Detailed Before Every Trip', 'laxora' ), 'd' => __( 'Interior and exterior detailing precede every single engagement.', 'laxora' ), 'c' => '#C5A059' ),
                array( 't' => __( 'Refreshments On Board', 'laxora' ),      'd' => __( 'Chilled water, hot beverages, and curated amenities are always stocked.', 'laxora' ), 'c' => '#A855F7' ),
                array( 't' => __( 'Hi-Speed Wi-Fi', 'laxora' ),             'd' => __( 'Dedicated 5G hotspots in every executive vehicle, complimentary.', 'laxora' ), 'c' => '#F472B6' ),
            );
            foreach ( $items as $i ) : ?>
                <div class="laxora-fleet-standard">
                    <span class="laxora-fleet-standard__bar" style="background:<?php echo esc_attr( $i['c'] ); ?>;"></span>
                    <h3><?php echo esc_html( $i['t'] ); ?></h3>
                    <p><?php echo esc_html( $i['d'] ); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="laxora-cta-band">
    <div class="laxora-container laxora-cta-band__inner">
        <h2 class="laxora-h2"><?php esc_html_e( 'Reserve your preferred vehicle.', 'laxora' ); ?></h2>
        <p class="laxora-lead"><?php esc_html_e( 'Our concierge will confirm vehicle availability and prepare a quote tailored to your itinerary.', 'laxora' ); ?></p>
        <div class="laxora-cta-band__buttons">
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="laxora-btn laxora-btn--primary"><?php esc_html_e( 'Request Quote', 'laxora' ); ?></a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
