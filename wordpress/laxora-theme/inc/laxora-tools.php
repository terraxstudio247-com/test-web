<?php
/**
 * Laxora Tools — admin page that cleans Hostinger AI / Elementor data from
 * key pages and assigns the proper Laxora page templates so the theme's
 * header.php / footer.php and curated sections always render.
 *
 * @package Laxora
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

/**
 * Register the admin page under Appearance → Laxora Tools.
 */
function laxora_tools_menu() {
    add_theme_page(
        __( 'Laxora Tools', 'laxora' ),
        __( 'Laxora Tools', 'laxora' ),
        'manage_options',
        'laxora-tools',
        'laxora_tools_render_page'
    );
}
add_action( 'admin_menu', 'laxora_tools_menu' );

/**
 * Show a dismissible admin notice on every admin screen when Hostinger AI
 * or Elementor data is detected on any of the five core pages.
 */
function laxora_tools_admin_notice() {
    if ( ! current_user_can( 'manage_options' ) ) { return; }
    if ( get_user_meta( get_current_user_id(), 'laxora_dismissed_reset_notice', true ) ) { return; }
    if ( isset( $_GET['page'] ) && 'laxora-tools' === $_GET['page'] ) { return; } // phpcs:ignore WordPress.Security.NonceVerification.Recommended

    $detected = laxora_tools_detect_ai_content();
    if ( empty( $detected ) ) { return; }

    $count = count( $detected );
    $url   = esc_url( admin_url( 'themes.php?page=laxora-tools' ) );
    ?>
    <div class="notice notice-warning is-dismissible" data-laxora-reset-notice>
        <p>
            <strong><?php esc_html_e( 'Laxora — Cleanup recommended', 'laxora' ); ?></strong><br>
            <?php
            /* translators: %d: number of pages with Hostinger AI / Elementor data */
            printf(
                esc_html__( 'We detected Hostinger AI or Elementor data on %d page(s). Reset them to the curated Laxora design with one click.', 'laxora' ),
                absint( $count )
            );
            ?>
        </p>
        <p>
            <a href="<?php echo $url; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>" class="button button-primary">
                <?php esc_html_e( 'Open Laxora Tools', 'laxora' ); ?>
            </a>
        </p>
    </div>
    <?php
}
add_action( 'admin_notices', 'laxora_tools_admin_notice' );

/**
 * Handle "dismiss this notice forever" clicks.
 */
function laxora_tools_dismiss_notice() {
    if ( isset( $_GET['laxora_dismiss_reset'] ) && current_user_can( 'manage_options' ) ) { // phpcs:ignore WordPress.Security.NonceVerification.Recommended
        update_user_meta( get_current_user_id(), 'laxora_dismissed_reset_notice', 1 );
    }
}
add_action( 'admin_init', 'laxora_tools_dismiss_notice' );

/**
 * The list of "core" Laxora pages and the page template that should be assigned.
 * The key is the page slug, the value is the page template file.
 */
function laxora_tools_core_pages() {
    return array(
        // Front page is handled separately (uses default template; front-page.php renders it).
        'about'    => array( 'title' => __( 'About', 'laxora' ),    'template' => 'template-about.php' ),
        'services' => array( 'title' => __( 'Services', 'laxora' ), 'template' => 'template-services.php' ),
        'fleet'    => array( 'title' => __( 'Fleet', 'laxora' ),    'template' => 'template-fleet.php' ),
        'contact'  => array( 'title' => __( 'Contact', 'laxora' ),  'template' => 'template-contact.php' ),
    );
}

/**
 * Returns the IDs of pages that currently have Hostinger AI / Elementor data we can clean.
 */
function laxora_tools_detect_ai_content() {
    $detected = array();

    $check_post = function( $post_id ) use ( &$detected ) {
        if ( ! $post_id ) { return; }
        if ( get_post_meta( $post_id, '_elementor_data', true ) ) { $detected[] = (int) $post_id; return; }
        if ( get_post_meta( $post_id, '_elementor_edit_mode', true ) ) { $detected[] = (int) $post_id; return; }
        $template = get_post_meta( $post_id, '_wp_page_template', true );
        if ( $template && false !== stripos( $template, 'elementor_canvas' ) ) { $detected[] = (int) $post_id; return; }
        if ( $template && false !== stripos( $template, 'elementor_header_footer' ) ) { $detected[] = (int) $post_id; return; }
    };

    // Front page.
    $front_id = (int) get_option( 'page_on_front' );
    if ( $front_id ) { $check_post( $front_id ); }

    // Core pages by slug.
    foreach ( laxora_tools_core_pages() as $slug => $info ) {
        $page = get_page_by_path( $slug );
        if ( $page ) { $check_post( $page->ID ); }
    }

    return array_unique( $detected );
}

/**
 * Clean one page: remove Elementor / Hostinger meta + body content + assign template.
 */
function laxora_tools_clean_page( $post_id, $template = '' ) {
    global $wpdb;

    // Remove specific Elementor meta keys.
    $elementor_keys = array(
        '_elementor_data',
        '_elementor_edit_mode',
        '_elementor_template_type',
        '_elementor_version',
        '_elementor_pro_version',
        '_elementor_page_settings',
        '_elementor_page_assets',
        '_elementor_controls_usage',
        '_elementor_css',
        '_elementor_conditions',
        '_elementor_source_image_hash',
    );
    foreach ( $elementor_keys as $key ) {
        delete_post_meta( $post_id, $key );
    }

    // Remove any meta keys that look Hostinger-AI specific.
    $wpdb->query( $wpdb->prepare(
        "DELETE FROM {$wpdb->postmeta} WHERE post_id = %d AND ( meta_key LIKE %s OR meta_key LIKE %s )",
        $post_id,
        '%hostinger%',
        '_hai_%'
    ) );

    // Reset post_content to empty so any leftover AI HTML disappears.
    wp_update_post( array(
        'ID'           => $post_id,
        'post_content' => '',
    ) );

    // Assign the desired page template (or remove the assignment for the front page).
    if ( $template ) {
        update_post_meta( $post_id, '_wp_page_template', $template );
    } else {
        delete_post_meta( $post_id, '_wp_page_template' );
    }
}

/**
 * Create the page if it doesn't exist, with the given title / slug.
 */
function laxora_tools_ensure_page( $slug, $title ) {
    $existing = get_page_by_path( $slug );
    if ( $existing ) { return $existing->ID; }

    return wp_insert_post( array(
        'post_title'   => $title,
        'post_name'    => $slug,
        'post_status'  => 'publish',
        'post_type'    => 'page',
        'post_content' => '',
    ) );
}

/**
 * Run the full reset: clean core pages, ensure they exist, set front page, build menu.
 */
function laxora_tools_run_reset( $also_create_menu = true ) {
    $report = array( 'cleaned' => array(), 'created' => array() );

    $core_pages = laxora_tools_core_pages();

    // 1. Ensure all 5 pages exist + clean them.
    $home_id = laxora_tools_ensure_page( 'home', __( 'Home', 'laxora' ) );
    if ( ! get_post_meta( $home_id, '_laxora_existed', true ) && get_post( $home_id ) ) {
        $report['created'][] = 'Home';
    }
    laxora_tools_clean_page( $home_id, '' ); // default template → uses front-page.php
    $report['cleaned'][] = 'Home';

    foreach ( $core_pages as $slug => $info ) {
        $page = get_page_by_path( $slug );
        $was_new = false;
        if ( ! $page ) {
            $id = laxora_tools_ensure_page( $slug, $info['title'] );
            $page = get_post( $id );
            $was_new = true;
        }
        if ( $page ) {
            laxora_tools_clean_page( $page->ID, $info['template'] );
            if ( $was_new ) { $report['created'][] = $info['title']; }
            $report['cleaned'][] = $info['title'];
        }
    }

    // 2. Set Home as the static front page.
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $home_id );

    // 3. Build the primary menu if it doesn't already exist.
    if ( $also_create_menu ) {
        $menu_name = 'Laxora Primary';
        $menu_obj  = wp_get_nav_menu_object( $menu_name );
        if ( ! $menu_obj ) {
            $menu_id = wp_create_nav_menu( $menu_name );
            if ( ! is_wp_error( $menu_id ) ) {
                $items = array(
                    array( 'title' => __( 'Home', 'laxora' ),     'object_id' => $home_id ),
                );
                foreach ( $core_pages as $slug => $info ) {
                    $page = get_page_by_path( $slug );
                    if ( $page ) { $items[] = array( 'title' => $info['title'], 'object_id' => $page->ID ); }
                }
                foreach ( $items as $item ) {
                    wp_update_nav_menu_item( $menu_id, 0, array(
                        'menu-item-title'     => $item['title'],
                        'menu-item-object'    => 'page',
                        'menu-item-object-id' => $item['object_id'],
                        'menu-item-type'      => 'post_type',
                        'menu-item-status'    => 'publish',
                    ) );
                }

                // Assign to "primary" location.
                $locations = get_theme_mod( 'nav_menu_locations', array() );
                $locations['primary'] = $menu_id;
                $locations['footer']  = $menu_id;
                set_theme_mod( 'nav_menu_locations', $locations );
            }
        }
    }

    return $report;
}

/**
 * Render the admin page.
 */
function laxora_tools_render_page() {
    if ( ! current_user_can( 'manage_options' ) ) { return; }

    $report = null;
    if ( isset( $_POST['laxora_run_reset'] ) && check_admin_referer( 'laxora_run_reset_nonce' ) ) {
        $report = laxora_tools_run_reset( true );
        // Reset the dismissed flag so success notice can show next time data appears.
        delete_user_meta( get_current_user_id(), 'laxora_dismissed_reset_notice' );
    }

    $detected = laxora_tools_detect_ai_content();
    ?>
    <div class="wrap">
        <h1><?php esc_html_e( 'Laxora Tools', 'laxora' ); ?></h1>
        <p style="max-width:760px;">
            <?php esc_html_e( 'This one-click tool wipes any Hostinger AI / Elementor data from your five core pages (Home, About, Services, Fleet, Contact), assigns the correct Laxora page templates, makes sure the theme\'s header and footer render everywhere, and (optionally) builds a primary navigation menu pointing to all five pages.', 'laxora' ); ?>
        </p>

        <?php if ( $report ) : ?>
            <div class="notice notice-success" style="margin-top:20px;">
                <p>
                    <strong><?php esc_html_e( 'Reset complete.', 'laxora' ); ?></strong>
                </p>
                <?php if ( ! empty( $report['created'] ) ) : ?>
                    <p><?php esc_html_e( 'Pages created:', 'laxora' ); ?> <code><?php echo esc_html( implode( ', ', $report['created'] ) ); ?></code></p>
                <?php endif; ?>
                <?php if ( ! empty( $report['cleaned'] ) ) : ?>
                    <p><?php esc_html_e( 'Pages reset to Laxora design:', 'laxora' ); ?> <code><?php echo esc_html( implode( ', ', $report['cleaned'] ) ); ?></code></p>
                <?php endif; ?>
                <p><?php esc_html_e( 'Visit your homepage now — the Laxora landing is back.', 'laxora' ); ?></p>
            </div>
        <?php endif; ?>

        <h2 style="margin-top:32px;"><?php esc_html_e( 'Current Status', 'laxora' ); ?></h2>
        <table class="widefat striped" style="max-width:760px;">
            <thead>
                <tr>
                    <th><?php esc_html_e( 'Page', 'laxora' ); ?></th>
                    <th><?php esc_html_e( 'Exists', 'laxora' ); ?></th>
                    <th><?php esc_html_e( 'Has Hostinger AI / Elementor Data', 'laxora' ); ?></th>
                    <th><?php esc_html_e( 'Page Template', 'laxora' ); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $rows = array(
                    array( 'label' => __( 'Home (front page)', 'laxora' ), 'page' => get_post( (int) get_option( 'page_on_front' ) ) ),
                );
                foreach ( laxora_tools_core_pages() as $slug => $info ) {
                    $rows[] = array( 'label' => $info['title'], 'page' => get_page_by_path( $slug ) );
                }
                foreach ( $rows as $row ) :
                    $page = $row['page'];
                    $exists = (bool) $page;
                    $has_ai = $exists && in_array( $page->ID, $detected, true );
                    $tpl    = $exists ? get_post_meta( $page->ID, '_wp_page_template', true ) : '';
                    ?>
                    <tr>
                        <td><strong><?php echo esc_html( $row['label'] ); ?></strong></td>
                        <td><?php echo $exists ? '✓' : '<span style="color:#b32d2e;">✗</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></td>
                        <td><?php echo $has_ai ? '<strong style="color:#b32d2e;">' . esc_html__( 'Yes — will be cleaned', 'laxora' ) . '</strong>' : esc_html__( 'No', 'laxora' ); ?></td>
                        <td><code><?php echo esc_html( $tpl ? $tpl : __( '(default)', 'laxora' ) ); ?></code></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h2 style="margin-top:32px;"><?php esc_html_e( 'Reset Now', 'laxora' ); ?></h2>
        <form method="post" onsubmit="return confirm('<?php echo esc_js( __( 'This will delete Hostinger AI / Elementor data from your core pages and assign the Laxora design. Continue?', 'laxora' ) ); ?>');">
            <?php wp_nonce_field( 'laxora_run_reset_nonce' ); ?>
            <p>
                <button type="submit" name="laxora_run_reset" class="button button-primary button-hero">
                    <?php esc_html_e( 'Reset to Laxora Design', 'laxora' ); ?>
                </button>
            </p>
            <p class="description" style="max-width:560px;">
                <?php esc_html_e( 'Safe to re-run any time. This does NOT delete the pages themselves — it only clears their content + Elementor data and re-assigns the correct Laxora template.', 'laxora' ); ?>
            </p>
        </form>
    </div>
    <?php
}
