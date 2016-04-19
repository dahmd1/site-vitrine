<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package fabthemes
 */

get_header(); ?>
<div class="sub-header">
	<div class="container">
		<div class="row">
			<header class="page-header col-md-12">
				<h1 class="page-title"> <?php _e('Shop', 'fabthemes'); ?> </h1>
			</header><!-- .page-header -->			
		</div>
	</div>
</div>

<div class="container"> <div class="row"> 
	<div class="col-md-8"> 
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content-single', 'download' ); ?>
  
				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div>

<?php get_sidebar(); ?>
</div></div>
<?php get_footer(); ?>
