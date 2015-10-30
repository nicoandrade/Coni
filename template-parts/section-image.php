<div id="image-section" class="image-section">
	<?php
	$featured_image = wp_get_attachment_image_src( absint( get_theme_mod( 'coni_image_image' ) ), 'full' );
	$featured_image = $featured_image[0];
	if ( empty( $featured_image ) ) {
		$featured_image = get_template_directory_uri() . '/images/img2.jpg';
	}
	?>
    <div class="image-wrap" style="background-image: url(<?php echo $featured_image; ?>);"></div>
    <div class="image-text">
        <h3 class="image-text-title wow fadeInUp">Donec id elit non mi porta gravida at eget metus.</h3>
        <?php
        $wp_kses_args = array(
		    'a' => array(
		        'href' => array(),
		        'title' => array()
		    ),
		    'br' => array(),
		    'em' => array(),
		    'strong' => array(),
		    'span' => array(),
		);
		$image_text = wp_kses( get_theme_mod( 'coni_image_text', 'Donec sed odio dui. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nulla vitae elit libero, a pharetra augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam porta sem malesuada magna mollis euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit.' ), $wp_kses_args );
        ?>
        <p class="wow fadeInUp" data-wow-delay="300ms"><?php echo nl2br( $image_text ); ?></p>
        <?php if ( !empty( get_theme_mod( 'coni_image_link_title', esc_html__( 'Learn More', 'coni' ) ) ) || is_customize_preview() ) { ?>
        <a href="<?php echo esc_url( get_theme_mod( 'coni_image_link_url', '#' ) ); ?>" class="btn-ql alternative-white wow fadeInUp" data-wow-delay="700ms"><?php echo esc_html( get_theme_mod( 'coni_image_link_title', esc_html__( 'Learn More', 'coni' ) ) ); ?></a>
        <?php } ?>
    </div>

</div><!-- image-section -->