<?php
/**
 * Single page template.
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
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class( 'page animate-on-scroll' ); ?>>
                <header class="entry-header">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                </header>

                <?php if ( has_post_thumbnail() ) : ?>
                    <figure class="entry-thumbnail">
                        <?php the_post_thumbnail( 'maryam-ghabel-wide' ); ?>
                    </figure>
                <?php endif; ?>

                <div class="entry-content">
                    <?php
                    the_content();

                    wp_link_pages(
                        array(
                            'before' => '<div class="page-links">' . esc_html__( 'صفحات:', 'maryam-ghabel' ),
                            'after'  => '</div>',
                        )
                    );
                    ?>
                </div>

                <?php if ( current_user_can( 'edit_post', get_the_ID() ) ) : ?>
                    <footer class="entry-footer">
                        <?php edit_post_link( __( 'ویرایش صفحه', 'maryam-ghabel' ), '<span class="edit-link">', '</span>' ); ?>
                    </footer>
                <?php endif; ?>
            </article>

            <?php
            if ( comments_open() || get_comments_number() ) {
                comments_template();
            }
        endwhile;
        ?>
    </div>
</main>

<?php
get_footer();
