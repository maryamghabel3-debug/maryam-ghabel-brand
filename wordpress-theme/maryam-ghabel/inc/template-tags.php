<?php
/**
 * Custom template tags for Maryam Ghabel Clinical.
 *
 * @package Maryam_Ghabel
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Returns true if there are custom logo and site title set.
 *
 * @return bool
 */
function maryam_ghabel_has_branding() {
    return has_custom_logo() || get_bloginfo( 'name' );
}

/**
 * Display the post date in human-readable format.
 *
 * @param int $post_id Optional post ID.
 * @return void
 */
function maryam_ghabel_posted_on( $post_id = null ) {
    $post_id = $post_id ? $post_id : get_the_ID();
    $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
    if ( get_the_time( 'U', $post_id ) !== get_the_modified_time( 'U', $post_id ) ) {
        $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated screen-reader-text" datetime="%3$s">%4$s</time>';
    }

    printf(
        wp_kses(
            $time_string,
            array(
                'time' => array(
                    'class'    => array(),
                    'datetime' => array(),
                ),
            )
        ),
        esc_attr( get_the_date( DATE_W3C, $post_id ) ),
        esc_html( get_the_date( '', $post_id ) ),
        esc_attr( get_the_modified_date( DATE_W3C, $post_id ) ),
        esc_html( get_the_modified_date( '', $post_id ) )
    );
}

/**
 * Display the post author.
 *
 * @return void
 */
function maryam_ghabel_posted_by() {
    printf(
        /* translators: %s: author name */
        wp_kses(
            __( '<span class="author-prefix">توسط</span> <span class="author vcard"><a class="url fn n" href="%1$s">%2$s</a></span>', 'maryam-ghabel' ),
            array(
                'span' => array( 'class' => array() ),
                'a'    => array(
                    'href' => array(),
                    'class' => array(),
                ),
            )
        ),
        esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
        esc_html( get_the_author() )
    );
}

/**
 * Display the post categories list.
 *
 * @param int    $post_id Post ID.
 * @param string $sep     Separator.
 * @return void
 */
function maryam_ghabel_entry_categories( $post_id = null, $sep = '، ' ) {
    $categories_list = get_the_category_list( $sep, '', $post_id );
    if ( $categories_list ) {
        printf(
            /* translators: %s: categories list */
            '<span class="cat-links">%s</span>',
            wp_kses_post( $categories_list )
        );
    }
}

/**
 * Display the post tags list.
 *
 * @param int    $post_id Post ID.
 * @param string $sep     Separator.
 * @return void
 */
function maryam_ghabel_entry_tags( $post_id = null, $sep = '، ' ) {
    $tags_list = get_the_tag_list( '', $sep, '', $post_id );
    if ( $tags_list ) {
        printf(
            /* translators: %s: tags list */
            '<span class="tags-links">%s</span>',
            wp_kses_post( $tags_list )
        );
    }
}

/**
 * Display comments link.
 *
 * @return void
 */
function maryam_ghabel_entry_comments_link() {
    if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
        echo '<span class="comments-link">';
        comments_popup_link(
            __( 'دیدگاه بگذارید', 'maryam-ghabel' ),
            __( '۱ دیدگاه', 'maryam-ghabel' ),
            __( '% دیدگاه', 'maryam-ghabel' )
        );
        echo '</span>';
    }
}

/**
 * Display edit link (only for users who can edit).
 *
 * @param int $post_id Optional post ID.
 * @return void
 */
function maryam_ghabel_edit_link( $post_id = null ) {
    edit_post_link(
        sprintf(
            /* translators: %s: post title */
            esc_html__( 'ویرایش «%s»', 'maryam-ghabel' ),
            wp_kses_post( get_the_title( $post_id ) )
        ),
        '<span class="edit-link">',
        '</span>',
        $post_id
    );
}

/**
 * Display the post thumbnail with proper attributes.
 *
 * @param string $size Image size.
 * @return void
 */
function maryam_ghabel_post_thumbnail( $size = 'post-thumbnail' ) {
    if ( ! has_post_thumbnail() ) {
        return;
    }

    if ( is_singular() ) {
        ?>
        <figure class="entry-thumbnail">
            <?php the_post_thumbnail( $size ); ?>
        </figure>
        <?php
    } else {
        ?>
        <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1" aria-label="<?php the_title_attribute(); ?>">
            <?php
            the_post_thumbnail(
                $size,
                array(
                    'alt' => the_title_attribute( array( 'echo' => false ) ),
                    'loading' => 'lazy',
                )
            );
            ?>
        </a>
        <?php
    }
}

/**
 * Convert English digits to Persian digits.
 *
 * @param string $string Input string.
 * @return string
 */
function maryam_ghabel_persian_digits( $string ) {
    $persian = array( '۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹' );
    $english = array( '0', '1', '2', '3', '4', '5', '6', '7', '8', '9' );
    return str_replace( $english, $persian, (string) $string );
}

/**
 * Get the current page template name.
 *
 * @return string
 */
function maryam_ghabel_get_current_template() {
    if ( is_page_template() ) {
        $template_path = get_page_template_slug( get_queried_object_id() );
        return $template_path ? $template_path : 'default';
    }
    return 'default';
}

/**
 * Display breadcrumb (simple version).
 *
 * @return void
 */
function maryam_ghabel_breadcrumb() {
    if ( is_front_page() ) {
        return;
    }

    echo '<nav class="breadcrumb" aria-label="' . esc_attr__( 'مسیر صفحه', 'maryam-ghabel' ) . '">';
    echo '<a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'خانه', 'maryam-ghabel' ) . '</a>';

    if ( is_singular( 'post' ) ) {
        echo ' <span class="separator">›</span> ';
        $cats = get_the_category();
        if ( ! empty( $cats ) ) {
            echo '<a href="' . esc_url( get_category_link( $cats[0]->term_id ) ) . '">' . esc_html( $cats[0]->name ) . '</a>';
            echo ' <span class="separator">›</span> ';
        }
        echo '<span class="current">' . esc_html( get_the_title() ) . '</span>';
    } elseif ( is_page() ) {
        echo ' <span class="separator">›</span> ';
        echo '<span class="current">' . esc_html( get_the_title() ) . '</span>';
    } elseif ( is_category() ) {
        echo ' <span class="separator">›</span> ';
        echo '<span class="current">' . esc_html( single_cat_title( '', false ) ) . '</span>';
    } elseif ( is_search() ) {
        echo ' <span class="separator">›</span> ';
        echo '<span class="current">' . esc_html__( 'جستجو', 'maryam-ghabel' ) . '</span>';
    }

    echo '</nav>';
}

/**
 * Returns estimated reading time.
 *
 * @param int $post_id Post ID.
 * @return int Minutes.
 */
function maryam_ghabel_reading_time( $post_id = null ) {
    $post_id = $post_id ? $post_id : get_the_ID();
    $content = get_post_field( 'post_content', $post_id );
    $word_count = str_word_count( wp_strip_all_tags( $content ) );
    return max( 1, ceil( $word_count / 220 ) ); // ~220 wpm for Persian.
}

/**
 * Display reading time.
 *
 * @return void
 */
function maryam_ghabel_the_reading_time() {
    $minutes = maryam_ghabel_reading_time();
    printf(
        /* translators: %d: minutes */
        esc_html__( '⏱️ %d دقیقه مطالعه', 'maryam-ghabel' ),
        (int) $minutes
    );
}

/**
 * Get the page by slug safely.
 *
 * @param string $slug Page slug.
 * @return WP_Post|null
 */
function maryam_ghabel_get_page_by_slug( $slug ) {
    $query = new WP_Query(
        array(
            'name'        => $slug,
            'post_type'   => 'page',
            'post_status' => 'publish',
            'numberposts' => 1,
            'fields'      => 'ids',
        )
    );
    return $query->have_posts() ? get_post( $query->posts[0] ) : null;
}

/**
 * Display a CTA button to booking page.
 *
 * @param string $label Custom label.
 * @return void
 */
function maryam_ghabel_booking_cta( $label = '' ) {
    $label = $label ? $label : __( 'رزرو جلسه', 'maryam-ghabel' );
    $booking_page = maryam_ghabel_get_page_by_slug( 'booking' );
    $url = $booking_page ? get_permalink( $booking_page ) : home_url( '/booking' );
    printf(
        '<a href="%s" class="btn btn-gold">%s</a>',
        esc_url( $url ),
        esc_html( $label )
    );
}
