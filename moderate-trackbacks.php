<?php
/*
Plugin Name: Moderate Trackbacks
Plugin URI: http://mtdewvirus.com/code/wordpress-plugins/
Description: Puts trackbacks not marked as 'spam' into moderation.
Author: Nick Momrik
Version: 1.21
Author URI: http://mtdewvirus.com/
*/ 

function mdv_moderate_trackback($approved) {
	global $wp_query;

	if (1 == $approved && $wp_query->is_trackback)
		$approved = 0;

	return $approved;
}

add_filter('pre_comment_approved', 'mdv_moderate_trackback', 20);
?>