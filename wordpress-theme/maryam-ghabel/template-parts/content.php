<?php
/**
 * Template part for displaying posts in the loop.
 *
 * @package Maryam_Ghabel
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post animate-on-scroll' ); ?>>
    <header class="entry-header">
        <?php
        if ( is_singular() ) {
            the_title( '<h1 class="entry-title">', '</h1>' );
        } else {
            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        }

        if ( 'post' === get_post_type() ) :
            ?>
            <div class="entry-meta">
                <span class="posted-on">
                    <?php
                    echo wp_kses(
                        sprintf(
                            /* translators: %s: post date */
                            __( '📅 %s', 'maryam-ghabel' ),
                            '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . esc_html( get_the_date() ) . '</a>'
                        ),
                        array(
                            'a' => array(
                                'href'  => array(),
                                'rel'   => array(),
                            ),
                        )
                    );
                    ?>
                </span>
                <span class="posted-by">
                    <?php
                    echo wp_kses(
                        sprintf(
                            /* translators: %s: author name */
                            __( '✍️ %s', 'maryam-ghabel' ),
                            '<a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a>'
                        ),
                        array(
                            'a' => array(
                                'href' => array(),
                            ),
                        )
                    );
                    ?>
                </span>
                <?php if ( has_category() ) : ?>
                    <span class="cat-links"><?php echo get_the_category_list( '، ' ); ?></span>
                <?php endif; ?>
            </div>
            <?php
        endif;
        ?>
    </header>

    <?php if ( has_post_thumbnail() && ! is_singular() ) : ?>
        <a href="<?php the_permalink(); ?>" class="entry-thumbnail" aria-label="<?php the_title_attribute(); ?>">
            <?php
            the_post_thumbnail(
                'maryam-ghabel-card',
                array(
                    'loading' => 'lazy',
                    'alt'     => the_title_attribute( array( 'echo' => false ) ),
                )
            );
            ?>
        </a>
    <?php elseif ( has_post_thumbnail() && is_singular() ) : ?>
        <figure class="entry-thumbnail">
            <?php the_post_thumbnail( 'maryam-ghabel-wide' ); ?>
        </figure>
    <?php endif; ?>

    <div class="entry-content">
        <?php
        if ( is_singular() ) {
            the_content(
                sprintf(
                    wp_kses(
                        /* translators: %s: Name of current post */
                        __( 'ادامه مطلب %s', 'maryam-ghabel' ),
                        array(
                            'span' => array( 'class' => array() ),
                        )
                    ),
                    the_title( '<span class="screen-reader-text">"', '"</span>', false )
                )
            );

            wp_link_pages(
                array(
                    'before' => '<div class="page-links">' . esc_html__( 'صفحات:', 'maryam-ghabel' ),
                    'after'  => '</div>',
                )
            );
        } else {
            the_excerpt();
            ?>
            <a href="<?php the_permalink(); ?>" class="btn btn-outline btn-sm">
                <?php esc_html_e( 'ادامه مطلب', 'maryam-ghabel' ); ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
            </a>
            <?php
        }
        ?>
    </div>

    <footer class="entry-footer">
        <?php
        if ( 'post' === get_post_type() ) {
            $maryam_tags = get_the_tag_list( '', '، ' );
            if ( $maryam_tags ) {
                echo '<span class="tags-links">' . wp_kses_post( $maryam_tags ) . '</span>';
            }
        }

        if ( ! is_singular() ) {
            ?>
            <a href="<?php the_permalink(); ?>" class="read-more-link">
                <?php esc_html_e( 'لینک مستقیم ←', 'maryam-ghabel' ); ?>
            </a>
            <?php
        }
        ?>
    </footer>
</article>
