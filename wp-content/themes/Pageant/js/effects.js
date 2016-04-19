jQuery(document).ready(function(){


  // Menu
  jQuery("#pageant").tinyNav({
	  	active: 'selected', // String: Set the "active" class
		header: 'Navigation', // String: Specify text for "header" and show header instead of the active item
		indent: '- ', // String: Specify text for indenting sub-items
		label: '' // String: Sets the <label> text for the <select> (if not set, no label will be added)
  });

// Slider
 	jQuery("#book-slider").owlCarousel({
	 	items : 6,
	    itemsCustom : false,
	    itemsDesktop : [1199,6],
	    itemsDesktopSmall : [980,4],
	    itemsTablet: [768,2],
	    itemsTabletSmall: false,
	    itemsMobile : [479,2],
	    singleItem : false,
	    itemsScaleUp : false,
	    pagination : true,
	    navigation : false,
 	});

// Media Query
	enquire.register("screen and (max-width:768px)", {
		 match : function() {
		 		jQuery('.site-main .col-xs-6:nth-child(2n)').after('<div class="clear visible-xs"></div>');
		 }
	});


});

