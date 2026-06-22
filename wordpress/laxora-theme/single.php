<?php
/**
 * Single post template.
 *
 * @package Laxora
 */
get_header(); ?>

<section class="laxora-section laxora-section--default">
    <div class="laxora-container">
        <?php while ( have_posts() ) : the_post(); ?>
            <article <?php post_class( 'laxora-post laxora-post--single' ); ?>>
                <h1 class="laxora-post__title"><?php the_title(); ?></h1>
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="laxora-post__image"><?php the_post_thumbnail( 'large' ); ?></div>
                <?php endif; ?>
                <div class="laxora-post__content"><?php the_content(); ?></div>
            </article>
        <?php endwhile; ?>
    </div>
</section>

<?php get_footer(); ?>
