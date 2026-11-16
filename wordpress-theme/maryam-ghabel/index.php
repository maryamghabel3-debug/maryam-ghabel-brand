<?php
/**
 * The main template file (blog index / fallback).
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
        <div class="content-area <?php echo is_active_sidebar( 'sidebar-blog' ) ? 'has-sidebar' : ''; ?>">

            <div id="primary-content">
                <?php
                if ( is_home() && ! is_front_page() ) {
                    ?>
                    <header class="page-header">
                        <h1 class="page-title"><?php single_post_title(); ?></h1>
                    </header>
                    <?php
                }

                if ( have_posts() ) :
                    while ( have_posts() ) :
                        the_post();
                        get_template_part( 'template-parts/content', get_post_type() );
                    endwhile;

                    the_posts_pagination(
                        array(
                            'mid_size'  => 2,
                            'prev_text' => __( 'قبلی', 'maryam-ghabel' ),
                            'next_text' => __( 'بعدی', 'maryam-ghabel' ),
                            'screen_reader_text' => __( 'پیمایش نوشته‌ها', 'maryam-ghabel' ),
                        )
                    );

                else :
                    get_template_part( 'template-parts/content', 'none' );
                endif;
                ?>
            </div><!-- #primary-content -->

            <?php get_sidebar(); ?>

        </div><!-- .content-area -->
    </div><!-- .container -->
</main><!-- #primary -->

<?php
get_footer();
