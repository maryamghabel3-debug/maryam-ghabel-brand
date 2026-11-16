<?php
/**
 * Sidebar template.
 *
 * @package Maryam_Ghabel
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$maryam_sidebar_id = is_singular( 'post' ) || is_home() || is_category() || is_tag() ? 'sidebar-blog' : 'sidebar-1';

if ( ! is_active_sidebar( $maryam_sidebar_id ) ) {
    return;
}
?>

<aside id="secondary" class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'سایدبار', 'maryam-ghabel' ); ?>">
    <?php dynamic_sidebar( $maryam_sidebar_id ); ?>
</aside><!-- #secondary -->
