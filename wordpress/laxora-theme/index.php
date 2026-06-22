<?php
/**
 * The main template file — fallback when no other matches.
 *
 * @package Laxora
 */
get_header(); ?>

<section class="laxora-section laxora-section--default">
    <div class="laxora-container">
        <?php if ( have_posts() ) : ?>
            <div class="laxora-archive">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article <?php post_class( 'laxora-post' ); ?>>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>" class="laxora-post__image"><?php the_post_thumbnail( 'large' ); ?></a>
                        <?php endif; ?>
                        <h2 class="laxora-post__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="laxora-post__excerpt"><?php the_excerpt(); ?></div>
                    </article>
                <?php endwhile; ?>
            </div>
            <?php the_posts_pagination(); ?>
        <?php else : ?>
            <p><?php esc_html_e( 'Nothing here yet.', 'laxora' ); ?></p>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
