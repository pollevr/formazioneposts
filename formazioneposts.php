<?php
/*
Plugin Name: Formazione Posts
Description: Visualizza la formazione in un campo da calcio nel formato televisivo
Version: 0.1 BETA
Author: Cristian Polleghini
Author URI: http://www.cpcreaweb.it
*/

/*
Formazione Posts (Wordpress Plugin)
Copyright (C) 2013 Cristian Polleghini
Contact me at http://www.cpcreaweb.it

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>.

http://wp.smashingmagazine.com/2012/05/01/wordpress-shortcodes-complete-guide/
http://wordpress.stackexchange.com/questions/72394/how-to-add-a-shortcode-button-to-the-tinymce-editor
*/

require_once 'functions.php';
require_once 'templates/classic.php';

/**
 * initialize plugin
 *
 */

	//Actions
	//add_action('admin_init',								'fp_register_options_group');
	//add_action('admin_menu',								'fp_add_option_page');
	add_action('wp_enqueue_scripts', 				'fp_load_scripts_styles' );
	
	//add_action('admin_init', 'formazione_posts_button');
	//add_action('wp_ajax_window_settings', 'window_settings');
	//register_activation_hook( __FILE__, 'fp_activate_set_default_options');
	//register_deactivation_hook( __FILE__, 'fp_deactivation' );
	
	// Add the script and style files
	//add_action('wp_head', array(&$this, 'loadScripts') );
	//add_action('wp_print_styles', array(&$this, 'loadStyles') );
	// Add TinyMCE Button
	//add_action( 'init', array(&$this, 'addTinyMCEButton') );
	//add_filter( 'tiny_mce_version', array(&$this, 'changeTinyMCEVersion') );
	
	
	
	
	function tcustom_addbuttons() {
		if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') )
			return;
	
		if ( get_user_option('rich_editing') == 'true') {
			add_filter("mce_external_plugins", "add_tcustom_tinymce_plugin");
			add_filter('mce_buttons', 'register_tcustom_button');
		}
	}
	function register_tcustom_button($buttons) {
		array_push($buttons, "|", "formazioneposts");
		return $buttons;
	}
	function add_tcustom_tinymce_plugin($plugin_array) {
		$plugin_array['formazioneposts'] = '/wp-content/plugins/formazioneposts/formazioneposts.js';
		return $plugin_array;
	}
	// init process for button control
	add_action('init', 'tcustom_addbuttons');
		
	
	
	
	
	
	
	
	
function window_settings(){
	//include "tinymce/window.php";
}

/**
 * load styles
 *
 * @param none
 * @return void
 */
function fp_load_scripts_styles(){
	fp_error_log("fp_load_scripts_styles");
	wp_enqueue_style('formazioneposts', '/wp-content/plugins/formazioneposts/style.css', false, '1.0', 'screen');
}

/**
 * add TinyMCE Button
 *
 * @param none
 * @return void
 */
/*
function addTinyMCEButton()
{
	// Don't bother doing this stuff if the current user lacks permissions
	if ( !current_user_can('edit_posts') && !current_user_can('edit_pages') ) return;

	// Check for FormazionePosts capability
	//if ( !current_user_can('manage_formazioneposts') ) return;

	// Add only in Rich Editor mode
	if ( get_user_option('rich_editing') == 'true') {
		add_filter("mce_external_plugins", array(&$this, 'addTinyMCEPlugin'));
		add_filter('mce_buttons', array(&$this, 'registerTinyMCEButton'));
	}
}
function addTinyMCEPlugin( $plugin_array ){
	$plugin_array['FormazionePosts'] = '/wp-content/plugins/formazioneposts/admin/tinymce/editor_plugin.js';
	return $plugin_array;
}
function registerTinyMCEButton( $buttons ){
	array_push($buttons, "separator", "FormazionePosts");
	return $buttons;
}
function changeTinyMCEVersion( $version ){
	return ++$version;
}
*/

function formazioneposts_handler($atts) {
	//process incoming attributes assigning defaults if required
	
	$incomingfrompost=( shortcode_atts( array(
	'field_bg_option' => '14',
	'module' => '442',
	'pl1_num' => '1',
	'pl1_name' => '',
	'pl2_num' => '2',
	'pl2_name' => '',
	'pl3_num' => '3',
	'pl3_name' => '',
	'pl4_num' => '4',
	'pl4_name' => '',
	'pl5_num' => '5',
	'pl5_name' => '',
	'pl6_num' => '6',
	'pl6_name' => '',
	'pl7_num' => '7',
	'pl7_name' => '',
	'pl8_num' => '8',
	'pl8_name' => '',
	'pl9_num' => '9',
	'pl9_name' => '',
	'pl10_num' => '10',
	'pl10_name' => '',
	'pl11_num' => '11',
	'pl11_name' => '',
	), $atts, 'formazione-posts' ) ) ;
	//return 'formazione-posts: ' . $field_bg_option . ' ' . $module;
/*	
	$f = new Formazione();
	return $f->get_html('4-4-2', $array_names, '14');
*/	
	
	//$id_post=the_ID();
	//echo get_the_post_thumbnail( 122 );
	/*
	$incomingfrompost=shortcode_atts(array(
			"sfondo_campo" => get_field('sfondo_campo', $id_post),
			"modulo" => get_field('modulo', $id_post),
			"numero_1" => get_field('numero_1', $id_post),
			"numero_2" => get_field('numero_2', $id_post),
			"numero_3" => get_field('numero_3', $id_post),
			"numero_4" => get_field('numero_4', $id_post),
			"numero_5" => get_field('numero_5', $id_post),
			"numero_6" => get_field('numero_6', $id_post),
			"numero_7" => get_field('numero_7', $id_post),
			"numero_8" => get_field('numero_8', $id_post),
			"numero_9" => get_field('numero_9', $id_post),
			"numero_10" => get_field('numero_10', $id_post),
			"numero_11" => get_field('numero_11', $id_post),
			"nome_1" => get_field('nome_1', $id_post),
			"nome_2" => get_field('nome_2', $id_post),
			"nome_3" => get_field('nome_3', $id_post),
			"nome_4" => get_field('nome_4', $id_post),
			"nome_5" => get_field('nome_5', $id_post),
			"nome_6" => get_field('nome_6', $id_post),
			"nome_7" => get_field('nome_7', $id_post),
			"nome_8" => get_field('nome_8', $id_post),
			"nome_9" => get_field('nome_9', $id_post),
			"nome_10" => get_field('nome_10', $id_post),
			"nome_11" => get_field('nome_11', $id_post)
	), $incomingfrompost);*/
  //run function that actually does the work of the plugin
  $fph_output = formazioneposts_function($incomingfrompost);
  //send back text to replace shortcode in post
  return $fph_output;
}

//tell wordpress to register the formazioneposts shortcode
add_shortcode("formazione-posts", "formazioneposts_handler");

function formazioneposts_function($incomingfromhandler) {
  //process plugin
  //P
  $style1="top: 40%; left: 0%"; //portiere
  //D
  $style5="top: 4.5%; left: 26.6%"; //terzino dx
  $style4="top: 29.5%; left: 26.6%"; //centrale dx
  $style3="top: 54.5%; left: 26.6%"; //centrale sx
  $style2="top: 79.5%; left: 26.6%"; //terzino sx
  //C
  $style9="top: 4.5%; left: 53.4%"; //ala dx
  $style8="top: 29.5%; left: 53.4%"; //interno dx
  $style7="top: 54.5%; left: 53.4%"; //interno sx
  $style6="top: 79.5%; left: 53.4%"; //ala sx
  //A
  $style11="top: 29.5%; left: 80%"; //punta dx
  $style10="top: 54.5%; left: 80%"; //punta sx
  if ($incomingfromhandler["module"]=='352'){
  	//D
  	$style4="top: 17%; left: 26.6%"; //centrale dx
  	$style3="top: 42%; left: 26.6%"; //centrale cx
  	$style2="top: 67%; left: 26.6%"; //centrale sx
  	//C
  	$style9="top: 4.5%; left: 53.4%"; //esterno dx
	  $style8="top: 23.25%; left: 53.4%"; //mezzala dx
	  $style7="top: 42%; left: 53.4%"; //centrale
	  $style6="top: 60.75%; left: 53.4%"; //mezzala sx
	  $style5="top: 79.5%; left: 53.4%"; //esterno sx
	  //A
	  $style11="top: 29.5%; left: 80%"; //punta dx
	  $style10="top: 54.5%; left: 80%"; //punta sx
  }
  if ($incomingfromhandler["module"]=='451'){
  	//D
	  $style5="top: 4.5%; left: 26.6%"; //terzino dx
	  $style4="top: 29.5%; left: 26.6%"; //centrale dx
	  $style3="top: 54.5%; left: 26.6%"; //centrale sx
	  $style2="top: 79.5%; left: 26.6%"; //terzino sx
	  //C
  	$style10="top: 4.5%; left: 53.4%"; //esterno dx
  	$style9="top: 23.25%; left: 53.4%"; //mezzala dx
  	$style8="top: 42%; left: 53.4%"; //centrale
  	$style7="top: 60.75%; left: 53.4%"; //mezzala sx
  	$style6="top: 79.5%; left: 53.4%"; //esterno sx
  	//A
  	$style11="top: 42%; left: 80%"; //punta
  }
  if ($incomingfromhandler["module"]=='433'){
  	//D
  	$style5="top: 4.5%; left: 26.6%"; //terzino dx
  	$style4="top: 29.5%; left: 26.6%"; //centrale dx
  	$style3="top: 54.5%; left: 26.6%"; //centrale sx
  	$style2="top: 79.5%; left: 26.6%"; //terzino sx
  	//C
  	$style8="top: 17%; left: 53.4%"; //mezzala dx
  	$style7="top: 42%; left: 53.4%"; //centrale
  	$style6="top: 67%; left: 53.4%"; //mezzala sx
  	//A
  	$style11="top: 17%; left: 80%"; //attaccante dx
  	$style10="top: 42%; left: 80%"; //punta
  	$style9="top: 67%; left: 80%"; //attaccante sx
  }
  if ($incomingfromhandler["module"]=='343'){
  	//D
  	$style4="top: 17%; left: 26.6%"; //centrale dx
  	$style3="top: 42%; left: 26.6%"; //centrale cs
  	$style2="top: 67%; left: 26.6%"; //centrale dx
  	//C
	  $style8="top: 4.5%; left: 53.4%"; //ala dx
	  $style7="top: 29.5%; left: 53.4%"; //interno dx
	  $style6="top: 54.5%; left: 53.4%"; //interno sx
	  $style5="top: 79.5%; left: 53.4%"; //ala sx
  	//A
  	$style11="top: 17%; left: 80%"; //attaccante dx
  	$style10="top: 42%; left: 80%"; //punta
  	$style9="top: 67%; left: 80%"; //attaccante sx
	}
  if ($incomingfromhandler["module"]=='541'){
  	//D
  	$style6="top: 4.5%; left: 26.6%"; //terzino dx
  	$style5="top: 23.5%; left: 26.6%"; //centrale dx
  	$style4="top: 42%; left: 26.6%"; //centrale cx
  	$style3="top: 60.75%; left: 26.6%"; //centrale sx
  	$style2="top: 79.5%; left: 26.6%"; //terzino sx
  	//C
	  $style10="top: 4.5%; left: 53.4%"; //ala dx
	  $style9="top: 29.5%; left: 53.4%"; //interno dx
	  $style8="top: 54.5%; left: 53.4%"; //interno sx
	  $style7="top: 79.5%; left: 53.4%"; //ala sx
  	//A
  	$style11="top: 42%; left: 80%"; //punta
   }
  if ($incomingfromhandler["module"]=='532'){
  	//D
  	$style6="top: 4.5%; left: 26.6%"; //terzino dx
  	$style5="top: 23.5%; left: 26.6%"; //centrale dx
  	$style4="top: 42%; left: 26.6%"; //centrale cx
  	$style3="top: 60.75%; left: 26.6%"; //centrale sx
  	$style2="top: 79.5%; left: 26.6%"; //terzino sx
  	//C
  	$style9="top: 17%; left: 53.4%"; //attaccante dx
  	$style8="top: 42%; left: 53.4%"; //punta
  	$style7="top: 67%; left: 53.4%"; //attaccante sx
  }
  if ($incomingfromhandler["module"]=='4231'){
  	//D
  	$style5="top: 4.5%; left: 26.6%"; //
  	$style4="top: 29.5%; left: 26.6%"; //
  	$style3="top: 54.5%; left: 26.6%"; //
  	$style2="top: 79.5%; left: 26.6%"; //
  	//C  	
  	$style7="top: 23.25%; left: 45%"; //
  	$style6="top: 60.75%; left: 45%"; //
  	//
  	$style10="top: 4.5%; left: 60%"; //
  	$style9="top: 42%; left: 60%"; //
  	$style8="top: 79.5%; left: 60%"; //
  	//A
  	$style11="top: 42%; left: 80%"; //
  }
  if ($incomingfromhandler["module"]=='4321'){
  	//D
  	$style5="top: 4.5%; left: 26.6%"; //
  	$style4="top: 29.5%; left: 26.6%"; //
  	$style3="top: 54.5%; left: 26.6%"; //
  	$style2="top: 79.5%; left: 26.6%"; //
  	//C  	
  	$style8="top: 17%; left: 45%"; //
  	$style7="top: 42%; left: 45%"; //
  	$style6="top: 67%; left: 45%"; //
  	//
  	$style10="top: 4.5%; left: 60%"; //
  	$style9="top: 79.5%; left: 60%"; //
  	//A
  	$style11="top: 42%; left: 80%"; //
  }
  if ($incomingfromhandler["module"]=='4312'){
  	//D
  	$style5="top: 4.5%; left: 26.6%"; //
  	$style4="top: 29.5%; left: 26.6%"; //
  	$style3="top: 54.5%; left: 26.6%"; //
  	$style2="top: 79.5%; left: 26.6%"; //
  	//C  	
  	$style8="top: 17%; left: 45%"; //
  	$style7="top: 42%; left: 45%"; //
  	$style6="top: 67%; left: 45%"; //
  	//
  	$style9="top: 42%; left: 65%"; //
  	//A
  	$style11="top: 29.5%; left: 80%"; //
  	$style10="top: 54.5%; left: 80%"; //
  }
  //$style_field="background-image: url(http://www.pozzo.it/wp-content/plugins/football-formation/img/football_pitch_1.png)";

  $fp_background_field = get_option('fp_background_field');
  //$field = $incomingfromhandler['sfondo_campo'];
  //$post_thumbnail_id = get_post_thumbnail_id( $field[0]->ID );
  //$image_field_src = wp_get_attachment_image_src( $post_thumbnail_id, 'full' );
  $image_name = "/wp-content/plugins/formazioneposts/images/football_pitch_".$incomingfromhandler["field_bg_option"].".png";
  $style_field="background-image: url(" . $image_name . "); background-repeat: no-repeat;";
  
  $fp_output = "";
  $fp_output .= '
		<div class="dc-ff-football-formation" style="'.$style_field.'">
			<div class="dc-ff-player background'.$incomingfromhandler["field_bg_option"].'" style="'.$style1.'">
				<div class="dc-ff-player-number background'.$incomingfromhandler["field_bg_option"].'">'.$incomingfromhandler["pl1_num"].'</div>
				<div class="dc-ff-player-name background'.$incomingfromhandler["field_bg_option"].'">'.$incomingfromhandler["pl1_name"].'</div>
			</div>
			<div class="dc-ff-player background'.$incomingfromhandler["field_bg_option"].'" style="'.$style2.'">
				<div class="dc-ff-player-number background'.$incomingfromhandler["field_bg_option"].'">'.$incomingfromhandler["pl2_num"].'</div>
				<div class="dc-ff-player-name background'.$incomingfromhandler["field_bg_option"].'">'.$incomingfromhandler["pl2_name"].'</div>
			</div>
			<div class="dc-ff-player background'.$incomingfromhandler["field_bg_option"].'" style="'.$style3.'">
				<div class="dc-ff-player-number background'.$incomingfromhandler["field_bg_option"].'">'.$incomingfromhandler["pl3_num"].'</div>
				<div class="dc-ff-player-name background'.$incomingfromhandler["field_bg_option"].'">'.$incomingfromhandler["pl3_name"].'</div>
			</div>
			<div class="dc-ff-player background'.$incomingfromhandler["field_bg_option"].'" style="'.$style4.'">
				<div class="dc-ff-player-number background'.$incomingfromhandler["field_bg_option"].'">'.$incomingfromhandler["pl4_num"].'</div>
				<div class="dc-ff-player-name background'.$incomingfromhandler["field_bg_option"].'">'.$incomingfromhandler["pl4_name"].'</div>
			</div>
			<div class="dc-ff-player background'.$incomingfromhandler["field_bg_option"].'" style="'.$style5.'">
				<div class="dc-ff-player-number background'.$incomingfromhandler["field_bg_option"].'">'.$incomingfromhandler["pl5_num"].'</div>
				<div class="dc-ff-player-name background'.$incomingfromhandler["field_bg_option"].'">'.$incomingfromhandler["pl5_name"].'</div>
			</div>
			<div class="dc-ff-player background'.$incomingfromhandler["field_bg_option"].'" style="'.$style6.'">
				<div class="dc-ff-player-number background'.$incomingfromhandler["field_bg_option"].'">'.$incomingfromhandler["pl6_num"].'</div>
				<div class="dc-ff-player-name background'.$incomingfromhandler["field_bg_option"].'">'.$incomingfromhandler["pl6_name"].'</div>
			</div>
			<div class="dc-ff-player background'.$incomingfromhandler["field_bg_option"].'" style="'.$style7.'">
				<div class="dc-ff-player-number background'.$incomingfromhandler["field_bg_option"].'">'.$incomingfromhandler["pl7_num"].'</div>
				<div class="dc-ff-player-name background'.$incomingfromhandler["field_bg_option"].'">'.$incomingfromhandler["pl7_name"].'</div>
			</div>
			<div class="dc-ff-player background'.$incomingfromhandler["field_bg_option"].'" style="'.$style8.'">
				<div class="dc-ff-player-number background'.$incomingfromhandler["field_bg_option"].'">'.$incomingfromhandler["pl8_num"].'</div>
				<div class="dc-ff-player-name background'.$incomingfromhandler["field_bg_option"].'">'.$incomingfromhandler["pl8_name"].'</div>
			</div>
			<div class="dc-ff-player background'.$incomingfromhandler["field_bg_option"].'" style="'.$style9.'">
				<div class="dc-ff-player-number background'.$incomingfromhandler["field_bg_option"].'">'.$incomingfromhandler["pl9_num"].'</div>
				<div class="dc-ff-player-name background'.$incomingfromhandler["field_bg_option"].'">'.$incomingfromhandler["pl9_name"].'</div>
			</div>
			<div class="dc-ff-player background'.$incomingfromhandler["field_bg_option"].'" style="'.$style10.'">
				<div class="dc-ff-player-number background'.$incomingfromhandler["field_bg_option"].'">'.$incomingfromhandler["pl10_num"].'</div>
				<div class="dc-ff-player-name background'.$incomingfromhandler["field_bg_option"].'">'.$incomingfromhandler["pl10_name"].'</div>
			</div>
			<div class="dc-ff-player background'.$incomingfromhandler["field_bg_option"].'" style="'.$style11.'">
				<div class="dc-ff-player-number background'.$incomingfromhandler["field_bg_option"].'">'.$incomingfromhandler["pl11_num"].'</div>
				<div class="dc-ff-player-name background'.$incomingfromhandler["field_bg_option"].'">'.$incomingfromhandler["pl11_name"].'</div>
			</div>
		</div>
  ';
  //send back text to calling function
  return $fp_output;
}
?>
