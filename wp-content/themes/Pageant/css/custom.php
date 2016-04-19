<?php
	header("Content-type: text/css;");
	
	if( file_exists('../../../../wp-load.php') ) :
		include '../../../../wp-load.php';
	else:
		include '../../../../../wp-load.php';
	endif;
?>

<?php
	// Styles	
	$primary 	= ft_of_get_option('fabthemes_primary_color','#769A38');
	$secondary	= ft_of_get_option('fabthemes_secondary_color','');
	$link 		= ft_of_get_option('fabthemes_link_color','');
	$hover 		= ft_of_get_option('fabthemes_hover_color','');
	
?>

#featured-books, 
.sub-header,
.purchase-block .custom-purchase-submit,
#comments ol.comment-list li .reply a,
#comments #respond #commentform input#submit,
#cta-section .cta-box a{
	background: <?php echo $primary ?>;
}
.top-menu ul.top-right li a:link, .top-menu ul.top-right li a:visited,
.purchase-block span.price-tag,
.main-navigation ul li.current_page_item a,
.main-navigation ul li a:hover{
	color:<?php echo $primary ?>;
}

#footer-widgets{
	background: <?php echo $secondary ?>;	
}
/* Links */

a:link, a:visited {
	color: <?php echo $link ?>;
}

a:hover,
a:focus,
a:active {
	color:<?php echo $hover ?>;
	text-decoration: none;
}


