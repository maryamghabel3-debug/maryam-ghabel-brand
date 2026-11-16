<?php
/**
 * Header template.
 *
 * @package Maryam_Ghabel
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#content">
    <?php esc_html_e( 'پرش به محتوا', 'maryam-ghabel' ); ?>
</a>

<header id="masthead" class="site-header" role="banner">
    <div class="site-header__inner">
        <div class="site-branding">
            <?php
            if ( has_custom_logo() ) {
                the_custom_logo();
            } else {
                ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="custom-logo-link" rel="home" aria-label="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                    <span class="site-logo-placeholder" aria-hidden="true">
                        <svg width="56" height="56" viewBox="0 0 56 56" xmlns="http://www.w3.org/2000/svg" role="img">
                            <rect width="56" height="56" rx="12" fill="#1B2845"/>
                            <text x="28" y="36" font-family="Vazirmatn, Tahoma" font-size="22" font-weight="700" fill="#C9A87C" text-anchor="middle">م</text>
                        </svg>
                    </span>
                </a>
                <?php
            }
            ?>
            <div class="site-branding-text">
                <?php
                if ( is_front_page() && is_home() ) :
                    ?>
                    <h1 class="site-title">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                    </h1>
                    <?php
                else :
                    ?>
                    <p class="site-title">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                    </p>
                    <?php
                endif;
                $maryam_description = get_bloginfo( 'description', 'display' );
                if ( $maryam_description || is_customize_preview() ) :
                    ?>
                    <p class="site-description"><?php echo esc_html( $maryam_description ); ?></p>
                    <?php
                endif;
                ?>
            </div>
        </div><!-- .site-branding -->

        <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'منوی اصلی', 'maryam-ghabel' ); ?>">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" aria-label="<?php esc_attr_e( 'باز/بسته کردن منو', 'maryam-ghabel' ); ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <line x1="3" y1="6" x2="21" y2="6"/>
                    <line x1="3" y1="12" x2="21" y2="12"/>
                    <line x1="3" y1="18" x2="21" y2="18"/>
                </svg>
            </button>
            <?php
            if ( has_nav_menu( 'primary' ) ) {
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                        'container'      => false,
                        'menu_class'     => 'menu primary-menu',
                        'fallback_cb'    => false,
                    )
                );
            } else {
                wp_page_menu(
                    array(
                        'show_home'  => true,
                        'menu_class' => 'menu primary-menu',
                        'container'  => false,
                    )
                );
            }
            ?>
        </nav><!-- #site-navigation -->
    </div><!-- .site-header__inner -->
</header><!-- #masthead -->

<div id="content" class="site-content">
