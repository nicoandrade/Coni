<?php
/**
 * The template for displaying the Front Page.
 *
 * The front-page.php template file is used on the site's front page
 * regardless of whether 'Settings > Reading ->Front page displays' is set to "A static page" or "Your latest posts,"
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Coni
 */

get_header(); ?>
	
	<main id="main" class="site-main" role="main">


        <?php get_template_part( 'template-parts/section-welcome', 'front-page' ); ?>


		<?php get_template_part( 'template-parts/section-services', 'front-page' ); ?>


		<?php get_template_part( 'template-parts/section-quote', 'front-page' ); ?>


		<?php get_template_part( 'template-parts/section-video', 'front-page' ); ?>


		<?php get_template_part( 'template-parts/section-testimonials', 'front-page' ); ?>


		<?php get_template_part( 'template-parts/section-image', 'front-page' ); ?>


		<?php get_template_part( 'template-parts/section-phone', 'front-page' ); ?>


		<?php get_template_part( 'template-parts/section-tagline', 'front-page' ); ?>


        <?php get_template_part( 'template-parts/section-clients', 'front-page' ); ?>


        <?php get_template_part( 'template-parts/section-pricing', 'front-page' ); ?>


        <?php get_template_part( 'template-parts/section-blog', 'front-page' ); ?>


	</main><!-- #main -->


<?php get_footer(); ?>
