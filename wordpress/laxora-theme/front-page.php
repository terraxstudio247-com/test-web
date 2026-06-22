<?php
/**
 * Home / Front page — composes the Laxora luxury landing page.
 *
 * Default behaviour: always render the curated Laxora design.
 * Two exceptions:
 *   1. The current request is the Elementor editor preview iframe → render the_content
 *      so the page builder can do its job.
 *   2. The assigned static front page uses the "Laxora — Full Width Canvas" template →
 *      render the_content only (escape hatch for users who want a pure Elementor page).
 *
 * the_content() is still invoked inside the Loop in every other case (wrapped in a
 * hidden container) so Elementor can be activated on the page later without errors.
 *
 * @package Laxora
 */

get_header();

/** Helper that renders the curated Laxora landing sections. */
function laxora_render_curated_home() {
    get_template_part( 'template-parts/hero' );
    get_template_part( 'template-parts/luxury-collection' );
    get_template_part( 'template-parts/services' );
    get_template_part( 'template-parts/pillars' );
    get_template_part( 'template-parts/inquiry' );
}

if ( is_front_page() && ! is_home() && have_posts() ) :
    // A static page is assigned as the front page.
    while ( have_posts() ) :
        the_post();

        $page_template = get_page_template_slug( get_the_ID() );

        if ( laxora_is_elementor_editor() ) :
            // Editing inside Elementor — let the editor render content.
            the_content();
        elseif ( 'template-fullwidth.php' === $page_template ) :
            // User opted in to a pure-content page (great for Elementor / classic editor).
            the_content();
        else :
            // Default: render the curated Laxora landing every time.
            laxora_render_curated_home();
            // Hidden the_content call so Elementor can still be enabled on the page.
            echo '<div class="laxora-page-content laxora-page-content--empty" hidden>';
            the_content();
            echo '</div>';
        endif;

    endwhile;
else :
    // "Latest posts" homepage mode (no static page).
    laxora_render_curated_home();
endif;

get_footer();
