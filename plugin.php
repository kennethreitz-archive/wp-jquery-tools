<?php 
/*
 Plugin Name: jQuery TOOLS
 Plugin URI: http://github.com/kennethreitz/jquery-tools-wordpress-plugin
 Description: Adds <a href="http://flowplayer.org/tools/index.html" target="_none">jQuery TOOLS</a> to your WordPress site. And it's all thanks to <a href="http://kennethreitz.com">Kenneth Reitz</a>!
 Author: Kenneth Reitz
 Author URI: http://kennethreitz.com
 Version: 1.0
 */

add_action('admin_menu', 'gopenid_admin_menu');

function chromeframe_snippet() {  ?>
	<meta http-equiv="X-UA-Compatible" content="chrome=1"/> 
<?php }

add_action('wp_head', 'chromeframe_snippet');


<script src="http://cdn.jquerytools.org/1.1.2/jquery.tools.min.js"></script>



