<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="First Indian Burger Restaurant,DIH Group,dasindischehaus" />
<meta name="description" content="feat. Burger Mahal – Curry & Burger Traditionelle indische Küche trifft auf New modern Indian cuisine">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?>  <?php wp_title(); ?></title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
<meta name="author" content="Imagino Solutions">
<meta name="Description" CONTENT="Author: www.imaginosolutions.com">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700&display=swap" rel="stylesheet">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!--[if IE 6]>
<link href="<?php bloginfo('template_directory')?>/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if IE 6]>
<script src="<?php bloginfo('template_directory')?>/jq/DD_belatedPNG.js"></script>
<script>
DD_belatedPNG.fix('.side_list');
</script>
<![endif]--> 
<script src="<?php bloginfo('template_directory')?>/jq/css_browser_selector.js" type="text/javascript"></script>
<?php wp_head(); ?>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/asset/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/asset/css/style.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/asset/js/slick/slick.css">
</head>
<body <?php body_class( ); ?>>


<section class="header <?php if ( is_front_page() ) {  ?> black <?php } else { ?> brown <?php } ?>">
  <div class="container-fluid">
    <div class="container">
    <div class="py-3">
      <div class="row align-items-center">

        <div class="logo col-lg-2">
          <a href="<?php echo get_option('home'); ?>">
          <img src="<?php echo get_option_tree('logo'); ?>" width="200" class="logo-image d-block" alt="Das Indische Haus">
          </a>
        </div>

        <div class="header-menu col-lg-10 col-xs-10">
          <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler test" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'my_nav' ) ); ?>
            </div>
          </nav>
        </div>

      </div>
    </div>
  </div>
  </div>
</div>
</section>


<div id="page">


