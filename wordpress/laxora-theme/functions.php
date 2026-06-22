<?php
/**
 * Laxora theme functions and definitions.
 *
 * @package Laxora
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'LAXORA_VERSION', '1.0.3' );
define( 'LAXORA_DIR', get_template_directory() );
define( 'LAXORA_URI', get_template_directory_uri() );

/**
 * Theme setup.
 */
function laxora_setup() {
    load_theme_textdomain( 'laxora', LAXORA_DIR . '/languages' );

    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', array(
        'height'      => 64,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'editor-styles' );

    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Navigation', 'laxora' ),
        'footer'  => esc_html__( 'Footer Navigation', 'laxora' ),
    ) );
}
add_action( 'after_setup_theme', 'laxora_setup' );

/**
 * Enqueue scripts and styles.
 */
function laxora_enqueue_assets() {
    // Google fonts (Cormorant Garamond + Inter).
    wp_enqueue_style(
        'laxora-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500&display=swap',
        array(),
        null
    );

    // Theme root style.css (header).
    wp_enqueue_style(
        'laxora-style',
        get_stylesheet_uri(),
        array( 'laxora-fonts' ),
        LAXORA_VERSION
    );

    // Main compiled CSS (carries layout, components, utilities).
    wp_enqueue_style(
        'laxora-main',
        LAXORA_URI . '/assets/css/laxora.css',
        array( 'laxora-style' ),
        LAXORA_VERSION
    );

    // Main JS (nav toggle, fleet filter).
    wp_enqueue_script(
        'laxora-script',
        LAXORA_URI . '/assets/js/laxora.js',
        array(),
        LAXORA_VERSION,
        true
    );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'laxora_enqueue_assets' );

/**
 * Register sidebar.
 */
function laxora_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'laxora' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here to appear in your sidebar.', 'laxora' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer — Concierge', 'laxora' ),
        'id'            => 'footer-concierge',
        'description'   => esc_html__( 'Concierge contact details shown in the footer.', 'laxora' ),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-title">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'laxora_widgets_init' );

/**
 * Elementor support — advertise compatibility and provide a custom location.
 */
function laxora_register_elementor_locations( $elementor_theme_manager ) {
    $elementor_theme_manager->register_all_core_location();
}
add_action( 'elementor/theme/register_locations', 'laxora_register_elementor_locations' );

/**
 * Mark theme as Elementor-compatible so the editor renders inside the theme container.
 */
function laxora_elementor_support() {
    add_theme_support( 'elementor' );
    add_theme_support( 'elementor-pro' );
}
add_action( 'after_setup_theme', 'laxora_elementor_support' );

/**
 * Register the Laxora Page template (full-width, no sidebar) — used by Elementor users.
 */
function laxora_add_page_templates( $templates ) {
    $templates['template-fullwidth.php'] = __( 'Laxora — Full Width Canvas', 'laxora' );
    $templates['template-about.php']     = __( 'Laxora — About', 'laxora' );
    $templates['template-services.php']  = __( 'Laxora — Services', 'laxora' );
    $templates['template-fleet.php']     = __( 'Laxora — Fleet', 'laxora' );
    $templates['template-contact.php']   = __( 'Laxora — Contact', 'laxora' );
    return $templates;
}
add_filter( 'theme_page_templates', 'laxora_add_page_templates' );

/**
 * CPT — Fleet Vehicles.
 */
function laxora_register_fleet_cpt() {
    $labels = array(
        'name'               => _x( 'Fleet Vehicles', 'post type general name', 'laxora' ),
        'singular_name'      => _x( 'Vehicle', 'post type singular name', 'laxora' ),
        'menu_name'          => _x( 'Fleet', 'admin menu', 'laxora' ),
        'add_new_item'       => __( 'Add New Vehicle', 'laxora' ),
        'edit_item'          => __( 'Edit Vehicle', 'laxora' ),
        'new_item'           => __( 'New Vehicle', 'laxora' ),
        'view_item'          => __( 'View Vehicle', 'laxora' ),
        'search_items'       => __( 'Search Vehicles', 'laxora' ),
        'not_found'          => __( 'No vehicles found.', 'laxora' ),
    );

    register_post_type( 'laxora_vehicle', array(
        'labels'       => $labels,
        'public'       => true,
        'has_archive'  => false,
        'show_in_menu' => true,
        'show_in_rest' => true,
        'menu_icon'    => 'dashicons-car',
        'supports'     => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'rewrite'      => array( 'slug' => 'fleet' ),
    ) );

    register_taxonomy( 'vehicle_category', 'laxora_vehicle', array(
        'labels' => array(
            'name'          => __( 'Vehicle Categories', 'laxora' ),
            'singular_name' => __( 'Vehicle Category', 'laxora' ),
        ),
        'hierarchical'      => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'rewrite'           => array( 'slug' => 'vehicle-category' ),
    ) );
}
add_action( 'init', 'laxora_register_fleet_cpt' );

/**
 * Custom meta for vehicles: passengers + bags.
 */
function laxora_vehicle_meta_box() {
    add_meta_box( 'laxora_vehicle_specs', __( 'Vehicle Specs', 'laxora' ), 'laxora_vehicle_meta_callback', 'laxora_vehicle', 'side', 'high' );
}
add_action( 'add_meta_boxes', 'laxora_vehicle_meta_box' );

function laxora_vehicle_meta_callback( $post ) {
    wp_nonce_field( 'laxora_vehicle_save', 'laxora_vehicle_nonce' );
    $passengers = get_post_meta( $post->ID, '_laxora_passengers', true );
    $bags       = get_post_meta( $post->ID, '_laxora_bags', true );
    ?>
    <p>
        <label for="laxora_passengers"><strong><?php esc_html_e( 'Passengers', 'laxora' ); ?></strong></label><br>
        <input type="number" min="1" id="laxora_passengers" name="laxora_passengers" value="<?php echo esc_attr( $passengers ); ?>" style="width:100%">
    </p>
    <p>
        <label for="laxora_bags"><strong><?php esc_html_e( 'Bags (e.g. 2 - 3)', 'laxora' ); ?></strong></label><br>
        <input type="text" id="laxora_bags" name="laxora_bags" value="<?php echo esc_attr( $bags ); ?>" style="width:100%">
    </p>
    <?php
}

function laxora_vehicle_save( $post_id ) {
    if ( ! isset( $_POST['laxora_vehicle_nonce'] ) || ! wp_verify_nonce( sanitize_key( $_POST['laxora_vehicle_nonce'] ), 'laxora_vehicle_save' ) ) {
        return;
    }
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( ! current_user_can( 'edit_post', $post_id ) ) return;

    if ( isset( $_POST['laxora_passengers'] ) ) {
        update_post_meta( $post_id, '_laxora_passengers', absint( $_POST['laxora_passengers'] ) );
    }
    if ( isset( $_POST['laxora_bags'] ) ) {
        update_post_meta( $post_id, '_laxora_bags', sanitize_text_field( wp_unslash( $_POST['laxora_bags'] ) ) );
    }
}
add_action( 'save_post_laxora_vehicle', 'laxora_vehicle_save' );

/**
 * Customizer — brand contact info (used in header + footer).
 */
function laxora_customize_register( $wp_customize ) {
    $wp_customize->add_section( 'laxora_brand', array(
        'title'    => __( 'Laxora — Brand & Contact', 'laxora' ),
        'priority' => 30,
    ) );

    $wp_customize->add_setting( 'laxora_whatsapp', array( 'default' => '+971500000000', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'laxora_whatsapp', array(
        'label'   => __( 'WhatsApp Number (international, e.g. +971...)', 'laxora' ),
        'section' => 'laxora_brand',
        'type'    => 'text',
    ) );

    $wp_customize->add_setting( 'laxora_phone', array( 'default' => '+971500000000', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'laxora_phone', array(
        'label'   => __( 'Phone Number', 'laxora' ),
        'section' => 'laxora_brand',
        'type'    => 'text',
    ) );

    $wp_customize->add_setting( 'laxora_email', array( 'default' => 'concierge@laxora.com', 'sanitize_callback' => 'sanitize_email' ) );
    $wp_customize->add_control( 'laxora_email', array(
        'label'   => __( 'Concierge Email', 'laxora' ),
        'section' => 'laxora_brand',
        'type'    => 'email',
    ) );

    $wp_customize->add_setting( 'laxora_inquiry_shortcode', array( 'default' => '[wpforms id="1"]', 'sanitize_callback' => 'wp_kses_post' ) );
    $wp_customize->add_control( 'laxora_inquiry_shortcode', array(
        'label'       => __( 'Inquiry Form Shortcode (WPForms recommended)', 'laxora' ),
        'description' => __( 'Paste any form-plugin shortcode here. Default WPForms shortcode used as placeholder.', 'laxora' ),
        'section'     => 'laxora_brand',
        'type'        => 'text',
    ) );
}
add_action( 'customize_register', 'laxora_customize_register' );

/**
 * Helper getters for the contact info.
 */
function laxora_whatsapp_link( $message = '' ) {
    $num = preg_replace( '/[^0-9]/', '', (string) get_theme_mod( 'laxora_whatsapp', '+971500000000' ) );
    return 'https://wa.me/' . $num . ( $message ? '?text=' . rawurlencode( $message ) : '' );
}
function laxora_phone_link() {
    return 'tel:' . get_theme_mod( 'laxora_phone', '+971500000000' );
}

/**
 * Helper — fallback fleet array (used when no Vehicle CPT posts exist yet).
 */
function laxora_default_fleet() {
    $img = LAXORA_URI . '/assets/images/fleet/';
    return array(
        array( 'id' => 'gmc-yukon-xl',         'category' => 'suv',    'cat_label' => 'SUVS',           'name' => 'GMC YUKON XL',              'image' => $img . 'gmc-yukon-xl.jpg',       'passengers' => 7,  'bags' => '7 - 8',  'accent' => '#14B8A6' ),
        array( 'id' => 'gmc-yukon-xl-black',   'category' => 'suv',    'cat_label' => 'SUVS',           'name' => 'GMC YUKON XL BLACK',        'image' => $img . 'gmc-yukon-xl-black.jpg', 'passengers' => 7,  'bags' => '7 - 8',  'accent' => '#14B8A6' ),
        array( 'id' => 'cadillac-escalade',    'category' => 'suv',    'cat_label' => 'SUVS',           'name' => 'CADILLAC ESCALADE',         'image' => $img . 'cadillac-escalade.jpg',  'passengers' => 6,  'bags' => '6 - 7',  'accent' => '#14B8A6' ),
        array( 'id' => 'range-rover',          'category' => 'suv',    'cat_label' => 'SUVS',           'name' => 'RANGE ROVER AUTOBIOGRAPHY', 'image' => $img . 'range-rover.jpg',        'passengers' => 5,  'bags' => '4 - 5',  'accent' => '#14B8A6' ),
        array( 'id' => 'audi-a6',              'category' => 'sedan',  'cat_label' => 'SEDAN',          'name' => 'AUDI A6 SIGNED',            'image' => $img . 'audi-a6.jpg',            'passengers' => 4,  'bags' => '2 - 3',  'accent' => '#C5A059' ),
        array( 'id' => 'lexus-es300h',         'category' => 'sedan',  'cat_label' => 'SEDAN',          'name' => 'LEXUS ES300H',              'image' => $img . 'lexus-es300h.jpg',       'passengers' => 4,  'bags' => '2',      'accent' => '#C5A059' ),
        array( 'id' => 'mercedes-s500',        'category' => 'sedan',  'cat_label' => 'SEDAN',          'name' => 'MERCEDES BENZ S500',        'image' => $img . 'mercedes-s500.jpg',      'passengers' => 3,  'bags' => '2',      'accent' => '#C5A059' ),
        array( 'id' => 'bmw-7-series',         'category' => 'sedan',  'cat_label' => 'SEDAN',          'name' => 'BMW 7 SERIES',              'image' => $img . 'bmw-7-series.jpg',       'passengers' => 3,  'bags' => '2 - 3',  'accent' => '#C5A059' ),
        array( 'id' => 'mercedes-maybach',     'category' => 'sedan',  'cat_label' => 'SEDAN',          'name' => 'MERCEDES MAYBACH S580',     'image' => $img . 'mercedes-maybach.jpg',   'passengers' => 2,  'bags' => '2',      'accent' => '#C5A059' ),
        array( 'id' => 'mercedes-v250',        'category' => 'van',    'cat_label' => 'VAN & MPVS',     'name' => 'MERCEDES CLASS V250',       'image' => $img . 'mercedes-v250.jpg',      'passengers' => 7,  'bags' => '7 - 8',  'accent' => '#A855F7' ),
        array( 'id' => 'toyota-hiace',         'category' => 'van',    'cat_label' => 'VAN & MPVS',     'name' => 'TOYOTA HIACE COMMUTER',     'image' => $img . 'toyota-hiace.jpg',       'passengers' => 13, 'bags' => '10 - 12','accent' => '#A855F7' ),
        array( 'id' => 'coach-bus',            'category' => 'bus',    'cat_label' => 'BUS & COACHES',  'name' => 'MERCEDES TOURISMO 50',      'image' => $img . 'coach-bus.jpg',          'passengers' => 50, 'bags' => '40 - 50','accent' => '#3B82F6' ),
        array( 'id' => 'dune-buggy',           'category' => 'buggy',  'cat_label' => 'DUNE-BUGGY',     'name' => 'POLARIS RZR DUNE BUGGY',    'image' => $img . 'dune-buggy.jpg',         'passengers' => 2,  'bags' => '1',      'accent' => '#F97316' ),
    );
}

function laxora_categories() {
    return array(
        'all'   => 'ALL',
        'bus'   => 'BUS & COACHES',
        'buggy' => 'DUNE-BUGGY',
        'sedan' => 'SEDAN',
        'suv'   => 'SUVS',
        'van'   => 'VAN & MPVS',
    );
}
