<?php
/**
 * Home / Front page — composes the Laxora luxury landing page.
 * Used automatically when Settings → Reading is set to "Your latest posts"
 * or when a Static page using the default template is assigned.
 *
 * @package Laxora
 */
get_header(); ?>

<?php
get_template_part( 'template-parts/hero' );
get_template_part( 'template-parts/luxury-collection' );
get_template_part( 'template-parts/services' );
get_template_part( 'template-parts/pillars' );
get_template_part( 'template-parts/inquiry' );
?>

<?php get_footer(); ?>
