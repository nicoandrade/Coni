<?php
	//Bootstrap =======================================================
	wp_enqueue_style( 'coni_bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '3.1', 'all');
	//=================================================================

	//Flickity =======================================================
	wp_enqueue_style( 'coni_flickity', get_template_directory_uri() . '/css/flickity.css', array(), '1.1.1', 'all');
	//=================================================================

	wp_enqueue_style( 'coni_style', get_stylesheet_uri() );

?>