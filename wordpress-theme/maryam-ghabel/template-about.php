<?php
/**
 * Template Name: صفحه درباره من (About)
 * Template Post Type: page
 *
 * @package Maryam_Ghabel
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main site-main--about" role="main">

    <!-- ===== Page Header ===== -->
    <section class="page-hero">
        <div class="container">
            <div class="page-hero__inner animate-on-scroll">
                <span class="page-hero__eyebrow"><?php esc_html_e( 'درباره من', 'maryam-ghabel' ); ?></span>
                <h1 class="page-hero__title"><?php esc_html_e( 'مریم قابل', 'maryam-ghabel' ); ?></h1>
                <p class="page-hero__subtitle"><?php esc_html_e( 'دانش‌آموخته‌ی روان‌شناسی بالینی', 'maryam-ghabel' ); ?></p>
            </div>
        </div>
    </section>

    <!-- ===== Story Section ===== -->
    <section class="story-section">
        <div class="container">
            <div class="story-section__inner">
                <div class="story-section__image animate-on-scroll" aria-hidden="true">
                    <div class="story-section__image-placeholder">
                        <span>مریم قابل</span>
                    </div>
                </div>
                <div class="story-section__content animate-on-scroll">
                    <h2 class="section-title"><?php esc_html_e( 'داستان من', 'maryam-ghabel' ); ?></h2>
                    <p>
                        <?php
                        esc_html_e(
                            'از جوانی به دنیای درون انسان علاقه‌مند بودم. شاید از همان روزهایی که متوجه شدم آدم‌ها چقدر متفاوت از درون هستند با آنچه بیرون نشان می‌دهند. این کنجکاوی مرا به روان‌شناسی کشاند، و سپس به علاقه‌مندی به روانکاوی.',
                            'maryam-ghabel'
                        );
                        ?>
                    </p>
                    <p>
                        <?php
                        esc_html_e(
                            'در این مسیر، با انسان‌های زیادی کار کردم — افرادی که به دنبال درک عمیق‌تر خود و الگوهای رابطه‌ای‌شان بودند. آموخته‌ام که رشد واقعی از درون می‌آید، نه از بیرون.',
                            'maryam-ghabel'
                        );
                        ?>
                    </p>
                    <p>
                        <?php
                        esc_html_e(
                            'امروز با رویکرد روانکاوانه کار می‌کنم: به این معنا که به جای پاسخ سریع به نشانه‌ها، به دنبال فهم ریشه‌ها هستم. باور دارم هر انسان در درون خود منبعی از حقیقت دارد؛ کار من کمک به شنیدن آن منبع است.',
                            'maryam-ghabel'
                        );
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== Credentials Section ===== -->
    <section class="credentials-section">
        <div class="container">
            <div class="section-header animate-on-scroll">
                <h2 class="section-title"><?php esc_html_e( 'مسیر و علاقه‌مندی‌ها', 'maryam-ghabel' ); ?></h2>
                <p class="section-subtitle"><?php esc_html_e( 'حوزه‌هایی که در آن‌ها کار کرده‌ام', 'maryam-ghabel' ); ?></p>
            </div>

            <div class="credentials-grid">
                <div class="credential-card animate-on-scroll">
                    <div class="credential-card__icon" aria-hidden="true">🎓</div>
                    <h3 class="credential-card__title"><?php esc_html_e( 'تحصیلات', 'maryam-ghabel' ); ?></h3>
                    <p><?php esc_html_e( 'دانش‌آموخته‌ی روان‌شناسی بالینی (پروانه در دست صدور).', 'maryam-ghabel' ); ?></p>
                </div>

                <div class="credential-card animate-on-scroll">
                    <div class="credential-card__icon" aria-hidden="true">👥</div>
                    <h3 class="credential-card__title"><?php esc_html_e( 'روانکاوی گروهی', 'maryam-ghabel' ); ?></h3>
                    <p><?php esc_html_e( 'علاقه‌مندی به کار روانکاوانه و الگوهای رابطه‌ای.', 'maryam-ghabel' ); ?></p>
                </div>

                <div class="credential-card animate-on-scroll">
                    <div class="credential-card__icon" aria-hidden="true">🗣️</div>
                    <h3 class="credential-card__title"><?php esc_html_e( 'گفتگوی درمانی فردی', 'maryam-ghabel' ); ?></h3>
                    <p><?php esc_html_e( 'علاقه‌مندی به کار با الگوهای رابطه‌ای و خودشناسی.', 'maryam-ghabel' ); ?></p>
                </div>

                <div class="credential-card animate-on-scroll">
                    <div class="credential-card__icon" aria-hidden="true">🌍</div>
                    <h3 class="credential-card__title"><?php esc_html_e( 'روان‌شناسی مهاجرت', 'maryam-ghabel' ); ?></h3>
                    <p><?php esc_html_e( 'علاقه‌مندی به کار با چالش‌های هویتی مهاجران.', 'maryam-ghabel' ); ?></p>
                </div>

                <div class="credential-card animate-on-scroll">
                    <div class="credential-card__icon" aria-hidden="true">📚</div>
                    <h3 class="credential-card__title"><?php esc_html_e( 'پژوهش و تدریس', 'maryam-ghabel' ); ?></h3>
                    <p><?php esc_html_e( 'علاقه‌مندی به مقاله‌نویسی و ارائه‌ی مفاهیم روان‌شناختی.', 'maryam-ghabel' ); ?></p>
                </div>

                <div class="credential-card animate-on-scroll">
                    <div class="credential-card__icon" aria-hidden="true">⚖️</div>
                    <h3 class="credential-card__title"><?php esc_html_e( 'تعهد اخلاقی', 'maryam-ghabel' ); ?></h3>
                    <p><?php esc_html_e( 'رعایت کامل اصول اخلاق حرفه‌ای و محرمانگی.', 'maryam-ghabel' ); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== Philosophy Section ===== -->
    <section class="philosophy-section">
        <div class="container">
            <div class="philosophy-section__inner animate-on-scroll">
                <h2 class="section-title"><?php esc_html_e( 'فلسفه‌ی کار من', 'maryam-ghabel' ); ?></h2>
                <blockquote class="philosophy-quote">
                    <p>
                        «&rlm;<?php
                        esc_html_e(
                            'روان‌درمانی درباره‌ی «درست شدن» نیست؛ درباره‌ی شدن است — شدنِ خود، شدنِ واقعی، شدنِ کامل.',
                            'maryam-ghabel'
                        );
                        ?>&rlm;»
                    </p>
                    <footer>— <?php esc_html_e( 'مریم قابل', 'maryam-ghabel' ); ?></footer>
                </blockquote>
                <p>
                    <?php
                    esc_html_e(
                        'هیچ نسخه‌ی «درست»ی از شما وجود ندارد که قرار است به آن برسید. شما همین حالا کامل هستید — حتی اگر در حال تغییر باشید. کار ما این است که این کامل بودن را با هم کشف کنیم.',
                        'maryam-ghabel'
                    );
                    ?>
                </p>
            </div>
        </div>
    </section>

    <!-- ===== CTA ===== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-section__inner animate-on-scroll">
                <h2 class="cta-section__title"><?php esc_html_e( 'بیایید با هم کار کنیم', 'maryam-ghabel' ); ?></h2>
                <p class="cta-section__text"><?php esc_html_e( 'اگر حرف‌های من برایتان آشناست، خوشحال می‌شوم آشنا شویم.', 'maryam-ghabel' ); ?></p>
                <a href="<?php echo esc_url( home_url( '/booking' ) ); ?>" class="btn btn-gold btn-lg">
                    <?php esc_html_e( 'رزرو جلسه‌ی اولیه', 'maryam-ghabel' ); ?>
                </a>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
