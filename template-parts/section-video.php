<?php
$coni_enable_section = get_theme_mod( 'coni_video_enable', true );
if ( $coni_enable_section || is_customize_preview() ) :
?>
<div id="video-section" class="video-section" <?php if( false == $coni_enable_section ): echo 'style="display: none;"'; endif ?>>
    <div class="video-wrap wow fadeInLeft">
        <div class="responsive-wrap">
        	<?php
        	$video_url = esc_url( get_theme_mod( 'coni_video_url', 'https://vimeo.com/137643804' ) );
			if ( strpos( $video_url, 'vimeo' ) !== false ) {
			    $video_id = coni_extract_vimeo_id( $video_url );
			    $video_iframe = '<iframe src="https://player.vimeo.com/video/' . $video_id . '?title=0&byline=0&portrait=0" width="953" height="536" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
			    echo $video_iframe;
			}else if( strpos( $video_url, 'youtube' ) !== false || strpos( $video_url, 'youtu' ) !== false){
				$video_id = coni_extract_youtube_id( $video_url );
				$video_iframe = '<iframe width="560" height="315" src="https://www.youtube.com/embed/' . $video_id . '?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>';
				echo $video_iframe;
			}
        	?>
        </div>
        
    </div><div class="video-text-wrap wow fadeInRight" data-wow-delay="300ms">
    	<?php /* translators: Lorem ipsum text, It is not strictly necessary to translate. */ ?>
        <h3 class="video-text-title"><?php  echo esc_html( get_theme_mod( 'coni_video_title', __( 'Praesent commodo cursus magna, vel scelerisque nisl consectetur et', 'coni' ) ) ); ?></h3>
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
		/* translators: Lorem ipsum text, It is not strictly necessary to translate. */
		$video_text = wp_kses( get_theme_mod( 'coni_video_text', __( 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna.', 'coni' ) ), $wp_kses_args );
        ?>
        <p><?php echo $video_text; ?></p>
        <?php $coni_video_link_title = get_theme_mod( 'coni_video_link_title', esc_html__( 'Learn More', 'coni' ) ); ?>
        <?php if ( !empty( $coni_video_link_title ) || is_customize_preview() ) { ?>
        <a href="<?php echo esc_url( get_theme_mod( 'coni_video_link_url', '#' ) ); ?>" class="btn-ql alternative"><?php echo esc_html( $coni_video_link_title ); ?></a>
        <?php } ?>
        
    </div>     
</div><!-- video-section -->
<?php endif ?>