/**
 * Maryam Ghabel Clinical — Customizer preview enhancements.
 * Updates site title/description/tagline in real-time.
 */
(function ($) {
    'use strict';

    if (typeof wp === 'undefined' || !wp.customize) {
        return;
    }

    wp.customize('blogname', function (value) {
        value.bind(function (to) {
            $('.site-title a').text(to);
        });
    });

    wp.customize('blogdescription', function (value) {
        value.bind(function (to) {
            $('.site-description').text(to);
        });
    });

    wp.customize('maryam_ghabel_brand_name', function (value) {
        value.bind(function (to) {
            $('.site-title a').text(to);
        });
    });

    wp.customize('maryam_ghabel_brand_tagline', function (value) {
        value.bind(function (to) {
            $('.site-description').text(to);
        });
    });
})(jQuery);
