<?php 
  $terms = wp_get_object_terms($post->ID, 'download_category', array('orderby' => 'name', 'order' => 'ASC'));
  if(is_array($terms)) :
    if(isset($terms[0])) : ?>
  <div class="related-boox">
    <h2>You may also like</h2>
    <?php 
    $args = array(
    'post__not_in' => array($post->ID),
    'post_type' => 'download',
    'posts_per_page'=> 4,
    'tax_query' => array(
     array(
    'taxonomy' => 'download_category',
    'field' => 'slug',
    'terms' => $terms[0]->name
    )));
    $related_posts =	get_posts( $args );
 
    if($related_posts) : ?>
    <ul class="row">
      <?php foreach($related_posts as $related_post) : ?>
        <li class="col-sm-3 col-xs-6">
            <?php 
            $thumb = get_post_thumbnail_id($related_post->ID);
            $img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
            $image = aq_resize( $img_url, 400, 600, true,true,true ); //resize & crop the image
            ?>
            <?php if($image) : ?>
              <a href="<?php the_permalink(); ?>"><img class="blunt" src="<?php echo $image ?>" alt="" /></a>
            <?php endif; ?>         

            <h3><a href="<?php echo get_permalink($related_post->ID); ?>"><?php echo $related_post->post_title; ?></a> </h3>
                <span class="price"> <?php 
                  if(edd_has_variable_prices($related_post->ID)) {
                    // if the download has variable prices, show the first one as a starting price
                    echo '<small>From:</small> '; echo edd_price($related_post->ID);
                  } else {
                    edd_price($related_post->ID); 
                  }
                ?></span>
        </li>
	    <?php endforeach; ?>
	  </ul>
	</div>
  	<?php else: ?>
      <li>No other products.</li>
    <?php endif; ?>
   <?php endif; ?>
<?php endif; ?>
