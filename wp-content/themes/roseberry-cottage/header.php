<!doctype html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<head>
<meta charset="utf-8">
<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-16x16.png" sizes="16x16" />
<!--[if IE]>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
<![endif]-->
<?php // set /favicon.ico for IE10 win ?>
<meta name="msapplication-TileColor" content="#d3492f">
<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<?php gravity_form_enqueue_scripts(1, true); ?>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="off-canvas-wrap" data-offcanvas>
  <div class="inner-wrap">
  	<a class="right-off-canvas-toggle" href="#">Menu</a>

    <!-- Off Canvas Menu -->
    <aside class="right-off-canvas-menu">
        <!-- whatever you want goes here -->
        <ul>
          <li><a href="#">Item 1</a></li>
        </ul>
    </aside>
<div class="main-section">
	<?php /* <div id="wrapper"> */ ?>
<?php if(is_front_page()): ?>
<?php /* <div id="top-band">Menu</div> */ ?>
<header id="header">

<div class="row main-container">
	<div class="small-12  large-centered large-9 columns">
	<h1 id="home-link"><img src="<?php echo get_template_directory_uri(); ?>/images/roseberry-cottage.svg" onerror="this.onerror=null; this.src='<?php echo get_template_directory_uri(); ?>/images/roseberry-cottage.png'" alt="Roseberry Cottage Boutique Bed &amp; Breakfast" /></h1>
	<h2>An exquisite bed and breakfast retreat in beautiful Yorkshire countryside, close to Harrogate, now open.</h2>
</div>
</div>
</header>
<?php else: ?>
<header id="header">
<a href="<?php echo home_url() ?>" id="home-link"><img src="<?php echo get_template_directory_uri(); ?>/images/roseberry-cottage-wo.svg" onerror="this.onerror=null; this.src='<?php echo get_template_directory_uri(); ?>/images/roseberry-cottage-wo.png'" alt="Roseberry Cottage Boutique Bed &amp; Breakfast" /></a>
</header>
<?php endif ?>
<!-- /header -->