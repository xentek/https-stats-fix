<?php
/*
Plugin Name: HTTPS Stats Fix
Plugin URI: http://xentek.net/code/wordpress/plugins/https-stats-fix/
Description: Fix the WordPress.com Stats plugin to respond to http/https changes
Version: 0.2
Author: Eric Marden
Author URI: http://xentek.net/
*/

remove_action('wp_footer','stats_footer',101);
add_action('wp_footer','https_stats_footer',101);
function https_stats_footer() {
	$protocol = ( !empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on' ) ? "https://" : "http://";
	global $wp_the_query, $current_user;

	$options = stats_get_options();

	if ( !empty($current_user->ID) || empty($options['blog_id']) )
		return;

	$a['blog'] = $options['blog_id'];
	$a['v'] = 'ext';
	if ( $wp_the_query->is_single || $wp_the_query->is_page )
		$a['post'] = $wp_the_query->get_queried_object_id();
	else
		$a['post'] = '0';

?>
<script src="<?php echo $protocol; ?>stats.wordpress.com/e-<?php echo gmdate('YW'); ?>.js" type="text/javascript"></script>
<script type="text/javascript">
st_go({<?php echo stats_array($a); ?>});
var load_cmc = function(){linktracker_init(<?php echo "{$a['blog']},{$a['post']},2"; ?>);};
if ( typeof addLoadEvent != 'undefined' ) addLoadEvent(load_cmc);
else load_cmc();
</script>
<?php
}
?>