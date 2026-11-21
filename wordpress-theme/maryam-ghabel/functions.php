<?php
/**
 * Maryam Ghabel Clinical functions and definitions.
 *
 * @package Maryam_Ghabel
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Theme version (cache-busting for enqueued assets).
 */
if ( ! defined( 'MARYAM_GHABEL_VERSION' ) ) {
    define( 'MARYAM_GHABEL_VERSION', '1.0.0' );
}

if ( ! defined( 'MARYAM_GHABEL_DIR' ) ) {
    define( 'MARYAM_GHABEL_DIR', get_template_directory() );
}

if ( ! defined( 'MARYAM_GHABEL_URI' ) ) {
    define( 'MARYAM_GHABEL_URI', get_template_directory_uri() );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function maryam_ghabel_setup() {
    // Make theme available for translation.
    load_theme_textdomain( 'maryam-ghabel', MARYAM_GHABEL_DIR . '/languages' );

    // Add core WordPress feature support.
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'customize-selective-refresh-widgets' );

    // HTML5 support.
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
            'navigation-widgets',
        )
    );

    // Custom logo.
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 80,
            'width'       => 240,
            'flex-height' => true,
            'flex-width'  => true,
        )
    );

    // Post formats.
    add_theme_support( 'post-formats', array( 'aside', 'gallery', 'quote', 'link', 'image' ) );

    // Editor styles.
    add_theme_support( 'editor-styles' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'responsive-embeds' );

    // Custom image sizes.
    add_image_size( 'maryam-ghabel-card', 600, 400, true );
    add_image_size( 'maryam-ghabel-wide', 1280, 600, true );
    add_image_size( 'maryam-ghabel-portrait', 800, 1000, true );

    // Register navigation menus.
    register_nav_menus(
        array(
            'primary' => __( 'منوی اصلی', 'maryam-ghabel' ),
            'footer'  => __( 'منوی فوتر', 'maryam-ghabel' ),
            'social'  => __( 'منوی شبکه‌های اجتماعی', 'maryam-ghabel' ),
        )
    );
}
add_action( 'after_setup_theme', 'maryam_ghabel_setup' );

/**
 * Set content width.
 */
function maryam_ghabel_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'maryam_ghabel_content_width', 840 );
}
add_action( 'after_setup_theme', 'maryam_ghabel_content_width', 0 );

/**
 * Register widget areas.
 */
function maryam_ghabel_widgets_init() {
    register_sidebar(
        array(
            'name'          => __( 'سایدبار اصلی', 'maryam-ghabel' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'سایدبار پیش‌فرض قالب.', 'maryam-ghabel' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );

    register_sidebar(
        array(
            'name'          => __( 'سایدبار وبلاگ', 'maryam-ghabel' ),
            'id'            => 'sidebar-blog',
            'description'   => __( 'سایدبر مخصوص صفحه وبلاگ.', 'maryam-ghabel' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );

    // Footer widgets (3 columns).
    for ( $i = 1; $i <= 3; $i++ ) {
        register_sidebar(
            array(
                /* translators: %d: footer column number */
                'name'          => sprintf( __( 'فوتر ستون %d', 'maryam-ghabel' ), $i ),
                'id'            => 'footer-' . $i,
                'description'   => __( 'ستون فوتر.', 'maryam-ghabel' ),
                'before_widget' => '<section id="%1$s" class="widget footer-widget %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );
    }
}
add_action( 'widgets_init', 'maryam_ghabel_widgets_init' );

/**
 * Enqueue scripts and styles.
 *
 * Vazirmatn font is bundled locally (no external CDN).
 * Tailwind CDN has been removed — the theme ships its own CSS.
 */
function maryam_ghabel_scripts() {
    // Main theme stylesheet (style.css includes @font-face for Vazirmatn).
    wp_enqueue_style(
        'maryam-ghabel-style',
        get_stylesheet_uri(),
        array(),
        MARYAM_GHABEL_VERSION
    );

    // Main theme CSS.
    wp_enqueue_style(
        'maryam-ghabel-main',
        MARYAM_GHABEL_URI . '/assets/css/main.css',
        array( 'maryam-ghabel-style' ),
        MARYAM_GHABEL_VERSION
    );

    // RTL stylesheet.
    if ( is_rtl() ) {
        wp_enqueue_style(
            'maryam-ghabel-rtl',
            MARYAM_GHABEL_URI . '/assets/css/rtl.css',
            array( 'maryam-ghabel-main' ),
            MARYAM_GHABEL_VERSION
        );
    }

    // Main JavaScript.
    wp_enqueue_script(
        'maryam-ghabel-navigation',
        MARYAM_GHABEL_URI . '/assets/js/main.js',
        array(),
        MARYAM_GHABEL_VERSION,
        true
    );

    // Pass data to JS.
    wp_localize_script(
        'maryam-ghabel-navigation',
        'maryamGhabelData',
        array(
            'ajaxUrl'   => admin_url( 'admin-ajax.php' ),
            'nonce'     => wp_create_nonce( 'maryam_ghabel_nonce' ),
            'menuLabel' => __( 'منو', 'maryam-ghabel' ),
        )
    );

    // Threaded comments.
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'maryam_ghabel_scripts' );

/**
 * Preload critical local assets only (no external CDN preconnect).
 */
function maryam_ghabel_preload_assets() {
    // Preload the main local font file (regular weight, used most).
    $font_url = MARYAM_GHABEL_URI . '/assets/fonts/Vazirmatn-Regular.ttf';
    ?>
    <link rel="preload" href="<?php echo esc_url( $font_url ); ?>" as="font" type="font/ttf" crossorigin>
    <?php
}
add_action( 'wp_head', 'maryam_ghabel_preload_assets', 1 );

/**
 * Add custom body classes.
 *
 * @param array $classes Body classes.
 * @return array
 */
function maryam_ghabel_body_classes( $classes ) {
    if ( ! is_singular() ) {
        $classes[] = 'hfeed';
    }
    $classes[] = 'font-vazirmatn';
    if ( is_rtl() ) {
        $classes[] = 'rtl';
    }
    return $classes;
}
add_filter( 'body_class', 'maryam_ghabel_body_classes' );

/**
 * Custom excerpt length.
 *
 * @param int $length Excerpt length.
 * @return int
 */
function maryam_ghabel_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'maryam_ghabel_excerpt_length', 999 );

/**
 * Custom excerpt more string.
 *
 * @param string $more More string.
 * @return string
 */
function maryam_ghabel_excerpt_more( $more ) {
    return '&hellip;';
}
add_filter( 'excerpt_more', 'maryam_ghabel_excerpt_more' );

/**
 * Include theme components.
 */
require_once MARYAM_GHABEL_DIR . '/inc/customizer.php';
require_once MARYAM_GHABEL_DIR . '/inc/template-tags.php';
require_once MARYAM_GHABEL_DIR . '/inc/elementor-support.php';

/**
 * Add fallback menu when no menu is assigned.
 *
 * @param array  $args  Menu arguments.
 * @param string $menu  Menu object.
 * @return array
 */
function maryam_ghabel_default_menu( $args ) {
    if ( empty( $args['menu'] ) && 'primary' === $args['theme_location'] && ! has_nav_menu( 'primary' ) ) {
        $args['menu'] = wp_page_menu(
            array(
                'echo'              => false,
                'show_home'         => true,
                'menu_class'        => 'menu fallback-menu',
                'container'         => false,
                'before'            => '<ul>',
                'after'             => '</ul>',
            )
        );
    }
    return $args;
}
add_filter( 'wp_nav_menu_args', 'maryam_ghabel_default_menu' );

/**
 * Add pingback header.
 */
function maryam_ghabel_pingback_header() {
    if ( is_singular() && pings_open() ) {
        printf( '<link rel="pingback" href="%s">' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
    }
}
add_action( 'wp_head', 'maryam_ghabel_pingback_header', 1 );

/**
 * Disable emoji scripts (optional performance optimization).
 */
function maryam_ghabel_disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
}
add_action( 'init', 'maryam_ghabel_disable_emojis' );

/**
 * Add theme meta generator.
 */
function maryam_ghabel_meta_generator() {
    echo '<meta name="theme-color" content="#1B2845">' . "\n";
    echo '<meta name="generator" content="Maryam Ghabel Clinical Theme ' . esc_attr( MARYAM_GHABEL_VERSION ) . '">' . "\n";
}
add_action( 'wp_head', 'maryam_ghabel_meta_generator', 1 );
