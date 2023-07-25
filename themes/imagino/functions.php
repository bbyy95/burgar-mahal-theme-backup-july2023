<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'Left Sidebar',
        'before_widget' => '<li>',
		
        'after_widget' => '</li>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'Right Sidebar',
        'before_widget' => '<li>',
        'after_widget' => '</li>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));

if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'Footer Widget',
        'before_widget' => '<div class="col-md-4">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'CTA Widget',
        'before_widget' => '<div class="col-md-12">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size('my_thumb',190,140,true);
	 // to call this thumbnail, put this in template:-> the_post_thumbnail('my_thumb'); 
	

	// This theme uses wp_nav_menu() in one location.  
	register_nav_menus( array('my_nav' => __( 'Primary Navigation', 'dz theme' ),
	'secondary' => __('Secondary Navigation', 'dz theme') 
	));

	//Admin Deceration Start //
	
	function custom_loginpage_logo_link($url)
	{
     // Return a url; in this case the homepage url of wordpress
     return get_bloginfo('wpurl').'/';
	}
	function custom_loginpage_logo_title($message)
	{
		 // Return title text for the logo to replace 'wordpress'; in this case, the blog name.
		 return get_bloginfo('name');
	}
	function custom_loginpage_head()
	{
		 /* Add a stylesheet to the login page; add your styling in here, for example to change the logo use something like:
		 #login h1 a {
			  background:url(images/logo.jpg) no-repeat top;
		 }
		 */
		 $stylesheet_uri = get_bloginfo('template_url')."/css/login.css";
		 echo '<link rel="stylesheet" href="'.$stylesheet_uri.'" type="text/css" media="screen" />';
	}
	// Hook in
	add_filter("login_headerurl","custom_loginpage_logo_link");
	add_filter("login_headertitle","custom_loginpage_logo_title");
	add_action("login_head","custom_loginpage_head");
	
	//Admin Deceration End //

	function cc_mime_types($mimes) 
	{ 
		$mimes['svg'] = 'image/svg+xml'; return $mimes; 
	} 
	add_filter('upload_mimes', 'cc_mime_types');
	function fix_svg_thumb_display() 
	{ 
		// echo ' td.media-icon img[src$=".svg"], img[src$=".svg"].attachment-post-thumbnail { width: 100% !important; height: auto !important; } '; 
	} 
	add_action('admin_head', 'fix_svg_thumb_display');
	

?>