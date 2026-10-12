<?php
/**
 * Plugin Name: Viewers Badge Shortcode
 * Description: Adds a "people watching this product now" badge using the shortcode [ds_live_viewers]. Shows a random demo number.
 * Version:     1.0.0
 * Author:      Shahzaib Sheikh
 * License:     MIT
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Digital Stores - Live Product Viewers Shortcode
 * Usage: [ds_live_viewers]
 */

function ds_live_viewers_shortcode() {

    $count = rand(5, 30);

    ob_start(); ?>

    <div class="ds-live-viewers">
        <span class="ds-eye">👁</span>
        <span><strong><?php echo esc_html($count); ?></strong> People watching this product now!</span>
    </div>

    <?php
    return ob_get_clean();
}

add_shortcode('ds_live_viewers', 'ds_live_viewers_shortcode');
