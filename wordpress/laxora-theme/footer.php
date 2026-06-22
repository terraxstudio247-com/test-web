<?php
/**
 * The footer for the Laxora theme.
 *
 * @package Laxora
 */
?>
</main>

<footer id="laxora-footer" class="laxora-footer">
    <div class="laxora-container laxora-footer__grid">
        <div class="laxora-footer__brand">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="laxora-logo" rel="home">
                <span class="laxora-logo__wordmark">LAXORA</span>
                <span class="laxora-logo__dot" aria-hidden="true"></span>
            </a>
            <p class="laxora-footer__tagline">
                <?php esc_html_e( 'Executive chauffeur services for those who measure travel in moments of uninterrupted productivity, privacy, and refinement.', 'laxora' ); ?>
            </p>
        </div>

        <div class="laxora-footer__col">
            <h4 class="laxora-footer__title"><?php esc_html_e( 'Navigate', 'laxora' ); ?></h4>
            <?php
            wp_nav_menu( array(
                'theme_location' => 'footer',
                'container'      => false,
                'menu_class'     => 'laxora-footer__menu',
                'fallback_cb'    => 'laxora_fallback_menu',
                'depth'          => 1,
            ) );
            ?>
        </div>

        <div class="laxora-footer__col">
            <h4 class="laxora-footer__title"><?php esc_html_e( 'Concierge', 'laxora' ); ?></h4>
            <?php if ( is_active_sidebar( 'footer-concierge' ) ) : ?>
                <?php dynamic_sidebar( 'footer-concierge' ); ?>
            <?php else : ?>
                <ul class="laxora-footer__contact">
                    <li><?php echo esc_html( get_theme_mod( 'laxora_email', 'concierge@laxora.com' ) ); ?></li>
                    <li><?php echo esc_html( get_theme_mod( 'laxora_phone', '+1 (800) LAXORA-1' ) ); ?></li>
                    <li><?php esc_html_e( '24 / 7 Global Operations', 'laxora' ); ?></li>
                </ul>
            <?php endif; ?>
        </div>
    </div>

    <div class="laxora-container laxora-footer__bottom">
        <p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php esc_html_e( 'Laxora. All Rights Reserved.', 'laxora' ); ?></p>
        <p><?php esc_html_e( 'Crafted for the discerning few.', 'laxora' ); ?></p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
