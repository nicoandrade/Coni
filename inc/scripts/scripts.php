<?php

	wp_enqueue_script( 'jquery' );
	
	//HTML5 Shiv ==============================================
	wp_enqueue_script( 'coni_html5shiv', get_template_directory_uri() . '/js/html5shiv.js', array(), '3.7.3', true );
	//=================================================================

	//hoverIntent Plugin ==============================================
	wp_enqueue_script( 'coni_hoverIntent', get_template_directory_uri() . '/js/jquery.hoverIntent.js', array('jquery'), '6.0', true );
	//=================================================================

	//Modernizr Plugin ================================================
	wp_enqueue_script( 'coni_modernizr', get_template_directory_uri() . '/js/modernizr.custom.67069.js', '2.8.3', true );
	//=================================================================
	
	//Flickity ========================================================
	wp_enqueue_script( 'coni_flickity', get_template_directory_uri() . '/js/flickity.pkgd.js', array(), '1.1.1', true );
	//=================================================================

	//Wow ========================================================
	wp_enqueue_script( 'coni_wow', get_template_directory_uri() . '/js/wow.js', array(), '1.1.2', true );
	//=================================================================
	
	//Pace  ===========================================================
	wp_enqueue_script( 'coni_pace', get_template_directory_uri() . '/js/pace.js', array(), '0.2.0', true);
	//=================================================================
	
	//Bootstrap JS ========================================
	wp_enqueue_script( 'coni_bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '3.3.5', true);
	//=================================================================
	
	//Comment Reply ===================================================
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	//=================================================================


	
	//Customs Scripts =================================================
	wp_enqueue_script( 'coni_theme-custom', get_template_directory_uri() . '/js/script.js', array('jquery', 'bootstrap'), '1.0', true );
	//=================================================================

?>