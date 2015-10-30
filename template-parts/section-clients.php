<div id="clients-section" class="clients-section">
    <h2 class="section-title wow fadeIn"><?php echo esc_html( get_theme_mod( 'coni_clients_title', __( 'People Who Trust Us', 'coni' ) ) ); ?></h2>

    <div class="clients-wrap js-flickity" data-flickity-options='{ "cellAlign": "left", "contain": false, "prevNextButtons": false, "pageDots": true, "autoPlay": 5000, "watchCSS": true }'>
        <?php
        if ( is_active_sidebar( 'clients-section' ) ){

            dynamic_sidebar( 'clients-section' );

        }else{

            $widget_instance = array(
                'title' => 'WordPress',
                'image_uri' => get_stylesheet_directory_uri() . '/images/WP.png', 
                );
            the_widget( 'coni_Client', $widget_instance, array( 'before_widget' => '<div id="%1$s" class="widget %2$s clients-logo wow flipInX">', 'after_widget' => '</div>' ) );

            $widget_instance = array(
                'title' => 'WooCommerce',
                'image_uri' => get_stylesheet_directory_uri() . '/images/Woo.png', 
                );
            the_widget( 'coni_Client', $widget_instance, array( 'before_widget' => '<div id="%1$s" class="widget %2$s clients-logo wow flipInX">', 'after_widget' => '</div>' ) );

            $widget_instance = array(
                'title' => 'Dribbble',
                'image_uri' => get_stylesheet_directory_uri() . '/images/dribbble.png', 
                );
            the_widget( 'coni_Client', $widget_instance, array( 'before_widget' => '<div id="%1$s" class="widget %2$s clients-logo wow flipInX">', 'after_widget' => '</div>' ) );

            $widget_instance = array(
                'title' => 'WPML',
                'image_uri' => get_stylesheet_directory_uri() . '/images/wpml.png', 
                );
            the_widget( 'coni_Client', $widget_instance, array( 'before_widget' => '<div id="%1$s" class="widget %2$s clients-logo wow flipInX">', 'after_widget' => '</div>' ) );

            $widget_instance = array(
                'title' => 'jQuery',
                'image_uri' => get_stylesheet_directory_uri() . '/images/jquery.png', 
                );
            the_widget( 'coni_Client', $widget_instance, array( 'before_widget' => '<div id="%1$s" class="widget %2$s clients-logo wow flipInX">', 'after_widget' => '</div>' ) );

        }
        ?>
    </div><!-- clients-wrap -->

</div><!-- clients-section -->