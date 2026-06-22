<?php
/**
 * Laxora Child for Hello Elementor — functions.
 *
 * @package LaxoraChild
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

function laxora_child_enqueue_styles() {
    wp_enqueue_style( 'hello-elementor', get_template_directory_uri() . '/style.css', array(), null );
    wp_enqueue_style( 'laxora-child-main', get_stylesheet_directory_uri() . '/assets/css/laxora.css', array( 'hello-elementor' ), '1.0.0' );
    wp_enqueue_style( 'laxora-child-style', get_stylesheet_uri(), array( 'laxora-child-main' ), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'laxora_child_enqueue_styles', 20 );
