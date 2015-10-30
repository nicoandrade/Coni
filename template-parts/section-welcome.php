<div id="welcome-section" class="welcome-section">
    <?php
    $welcome_image = wp_get_attachment_image_src( absint( get_theme_mod( 'coni_welcome_image' ) ), 'full' );
    $welcome_image = $welcome_image[0];
    if ( empty( $welcome_image ) ) {
        $welcome_image = get_template_directory_uri() . '/images/peaks.jpg';
    }
    ?>
    <img src="<?php echo esc_url( $welcome_image ); ?>" alt="<?php echo esc_html( get_theme_mod( 'coni_welcome_title', __( 'Be the one to stand out in the crowd', 'coni' ) ) ); ?>">
    <div class="welcome-intro">
        <h2 class="intro-line"><?php echo esc_html( get_theme_mod( 'coni_welcome_title', __( 'Be the one to stand out in the crowd', 'coni' ) ) ); ?></h2>
        <?php if ( !empty( get_theme_mod( 'coni_welcome_link_title', esc_html__( 'Learn More', 'coni' ) ) ) || is_customize_preview() ) { ?>
        <button href="<?php echo esc_url( get_theme_mod( 'coni_welcome_link_url', '#' ) ); ?>" class="btn-ql"><?php echo esc_html( get_theme_mod( 'coni_welcome_link_title', esc_html__( 'Learn More', 'coni' ) ) ); ?></button>
        <?php } ?>
    </div><!-- welcome-intro -->
        
</div><!-- welcome-section -->