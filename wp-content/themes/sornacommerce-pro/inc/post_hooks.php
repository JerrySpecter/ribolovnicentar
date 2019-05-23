<?php
/**
 * Functions hooked to post page.
 *
 * @package Sorna Commerce
 *
 */
 
 if ( ! function_exists( 'sornacommerce_posts_formats_thumbnail' ) ) :

	/**
	 * Post formats thumbnail.
	 *
	 * @since 1.0.0
	 */
	function sornacommerce_posts_formats_thumbnail() {
		$formats = get_post_format(get_the_ID());
	?>
	
        <?php if ( has_post_thumbnail() ) :?>
          
           		<?php if ( is_singular() ) :?>
                    <div class="post-thumbnail ">
                   	 <?php the_post_thumbnail('full');?>
                    </div>
                <?php else: ?>
                 <div class="post-thumbnail isotope-info">
                	<a href="<?php echo esc_url( get_permalink() );?>" class="image-link <?php echo $formats;?>">
                    	<?php the_post_thumbnail('full');?>
                    </a>
                 </div>  
                <?php endif;?>
                </a>
           
         
        <?php endif;?>  
	<?php
	}

endif;
add_action( 'sornacommerce_posts_formats_thumbnail', 'sornacommerce_posts_formats_thumbnail' );


if ( ! function_exists( 'sornacommerce_posts_formats_video' ) ) :

	/**
	 * Post Formats Video.
	 *
	 * @since 1.0.0
	 */
	function sornacommerce_posts_formats_video() {
		$content = apply_filters( 'the_content', get_the_content() );
		$video = false;
		// Only get video from the content if a playlist isn't present.
		if ( false === strpos( $content, 'wp-playlist-script' ) ) {
			$video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );
		}
		if ( ! is_single() ) :
		
			// If not a single post, highlight the video file.
			if ( ! empty( $video ) ) :
				foreach ( $video as $video_html ) {
					echo '<div class="entry-video embed-responsive embed-responsive-16by9">';
						echo $video_html;
					echo '</div>';
				}
			endif;
		
		endif;
	 }

endif;
add_action( 'sornacommerce_posts_formats_video', 'sornacommerce_posts_formats_video' ); 


if ( ! function_exists( 'sornacommerce_posts_formats_audio' ) ) :

	/**
	 * Post Formats audio.
	 *
	 * @since 1.0.0
	 */
	function sornacommerce_posts_formats_audio() {
		$content = apply_filters( 'the_content', get_the_content() );
		$audio = false;
	
		// Only get audio from the content if a playlist isn't present.
		if ( false === strpos( $content, 'wp-playlist-script' ) ) {
			$audio = get_media_embedded_in_content( $content, array( 'audio' ) );
		}
	
		if ( ! is_single() ) :
	
				// If not a single post, highlight the audio file.
				if ( ! empty( $audio ) ) :
					foreach ( $audio as $audio_html ) {
						echo '<div class="entry-audio embed-responsive embed-responsive-16by9">';
							echo $audio_html;
						echo '</div><!-- .entry-audio -->';
					}
				endif;
	
		endif;
	 }

endif;
add_action( 'sornacommerce_posts_formats_audio', 'sornacommerce_posts_formats_audio' ); 


if ( ! function_exists( 'sornacommerce_posts_formats_gallery' ) ) :

	/**
	 * Post Formats gallery.
	 *
	 * @since 1.0.0
	 */
	function sornacommerce_posts_formats_gallery() {
		if ( get_post_gallery() && ! is_single() ) :
			echo '<div class="entry-gallery">';
				echo get_post_gallery();
			echo '</div>';
		endif;
	 }

endif;
add_action( 'sornacommerce_posts_formats_gallery', 'sornacommerce_posts_formats_gallery' ); 


if ( ! function_exists( 'sornacommerce_posts_formats_header' ) ) :

	/**
	 * Post Formats gallery.
	 *
	 * @since 1.0.0
	 */
	function sornacommerce_posts_formats_header() {
		$formats = get_post_format(get_the_ID());
		
		switch ($formats) {
			default:
				do_action('sornacommerce_posts_formats_thumbnail');
			break;
			case 'gallery':
				do_action('sornacommerce_posts_formats_gallery');
			break;
			case 'audio':
				do_action('sornacommerce_posts_formats_audio');
			break;
			case 'video':
				do_action('sornacommerce_posts_formats_video');
			break;
		
		} 
		
	 }

endif;
add_action( 'sornacommerce_posts_formats_header', 'sornacommerce_posts_formats_header' ); 

remove_shortcode('gallery');
function newsreader_gallery($atts){
	extract( shortcode_atts( array(
		'size' => '',
		'ids' => '',
	), $atts ) );
	$html = '';
	if(!empty($ids)){
		$array = explode( ',' , $ids );
		$html .= '<div class="postGallery  owl-carousel owl-theme">';
		foreach ($array as $id){
			
			$full = wp_get_attachment_image_src( $id, 'full' );
			$html .= '<div class="item">
			<a href="'.$full[0].'" class="image-popup">
			<div class="gallery-image">
				<img src="'.$full[0].'">
			</div>
			</a>
			</div>';
		}
		
		$html .= '</div>';
		
		
	
	}
	return $html;
}
add_shortcode( 'gallery', 'newsreader_gallery' );

function sornacommerce_post_author(){
?>
<section class="section blog">
    <div class="comment">
        <div class="infobox-2">
            <h6><a href="<?php the_author_meta('user_url');?>"><?php the_author_link(); ?></a></h6>
            <p><?php the_author_meta('description'); ?> </p>
            <ul style="padding-left:0px; margi-left:0px;">
                 <?php
                        $rss_url = get_the_author_meta( 'rss_url' );
                        if ( $rss_url && $rss_url != '' ) {
                                echo '<li class="rss"><a href="' . esc_url($rss_url) . '"><i class="fa fa-rss"></i></a></li>';
                        }
                       
                        $google_profile = get_the_author_meta( 'google_profile' );
                        if ( $google_profile && $google_profile != '' ) {
                                echo '<li class="google"><a href="' . esc_url($google_profile) . '" rel="author"><i class="fa fa-google-plus"></i></a></li>';
                        }
                       
                        $twitter_profile = get_the_author_meta( 'twitter_profile' );
                        if ( $twitter_profile && $twitter_profile != '' ) {
                                echo '<li class="twitter"><a href="' . esc_url($twitter_profile) . '"><i class="fa fa-twitter"></i></a></li>';
                        }
                       
                        $facebook_profile = get_the_author_meta( 'facebook_profile' );
                        if ( $facebook_profile && $facebook_profile != '' ) {
                                echo '<li class="facebook"><a href="' . esc_url($facebook_profile) . '"><i class="fa fa-facebook"></i></a></li>';
                        }
                       
                        $linkedin_profile = get_the_author_meta( 'linkedin_profile' );
                        if ( $linkedin_profile && $linkedin_profile != '' ) {
                                echo '<li class="linkedin"><a href="' . esc_url($linkedin_profile) . '"><i class="fa fa-linkedin"></i></a></li>';
                        }
                ?>
            </ul>
        </div>
        <?php echo get_avatar( get_the_author_meta('email'), '160' ); ?>
    </div>
</section>
<?php	
}