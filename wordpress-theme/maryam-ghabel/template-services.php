<?php
/**
 * Template Name: صفحه خدمات (Services)
 * Template Post Type: page
 *
 * @package Maryam_Ghabel
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main site-main--services" role="main">

    <!-- ===== Page Header ===== -->
    <section class="page-hero">
        <div class="container">
            <div class="page-hero__inner animate-on-scroll">
                <span class="page-hero__eyebrow"><?php esc_html_e( 'خدمات روان‌شناسی بالینی', 'maryam-ghabel' ); ?></span>
                <h1 class="page-hero__title"><?php esc_html_e( 'حوزه‌های کار من', 'maryam-ghabel' ); ?></h1>
                <p class="page-hero__subtitle">
                    <?php
                    esc_html_e(
                        'پنج حوزه‌ی محتوایی که در آن‌ها کار می‌کنم: از کشف الگوهای ناخودآگاه گرفته تا همراهی در مسیر مهاجرت.',
                        'maryam-ghabel'
                    );
                    ?>
                </p>
            </div>
        </div>
    </section>

    <!-- ===== Services Detail ===== -->
    <section class="services-detail">
        <div class="container">
            <div class="services-detail__grid">

                <!-- Service 1 -->
                <article class="service-detail-card animate-on-scroll">
                    <div class="service-detail-card__number">۰۱</div>
                    <div class="service-detail-card__body">
                        <h2 class="service-detail-card__title"><?php esc_html_e( 'الگوهای ناخودآگاه', 'maryam-ghabel' ); ?></h2>
                        <p><?php esc_html_e( 'بسیاری از رفتارها، انتخاب‌ها و احساسات ما از الگوهای ناخودآگاه سرچشمه می‌گیرند. این الگوها در کودکی شکل می‌گیرند و در بزرگسالی ادامه پیدا می‌کنند — در روابط، در کار، در نحوه‌ی واکنش به استرس.', 'maryam-ghabel' ); ?></p>
                        <p><?php esc_html_e( 'کار ما این است که این الگوها را به آگاهی بیاوریم. زمانی که می‌بینیم، قدرت انتخاب پیدا می‌کنیم.', 'maryam-ghabel' ); ?></p>
                        <ul class="service-detail-card__list">
                            <li><?php esc_html_e( 'شناسایی الگوهای تکرارشونده در روابط', 'maryam-ghabel' ); ?></li>
                            <li><?php esc_html_e( 'درک ریشه‌های کودکی', 'maryam-ghabel' ); ?></li>
                            <li><?php esc_html_e( 'تمایز واکنش از انتخاب', 'maryam-ghabel' ); ?></li>
                        </ul>
                    </div>
                </article>

                <!-- Service 2 -->
                <article class="service-detail-card animate-on-scroll">
                    <div class="service-detail-card__number">۰۲</div>
                    <div class="service-detail-card__body">
                        <h2 class="service-detail-card__title"><?php esc_html_e( 'روان‌شناسی موفقیت', 'maryam-ghabel' ); ?></h2>
                        <p><?php esc_html_e( 'موفقیت بیرونی همیشه با رضایت درونی همراه نیست. خیلی‌ها به ظاهر به همه‌چیز می‌رسند اما از درون خالی‌اند. کار من کمک به انسان‌های موفقی است که احساس می‌کنند چیزی جایش نیست.', 'maryam-ghabel' ); ?></p>
                        <p><?php esc_html_e( 'سوال اصلی این نیست که «چگونه موفق شوم»، بلکه این است: «این موفقیت چه معنایی برای من دارد؟»', 'maryam-ghabel' ); ?></p>
                        <ul class="service-detail-card__list">
                            <li><?php esc_html_e( 'کشف موانع درونی رشد', 'maryam-ghabel' ); ?></li>
                            <li><?php esc_html_e( 'کار با اضطراب عملکرد و کمال‌گرایی', 'maryam-ghabel' ); ?></li>
                            <li><?php esc_html_e( 'بازتعریف مفهوم موفقیت', 'maryam-ghabel' ); ?></li>
                        </ul>
                    </div>
                </article>

                <!-- Service 3 -->
                <article class="service-detail-card animate-on-scroll">
                    <div class="service-detail-card__number">۰۳</div>
                    <div class="service-detail-card__body">
                        <h2 class="service-detail-card__title"><?php esc_html_e( 'درس‌های بالینی', 'maryam-ghabel' ); ?></h2>
                        <p><?php esc_html_e( 'اتاق درمان جای عمیقی است. در آنجا، انسان‌ها نسخه‌ی واقعی خودشان می‌شوند. من از هر جلسه می‌آموزم و این درس‌ها را — ضمن حفظ کامل محرمانگی — به اشتراک می‌گذارم.', 'maryam-ghabel' ); ?></p>
                        <p><?php esc_html_e( 'هدف این است که آگاهی جمعی ما درباره‌ی روان انسان عمیق‌تر شود.', 'maryam-ghabel' ); ?></p>
                        <ul class="service-detail-card__list">
                            <li><?php esc_html_e( 'نوشته‌ها و تاملات بالینی', 'maryam-ghabel' ); ?></li>
                            <li><?php esc_html_e( 'مفاهیم روانکاوی به زبان ساده', 'maryam-ghabel' ); ?></li>
                            <li><?php esc_html_e( 'بازخوانی متن‌های کلاسیک', 'maryam-ghabel' ); ?></li>
                        </ul>
                    </div>
                </article>

                <!-- Service 4 -->
                <article class="service-detail-card animate-on-scroll">
                    <div class="service-detail-card__number">۰۴</div>
                    <div class="service-detail-card__body">
                        <h2 class="service-detail-card__title"><?php esc_html_e( 'بازتاب شخصی', 'maryam-ghabel' ); ?></h2>
                        <p><?php esc_html_e( 'این بخش، دفترچه‌ی تاملات من است. آنچه در مسیر زندگی، کار و خودشناسی تجربه می‌کنم را اینجا می‌نویسم — به این امید که شاید برای کسی آشنا باشد.', 'maryam-ghabel' ); ?></p>
                        <p><?php esc_html_e( 'نوشتن برای من راهی است برای اندیشیدن؛ و خواندن برای شما راهی برای فکر کردن.', 'maryam-ghabel' ); ?></p>
                        <ul class="service-detail-card__list">
                            <li><?php esc_html_e( 'خاطرات و تاملات روزانه', 'maryam-ghabel' ); ?></li>
                            <li><?php esc_html_e( 'بازخوانی مسیر حرفه‌ای', 'maryam-ghabel' ); ?></li>
                            <li><?php esc_html_e( 'تفکرات درباره‌ی هنر و ادبیات', 'maryam-ghabel' ); ?></li>
                        </ul>
                    </div>
                </article>

                <!-- Service 5 -->
                <article class="service-detail-card animate-on-scroll">
                    <div class="service-detail-card__number">۰۵</div>
                    <div class="service-detail-card__body">
                        <h2 class="service-detail-card__title"><?php esc_html_e( 'روان‌شناسی مهاجرت', 'maryam-ghabel' ); ?></h2>
                        <p><?php esc_html_e( 'مهاجرت فقط تغییر مکان نیست؛ تغییر هویت است. خانه، زبان، بوی فصل‌ها، صداها — همه چیز عوض می‌شود. این سوگ بزرگ است، حتی وقتی با موفقیت همراه باشد.', 'maryam-ghabel' ); ?></p>
                        <p><?php esc_html_e( 'کار من همراهی در این گذار است: از سوگ تا بازسازی تعلق، از بیگانگی تا خانه‌ی جدید در درون.', 'maryam-ghabel' ); ?></p>
                        <ul class="service-detail-card__list">
                            <li><?php esc_html_e( 'کار با سوگ از دست دادن', 'maryam-ghabel' ); ?></li>
                            <li><?php esc_html_e( 'بازسازی هویت فرهنگی', 'maryam-ghabel' ); ?></li>
                            <li><?php esc_html_e( 'مذاکره با تعلق دوگانه', 'maryam-ghabel' ); ?></li>
                        </ul>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <!-- ===== Treatment Approach ===== -->
    <section class="approach-section">
        <div class="container">
            <div class="approach-section__inner animate-on-scroll">
                <h2 class="section-title"><?php esc_html_e( 'رویکرد درمانی من', 'maryam-ghabel' ); ?></h2>
                <p class="section-lead">
                    <?php
                    esc_html_e(
                        'رویکرد من بر پایه‌ی روانکاوی است؛ یعنی گوش دادن عمیق به آنچه در پس‌زمینه‌ی آگاهی شما می‌گذرد. جلسات فضای امنی است که در آن می‌توانید بدون قضاوت، خود را کاوش کنید.',
                        'maryam-ghabel'
                    );
                    ?>
                </p>
                <div class="approach-grid">
                    <div class="approach-card">
                        <h3><?php esc_html_e( 'گوش دادن فعال', 'maryam-ghabel' ); ?></h3>
                        <p><?php esc_html_e( 'شنیدن آنچه گفته می‌شود و آنچه گفته نمی‌شود.', 'maryam-ghabel' ); ?></p>
                    </div>
                    <div class="approach-card">
                        <h3><?php esc_html_e( 'تفسیر همدلانه', 'maryam-ghabel' ); ?></h3>
                        <p><?php esc_html_e( 'بازتاب دادن آنچه در لابه‌لای حرف‌های شماست.', 'maryam-ghabel' ); ?></p>
                    </div>
                    <div class="approach-card">
                        <h3><?php esc_html_e( 'تمرکز بر فرایند', 'maryam-ghabel' ); ?></h3>
                        <p><?php esc_html_e( 'هدف، رشد درونی است نه راه‌حل سریع.', 'maryam-ghabel' ); ?></p>
                    </div>
                    <div class="approach-card">
                        <h3><?php esc_html_e( 'احترام به زمان شما', 'maryam-ghabel' ); ?></h3>
                        <p><?php esc_html_e( 'هر مسیر، سرعت خود را دارد.', 'maryam-ghabel' ); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CTA ===== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-section__inner animate-on-scroll">
                <h2 class="cta-section__title"><?php esc_html_e( 'کدام حوزه نزدیک‌تر است؟', 'maryam-ghabel' ); ?></h2>
                <p class="cta-section__text"><?php esc_html_e( 'یک جلسه‌ی اولیه رزرو کنید تا با هم ببینیم.', 'maryam-ghabel' ); ?></p>
                <a href="<?php echo esc_url( home_url( '/booking' ) ); ?>" class="btn btn-gold btn-lg">
                    <?php esc_html_e( 'رزرو جلسه', 'maryam-ghabel' ); ?>
                </a>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
