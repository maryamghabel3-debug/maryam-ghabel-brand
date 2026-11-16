<?php
/**
 * Footer template.
 *
 * @package Maryam_Ghabel
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="footer-grid">
        <div class="footer-widget footer-widget--brand">
            <h3><?php bloginfo( 'name' ); ?></h3>
            <p><?php bloginfo( 'description' ); ?></p>
            <?php
            $maryam_phone = get_theme_mod( 'maryam_ghabel_phone', '' );
            if ( ! empty( $maryam_phone ) ) :
                ?>
                <p class="footer-phone">
                    <span aria-hidden="true">📞</span>
                    <a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', $maryam_phone ) ); ?>"><?php echo esc_html( $maryam_phone ); ?></a>
                </p>
                <?php
            endif;
            ?>
        </div>

        <div class="footer-widget footer-widget--menu">
            <?php
            if ( is_active_sidebar( 'footer-2' ) ) {
                dynamic_sidebar( 'footer-2' );
            } elseif ( has_nav_menu( 'footer' ) ) {
                ?>
                <h3><?php esc_html_e( 'دسترسی سریع', 'maryam-ghabel' ); ?></h3>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer',
                        'container'      => false,
                        'menu_class'     => 'footer-menu',
                        'depth'          => 1,
                    )
                );
            } else {
                ?>
                <h3><?php esc_html_e( 'دسترسی سریع', 'maryam-ghabel' ); ?></h3>
                <ul>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'خانه', 'maryam-ghabel' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/services' ) ); ?>"><?php esc_html_e( 'خدمات', 'maryam-ghabel' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>"><?php esc_html_e( 'درباره من', 'maryam-ghabel' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/booking' ) ); ?>"><?php esc_html_e( 'رزرو جلسه', 'maryam-ghabel' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><?php esc_html_e( 'تماس', 'maryam-ghabel' ); ?></a></li>
                </ul>
                <?php
            }
            ?>
        </div>

        <div class="footer-widget footer-widget--contact">
            <h3><?php esc_html_e( 'تماس و شبکه‌های اجتماعی', 'maryam-ghabel' ); ?></h3>
            <ul>
                <?php
                $maryam_email = get_theme_mod( 'maryam_ghabel_email', 'info@maryamghabel.ir' );
                if ( ! empty( $maryam_email ) ) :
                    ?>
                    <li>
                        <span aria-hidden="true">✉️</span>
                        <a href="mailto:<?php echo esc_attr( $maryam_email ); ?>"><?php echo esc_html( $maryam_email ); ?></a>
                    </li>
                    <?php
                endif;

                $maryam_whatsapp = get_theme_mod( 'maryam_ghabel_whatsapp', '' );
                if ( ! empty( $maryam_whatsapp ) ) :
                    ?>
                    <li>
                        <span aria-hidden="true">💬</span>
                        <a href="<?php echo esc_url( 'https://wa.me/' . preg_replace( '/[^0-9]/', '', $maryam_whatsapp ) ); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'واتساپ', 'maryam-ghabel' ); ?></a>
                    </li>
                    <?php
                endif;

                $maryam_instagram = get_theme_mod( 'maryam_ghabel_instagram', '' );
                if ( ! empty( $maryam_instagram ) ) :
                    ?>
                    <li>
                        <span aria-hidden="true">📷</span>
                        <a href="<?php echo esc_url( 'https://instagram.com/' . ltrim( $maryam_instagram, '@' ) ); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'اینستاگرام', 'maryam-ghabel' ); ?></a>
                    </li>
                    <?php
                endif;

                $maryam_telegram = get_theme_mod( 'maryam_ghabel_telegram', '' );
                if ( ! empty( $maryam_telegram ) ) :
                    ?>
                    <li>
                        <span aria-hidden="true">✈️</span>
                        <a href="<?php echo esc_url( 'https://t.me/' . ltrim( $maryam_telegram, '@' ) ); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'تلگرام', 'maryam-ghabel' ); ?></a>
                    </li>
                    <?php
                endif;
                ?>
            </ul>
        </div>
    </div><!-- .footer-grid -->

    <div class="site-info container">
        <p>
            &copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>.
            <?php esc_html_e( 'تمام حقوق محفوظ است.', 'maryam-ghabel' ); ?>
        </p>
        <p>
            <?php
            printf(
                /* translators: 1: theme name, 2: theme author */
                esc_html__( 'قالب: %1$s توسط تیم توسعه‌ی مریم قابل.', 'maryam-ghabel' ),
                '<span>Maryam Ghabel Clinical v' . esc_html( MARYAM_GHABEL_VERSION ) . '</span>'
            );
            ?>
        </p>
    </div><!-- .site-info -->
</footer><!-- #colophon -->

<?php wp_footer(); ?>
</body>
</html>
