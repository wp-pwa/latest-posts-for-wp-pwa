<?php
/**
 * Plugin Name: Latest posts for WordPress PWA
 * Description: Inject latest posts taxonomy in all custom post types for WordPress PWA
 * Author: Luis Herranz
 * Version: 1.0.0
 * Plugin URI: https://github.com/wp-pwa/latest-post-for-wp-pwa-plugin
 */

class Latest_Post_for_WP_PWA {
	function __construct() {
		add_filter('add_custom_post_types_to_latest', array($this, 'add_post_to_latest'));
	}

	function add_post_to_latest($types) {
    if (!in_array('post', $types)) $types[] = 'post';
    return $types;
  }
}

// initialize
new Latest_Post_for_WP_PWA();
