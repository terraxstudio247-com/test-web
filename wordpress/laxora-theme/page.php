<?php
/**
 * Generic page template.
 *
 * @package Laxora
 */
get_header(); ?>

<section class="laxora-section laxora-section--default">
    <div class="laxora-container">
        <?php while ( have_posts() ) : the_post(); ?>
            <article <?php post_class( 'laxora-page' ); ?>>
                <h1 class="laxora-page__title"><?php the_title(); ?></h1>
                <div class="laxora-page__content"><?php the_content(); ?></div>
            </article>
        <?php endwhile; ?>
    </div>
</section>

<?php get_footer(); ?>
