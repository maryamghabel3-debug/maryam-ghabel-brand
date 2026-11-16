<?php
/**
 * Theme Customizer — Maryam Ghabel Clinical.
 *
 * @package Maryam_Ghabel
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register customizer settings.
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function maryam_ghabel_customize_register( $wp_customize ) {

    // ===== Panel: Brand Settings =====
    $wp_customize->add_panel(
        'maryam_ghabel_settings',
        array(
            'title'    => __( 'تنظیمات قالب مریم قابل', 'maryam-ghabel' ),
            'priority' => 30,
        )
    );

    // ===== Section: Brand Identity =====
    $wp_customize->add_section(
        'maryam_ghabel_brand',
        array(
            'title' => __( 'هویت برند', 'maryam-ghabel' ),
            'panel' => 'maryam_ghabel_settings',
        )
    );

    $wp_customize->add_setting(
        'maryam_ghabel_brand_name',
        array(
            'default'           => 'مریم قابل',
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'postMessage',
        )
    );
    $wp_customize->add_control(
        'maryam_ghabel_brand_name',
        array(
            'label'   => __( 'نام برند', 'maryam-ghabel' ),
            'section' => 'maryam_ghabel_brand',
            'type'    => 'text',
        )
    );

    $wp_customize->add_setting(
        'maryam_ghabel_brand_tagline',
        array(
            'default'           => __( 'روان‌شناس بالینی', 'maryam-ghabel' ),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'postMessage',
        )
    );
    $wp_customize->add_control(
        'maryam_ghabel_brand_tagline',
        array(
            'label'   => __( 'شعار برند', 'maryam-ghabel' ),
            'section' => 'maryam_ghabel_brand',
            'type'    => 'text',
        )
    );

    // ===== Section: Contact Information =====
    $wp_customize->add_section(
        'maryam_ghabel_contact',
        array(
            'title' => __( 'اطلاعات تماس', 'maryam-ghabel' ),
            'panel' => 'maryam_ghabel_settings',
        )
    );

    $contact_fields = array(
        'maryam_ghabel_email'      => array( __( 'ایمیل', 'maryam-ghabel' ), 'info@maryamghabel.ir', 'sanitize_email' ),
        'maryam_ghabel_phone'      => array( __( 'شماره تلفن (placeholder)', 'maryam-ghabel' ), '', 'sanitize_text_field' ),
        'maryam_ghabel_whatsapp'   => array( __( 'واتساپ (شماره با کد کشور)', 'maryam-ghabel' ), '', 'sanitize_text_field' ),
        'maryam_ghabel_instagram'  => array( __( 'اینستاگرام (نام کاربری بدون @)', 'maryam-ghabel' ), '', 'sanitize_text_field' ),
        'maryam_ghabel_telegram'   => array( __( 'تلگرام (نام کاربری بدون @)', 'maryam-ghabel' ), '', 'sanitize_text_field' ),
        'maryam_ghabel_address'    => array( __( 'نشانی (placeholder)', 'maryam-ghabel' ), '', 'sanitize_text_field' ),
        'maryam_ghabel_hours'      => array( __( 'ساعات کاری', 'maryam-ghabel' ), __( 'شنبه تا چهارشنبه، ۹ تا ۱۸', 'maryam-ghabel' ), 'sanitize_text_field' ),
    );

    foreach ( $contact_fields as $id => $data ) {
        list( $label, $default, $sanitize ) = $data;

        $wp_customize->add_setting(
            $id,
            array(
                'default'           => $default,
                'sanitize_callback' => $sanitize,
                'transport'         => 'refresh',
            )
        );
        $wp_customize->add_control(
            $id,
            array(
                'label'   => $label,
                'section' => 'maryam_ghabel_contact',
                'type'    => 'text',
            )
        );
    }

    // ===== Section: Form Integration =====
    $wp_customize->add_section(
        'maryam_ghabel_forms',
        array(
            'title' => __( 'ادغام فرم‌ها', 'maryam-ghabel' ),
            'panel' => 'maryam_ghabel_settings',
        )
    );

    $wp_customize->add_setting(
        'maryam_ghabel_booking_form_id',
        array(
            'default'           => '',
            'sanitize_callback' => 'absint',
        )
    );
    $wp_customize->add_control(
        'maryam_ghabel_booking_form_id',
        array(
            'label'       => __( 'شناسه‌ی فرم رزرو (WPForms)', 'maryam-ghabel' ),
            'description'  => __( 'اگر WPForms نصب است، شناسه‌ی فرم رزرو را وارد کنید. در غیر این صورت، فرم پیش‌فرض قالب نمایش داده می‌شود.', 'maryam-ghabel' ),
            'section'     => 'maryam_ghabel_forms',
            'type'        => 'number',
            'input_attrs' => array( 'min' => 0 ),
        )
    );

    $wp_customize->add_setting(
        'maryam_ghabel_contact_form_id',
        array(
            'default'           => '',
            'sanitize_callback' => 'absint',
        )
    );
    $wp_customize->add_control(
        'maryam_ghabel_contact_form_id',
        array(
            'label'       => __( 'شناسه‌ی فرم تماس (WPForms)', 'maryam-ghabel' ),
            'description'  => __( 'اگر WPForms نصب است، شناسه‌ی فرم تماس را وارد کنید.', 'maryam-ghabel' ),
            'section'     => 'maryam_ghabel_forms',
            'type'        => 'number',
            'input_attrs' => array( 'min' => 0 ),
        )
    );

    // ===== Section: Brand Colors =====
    $wp_customize->add_section(
        'maryam_ghabel_colors',
        array(
            'title' => __( 'رنگ‌های برند', 'maryam-ghabel' ),
            'panel' => 'maryam_ghabel_settings',
        )
    );

    $color_fields = array(
        'maryam_ghabel_color_navy'  => array( __( 'رنگ سرمه‌ای', 'maryam-ghabel' ), '#1B2845' ),
        'maryam_ghabel_color_beige' => array( __( 'رنگ بژ', 'maryam-ghabel' ), '#E8DCC8' ),
        'maryam_ghabel_color_gold'  => array( __( 'رنگ طلایی', 'maryam-ghabel' ), '#C9A87C' ),
        'maryam_ghabel_color_black' => array( __( 'مشکی نرم', 'maryam-ghabel' ), '#2A2A2A' ),
    );

    foreach ( $color_fields as $id => $data ) {
        list( $label, $default ) = $data;

        $wp_customize->add_setting(
            $id,
            array(
                'default'           => $default,
                'sanitize_callback' => 'sanitize_hex_color',
                'transport'         => 'refresh',
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                $id,
                array(
                    'label'   => $label,
                    'section' => 'maryam_ghabel_colors',
                )
            )
        );
    }

    // ===== Section: Theme Features =====
    $wp_customize->add_section(
        'maryam_ghabel_features',
        array(
            'title' => __( 'امکانات قالب', 'maryam-ghabel' ),
            'panel' => 'maryam_ghabel_settings',
        )
    );

    $wp_customize->add_setting(
        'maryam_ghabel_enable_tailwind',
        array(
            'default'           => true,
            'sanitize_callback' => 'maryam_ghabel_sanitize_checkbox',
        )
    );
    $wp_customize->add_control(
        'maryam_ghabel_enable_tailwind',
        array(
            'label'       => __( 'بارگذاری Tailwind CSS (CDN)', 'maryam-ghabel' ),
            'description'  => __( 'برای صفحات ساخته‌شده با Elementor نیازی نیست.', 'maryam-ghabel' ),
            'section'     => 'maryam_ghabel_features',
            'type'        => 'checkbox',
        )
    );

    $wp_customize->add_setting(
        'maryam_ghabel_enable_animations',
        array(
            'default'           => true,
            'sanitize_callback' => 'maryam_ghabel_sanitize_checkbox',
        )
    );
    $wp_customize->add_control(
        'maryam_ghabel_enable_animations',
        array(
            'label'   => __( 'فعال‌سازی انیمیشن‌های ورود', 'maryam-ghabel' ),
            'section' => 'maryam_ghabel_features',
            'type'    => 'checkbox',
        )
    );

    // ===== Section: Footer =====
    $wp_customize->add_section(
        'maryam_ghabel_footer',
        array(
            'title' => __( 'فوتر', 'maryam-ghabel' ),
            'panel' => 'maryam_ghabel_settings',
        )
    );

    $wp_customize->add_setting(
        'maryam_ghabel_footer_copyright',
        array(
            'default'           => __( 'تمام حقوق محفوظ است.', 'maryam-ghabel' ),
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control(
        'maryam_ghabel_footer_copyright',
        array(
            'label'   => __( 'متن کپی‌رایت', 'maryam-ghabel' ),
            'section' => 'maryam_ghabel_footer',
            'type'    => 'text',
        )
    );

    // ===== Selective refresh (live preview) =====
    if ( isset( $wp_customize->selective_refresh ) ) {
        $wp_customize->selective_refresh->add_partial(
            'blogname',
            array(
                'selector'        => '.site-title a',
                'render_callback' => function () {
                    return get_bloginfo( 'name' );
                },
            )
        );
        $wp_customize->selective_refresh->add_partial(
            'blogdescription',
            array(
                'selector'        => '.site-description',
                'render_callback' => function () {
                    return get_bloginfo( 'description' );
                },
            )
        );
    }
}
add_action( 'customize_register', 'maryam_ghabel_customize_register' );

/**
 * Sanitize checkbox.
 *
 * @param mixed $checked Input.
 * @return bool
 */
function maryam_ghabel_sanitize_checkbox( $checked ) {
    return ( isset( $checked ) && true === (bool) $checked );
}

/**
 * Output custom CSS variables for theme customizer colors.
 */
function maryam_ghabel_customizer_css() {
    $navy  = get_theme_mod( 'maryam_ghabel_color_navy', '#1B2845' );
    $beige = get_theme_mod( 'maryam_ghabel_color_beige', '#E8DCC8' );
    $gold  = get_theme_mod( 'maryam_ghabel_color_gold', '#C9A87C' );
    $black = get_theme_mod( 'maryam_ghabel_color_black', '#2A2A2A' );

    $custom = '';
    if ( '#1B2845' !== $navy ) {
        $custom .= '--color-navy: ' . esc_html( $navy ) . ';';
    }
    if ( '#E8DCC8' !== $beige ) {
        $custom .= '--color-beige: ' . esc_html( $beige ) . ';';
    }
    if ( '#C9A87C' !== $gold ) {
        $custom .= '--color-gold: ' . esc_html( $gold ) . ';';
    }
    if ( '#2A2A2A' !== $black ) {
        $custom .= '--color-soft-black: ' . esc_html( $black ) . ';';
    }

    if ( '' !== $custom ) {
        ?>
        <style type="text/css" id="maryam-ghabel-customizer-css">
            :root { <?php echo wp_kses( $custom, array() ); ?> }
        </style>
        <?php
    }

    // Disable animations if user opts out.
    if ( ! get_theme_mod( 'maryam_ghabel_enable_animations', true ) ) {
        ?>
        <style type="text/css">
            .animate-on-scroll { opacity: 1 !important; transform: none !important; }
        </style>
        <?php
    }
}
add_action( 'wp_head', 'maryam_ghabel_customizer_css', 100 );

/**
 * Enqueue customizer preview JS.
 */
function maryam_ghabel_customize_preview_js() {
    wp_enqueue_script(
        'maryam-ghabel-customizer',
        MARYAM_GHABEL_URI . '/assets/js/customizer-preview.js',
        array( 'customize-preview' ),
        MARYAM_GHABEL_VERSION,
        true
    );
}
add_action( 'customize_preview_init', 'maryam_ghabel_customize_preview_js' );
