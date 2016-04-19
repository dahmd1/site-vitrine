<?php
function FT_OP_update()
{
	$settings = get_option('ft_op');
	$settings['id'] = 'ft_' . FT_scope::tool()->optionsName;
	update_option('ft_op', $settings);
}

function FT_OP_options()
{
	
	// Test data
	$test_array = array("1" => "Tutorials","2" => "Posts");
	
	// Multicheck Array
	$multicheck_array = array("one" => "French Toast", "two" => "Pancake", "three" => "Omelette", "four" => "Crepe", "five" => "Waffle");
	
	// Multicheck Defaults
	$multicheck_defaults = array("one" => "1","five" => "1");
	
	// Background Defaults
	
	$background_defaults = array('color' => '', 'image' => '', 'repeat' => 'repeat','position' => 'top center','attachment'=>'scroll');
	
	
	// Pull all the categories into an array
	$options_categories = array();  
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
    	$options_categories[$category->cat_ID] = $category->cat_name;
	}
	
	// Pull all the pages into an array
	$options_pages = array();  
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
    	$options_pages[$page->ID] = $page->post_title;
	}
	
		// Pull all the pages into an array
	$options_slider = array();  
	$options_slider_obj = get_posts('post_type=custom_slider');
	$options_slider[''] = 'Select a slider:';
	foreach ($options_slider_obj as $post) {
    	$options_slider[$post->ID] = $post->post_title;
	}

   $options_group = array();
    $options_group_obj = get_terms('download_category','hide_empty=0');
    foreach ($options_group_obj as $group) {
        $options_group[$group->term_id] = $group->name;
    }

		
	// If using image radio buttons, define a directory path
	$imagepath =  get_bloginfo('stylesheet_directory') . '/img/';
		
	$options = array();
	
	
																	
	
	$options[] = array( "name" => "Homepage",
						"type" => "heading");	
						
	$options[] = array( "name" => "Number of books on slider",
						"desc" => "Enter number of books on slideshow.",
						"id" => "fabthemes_slidecount",
						"std" => "5",
						"type" => "text");		

	$options[] = array( "name" => "Featured books category",
						"desc" => "Select a category for the featured books slider",
						"id"   => "fabthemes_slide_cat",
						"type" => "select",
						"options" => $options_group);		

	$options[] = array( "name" => "Call to action text",
						"desc" => "Enter the text for Call to Action section.",
						"id" => "fabthemes_ctatext",
						"std" => "",
						"type" => "textarea");	

	$options[] = array( "name" => "Call to action button",
						"desc" => "Enter the text for Call to Action button.",
						"id" => "fabthemes_ctabutton",
						"std" => "",
						"type" => "text");	

	$options[] = array( "name" => "Call to action link",
						"desc" => "Enter the link for Call to Action section.",
						"id" => "fabthemes_ctalink",
						"std" => "",
						"type" => "text");	

	$options[] = array( "name" => "Call to action background",
						"desc" => "Background image for Call to Action section.",
						"id" => "fabthemes_ctabg",
						"std" => $imagepath."head.jpg" ,
						"type" => "upload");


	$options[] = array( "name" => "Features",
						"type" => "heading");	


	$options[] = array( "name" => "Feature-1 Title",
						"desc" => "",
						"id" => "fabthemes_ftitle1",
						"std" => "",
						"type" => "text");	

	$options[] = array( "name" => "Feature-1 text",
						"desc" => "",
						"id" => "fabthemes_ftext1",
						"std" => "",
						"type" => "textarea");	

	$options[] = array( "name" => "Feature-2 Title",
						"desc" => "",
						"id" => "fabthemes_ftitle2",
						"std" => "",
						"type" => "text");	

	$options[] = array( "name" => "Feature-2 text",
						"desc" => "",
						"id" => "fabthemes_ftext2",
						"std" => "",
						"type" => "textarea");	


	$options[] = array( "name" => "Feature-3 Title",
						"desc" => "",
						"id" => "fabthemes_ftitle3",
						"std" => "",
						"type" => "text");	

	$options[] = array( "name" => "Feature-3 text",
						"desc" => "",
						"id" => "fabthemes_ftext3",
						"std" => "",
						"type" => "textarea");	




	$options[] = array( "name" => "Social settings",
						"type" => "heading");		
						
	$options[] = array( "name" => "Email",
						"desc" => "Email ID.",
						"id" => "fabthemes_email",
						"std" => "",
						"type" => "text");		

	$options[] = array( "name" => "Phone",
						"desc" => "Phone number.",
						"id" => "fabthemes_phone",
						"std" => "",
						"type" => "text");		

	$options[] = array( "name" => "Skype",
						"desc" => "Skype ID.",
						"id" => "fabthemes_skype",
						"std" => "",
						"type" => "text");	



	$options[] = array( "name" => "Style Settings",
						"type" => "heading");		


	$options[] = array( "name" => "Main Color scheme",
						"desc" => "Theme main color",
						"id" => "fabthemes_primary_color",
						"std" => "",
						"type" => "color");
						

	$options[] = array( "name" => "Accent color",
						"desc" => "Secondary accent color",
						"id" => "fabthemes_secondary_color",
						"std" => "",
						"type" => "color");						
						
					
	$options[] = array( "name" => "Link color",
						"desc" => "Link color",
						"id" => "fabthemes_link_color",
						"std" => "",
						"type" => "color");		
									
	$options[] = array( "name" => "Link hover color",
						"desc" => "Link color on hover",
						"id" => "fabthemes_hover_color",
						"std" => "",
						"type" => "color");							
						
					

	if (file_exists(dirname(__FILE__) . '/FT/options/banners.php'))
			include ('FT/options/banners.php');

	if (file_exists(dirname(__FILE__) . '/FT/options/colors.php'))
			include ('FT/options/colors.php');

	if (file_exists(dirname(__FILE__) . '/FT/options/common.php'))
			include ('FT/options/common.php');

	return $options;
}