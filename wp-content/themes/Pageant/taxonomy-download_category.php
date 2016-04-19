<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package fabthemes
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>

<div class="sub-header">
	<div class="container">
		<div class="row">
			<header class="page-header col-md-12">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->			
		</div>
	</div>
</div>

<div class="container"> <div class="row"> 
	<div class="col-md-8">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="row">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="col-md-4 col-xs-6">
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
				<?php endwhile; ?>
			</div>

			<?php fabthemes_pagination(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	</div>

<?php get_sidebar(); ?>
</div></div>
<?php get_footer(); ?>
