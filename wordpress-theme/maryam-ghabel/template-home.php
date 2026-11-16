<?php
/**
 * Template Name: صفحه خانه (Home)
 * Template Post Type: page
 *
 * @package Maryam_Ghabel
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main site-main--home" role="main">

    <!-- ===== Hero Section ===== -->
    <section class="hero-section" aria-label="<?php esc_attr_e( 'معرفی اصلی', 'maryam-ghabel' ); ?>">
        <div class="container hero-section__inner">
            <div class="hero-section__content animate-on-scroll">
                <span class="hero-section__eyebrow">
                    <?php esc_html_e( 'مریم قابل | روان‌شناس بالینی', 'maryam-ghabel' ); ?>
                </span>
                <h1 class="hero-section__title">
                    <?php esc_html_e( 'روان‌شناسی عمیق برای بزرگسالان موفق', 'maryam-ghabel' ); ?>
                </h1>
                <p class="hero-section__subtitle">
                    <?php
                    esc_html_e(
                        'روانکاوی، خودآگاهی و رشد فردی برای کسانی که به دنبال درک عمیق‌تر از خود و الگوهای ناخودآگاه خود هستند. همراه شما در مسیر شناخت و تغییر.',
                        'maryam-ghabel'
                    );
                    ?>
                </p>
                <div class="hero-section__actions">
                    <a href="<?php echo esc_url( home_url( '/booking' ) ); ?>" class="btn btn-gold">
                        <?php esc_html_e( 'رزرو جلسه', 'maryam-ghabel' ); ?>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="btn btn-outline">
                        <?php esc_html_e( 'درباره من', 'maryam-ghabel' ); ?>
                    </a>
                </div>
            </div>
            <div class="hero-section__visual animate-on-scroll" aria-hidden="true">
                <div class="hero-section__visual-circle"></div>
            </div>
        </div>
    </section>

    <!-- ===== Intro Section ===== -->
    <section class="intro-section">
        <div class="container">
            <div class="intro-section__inner animate-on-scroll">
                <h2 class="section-title"><?php esc_html_e( 'درباره‌ی کار من', 'maryam-ghabel' ); ?></h2>
                <p class="section-lead">
                    <?php
                    esc_html_e(
                        'من مریم قابل هستم، روان‌شناس بالینی با تخصص در روانکاوی و کار با بزرگسالان. کار من کمک به انسان‌هایی است که به ظاهر موفق هستند اما در درون دچار درگیری، اضطراب یا احساس خلأ هستند. با هم، الگوهای تکرارشونده‌ی ناخودآگاه را پیدا می‌کنیم و مسیر تغییر را می‌سازیم.',
                        'maryam-ghabel'
                    );
                    ?>
                </p>
                <div class="intro-section__stats">
                    <div class="stat-card">
                        <span class="stat-card__number">۷+</span>
                        <span class="stat-card__label"><?php esc_html_e( 'سال تجربه روانکاوی گروهی', 'maryam-ghabel' ); ?></span>
                    </div>
                    <div class="stat-card">
                        <span class="stat-card__number">۵۰</span>
                        <span class="stat-card__label"><?php esc_html_e( 'دقیقه هر جلسه', 'maryam-ghabel' ); ?></span>
                    </div>
                    <div class="stat-card">
                        <span class="stat-card__number">۱۵</span>
                        <span class="stat-card__label"><?php esc_html_e( 'دقیقه مشاوره اولیه رایگان', 'maryam-ghabel' ); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== Services Section ===== -->
    <section class="services-section" id="services">
        <div class="container">
            <div class="section-header animate-on-scroll">
                <h2 class="section-title"><?php esc_html_e( 'خدمات', 'maryam-ghabel' ); ?></h2>
                <p class="section-subtitle"><?php esc_html_e( 'پنج حوزه‌ی محتوایی برای رشد و شناخت خود', 'maryam-ghabel' ); ?></p>
            </div>

            <div class="services-grid">
                <article class="service-card animate-on-scroll">
                    <div class="service-card__icon" aria-hidden="true">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a3 3 0 0 0-3 3v1H7a3 3 0 0 0-3 3v1H3v2h1v1a3 3 0 0 0 3 3h1v1a3 3 0 0 0 6 0v-1h1a3 3 0 0 0 3-3v-1h1v-2h-1V9a3 3 0 0 0-3-3h-2V5a3 3 0 0 0-3-3z"/></svg>
                    </div>
                    <h3 class="service-card__title"><?php esc_html_e( 'الگوهای ناخودآگاه', 'maryam-ghabel' ); ?></h3>
                    <p class="service-card__text"><?php esc_html_e( 'شناسایی و درک الگوهای تکرارشونده‌ای که زندگی شما را شکل می‌دهند؛ از روابط گرفته تا تصمیم‌گیری.', 'maryam-ghabel' ); ?></p>
                </article>

                <article class="service-card animate-on-scroll">
                    <div class="service-card__icon" aria-hidden="true">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    </div>
                    <h3 class="service-card__title"><?php esc_html_e( 'روان‌شناسی موفقیت', 'maryam-ghabel' ); ?></h3>
                    <p class="service-card__text"><?php esc_html_e( 'کشف موانع درونی که شما را از موفقیت پایدار باز می‌دارند و ساخت مسیر رشد شخصی و حرفه‌ای.', 'maryam-ghabel' ); ?></p>
                </article>

                <article class="service-card animate-on-scroll">
                    <div class="service-card__icon" aria-hidden="true">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                    </div>
                    <h3 class="service-card__title"><?php esc_html_e( 'درس‌های بالینی', 'maryam-ghabel' ); ?></h3>
                    <p class="service-card__text"><?php esc_html_e( 'بازتابی از تجربه‌های بالینی و درس‌هایی که در اتاق درمان آموخته‌ام؛ برای آگاهی عمیق‌تر.', 'maryam-ghabel' ); ?></p>
                </article>

                <article class="service-card animate-on-scroll">
                    <div class="service-card__icon" aria-hidden="true">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="4"/><line x1="12" y1="2" x2="12" y2="4"/><line x1="12" y1="20" x2="12" y2="22"/></svg>
                    </div>
                    <h3 class="service-card__title"><?php esc_html_e( 'بازتاب شخصی', 'maryam-ghabel' ); ?></h3>
                    <p class="service-card__text"><?php esc_html_e( 'تاملات و نوشته‌هایی درباره‌ی مسیر درونی، خودشناسی و فرازهای زندگی روزمره.', 'maryam-ghabel' ); ?></p>
                </article>

                <article class="service-card animate-on-scroll">
                    <div class="service-card__icon" aria-hidden="true">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </div>
                    <h3 class="service-card__title"><?php esc_html_e( 'روان‌شناسی مهاجرت', 'maryam-ghabel' ); ?></h3>
                    <p class="service-card__text"><?php esc_html_e( 'همراهی با چالش‌های روانی مهاجرت: از هویت و تعلق گرفته تا سوگ و بازسازی خانه درون.', 'maryam-ghabel' ); ?></p>
                </article>
            </div>
        </div>
    </section>

    <!-- ===== Why Maryam Section ===== -->
    <section class="why-section">
        <div class="container">
            <div class="why-section__inner">
                <div class="why-section__content animate-on-scroll">
                    <h2 class="section-title"><?php esc_html_e( 'چرا مریم قابل؟', 'maryam-ghabel' ); ?></h2>
                    <ul class="why-section__list">
                        <li>
                            <strong><?php esc_html_e( 'رویکرد روانکاوانه', 'maryam-ghabel' ); ?></strong>
                            <p><?php esc_html_e( 'کار بر اساس ریشه‌های ناخودآگاه الگوهای رفتاری، نه صرفاً نشانه‌ها.', 'maryam-ghabel' ); ?></p>
                        </li>
                        <li>
                            <strong><?php esc_html_e( 'تجربه‌ی گروهی', 'maryam-ghabel' ); ?></strong>
                            <p><?php esc_html_e( '۷ سال تجربه در روانکاوی گروهی با مراجعان متنوع.', 'maryam-ghabel' ); ?></p>
                        </li>
                        <li>
                            <strong><?php esc_html_e( 'حریم خصوصی کامل', 'maryam-ghabel' ); ?></strong>
                            <p><?php esc_html_e( 'تمام جلسات محرمانه و با رعایت اصول اخلاقی حرفه‌ای.', 'maryam-ghabel' ); ?></p>
                        </li>
                        <li>
                            <strong><?php esc_html_e( 'مشاوره‌ی اولیه رایگان', 'maryam-ghabel' ); ?></strong>
                            <p><?php esc_html_e( '۱۵ دقیقه گفتگوی اولیه برای شناخت متقابل، بدون هزینه.', 'maryam-ghabel' ); ?></p>
                        </li>
                    </ul>
                </div>
                <div class="why-section__visual animate-on-scroll" aria-hidden="true">
                    <div class="why-section__image">
                        <span class="why-section__image-text">م.ق</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== Testimonials Section ===== -->
    <section class="testimonials-section">
        <div class="container">
            <div class="section-header animate-on-scroll">
                <h2 class="section-title"><?php esc_html_e( 'نظرات مراجعین', 'maryam-ghabel' ); ?></h2>
                <p class="section-subtitle"><?php esc_html_e( 'آنچه کسانی که با من کار کرده‌اند می‌گویند', 'maryam-ghabel' ); ?></p>
            </div>
            <div class="testimonials-grid">
                <blockquote class="testimonial-card animate-on-scroll">
                    <p class="testimonial-card__text">«جلسات با مریم به من کمک کرد الگوهایی را ببینم که سال‌ها در تاریکی بودند. به جای درمان سریع، یاد گرفتم خودم را عمیق‌تر بشناسم.»</p>
                    <footer class="testimonial-card__author">— <?php esc_html_e( 'مراجع ۳۲ ساله', 'maryam-ghabel' ); ?></footer>
                </blockquote>
                <blockquote class="testimonial-card animate-on-scroll">
                    <p class="testimonial-card__text">«فضای امن و بدون قضاوت. مریم با حوصله گوش می‌دهد و سؤال‌های درستی می‌پرسد.»</p>
                    <footer class="testimonial-card__author">— <?php esc_html_e( 'مراجع ۴۰ ساله', 'maryam-ghabel' ); ?></footer>
                </blockquote>
                <blockquote class="testimonial-card animate-on-scroll">
                    <p class="testimonial-card__text">«به‌عنوان مهاجر، کسی که درک می‌کند چه می‌گذرد پیدا کردم. ممنونم.»</p>
                    <footer class="testimonial-card__author">— <?php esc_html_e( 'مراجع مهاجر', 'maryam-ghabel' ); ?></footer>
                </blockquote>
            </div>
        </div>
    </section>

    <!-- ===== CTA Section ===== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-section__inner animate-on-scroll">
                <h2 class="cta-section__title">
                    <?php esc_html_e( 'آماده‌اید مسیر شناخت خود را آغاز کنید؟', 'maryam-ghabel' ); ?>
                </h2>
                <p class="cta-section__text">
                    <?php esc_html_e( 'یک تماس ۱۵ دقیقه‌ای رایگان برای شروع. بدون تعهد، فقط برای مطمئن شدن.', 'maryam-ghabel' ); ?>
                </p>
                <div class="cta-section__actions">
                    <a href="<?php echo esc_url( home_url( '/booking' ) ); ?>" class="btn btn-gold btn-lg">
                        <?php esc_html_e( 'رزرو مشاوره‌ی اولیه', 'maryam-ghabel' ); ?>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-outline btn-lg">
                        <?php esc_html_e( 'اطلاعات تماس', 'maryam-ghabel' ); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
