<?php
/**
 * Template Name: صفحه تماس (Contact)
 * Template Post Type: page
 *
 * @package Maryam_Ghabel
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();

// Pull contact info from Customizer with empty defaults (no fake data).
$maryam_email      = get_theme_mod( 'maryam_ghabel_email', '' );
$maryam_whatsapp   = get_theme_mod( 'maryam_ghabel_whatsapp', '' );
$maryam_instagram  = get_theme_mod( 'maryam_ghabel_instagram', '' );
$maryam_telegram   = get_theme_mod( 'maryam_ghabel_telegram', '' );
$maryam_phone      = get_theme_mod( 'maryam_ghabel_phone', '' );
$maryam_address    = ''; // Address intentionally empty — sessions are online only.
$maryam_hours      = get_theme_mod( 'maryam_ghabel_hours', '' );
?>

<main id="primary" class="site-main site-main--contact" role="main">

    <!-- ===== Page Header ===== -->
    <section class="page-hero">
        <div class="container">
            <div class="page-hero__inner animate-on-scroll">
                <span class="page-hero__eyebrow"><?php esc_html_e( 'تماس با من', 'maryam-ghabel' ); ?></span>
                <h1 class="page-hero__title"><?php esc_html_e( 'بیایید در ارتباط باشیم', 'maryam-ghabel' ); ?></h1>
                <p class="page-hero__subtitle">
                    <?php
                    esc_html_e(
                        'از طریق کانال‌های زیر می‌توانید با من در ارتباط باشید. برای رزرو جلسه، صفحه‌ی رزرو را تکمیل کنید.',
                        'maryam-ghabel'
                    );
                    ?>
                </p>
            </div>
        </div>
    </section>

    <!-- ===== Channels Section ===== -->
    <section class="channels-section">
        <div class="container">
            <div class="channels-grid">
                <?php if ( ! empty( $maryam_email ) ) : ?>
                    <a href="mailto:<?php echo esc_attr( $maryam_email ); ?>" class="channel-card animate-on-scroll">
                        <div class="channel-card__icon" aria-hidden="true">✉️</div>
                        <h3 class="channel-card__title"><?php esc_html_e( 'ایمیل', 'maryam-ghabel' ); ?></h3>
                        <p class="channel-card__value"><?php echo esc_html( $maryam_email ); ?></p>
                        <p class="channel-card__text"><?php esc_html_e( 'برای پرسش‌های غیرضروری', 'maryam-ghabel' ); ?></p>
                    </a>
                <?php endif; ?>

                <?php if ( ! empty( $maryam_whatsapp ) ) : ?>
                    <a href="<?php echo esc_url( 'https://wa.me/' . preg_replace( '/[^0-9]/', '', $maryam_whatsapp ) ); ?>" target="_blank" rel="noopener noreferrer" class="channel-card animate-on-scroll">
                        <div class="channel-card__icon" aria-hidden="true">💬</div>
                        <h3 class="channel-card__title"><?php esc_html_e( 'واتساپ', 'maryam-ghabel' ); ?></h3>
                        <p class="channel-card__value"><?php echo esc_html( $maryam_whatsapp ); ?></p>
                        <p class="channel-card__text"><?php esc_html_e( 'سریع‌ترین راه تماس', 'maryam-ghabel' ); ?></p>
                    </a>
                <?php endif; ?>

                <?php if ( ! empty( $maryam_instagram ) ) : ?>
                    <a href="<?php echo esc_url( 'https://instagram.com/' . ltrim( $maryam_instagram, '@' ) ); ?>" target="_blank" rel="noopener noreferrer" class="channel-card animate-on-scroll">
                        <div class="channel-card__icon" aria-hidden="true">📷</div>
                        <h3 class="channel-card__title"><?php esc_html_e( 'اینستاگرام', 'maryam-ghabel' ); ?></h3>
                        <p class="channel-card__value"><?php echo esc_html( '@' . ltrim( $maryam_instagram, '@' ) ); ?></p>
                        <p class="channel-card__text"><?php esc_html_e( 'برای محتوای روزانه', 'maryam-ghabel' ); ?></p>
                    </a>
                <?php endif; ?>

                <?php if ( ! empty( $maryam_telegram ) ) : ?>
                    <a href="<?php echo esc_url( 'https://t.me/' . ltrim( $maryam_telegram, '@' ) ); ?>" target="_blank" rel="noopener noreferrer" class="channel-card animate-on-scroll">
                        <div class="channel-card__icon" aria-hidden="true">✈️</div>
                        <h3 class="channel-card__title"><?php esc_html_e( 'تلگرام', 'maryam-ghabel' ); ?></h3>
                        <p class="channel-card__value"><?php echo esc_html( '@' . ltrim( $maryam_telegram, '@' ) ); ?></p>
                        <p class="channel-card__text"><?php esc_html_e( 'پیام و محتوا', 'maryam-ghabel' ); ?></p>
                    </a>
                <?php endif; ?>

                <?php if ( ! empty( $maryam_phone ) ) : ?>
                    <a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', $maryam_phone ) ); ?>" class="channel-card animate-on-scroll">
                        <div class="channel-card__icon" aria-hidden="true">📞</div>
                        <h3 class="channel-card__title"><?php esc_html_e( 'تلفن', 'maryam-ghabel' ); ?></h3>
                        <p class="channel-card__value"><?php echo esc_html( $maryam_phone ); ?></p>
                        <p class="channel-card__text"><?php esc_html_e( 'ساعات کاری', 'maryam-ghabel' ); ?></p>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- ===== Working Hours + Form ===== -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-section__inner">
                <div class="contact-section__info animate-on-scroll">
                    <h2 class="section-title"><?php esc_html_e( 'ساعات کاری', 'maryam-ghabel' ); ?></h2>
                    <p><?php echo esc_html( $maryam_hours ); ?></p>

                    <?php if ( ! empty( $maryam_address ) ) : ?>
                        <h3 class="section-subtitle"><?php esc_html_e( 'نشانی', 'maryam-ghabel' ); ?></h3>
                        <p><?php echo esc_html( $maryam_address ); ?></p>
                    <?php endif; ?>

                    <div class="contact-section__note">
                        <h3><?php esc_html_e( 'یادآوری', 'maryam-ghabel' ); ?></h3>
                        <p>
                            <?php
                            esc_html_e(
                                'اگر در بحران هستید یا فکر می‌کنید ممکن است به خودتان یا دیگران آسیب برسانید، لطفاً به اورژانس ۱۱۵ یا نزدیک‌ترین مرکز فوریت‌های روان‌پزشکی مراجعه کنید. این سایت جایگزین مراقبت اضطراری نیست.',
                                'maryam-ghabel'
                            );
                            ?>
                        </p>
                    </div>
                </div>

                <div class="contact-section__form animate-on-scroll">
                    <h2 class="section-title"><?php esc_html_e( 'فرم تماس', 'maryam-ghabel' ); ?></h2>
                    <div class="privacy-notice" role="note">
                        <strong><?php esc_html_e( 'توجه برای حفظ حریم خصوصی', 'maryam-ghabel' ); ?>:</strong>
                        <?php
                        esc_html_e(
                            'لطفاً برای حفظ حریم خصوصی، شرح‌حال تفصیلی، سوابق دارویی یا جزئیات حساس را در این فرم ننویسید. این‌ها در جلسه و فضای امن گفتگو مطرح می‌شوند.',
                            'maryam-ghabel'
                        );
                        ?>
                    </div>
                    <?php
                    // Use WPForms if a form is configured.
                    $maryam_contact_form_id = get_theme_mod( 'maryam_ghabel_contact_form_id', '' );
                    if ( $maryam_contact_form_id && shortcode_exists( 'wpforms' ) ) {
                        echo do_shortcode( '[wpforms id="' . absint( $maryam_contact_form_id ) . '" title="false" description="false"]' );
                    } else {
                        // Native fallback form — no client-side success, no console.log.
                        ?>
                        <form
                            method="post"
                            action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>"
                            class="contact-form"
                            aria-label="<?php esc_attr_e( 'فرم تماس', 'maryam-ghabel' ); ?>"
                            novalidate
                        >
                            <?php wp_nonce_field( 'maryam_ghabel_contact', 'maryam_ghabel_contact_nonce' ); ?>
                            <input type="hidden" name="action" value="maryam_ghabel_contact_submission">

                            <div class="form-row">
                                <label for="contact-name"><?php esc_html_e( 'نام شما', 'maryam-ghabel' ); ?> <span class="required">*</span></label>
                                <input type="text" id="contact-name" name="contact_name" required autocomplete="name">
                            </div>

                            <div class="form-row">
                                <label for="contact-email"><?php esc_html_e( 'ایمیل', 'maryam-ghabel' ); ?> <span class="required">*</span></label>
                                <input type="email" id="contact-email" name="contact_email" required autocomplete="email">
                            </div>

                            <div class="form-row">
                                <label for="contact-subject"><?php esc_html_e( 'موضوع', 'maryam-ghabel' ); ?></label>
                                <input type="text" id="contact-subject" name="contact_subject">
                            </div>

                            <div class="form-row">
                                <label for="contact-message"><?php esc_html_e( 'پیام شما', 'maryam-ghabel' ); ?> <span class="required">*</span></label>
                                <textarea id="contact-message" name="contact_message" rows="6" maxlength="500" required></textarea>
                            </div>

                            <div class="form-actions">
                                <button type="submit" class="btn btn-gold btn-lg">
                                    <?php esc_html_e( 'ارسال پیام', 'maryam-ghabel' ); ?>
                                </button>
                            </div>
                        </form>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
