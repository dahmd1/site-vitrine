<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package fabthemes
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<div class="row">

		<div class="col-md-6">
			<div class="single-dload-image">

				<?php 
				$thumb = get_post_thumbnail_id();
				$img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
				$image = aq_resize( $img_url, 400, 600, true,true,true ); //resize & crop the image
				?>
				<?php if($image) : ?>
					<img class="blunt" src="<?php echo $image ?>" alt="" />
				<?php endif; ?>
			</div>
		</div>

		<div class="col-md-6">

			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->

			<div class="purchase-block">
				<div style="margin-top:10px;">
					<?php if (function_exists('cgd_eer_edd_print_rating')) { cgd_eer_edd_print_rating(); comments_number( '', '( One review )', '( % Customer reviews )' ); } ?> 
				</div>
				<span class="price-tag"> <?php echo centinel_edd_the_price($post->ID);?> </span> 

				<div class="book-specs">
					<h3> <?php _e('Specifications','fabthemes' ); ?> </h3>
				
					 	<span> <b>Author:</b> <?php the_field('book_author'); ?> </span>
						<span> <b>Publisher:</b> <?php the_field('book_publisher'); ?> </span>
						<span> <b>Year:</b> <?php the_field('book_year'); ?> </span>
						<span> <b>ISBN:</b> <?php the_field('book_isbn'); ?> </span>
						<span> <b>Pages:</b> <?php the_field('book_pages'); ?> </span>
						<span> <b>Language:</b> <?php the_field('book_language'); ?> </span>
				</div>
			
				<div class="product-tax"> 
					<span><?php echo get_the_term_list( $post->ID, 'download_tag', 'Tags: ', ', ', '' ) ?> </span>
					<span><?php echo get_the_term_list( $post->ID, 'download_category', 'Categories: ', ', ', '' ) ?></span>
				</div>

				<?php do_action( 'custom_single_purchase', $post->ID ); ?>
				
			</div>

		</div>
	</div> <!-- row end -->

	<div class="entry-content">

		<h2 class="description-title"> <?php _e('Description','fabthemes'); ?> </h2>

		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fabthemes' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php fabthemes_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	<?php get_template_part( 'template-parts/related-downloads'); ?>
</article><!-- #post-## -->

