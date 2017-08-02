<?php 
	/*
	Plugin Name: Embed Image
	Plugin URI: http://www.embedanything.com
	Description: Plugin for syndicating ad supported images
	Author: Embed Image
	Version: 1.0.1
	Author URI: http://www.embedanything.com
	*/
	
	function embed_image_host() {
		return 'widget.embedarticle.com';
	}
	function embed_image_file(){
		return 'embed_img.js';
	}
	function embed_image_admin_actions() {
		add_options_page("Embed Image", "Embed Image Options", 'manage_options', "Embed-Image-Options", "embed_image_admin");
	}

	add_action('admin_menu', 'embed_image_admin_actions');
	add_filter('get_footer', 'add_image_widget', 9);
	
	function embed_image_admin() {
		if($_POST['emba_hidden'] == 'Y') {
			$pub_value = $_POST['pub_value'];  
			$style = $_POST['style'];
			$cp = $_POST['cp'];
			$display = $_POST['display'];
			update_option('emba_pub_value', $pub_value);
			update_option('emba_style', $style);
			update_option('emba_cp', $cp);
			update_option('emba_display', $display);
			$updated = true;
		} else {
			$pub_value = get_option('emba_pub_value');
			$style = get_option('emba_style');
			$cp = get_option('emba_cp');
			$display = get_option('emba_display');
		}
		include("embed_image_admin.php");
	}
	
	function add_image_widget($content) {
		 return $content.display_embed_image_widget();
	}
	
	function display_embed_image_widget() {
		if(get_option('emba_pub_value')!="" && get_option('emba_pub_value')!=NULL) {
			echo	'<script type="text/javascript">embaPub="'.get_option('emba_pub_value').'";</script>'.'<script type="text/javascript" src="http://'.embed_image_host().'/javascripts/'.embed_image_file().'"></script>';			
		}
	}
	
?>