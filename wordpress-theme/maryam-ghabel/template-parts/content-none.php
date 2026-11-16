<?php
/**
 * Template part for "no posts found".
 *
 * @package Maryam_Ghabel
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
<article class="post no-results not-found">
    <header class="entry-header">
        <h1 class="entry-title"><?php esc_html_e( 'هیچ مطلبی یافت نشد', 'maryam-ghabel' ); ?></h1>
    </header>
    <div class="entry-content">
        <?php
        if ( is_search() ) {
            echo '<p>' . esc_html__( 'متأسفانه برای جستجوی شما نتیجه‌ای پیدا نشد. لطفاً عبارت دیگری را امتحان کنید.', 'maryam-ghabel' ) . '</p>';
            get_search_form();
        } elseif ( is_home() ) {
            echo '<p>' . esc_html__( 'هنوز هیچ پستی منتشر نشده است.', 'maryam-ghabel' ) . '</p>';
        } else {
            echo '<p>' . esc_html__( 'محتوای مورد نظر یافت نشد.', 'maryam-ghabel' ) . '</p>';
        }
        ?>
    </div>
</article>
