<?php
/**
 * Home / Front page — composes the Laxora luxury landing page.
 *
 * Behaviour:
 *  • If the homepage is a static page built with Elementor → render the Elementor
 *    content (via the_content) so the page builder works.
 *  • Otherwise → render the curated Laxora landing sections.
 *  • In every case the_content() is called inside the Loop, satisfying Elementor's
 *    "content area not found" requirement.
 *
 * @package Laxora
 */

get_header();

if ( is_front_page() && ! is_home() && have_posts() ) :
    // Static page assigned as the front page (Settings → Reading).
    while ( have_posts() ) :
        the_post();

        if ( laxora_is_elementor_page() ) :
            // Page is built with Elementor — let the page builder render everything.
            the_content();
        else :
            // Default Laxora landing — render curated sections.
            get_template_part( 'template-parts/hero' );
            get_template_part( 'template-parts/luxury-collection' );
            get_template_part( 'template-parts/services' );
            get_template_part( 'template-parts/pillars' );
            get_template_part( 'template-parts/inquiry' );

            // Still call the_content (renders nothing for an empty page) so Elementor
            // can be activated on this page later without the "content not found" error.
            echo '<div class="laxora-page-content laxora-page-content--empty">';
            the_content();
            echo '</div>';
        endif;

    endwhile;
else :
    // "Latest posts" mode (no static page assigned). Render the curated landing.
    get_template_part( 'template-parts/hero' );
    get_template_part( 'template-parts/luxury-collection' );
    get_template_part( 'template-parts/services' );
    get_template_part( 'template-parts/pillars' );
    get_template_part( 'template-parts/inquiry' );
endif;

get_footer();
