<?php
/*
Plugin Name: Moderate Trackbacks
Plugin URI: http://mtdewvirus.com/code/
Description: Automatically puts all trackbacks into the comment moderation queue.
Author: Nick Momrik
Version: 1.12
Author URI: http://mtdewvirus.com/
*/ 

function mdv_moderate_trackback($comment_ID) {
	global $wpdb;
	
	$wpdb->query("UPDATE $wpdb->comments SET comment_approved='0' WHERE comment_ID=$comment_ID AND comment_approved='1'");
	
	return $comment_ID;
}

add_action('trackback_post', 'mdv_moderate_trackback');
?>