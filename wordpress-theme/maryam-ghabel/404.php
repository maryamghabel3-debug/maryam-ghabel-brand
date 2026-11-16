<?php
/**
 * 404 error page.
 *
 * @package Maryam_Ghabel
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main" role="main">
    <div class="container">
        <section class="error-404 not-found">
            <h1 class="error-code">404</h1>
            <h2 class="error-title"><?php esc_html_e( 'صفحه پیدا نشد', 'maryam-ghabel' ); ?></h2>
            <p class="error-text">
                <?php esc_html_e( 'متأسفانه صفحه‌ای که به دنبال آن هستید وجود ندارد یا منتقل شده است.', 'maryam-ghabel' ); ?>
            </p>

            <div class="error-actions">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">
                    <?php esc_html_e( 'بازگشت به خانه', 'maryam-ghabel' ); ?>
                </a>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-outline">
                    <?php esc_html_e( 'تماس با من', 'maryam-ghabel' ); ?>
                </a>
            </div>

            <div class="error-search">
                <h3><?php esc_html_e( 'یا جستجو کنید:', 'maryam-ghabel' ); ?></h3>
                <?php get_search_form(); ?>
            </div>
        </section>
    </div>
</main>

<?php
get_footer();
