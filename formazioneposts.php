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
*/

require_once 'functions.php';

//Actions
add_action('admin_init',								'fp_register_options_group');
add_action('admin_menu',								'fp_add_option_page');
add_action('wp_enqueue_scripts', 				'fp_load_scripts_styles' );

//register_activation_hook( __FILE__, 'fp_activate_set_default_options');
//register_deactivation_hook( __FILE__, 'fp_deactivation' );

/**
 * load styles
 *
 * @param none
 * @return void
 */
function fp_load_scripts_styles(){
	fp_error_log("fp_load_scripts_styles");
	wp_enqueue_style('formazioneposts', plugins_url( 'style.css' , __FILE__ ), false, '1.0', 'screen');
}


//tell wordpress to register the formazioneposts shortcode
add_shortcode("formazione-posts", "formazioneposts_handler");

function formazioneposts_handler() {
	//process incoming attributes assigning defaults if required
	$id_post=the_ID();
	//echo get_the_post_thumbnail( 122 );
	$incomingfrompost=shortcode_atts(array(
			//"sfondo_campo" => get_field('sfondo_campo', $id_post),
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
	), $incomingfrompost);
  //run function that actually does the work of the plugin
  $fph_output = formazioneposts_function($incomingfrompost);
  //send back text to replace shortcode in post
  return $fph_output;
}

function formazioneposts_function($incomingfromhandler) {
  //process plugin
  //P
  $style1="top: 40.5%; left: 0%"; //portiere
  //D
  $style5="top: 7.5%; left: 26.6%"; //terzino dx
  $style4="top: 32.5%; left: 26.6%"; //centrale dx
  $style3="top: 57.5%; left: 26.6%"; //centrale sx
  $style2="top: 82.5%; left: 26.6%"; //terzino sx
  //C
  $style9="top: 7.5%; left: 53.4%"; //ala dx
  $style8="top: 32.5%; left: 53.4%"; //interno dx
  $style7="top: 57.5%; left: 53.4%"; //interno sx
  $style6="top: 82.5%; left: 53.4%"; //ala sx
  //A
  $style11="top: 32.5%; left: 80%"; //punta dx
  $style10="top: 57.5%; left: 80%"; //punta sx
  if ($incomingfromhandler["modulo"]=='3-5-2'){
  	//D
  	$style4="top: 20%; left: 26.6%"; //centrale dx
  	$style3="top: 45%; left: 26.6%"; //centrale cx
  	$style2="top: 70%; left: 26.6%"; //centrale sx
  	//C
  	$style9="top: 7.5%; left: 53.4%"; //esterno dx
	  $style8="top: 26.25%; left: 53.4%"; //mezzala dx
	  $style7="top: 45%; left: 53.4%"; //centrale
	  $style6="top: 63.75%; left: 53.4%"; //mezzala sx
	  $style5="top: 82.5%; left: 53.4%"; //esterno sx
	  //A
	  $style11="top: 32.5%; left: 80%"; //punta dx
	  $style10="top: 57.5%; left: 80%"; //punta sx
  }
  if ($incomingfromhandler["modulo"]=='4-5-1'){
  	//D
	  $style5="top: 7.5%; left: 26.6%"; //terzino dx
	  $style4="top: 32.5%; left: 26.6%"; //centrale dx
	  $style3="top: 57.5%; left: 26.6%"; //centrale sx
	  $style2="top: 82.5%; left: 26.6%"; //terzino sx
	  //C
  	$style10="top: 7.5%; left: 53.4%"; //esterno dx
  	$style9="top: 26.25%; left: 53.4%"; //mezzala dx
  	$style8="top: 45%; left: 53.4%"; //centrale
  	$style7="top: 63.75%; left: 53.4%"; //mezzala sx
  	$style6="top: 82.5%; left: 53.4%"; //esterno sx
  	//A
  	$style11="top: 45%; left: 80%"; //punta
  }
  if ($incomingfromhandler["modulo"]=='4-3-3'){
  	//D
  	$style5="top: 7.5%; left: 26.6%"; //terzino dx
  	$style4="top: 32.5%; left: 26.6%"; //centrale dx
  	$style3="top: 57.5%; left: 26.6%"; //centrale sx
  	$style2="top: 82.5%; left: 26.6%"; //terzino sx
  	//C
  	$style8="top: 20%; left: 53.4%"; //mezzala dx
  	$style7="top: 45%; left: 53.4%"; //centrale
  	$style6="top: 70%; left: 53.4%"; //mezzala sx
  	//A
  	$style11="top: 20%; left: 80%"; //attaccante dx
  	$style10="top: 45%; left: 80%"; //punta
  	$style9="top: 70%; left: 80%"; //attaccante sx
  }
  if ($incomingfromhandler["modulo"]=='3-4-3'){
  	//D
  	$style4="top: 20%; left: 26.6%"; //centrale dx
  	$style3="top: 45%; left: 26.6%"; //centrale cs
  	$style2="top: 70%; left: 26.6%"; //centrale dx
  	//C
	  $style8="top: 7.5%; left: 53.4%"; //ala dx
	  $style7="top: 32.5%; left: 53.4%"; //interno dx
	  $style6="top: 57.5%; left: 53.4%"; //interno sx
	  $style5="top: 82.5%; left: 53.4%"; //ala sx
  	//A
  	$style11="top: 20%; left: 80%"; //attaccante dx
  	$style10="top: 45%; left: 80%"; //punta
  	$style9="top: 70%; left: 80%"; //attaccante sx
	}
  if ($incomingfromhandler["modulo"]=='5-4-1'){
  	//D
  	$style6="top: 7.5%; left: 26.6%"; //terzino dx
  	$style5="top: 26.5%; left: 26.6%"; //centrale dx
  	$style4="top: 45%; left: 26.6%"; //centrale cx
  	$style3="top: 63.75%; left: 26.6%"; //centrale sx
  	$style2="top: 82.5%; left: 26.6%"; //terzino sx
  	//C
	  $style10="top: 7.5%; left: 53.4%"; //ala dx
	  $style9="top: 32.5%; left: 53.4%"; //interno dx
	  $style8="top: 57.5%; left: 53.4%"; //interno sx
	  $style7="top: 82.5%; left: 53.4%"; //ala sx
  	//A
  	$style11="top: 45%; left: 80%"; //punta
   }
  if ($incomingfromhandler["modulo"]=='5-3-2'){
  	//D
  	$style6="top: 7.5%; left: 26.6%"; //terzino dx
  	$style5="top: 26.5%; left: 26.6%"; //centrale dx
  	$style4="top: 45%; left: 26.6%"; //centrale cx
  	$style3="top: 63.75%; left: 26.6%"; //centrale sx
  	$style2="top: 82.5%; left: 26.6%"; //terzino sx
  	//C
  	$style9="top: 20%; left: 53.4%"; //attaccante dx
  	$style8="top: 45%; left: 53.4%"; //punta
  	$style7="top: 70%; left: 53.4%"; //attaccante sx
  }
  if ($incomingfromhandler["modulo"]=='4-2-3-1'){
  	//D
  	$style5="top: 7.5%; left: 26.6%"; //
  	$style4="top: 32.5%; left: 26.6%"; //
  	$style3="top: 57.5%; left: 26.6%"; //
  	$style2="top: 82.5%; left: 26.6%"; //
  	//C  	
  	$style7="top: 26.25%; left: 45%"; //
  	$style6="top: 63.75%; left: 45%"; //
  	//
  	$style10="top: 7.5%; left: 60%"; //
  	$style9="top: 45%; left: 60%"; //
  	$style8="top: 82.5%; left: 60%"; //
  	//A
  	$style11="top: 45%; left: 80%"; //
  }
  if ($incomingfromhandler["modulo"]=='4-3-2-1'){
  	//D
  	$style5="top: 7.5%; left: 26.6%"; //
  	$style4="top: 32.5%; left: 26.6%"; //
  	$style3="top: 57.5%; left: 26.6%"; //
  	$style2="top: 82.5%; left: 26.6%"; //
  	//C  	
  	$style8="top: 20%; left: 45%"; //
  	$style7="top: 45%; left: 45%"; //
  	$style6="top: 70%; left: 45%"; //
  	//
  	$style10="top: 7.5%; left: 60%"; //
  	$style9="top: 82.5%; left: 60%"; //
  	//A
  	$style11="top: 45%; left: 80%"; //
  }
  if ($incomingfromhandler["modulo"]=='4-3-1-2'){
  	//D
  	$style5="top: 7.5%; left: 26.6%"; //
  	$style4="top: 32.5%; left: 26.6%"; //
  	$style3="top: 57.5%; left: 26.6%"; //
  	$style2="top: 82.5%; left: 26.6%"; //
  	//C  	
  	$style8="top: 20%; left: 45%"; //
  	$style7="top: 45%; left: 45%"; //
  	$style6="top: 70%; left: 45%"; //
  	//
  	$style9="top: 45%; left: 65%"; //
  	//A
  	$style11="top: 32.5%; left: 80%"; //
  	$style10="top: 57.5%; left: 80%"; //
  }
  //$style_field="background-image: url(http://www.pozzo.it/wp-content/plugins/football-formation/img/football_pitch_1.png)";

  $fp_background_field = get_option('fp_background_field');
  //$field = $incomingfromhandler['sfondo_campo'];
  //$post_thumbnail_id = get_post_thumbnail_id( $field[0]->ID );
  //$image_field_src = wp_get_attachment_image_src( $post_thumbnail_id, 'full' );
  $image_name = "images/football_pitch_".$fp_background_field.".png";
  $style_field="background-image: url(" . plugins_url( $image_name , __FILE__ ) . ")";
  
  $fp_output = "";
  $fp_output .= '
		<div class="dc-ff-football-formation" style="'.$style_field.'">
			<div class="dc-ff-player" style="'.$style1.'">
				<div class="dc-ff-player-number">'.$incomingfromhandler["numero_1"].'</div>
				<div class="dc-ff-player-name">'.$incomingfromhandler["nome_1"].'</div>
			</div>
			<div class="dc-ff-player" style="'.$style2.'">
				<div class="dc-ff-player-number">'.$incomingfromhandler["numero_2"].'</div>
				<div class="dc-ff-player-name">'.$incomingfromhandler["nome_2"].'</div>
			</div>
			<div class="dc-ff-player" style="'.$style3.'">
				<div class="dc-ff-player-number">'.$incomingfromhandler["numero_3"].'</div>
				<div class="dc-ff-player-name">'.$incomingfromhandler["nome_3"].'</div>
			</div>
			<div class="dc-ff-player" style="'.$style4.'">
				<div class="dc-ff-player-number">'.$incomingfromhandler["numero_4"].'</div>
				<div class="dc-ff-player-name">'.$incomingfromhandler["nome_4"].'</div>
			</div>
			<div class="dc-ff-player" style="'.$style5.'">
				<div class="dc-ff-player-number">'.$incomingfromhandler["numero_5"].'</div>
				<div class="dc-ff-player-name">'.$incomingfromhandler["nome_5"].'</div>
			</div>
			<div class="dc-ff-player" style="'.$style6.'">
				<div class="dc-ff-player-number">'.$incomingfromhandler["numero_6"].'</div>
				<div class="dc-ff-player-name">'.$incomingfromhandler["nome_6"].'</div>
			</div>
			<div class="dc-ff-player" style="'.$style7.'">
				<div class="dc-ff-player-number">'.$incomingfromhandler["numero_7"].'</div>
				<div class="dc-ff-player-name">'.$incomingfromhandler["nome_7"].'</div>
			</div>
			<div class="dc-ff-player" style="'.$style8.'">
				<div class="dc-ff-player-number">'.$incomingfromhandler["numero_8"].'</div>
				<div class="dc-ff-player-name">'.$incomingfromhandler["nome_8"].'</div>
			</div>
			<div class="dc-ff-player" style="'.$style9.'">
				<div class="dc-ff-player-number">'.$incomingfromhandler["numero_9"].'</div>
				<div class="dc-ff-player-name">'.$incomingfromhandler["nome_9"].'</div>
			</div>
			<div class="dc-ff-player" style="'.$style10.'">
				<div class="dc-ff-player-number">'.$incomingfromhandler["numero_10"].'</div>
				<div class="dc-ff-player-name">'.$incomingfromhandler["nome_10"].'</div>
			</div>
			<div class="dc-ff-player" style="'.$style11.'">
				<div class="dc-ff-player-number">'.$incomingfromhandler["numero_11"].'</div>
				<div class="dc-ff-player-name">'.$incomingfromhandler["nome_11"].'</div>
			</div>
		</div>
  ';
  //send back text to calling function
  return $fp_output;
}
?>
