<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 Template name: Store
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package fabthemes
 */

get_header(); ?>

<div class="sub-header">
	<div class="container">
		<div class="row">
			<header class="page-header col-md-12">
				<h2 class="page-title"> <?php the_title(); ?> </h2>
			</header><!-- .page-header -->			
		</div>
	</div>
</div>

<div class="container"> <div class="row"> 
	<div class="col-md-12"> 
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="row">
			<?php
						
			if ( get_query_var('paged') )
			    $paged = get_query_var('paged');
			elseif ( get_query_var('page') )
			    $paged = get_query_var('page');
			else
			    $paged = 1;
			$wp_query = new WP_Query(array('post_type' => 'download', 'paged' => $paged ));
			?>
			<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

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

			<?php endwhile; // End of the loop. ?>
			<div class="col-md-12">
				<?php fabthemes_pagination(); ?>
			</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div>

</div></div>
<?php get_footer(); ?>
