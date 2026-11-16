<?php
/**
 * Custom search form.
 *
 * @package Maryam_Ghabel
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label for="search-input-<?php echo esc_attr( uniqid() ); ?>">
        <span class="screen-reader-text"><?php esc_html_e( 'جستجو برای:', 'maryam-ghabel' ); ?></span>
    </label>
    <div class="search-form__inner">
        <input
            type="search"
            id="search-input-<?php echo esc_attr( uniqid() ); ?>"
            class="search-field"
            placeholder="<?php esc_attr_e( 'جستجو…', 'maryam-ghabel' ); ?>"
            value="<?php echo get_search_query(); ?>"
            name="s"
            autocomplete="off"
        />
        <button type="submit" class="search-submit btn btn-primary" aria-label="<?php esc_attr_e( 'جستجو', 'maryam-ghabel' ); ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <circle cx="11" cy="11" r="8"/>
                <line x1="21" y1="21" x2="16.65" y2="16.65"/>
            </svg>
        </button>
    </div>
</form>
