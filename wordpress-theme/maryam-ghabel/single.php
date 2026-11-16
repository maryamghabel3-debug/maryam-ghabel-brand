<?php
/**
 * Single post template.
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
                while ( have_posts() ) :
                    the_post();
                    get_template_part( 'template-parts/content', get_post_type() );

                    // Previous/next post navigation.
                    the_post_navigation(
                        array(
                            'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'مطلب قبلی:', 'maryam-ghabel' ) . '</span><br><span class="nav-title">%title</span>',
                            'next_text' => '<span class="nav-subtitle">' . esc_html__( 'مطلب بعدی:', 'maryam-ghabel' ) . '</span><br><span class="nav-title">%title</span>',
                        )
                    );

                    // Comments.
                    if ( comments_open() || get_comments_number() ) {
                        comments_template();
                    }
                endwhile;
                ?>
            </div>

            <?php get_sidebar(); ?>
        </div>
    </div>
</main>

<?php
get_footer();
