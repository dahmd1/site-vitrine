<?php
function theme_guide(){
add_theme_page( 'Theme guide','Theme documentation','edit_themes', 'theme-documentation', 'fabthemes_theme_guide');
}
add_action('admin_menu', 'theme_guide');

function fabthemes_theme_guide(){ ?>

		
<div id="welcome-panel" class="about-wrap">
<div class="container">

<div class="row">

	<div class="col3 col">
		<img src="<?php echo get_template_directory_uri() ?>/screenshot.png" />
	</div>
	<div class="col34 col">
		<h2>Welcome to <?php echo wp_get_theme(); ?> WordPress theme!</h2>
		<p> <?php echo wp_get_theme(); ?> is a free premium responsive WordPress theme from fabthemes.com. This is an ecommerce theme built specifically to run an ebook store.
		The ecommerce part is managed by the easydigitaldownloads plugin. This is a free plugin that lets you sell digital goods online. This is a responsive theme  built with Bootstrap framework
		, so it is a responsive, mobile friendly theme. The theme also comes with features like custom homepage, featured product slider, Features widgets, custom theme options and metaboxes for products.  </p>
	</div>

</div>

<div class="row">

	<div class="col col1">
		<h3>Required Plugins</h3>
		<p> The theme requires the following plugin to work as advertised.  
			You will find a notification on the admin panel prompting you to install the required plugins. 
			Please install and activate the plugins.  
		</p>
		<ol>
			<li><b> <a href="https://wordpress.org/plugins/easy-digital-downloads/"> Easy Digital Downloads</a> </b>  - Easy Digital Downloads is a complete e-commerce solution for selling digital products in a light, 
				performant, and easy to use plugin. Rather that attempting to provide every feature under the sun, Easy Digital Downloads makes selling digital simple 
				and complete by providing just the features you need.</li>
		</ol>
	</div>

</div>	

<div class="row">

	<div class="col col1">
		<h3>Theme setup</h3>

		<h4>1. Installing theme</h4>
		<p> Download the theme zip file from Fabthemes.com. Open your WordPress admin panel and go to <b> Appearance > Themes</b> . Click <b> Add new </b> and then <b> Upload the theme </b> to your themes directory and activate it.  </p>

		<h4>2. Install plugins</h4>
		<p> After theme activation, you will find a notification that prompts you to install and activate the required plugin listed earlier. 
			Please find detailed instructions on installing and configuring the easydigitaldownloads plugin <a href="http://docs.easydigitaldownloads.com/category/845-getting-started"> here</a>.</p>

		<h4>3. Add ebook product to shop </h4>
		<p> The easydigitaldownloads plugin provides a clear documentation about how to add products to the store. Please check it  <a href="http://docs.easydigitaldownloads.com/article/177-creating-products">here. 
		</a> Along with the default product data, you can also find a metabox area that collects the data specific to the the Book. You can enter details like, Author name, 
		Publisher name, Publish Year, ISBN number, page numbers, Language etc. </p>

		<h4>4. Create a store page </h4>
		<p> To create a store page that lists all your ebooks, just create a page called Store and select the 'Store' template from the template dropdown. </p>

		<h4>5. Create a custom homepage </h4>
		<p> To create a custom homepage, just create a page called Home and select the 'Homepage' template from the template dropdown. Then go to Settings > Reading and 
			under front page display option select static page. Then for Front page option select the the Home page you created earlier.</p>

		<h4>6. Import sample data</h4>
		<p> Sample xml data is available for the theme. You can use it to test run the theme before you post your actual data. </p>

		<h4>7. Saving theme options</h4>
		<p> The theme comes with an options page. You can save the options page with its default values to see how the content is laid out. Then you can customize the options as required for your site.</p>

	</div>

</div>


<div class="row">

	<div class="col col1"> 
		<h3>Theme Options </h3>
		<p> Theme comes with an options panel to customize its settings. </p>
	 </div>
	 <div class="col col1">
	 	<h4> 1. Homepage </h4>
	 	<p> On the homepage you have a carousel for the featured books. You have the option to set the number of items and the category from which to show on the carousel. </p>
	 	<p> You have a call to action section on the homepage just above the footer widgets. Via theme options you can set the call to action text, button and the link from the button.</p>
	 </div>

	 <div class="col col1">
	 	<h4> 2. Features widgets </h4>
	 	<p> On the homepage the theme has 3 features widgets. You will be able to add content to these widgets via the theme options. </p>
	 </div>

	 <div class="col col1">
	 	<h4> 3. Social settings </h4>
	 	<p> You have the option set various social media links and other contact informations like, email, phone, skype etc via theme options. </p>
	 </div>



	 <div class="col col1">
	 	<h4> 4. Custom styling</h4>
	 	<p> Use this options to color customize your theme.</p>
	 </div>

	 <div class="col col1">
	 	<h4> 5. Banner settings </h4>
	 	<p> Use this options to customize the banner ads on the sidebar.</p>
	 </div>

</div>

<div class="row">
	<div class="col col1">
			<?php echo file_get_contents(dirname(__FILE__) . '/FT/license-html.php'); ?>
	</div>
</div>


</div>
</div>



<style media="screen" type="text/css">

	.container{	width: 960px;}
	.row { background: #fff;  margin-bottom: 20px; padding: 20px 0px;}
	.row:before, .row:after {  display: table;  content: " ";}
	.row:after {  clear: both;	}
	.row:before, .row:after {  display: table;  content: " ";}
	.row:after { clear: both; }
	.col{ padding:0px 20px 0px 20px;  position:relative; 	 }
	.col1{ width: 920px;}
	.col2{ width: 440px; float: left;}
	.col3{ width: 280px; float: left;}
	.col34{ width: 600px; float: left;}
	.col h2{ font-weight: 700; font-size: 30px;}
	.col h3{ font-weight: 300; font-size: 24px; margin:0px 0px 20px 0px; background: #333; color:#fff; padding: 10px; }
	.col h4{ font-weight: bold; font-size: 16px; margin:10px 0px;}
	.clear{clear: both;}
	.red{color: red;}
</style>	

<?php }
