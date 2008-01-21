Find function trackback_response. Mine was in wp-includes/functions.php and most likely yours will be too.

At the end of this function (about 10 or 12 lines) you need to either delete or comment out the following statement:
die();

The line prevents the trackback actions from being called, and doesn't serve any purpose at all. Once you've made this change and activated the plugin, you should be off and running.