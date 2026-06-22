<?php
/**
 * Template Name: Laxora — Full Width Canvas
 * Description: Empty canvas for Elementor full-width designs (header + footer only).
 *
 * @package Laxora
 */
get_header(); ?>

<div class="laxora-canvas">
    <?php while ( have_posts() ) : the_post(); the_content(); endwhile; ?>
</div>

<?php get_footer(); ?>
