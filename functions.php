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

function register_button( $buttons ) {
	array_push( $buttons, "|", "formazioneposts" );
	return $buttons;
}

function add_plugin( $plugin_array ) {
	//$plugin_array['formazioneposts'] = get_template_directory_uri() . '/js/recentposts.js';
	$plugin_array['formazioneposts'] = '/wp-content/plugins/formazioneposts/formazioneposts.js';
	return $plugin_array;
}

function formazione_posts_button() {

	if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') ) {
		return;
	}

	if ( get_user_option('rich_editing') == 'true' ) {
		add_filter( 'mce_external_plugins', 'add_plugin' );
		add_filter( 'mce_buttons', 'register_button' );
	}

}
