<?php
/**
 * Template Name: صفحه رزرو جلسه (Booking)
 * Template Post Type: page
 *
 * @package Maryam_Ghabel
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main site-main--booking" role="main">

    <!-- ===== Page Header ===== -->
    <section class="page-hero">
        <div class="container">
            <div class="page-hero__inner animate-on-scroll">
                <span class="page-hero__eyebrow"><?php esc_html_e( 'رزرو جلسه', 'maryam-ghabel' ); ?></span>
                <h1 class="page-hero__title"><?php esc_html_e( 'شروع مسیر شما', 'maryam-ghabel' ); ?></h1>
                <p class="page-hero__subtitle">
                    <?php esc_html_e( 'تمام آنچه باید بدانید پیش از رزرو جلسه', 'maryam-ghabel' ); ?>
                </p>
            </div>
        </div>
    </section>

    <!-- ===== Session Info ===== -->
    <section class="booking-info">
        <div class="container">
            <div class="booking-info__grid">
                <div class="info-card animate-on-scroll">
                    <div class="info-card__icon" aria-hidden="true">⏱️</div>
                    <h3 class="info-card__title"><?php esc_html_e( 'مدت جلسه', 'maryam-ghabel' ); ?></h3>
                    <p class="info-card__value"><?php esc_html_e( '۵۰ دقیقه', 'maryam-ghabel' ); ?></p>
                    <p class="info-card__text"><?php esc_html_e( 'هر جلسه‌ی درمانی پنجاه دقیقه است.', 'maryam-ghabel' ); ?></p>
                </div>

                <div class="info-card animate-on-scroll">
                    <div class="info-card__icon" aria-hidden="true">💰</div>
                    <h3 class="info-card__title"><?php esc_html_e( 'هزینه جلسه', 'maryam-ghabel' ); ?></h3>
                    <p class="info-card__value"><?php esc_html_e( '۱ تا ۱.۵ میلیون تومان', 'maryam-ghabel' ); ?></p>
                    <p class="info-card__text"><?php esc_html_e( 'بسته به نوع جلسه و مسیر درمان.', 'maryam-ghabel' ); ?></p>
                </div>

                <div class="info-card animate-on-scroll">
                    <div class="info-card__icon" aria-hidden="true">🎁</div>
                    <h3 class="info-card__title"><?php esc_html_e( 'تماس اولیه', 'maryam-ghabel' ); ?></h3>
                    <p class="info-card__value"><?php esc_html_e( '۱۵ دقیقه رایگان', 'maryam-ghabel' ); ?></p>
                    <p class="info-card__text"><?php esc_html_e( 'گفتگوی اولیه برای شناخت متقابل، بدون هزینه.', 'maryam-ghabel' ); ?></p>
                </div>

                <div class="info-card animate-on-scroll">
                    <div class="info-card__icon" aria-hidden="true">🔒</div>
                    <h3 class="info-card__title"><?php esc_html_e( 'محرمانگی', 'maryam-ghabel' ); ?></h3>
                    <p class="info-card__value"><?php esc_html_e( 'کامل', 'maryam-ghabel' ); ?></p>
                    <p class="info-card__text"><?php esc_html_e( 'تمام جلسات محرمانه و مطابق اخلاق حرفه‌ای.', 'maryam-ghabel' ); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== Booking Form Section ===== -->
    <section class="booking-form-section">
        <div class="container">
            <div class="booking-form-section__inner">
                <div class="booking-form-section__intro animate-on-scroll">
                    <h2 class="section-title"><?php esc_html_e( 'فرم رزرو', 'maryam-ghabel' ); ?></h2>
                    <p>
                        <?php
                        esc_html_e(
                            'برای رزرو جلسه‌ی اولیه فرم زیر را تکمیل کنید. در اولین فرصت با شما تماس می‌گیرم. لطفاً توضیح کوتاهی از دلیل مراجعه‌ی خود بنویسید تا بتوانم بهتر کمک کنم.',
                            'maryam-ghabel'
                        );
                        ?>
                    </p>
                    <ul class="booking-list">
                        <li><?php esc_html_e( 'تماس اولیه: ۱۵ دقیقه، رایگان، آنلاین (تلفنی یا تصویری)', 'maryam-ghabel' ); ?></li>
                        <li><?php esc_html_e( 'جلسه‌ی درمانی: ۵۰ دقیقه، آنلاین یا حضوری', 'maryam-ghabel' ); ?></li>
                        <li><?php esc_html_e( 'ساعات کاری: شنبه تا چهارشنبه، ۹ تا ۱۸', 'maryam-ghabel' ); ?></li>
                        <li><?php esc_html_e( 'پاسخ به فرم: حداکثر ۴۸ ساعت کاری', 'maryam-ghabel' ); ?></li>
                    </ul>
                </div>

                <div class="booking-form-section__form animate-on-scroll">
                    <?php
                    // If WPForms is active, render a specific form via shortcode.
                    $maryam_form_id = get_theme_mod( 'maryam_ghabel_booking_form_id', '' );
                    if ( $maryam_form_id && shortcode_exists( 'wpforms' ) ) {
                        echo do_shortcode( '[wpforms id="' . absint( $maryam_form_id ) . '" title="false" description="false"]' );
                    } else {
                        // Fallback native form.
                        ?>
                        <form
                            method="post"
                            action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>"
                            class="booking-form"
                            aria-label="<?php esc_attr_e( 'فرم رزرو جلسه', 'maryam-ghabel' ); ?>"
                        >
                            <?php wp_nonce_field( 'maryam_ghabel_booking', 'maryam_ghabel_booking_nonce' ); ?>
                            <input type="hidden" name="action" value="maryam_ghabel_booking_submission">

                            <div class="form-row">
                                <label for="booking-name"><?php esc_html_e( 'نام و نام خانوادگی', 'maryam-ghabel' ); ?> <span class="required">*</span></label>
                                <input type="text" id="booking-name" name="booking_name" required autocomplete="name">
                            </div>

                            <div class="form-row">
                                <label for="booking-email"><?php esc_html_e( 'ایمیل', 'maryam-ghabel' ); ?> <span class="required">*</span></label>
                                <input type="email" id="booking-email" name="booking_email" required autocomplete="email">
                            </div>

                            <div class="form-row">
                                <label for="booking-phone"><?php esc_html_e( 'شماره تماس (واتساپ/تلگرام)', 'maryam-ghabel' ); ?> <span class="required">*</span></label>
                                <input type="tel" id="booking-phone" name="booking_phone" required autocomplete="tel">
                            </div>

                            <div class="form-row">
                                <label for="booking-type"><?php esc_html_e( 'نوع جلسه', 'maryam-ghabel' ); ?> <span class="required">*</span></label>
                                <select id="booking-type" name="booking_type" required>
                                    <option value=""><?php esc_html_e( 'انتخاب کنید…', 'maryam-ghabel' ); ?></option>
                                    <option value="intro"><?php esc_html_e( 'تماس اولیه ۱۵ دقیقه‌ای (رایگان)', 'maryam-ghabel' ); ?></option>
                                    <option value="individual"><?php esc_html_e( 'جلسه‌ی درمانی فردی', 'maryam-ghabel' ); ?></option>
                                    <option value="group"><?php esc_html_e( 'جلسه‌ی گروهی', 'maryam-ghabel' ); ?></option>
                                </select>
                            </div>

                            <div class="form-row">
                                <label for="booking-format"><?php esc_html_e( 'نحوه برگزاری', 'maryam-ghabel' ); ?></label>
                                <select id="booking-format" name="booking_format">
                                    <option value=""><?php esc_html_e( 'ترجیح ندارم', 'maryam-ghabel' ); ?></option>
                                    <option value="online"><?php esc_html_e( 'آنلاین (تصویری)', 'maryam-ghabel' ); ?></option>
                                    <option value="phone"><?php esc_html_e( 'تلفنی', 'maryam-ghabel' ); ?></option>
                                    <option value="in-person"><?php esc_html_e( 'حضوری', 'maryam-ghabel' ); ?></option>
                                </select>
                            </div>

                            <div class="form-row">
                                <label for="booking-message"><?php esc_html_e( 'توضیح کوتاه', 'maryam-ghabel' ); ?></label>
                                <textarea id="booking-message" name="booking_message" rows="5" maxlength="1000" placeholder="<?php esc_attr_e( 'در چند جمله، چه چیزی شما را به من آورده؟', 'maryam-ghabel' ); ?>"></textarea>
                            </div>

                            <div class="form-row form-row--consent">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="booking_consent" value="1" required>
                                    <span><?php esc_html_e( 'با ارسال این فرم، با حفظ محرمانگی اطلاعات خود موافقم و اجازه می‌دهم مریم قابل برای پاسخ با من تماس بگیرد.', 'maryam-ghabel' ); ?></span>
                                </label>
                            </div>

                            <div class="form-actions">
                                <button type="submit" class="btn btn-gold btn-lg">
                                    <?php esc_html_e( 'ارسال درخواست', 'maryam-ghabel' ); ?>
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

    <!-- ===== FAQ ===== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header animate-on-scroll">
                <h2 class="section-title"><?php esc_html_e( 'سؤالات متداول', 'maryam-ghabel' ); ?></h2>
            </div>
            <div class="faq-list">
                <details class="faq-item animate-on-scroll">
                    <summary><?php esc_html_e( 'تماس اولیه واقعاً رایگان است؟', 'maryam-ghabel' ); ?></summary>
                    <p><?php esc_html_e( 'بله. این تماس ۱۵ دقیقه‌ای برای شناخت متقابل است و هیچ هزینه‌ای ندارد. هدف این است که مطمئن شویم می‌توانیم با هم کار کنیم.', 'maryam-ghabel' ); ?></p>
                </details>
                <details class="faq-item animate-on-scroll">
                    <summary><?php esc_html_e( 'جلسات آنلاین برگزار می‌شوند؟', 'maryam-ghabel' ); ?></summary>
                    <p><?php esc_html_e( 'بله، جلسات می‌توانند آنلاین (تصویری یا تلفنی) یا حضوری برگزار شوند. در فرم رزرو مشخص کنید.', 'maryam-ghabel' ); ?></p>
                </details>
                <details class="faq-item animate-on-scroll">
                    <summary><?php esc_html_e( 'بعد از ارسال فرم چه می‌شود؟', 'maryam-ghabel' ); ?></summary>
                    <p><?php esc_html_e( 'حداکثر طی ۴۸ ساعت کاری پاسخ می‌دهم تا زمان مناسبی برای تماس اولیه تعیین کنیم.', 'maryam-ghabel' ); ?></p>
                </details>
                <details class="faq-item animate-on-scroll">
                    <summary><?php esc_html_e( 'اطلاعات من محرمانه می‌ماند؟', 'maryam-ghabel' ); ?></summary>
                    <p><?php esc_html_e( 'بله. رعایت محرمانگی یکی از اصول بنیادین کار من است و مطابق با اصول اخلاق حرفه‌ای روان‌شناسی است.', 'maryam-ghabel' ); ?></p>
                </details>
                <details class="faq-item animate-on-scroll">
                    <summary><?php esc_html_e( 'دوره درمان چقدر طول می‌کشد؟', 'maryam-ghabel' ); ?></summary>
                    <p><?php esc_html_e( 'این به مسیر هر فرد بستگی دارد. رویکرد من فرایندی است، نه راه‌حل سریع. در جلسات اول درباره‌ی انتظارات صحبت می‌کنیم.', 'maryam-ghabel' ); ?></p>
                </details>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
