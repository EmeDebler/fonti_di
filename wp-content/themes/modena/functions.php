<?php
//REgistro de Estilos

function register_style(){
	$theme_data = wp_get_theme();

/*Registrando estilos*/
wp_register_style('bootstrap',
get_parent_theme_file_uri('/assets/vendor/css/bootstrap.css'), null,'4.1.3', 'screen');
wp_register_style('demo',
get_parent_theme_file_uri('/assets/vendor/css/demo.css'), null,'4.1.3', 'screen');
wp_register_style('fonts',
get_parent_theme_file_uri('/assets/fonts/pe-icon-7-stroke.css'), null,'4.1.3', 'screen');
wp_register_style('fontawesome','http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css', null, '1.0.0', 'screen');
wp_register_style('googlefonts','https://fonts.googleapis.com/css?family=Cambo|Poppins:400,600');
wp_register_style('main',
get_parent_theme_file_uri('/assets/css/style.css'), null, $theme_data->get( 'Version' ), 'screen');

/*enqueue estilos*/
wp_enqueue_style('bootstrap');
wp_enqueue_style('demo');
wp_enqueue_style('fonts');
wp_enqueue_style('fontawesome');
wp_enqueue_style('googlefonts');
wp_enqueue_style('main');

}

add_action( 'wp_enqueue_scripts', 'register_style' );

//Registro de scripts

function register_scripts() {
	$theme_data = wp_get_theme();

/*deregister Scripts*/
wp_deregister_script('jquery' );
wp_deregister_script('jquery_migrate' );

/*Registrando Scripts*/

wp_register_script('bootstrap',
get_parent_theme_file_uri('/assets/vendor/js/bootstrap.js'), array('jquery_migrate'), null, true);
wp_register_script('bootstrap2',
get_parent_theme_file_uri('/assets/vendor/js/bootstrap.min.js'), array('jquery_migrate'), null, true);
wp_register_script('gaia',
get_parent_theme_file_uri('/assets/vendor/js/gaia.js'), array('jquery_migrate'), null, true);
wp_register_script('jquery3',
get_parent_theme_file_uri('/assets/vendor/js/jquery-3.3.1.min.js'), null, '1.0.0', true);
wp_register_script('jquery_migrate', get_parent_theme_file_uri('/assets/vendor/js/jquery-migrate-3.0.1.min.js'), array('jquery3'), null, true);
wp_register_script('easingjquery', get_parent_theme_file_uri('/assets/vendor/js/jquery.easing.min.js'), array('jquery_migrate'), null, true);
wp_register_script('magnificpopup', get_parent_theme_file_uri('/assets/vendor/js/jquery.magnific-popup.min.js'), array('jquery_migrate'), null, true);
wp_register_script('jquery',
get_parent_theme_file_uri('/assets/vendor/js/jquery.min.js'), array('jquery_migrate'), null, true);
wp_register_script('moder',
get_parent_theme_file_uri('/assets/vendor/js/modernizr.js'), array('jquery_migrate'), null, true);
wp_register_script('mainjs', get_parent_theme_file_uri('/assets/js/scripts.js'), array('jquery3'), null, true);



//Enqueue Scripts
wp_enqueue_script('bootstrap');
wp_enqueue_script('bootstrap2');
wp_enqueue_script('gaia');
wp_enqueue_script('jquery3');
wp_enqueue_script('jquery-migrate');
wp_enqueue_script('easingjquery');
wp_enqueue_script('magnificpopup');
wp_enqueue_script('jquery');
wp_enqueue_script('moder');
wp_enqueue_script('mainjs');

}
add_action( 'wp_enqueue_scripts', 'register_scripts' );

//desactiva bufer de salida
remove_action ('shutdown', 'wp_ob_end_flush_all', 1);

?>
