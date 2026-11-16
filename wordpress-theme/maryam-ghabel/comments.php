<?php
/**
 * Comments template.
 *
 * @package Maryam_Ghabel
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">
    <?php
    if ( have_comments() ) :
        ?>
        <h2 class="comments-title">
            <?php
            $maryam_comment_count = get_comments_number();
            if ( '1' === (string) $maryam_comment_count ) {
                printf(
                    /* translators: %s: post title */
                    esc_html__( 'یک نظر برای «%s»', 'maryam-ghabel' ),
                    '<span>' . wp_kses_post( get_the_title() ) . '</span>'
                );
            } else {
                printf(
                    /* translators: 1: comment count, 2: post title */
                    esc_html( _nx( '%1$s نظر برای «%2$s»', '%1$s نظر برای «%2$s»', $maryam_comment_count, 'comments title', 'maryam-ghabel' ) ),
                    esc_html( number_format_i18n( $maryam_comment_count ) ),
                    '<span>' . wp_kses_post( get_the_title() ) . '</span>'
                );
            }
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments(
                array(
                    'style'      => 'ol',
                    'short_ping' => true,
                    'avatar_size' => 48,
                )
            );
            ?>
        </ol>

        <?php
        the_comments_navigation(
            array(
                'prev_text' => __( 'نظرات قدیمی‌تر', 'maryam-ghabel' ),
                'next_text' => __( 'نظرات جدیدتر', 'maryam-ghabel' ),
            )
        );

        if ( ! comments_open() ) {
            ?>
            <p class="no-comments"><?php esc_html_e( 'نظرات بسته شده است.', 'maryam-ghabel' ); ?></p>
            <?php
        }
    endif;

    comment_form(
        array(
            'title_reply'        => __( 'نظر شما را بنویسید', 'maryam-ghabel' ),
            'title_reply_to'     => __( 'پاسخ به %s', 'maryam-ghabel' ),
            'cancel_reply_link'  => __( 'لغو پاسخ', 'maryam-ghabel' ),
            'label_submit'       => __( 'ارسال نظر', 'maryam-ghabel' ),
            'comment_field'      => sprintf(
                '<p class="comment-form-comment"><label for="comment">%s</label><textarea id="comment" name="comment" cols="45" rows="5" maxlength="65525" required="required"></textarea></p>',
                esc_html__( 'نظر شما', 'maryam-ghabel' )
            ),
            'fields'             => array(
                'author' => sprintf(
                    '<p class="comment-form-author"><label for="author">%s</label><input id="author" name="author" type="text" value="%s" size="30" maxlength="245" required="required" /></p>',
                    esc_html__( 'نام', 'maryam-ghabel' ),
                    esc_attr( $commenter['comment_author'] ?? '' )
                ),
                'email'  => sprintf(
                    '<p class="comment-form-email"><label for="email">%s</label><input id="email" name="email" type="email" value="%s" size="30" maxlength="100" required="required" /></p>',
                    esc_html__( 'ایمیل', 'maryam-ghabel' ),
                    esc_attr( $commenter['comment_author_email'] ?? '' )
                ),
                'url'    => sprintf(
                    '<p class="comment-form-url"><label for="url">%s</label><input id="url" name="url" type="url" value="%s" size="30" maxlength="200" /></p>',
                    esc_html__( 'وب‌سایت (اختیاری)', 'maryam-ghabel' ),
                    esc_attr( $commenter['comment_author_url'] ?? '' )
                ),
            ),
        )
    );
    ?>
</div>
