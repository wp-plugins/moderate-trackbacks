<?php
/*
Plugin Name: Moderate Trackbacks
Plugin URI: http://dev.wp-plugins.org/browser/moderate-trackbacks/
Description: Automatically puts all trackbacks into the comment moderation queue.
Author: Nick Momrik
Version: 1.01
Author URI: http://mtdewvirus.com/
*/ 

function moderate_trackback($comment_ID) {
global $wpdb, $tablecomments;

$wpdb->query("UPDATE $tablecomments SET comment_approved='0' WHERE comment_ID=$comment_ID");

return $comment_ID;
}

add_action('trackback_post', 'moderate_trackback');
?>