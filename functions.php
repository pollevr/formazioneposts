<?php 
function fp_error_log($msg){
	error_log(date('d.m.Y h:i:s')." >>> ".$msg."\n", 3, "/var/tmp/allievipozzo.log");
}

/*
 * Aggiunge il link alla pagina di amministrazione
*/
function fp_add_option_page(){
	fp_error_log("fp_add_option_page");
	add_options_page('Formazione Posts Options', 'Formazione Posts', 'administrator', 'fp-options-page', 'fp_update_options_form');
	fp_error_log("fp_add_option_page ending");
	//wp_enqueue_script( "fp_js",plugins_url('js/fp.js', __FILE__),array('jquery'));
}

/*
 * Disegna la pagina di amministrazione
*/
function fp_update_options_form(){
	fp_error_log("fp_update_options_form");

	require_once('admin_page.php');
}

/*
 * Registra il gruppo delle opzioni di riferimento
*/
function fp_register_options_group(){
	fp_error_log("fp_register_options_group");

	register_setting('fp_options_group', 'fp_background_field');
}
