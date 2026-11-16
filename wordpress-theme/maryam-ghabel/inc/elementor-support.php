<?php
/**
 * Elementor support for Maryam Ghabel Clinical.
 *
 * @package Maryam_Ghabel
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Tell Elementor we support it and announce theme locations.
 */
function maryam_ghabel_elementor_setup() {
    add_theme_support( 'elementor' );

    // Use Elementor's dark mode toggle in editor.
    if ( class_exists( '\Elementor\Plugin' ) ) {
        add_filter( 'elementor/editor/localize_settings', 'maryam_ghabel_elementor_editor_settings' );
    }
}
add_action( 'after_setup_theme', 'maryam_ghabel_elementor_setup' );

/**
 * Register Elementor theme locations (header & footer).
 */
function maryam_ghabel_register_elementor_locations( $elementor_theme_manager ) {
    if ( ! $elementor_theme_manager ) {
        return;
    }

    $elementor_theme_manager->register_location(
        'header',
        array(
            'hook'         => 'maryam_ghabel_header',
            'remove_hooks' => array( 'maryam_ghabel_default_header' ),
        )
    );

    $elementor_theme_manager->register_location(
        'footer',
        array(
            'hook'         => 'maryam_ghabel_footer',
            'remove_hooks' => array( 'maryam_ghabel_default_footer' ),
        )
    );

    // Single post location (optional).
    $elementor_theme_manager->register_location(
        'single',
        array(
            'hook'         => 'maryam_ghabel_single',
        )
    );

    // Archive location (optional).
    $elementor_theme_manager->register_location(
        'archive',
        array(
            'hook'         => 'maryam_ghabel_archive',
        )
    );
}
add_action( 'elementor/theme/register_locations', 'maryam_ghabel_register_elementor_locations' );

/**
 * Default header action (so Elementor can override it).
 */
function maryam_ghabel_default_header() {
    // The actual header is in header.php. This is a placeholder hook.
    do_action( 'maryam_ghabel_before_header' );
    do_action( 'maryam_ghabel_header' );
    do_action( 'maryam_ghabel_after_header' );
}

/**
 * Default footer action.
 */
function maryam_ghabel_default_footer() {
    do_action( 'maryam_ghabel_before_footer' );
    do_action( 'maryam_ghabel_footer' );
    do_action( 'maryam_ghabel_after_footer' );
}

/**
 * Filter Elementor editor settings to inject brand colors.
 *
 * @param array $settings Editor settings.
 * @return array
 */
function maryam_ghabel_elementor_editor_settings( $settings ) {
    if ( ! isset( $settings['schemes']['items'] ) ) {
        return $settings;
    }

    // Add our brand palette to the editor's "default" color scheme.
    $brand_palette = array(
        'maryam_navy'  => array(
            'title' => __( 'سرمه‌ای', 'maryam-ghabel' ),
            'color' => '#1B2845',
        ),
        'maryam_beige' => array(
            'title' => __( 'بژ', 'maryam-ghabel' ),
            'color' => '#E8DCC8',
        ),
        'maryam_gold'  => array(
            'title' => __( 'طلایی', 'maryam-ghabel' ),
            'color' => '#C9A87C',
        ),
        'maryam_black' => array(
            'title' => __( 'مشکی نرم', 'maryam-ghabel' ),
            'color' => '#2A2A2A',
        ),
    );

    if ( isset( $settings['schemes']['items']['color-picker'] ) ) {
        $settings['schemes']['items']['color-picker']['items'] = array_merge(
            $settings['schemes']['items']['color-picker']['items'],
            array_values( $brand_palette )
        );
    }

    return $settings;
}

/**
 * Add a brand color category to Elementor global colors.
 *
 * @param array $global_colors Global colors array.
 * @return array
 */
function maryam_ghabel_elementor_global_colors( $global_colors ) {
    $global_colors['maryam-ghabel'] = array(
        'title'  => __( 'پالت برند مریم قابل', 'maryam-ghabel' ),
        'items'  => array(
            'navy'         => '#1B2845',
            'navy_light'   => '#2A3A5C',
            'navy_dark'    => '#131C30',
            'beige'        => '#E8DCC8',
            'beige_light'  => '#F2EBDC',
            'beige_dark'   => '#D4C3A8',
            'gold'         => '#C9A87C',
            'gold_dark'    => '#A8895E',
            'soft_black'   => '#2A2A2A',
            'white'        => '#FFFFFF',
        ),
    );
    return $global_colors;
}
add_filter( 'elementor/core/global_colors', 'maryam_ghabel_elementor_global_colors' );

/**
 * Add a Vazirmatn typography group to Elementor global fonts.
 *
 * @param array $global_fonts Global fonts array.
 * @return array
 */
function maryam_ghabel_elementor_global_fonts( $global_fonts ) {
    $global_fonts['maryam-ghabel'] = array(
        'title' => __( 'فونت‌های قالب مریم قابل', 'maryam-ghabel' ),
        'items' => array(
            'primary'    => 'Vazirmatn',
            'secondary'  => 'Vazirmatn',
            'text'        => 'Vazirmatn',
            'accent'      => 'Vazirmatn',
        ),
    );
    return $global_fonts;
}
add_filter( 'elementor/core/global_fonts', 'maryam_ghabel_elementor_global_fonts' );

/**
 * Add CSS to Elementor editor preview to load Vazirmatn font.
 */
function maryam_ghabel_elementor_editor_styles() {
    if ( ! did_action( 'elementor/loaded' ) ) {
        return;
    }
    ?>
    <style>
        #elementor-editor-frame,
        .elementor-control-type-typography .elementor-control-input-wrapper input {
            font-family: 'Vazirmatn', Tahoma, sans-serif !important;
        }
        .elementor-panel h1,
        .elementor-panel h2,
        .elementor-panel h3,
        .elementor-panel .elementor-panel-heading-title {
            font-family: 'Vazirmatn', Tahoma, sans-serif !important;
        }
    </style>
    <?php
}
add_action( 'elementor/editor/after_enqueue_styles', 'maryam_ghabel_elementor_editor_styles' );

/**
 * Load Vazirmatn font in Elementor editor (admin).
 */
function maryam_ghabel_elementor_admin_fonts() {
    if ( ! did_action( 'elementor/loaded' ) ) {
        return;
    }
    $screen = get_current_screen();
    if ( ! $screen || false === strpos( $screen->id, 'elementor' ) ) {
        return;
    }
    wp_enqueue_style(
        'maryam-ghabel-vazirmatn-admin',
        'https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css',
        array(),
        '33.003'
    );
}
add_action( 'admin_enqueue_scripts', 'maryam_ghabel_elementor_admin_fonts' );

/**
 * Set default Elementor container width to match theme.
 */
function maryam_ghabel_elementor_container_width() {
    if ( ! class_exists( '\Elementor\Core\Kits\Documents\Kit' ) ) {
        return;
    }
    // Default container width matches --container-max (1200px).
    add_filter( 'elementor/frontend/container_width', function () {
        return '1200px';
    } );
}
add_action( 'elementor/init', 'maryam_ghabel_elementor_container_width' );

/**
 * Hide page title on home template by default (Elementor can override).
 *
 * @param bool   $visible Whether the title is visible.
 * @param int    $post_id  Post ID.
 * @return bool
 */
function maryam_ghabel_hide_title_on_templates( $visible, $post_id ) {
    $template = get_page_template_slug( $post_id );
    if ( in_array( $template, array( 'template-home.php', 'template-services.php', 'template-about.php', 'template-booking.php', 'template-contact.php' ), true ) ) {
        return false;
    }
    return $visible;
}
add_filter( 'elementor/utils/get_the_archive_title', '__return_empty_string' );

/**
 * Add Elementor "Maryam Ghabel" widget category.
 *
 * @param array $categories Widget categories.
 * @return array
 */
function maryam_ghabel_elementor_widget_categories( $categories ) {
    $categories['maryam-ghabel'] = array(
        'title' => __( 'مریم قابل', 'maryam-ghabel' ),
        'icon'  => 'fa fa-heartbeat',
    );
    return $categories;
}
add_filter( 'elementor/elements/categories_registered', 'maryam_ghabel_elementor_widget_categories' );

/**
 * Add a body class to indicate Elementor canvas is active.
 *
 * @param array $classes Body classes.
 * @return array
 */
function maryam_ghabel_elementor_body_class( $classes ) {
    if ( did_action( 'elementor/loaded' ) && in_array( 'elementor-page', $classes, true ) ) {
        $classes[] = 'maryam-ghabel-elementor';
    }
    return $classes;
}
add_filter( 'body_class', 'maryam_ghabel_elementor_body_class' );
