<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 Template name: Homepage
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package fabthemes
 */

get_header(); ?>

<div id="featured-books">
	<div class="container"> <div class="row"> 
		<div id="book-slider" class="owl-carousel">

			<?php
			$latestBookscount = ft_of_get_option('fabthemes_slidecount',''); 	
			$latestBookscat = ft_of_get_option('fabthemes_slide_cat',''); 	
			$args = array( 
				'posts_per_page' => $latestBookscount, 
				'post_type' => 'download',
				'tax_query'      => array(
					
					array(
						'taxonomy' => 'download_category',
						'field'    => 'id',
						'terms'    => $latestBookscat,
					))
				);
			$mybooks = get_posts( $args );
			foreach ( $mybooks as $post ) : setup_postdata( $post ); ?>
			<div class="slidebox">
						<?php 
						$thumb = get_post_thumbnail_id();
						$img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
						$image = aq_resize( $img_url, 400, 600, true,true,true ); //resize & crop the image
						?>
						<?php if($image) : ?>
							<a href="<?php the_permalink(); ?>"><img class="blunt" src="<?php echo $image ?>" alt="<?php the_title(); ?>" /></a>
						<?php endif; ?>
			</div>
			<?php endforeach; 
			wp_reset_postdata();?>
		</div>
	</div></div>
</div>



<div id="features-section">
	<div class="container"> <div class="row">

		<div class="col-md-4">
			<div class="feature-box">
				<h2> <?php echo ft_of_get_option('fabthemes_ftitle1','Feature');?></h2>
				<p>  <?php echo ft_of_get_option('fabthemes_ftext1','This is a sample text for the features');?> </p>
			</div>
		</div>

		<div class="col-md-4">
			<div class="feature-box">
				<h2> <?php echo ft_of_get_option('fabthemes_ftitle2','Feature');?></h2>
				<p>  <?php echo ft_of_get_option('fabthemes_ftext2','This is a sample text for the features');?> </p>
			</div>			
		</div>

		<div class="col-md-4">
			<div class="feature-box">
				<h2> <?php echo ft_of_get_option('fabthemes_ftitle3','Feature');?></h2>
				<p>  <?php echo ft_of_get_option('fabthemes_ftext3','This is a sample text for the features');?> </p>
			</div>			
		</div>

	</div></div>
</div>





<div class="container"> <div class="row"> 
	<div class="col-md-12">
		<div class="home-section site-main">
			<h2 class="section-title"> 
				<?php _e('Latest Books','fabthemes'); ?>
				<span> <?php _e('Recently added books to the store','fabthemes'); ?></span>
			</h2>
			
		<div class="row">
			<?php
			$latestBookscount = 8; 		
			$args = array( 'posts_per_page' => $latestBookscount, 'post_type' => 'download');
			$mybooks = get_posts( $args );
			foreach ( $mybooks as $post ) : setup_postdata( $post ); ?>
			<div class=" col-md-3 col-sm-4 col-xs-6 ">
				<div class="book-box">
					<div class="fcover-box">
						<?php 
						$thumb = get_post_thumbnail_id();
						$img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
						$image = aq_resize( $img_url, 400, 600, true,true,true ); //resize & crop the image
						?>
						<?php if($image) : ?>
							<a href="<?php the_permalink(); ?>"><img class="blunt" src="<?php echo $image ?>" alt="<?php the_title(); ?>" /></a>
						<?php endif; ?>
					</div>
					<div class="book-box-entry">
					
							<h2> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
							<div class="product-box-footer clearfix"> 
								<span class="price"> <?php 
									if(edd_has_variable_prices(get_the_ID())) {
										// if the download has variable prices, show the first one as a starting price
										echo '<small>From:</small> '; echo edd_price(get_the_ID());
									} else {
										edd_price(get_the_ID()); 
									}
								?></span>
							
							</div>
							
					</div>
		
				</div>
			</div>
			<?php endforeach; 
			wp_reset_postdata();?>

		</div>			
			
		</div>
	</div>
</div></div>

<?php $cta_img = ft_of_get_option('fabthemes_ctabg',''); ?> 
<div id="cta-section" style="background:#222 url(<?php echo $cta_img ?>) fixed center no-repeat; background-size: cover; ">
	<div class="container"> <div class="row"> <div class="col-md-12">
		<div class="cta-box">

			<p> <?php echo ft_of_get_option('fabthemes_ctatext','');?> </p>
			<a href="<?php echo ft_of_get_option('fabthemes_ctalink','');?>"><?php echo ft_of_get_option('fabthemes_ctabutton','');?></a>
		</div>
	</div></div></div>
</div>

<div class="container"> <div class="row">
	<div class="col-md-12">
		<div class="home-section">
			<h2 class="section-title"> 
				<?php _e('Latest Articles','fabthemes'); ?>
				<span> <?php _e('Most recent articles from the blog','fabthemes'); ?></span>
			</h2>

			<div class="row">

			<?php
			$latestBookscount = 3; 		
			$args = array( 'posts_per_page' => $latestBookscount);
			$mybooks = get_posts( $args );
			foreach ( $mybooks as $post ) : setup_postdata( $post ); ?>
			<div class="col-md-4 col-sm-6 ">
				<div class="post-box">
					<div class="fpic-box">
						<?php 
						$thumb = get_post_thumbnail_id();
						$img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
						$image = aq_resize( $img_url, 760, 360, true,true,true ); //resize & crop the image
						?>
						<?php if($image) : ?>
							<a href="<?php the_permalink(); ?>"><img class="blunt" src="<?php echo $image ?>" alt="<?php the_title(); ?>" /></a>
						<?php endif; ?>
					</div>
					<div class="post-box-entry">
							<h2> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
							<div class="post-box-meta"> <?php _e('Posted under','centinel') ?>  <?php the_category(', '); ?> </div>
							<p> <?php echo excerpt(25); ?> </p>

					</div>
				</div>
			</div>
			<?php endforeach; 
			wp_reset_postdata();?>		

			</div>
		</div>
	</div>
</div></div>

<?php get_footer(); ?>