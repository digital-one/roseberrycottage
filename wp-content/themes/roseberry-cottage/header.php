<!doctype html>
<!--[if IE ]><html <?php language_attributes(); ?> class="no-js ie"><![endif]-->
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js ie lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js ie lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js ie lt-ie9"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js ie lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html <?php language_attributes(); ?> class="no-js ie"><!--<![endif]-->
<head>
<meta charset="utf-8">
<title><?php wp_title() ?></title>
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon-16x16.png" sizes="16x16" />
<!--[if IE]>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
<![endif]-->
<?php // set /favicon.ico for IE10 win ?>
<meta name="msapplication-TileColor" content="#d3492f">
<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<?php gravity_form_enqueue_scripts(1, true); ?>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php
if(get_field('gallery_images_rptr',406)):
?>
<div id="gallery" style="display:none;">
<?php
while(the_repeater_field('gallery_images_rptr',406)): 
list($src,$w,$h) = wp_get_attachment_image_src(get_sub_field('gallery_image'), 'gallery-image');
list($src_tn,$w,$h) = wp_get_attachment_image_src(get_sub_field('gallery_image'), 'thumbnail');
?>
<a class="fancybox" rel="gallery" href="<?php echo $src ?>" title="<?php echo get_sub_field('gallery_image_caption') ?>"><img src="<?php echo $src_tn ?>" /></a>
<?php
endwhile;
?>
</div>
<?php endif ?>
  <div class="slider"></div>
<div class="wrapper">
<div id="top-band"> <a class="right-off-canvas-toggle" href="#">Menu</a></div>
<aside id="off-canvas">
  <div class="scroll">
<nav>
<?php wp_nav_menu( array(
    'theme_location' => 'main-menu',
    'menu_id'=> 'main-menu',
    'container' => '',
    'container_class' => ''//,
    //'walker' => new navWalker()
    ));
     ?>
</nav>
<address>
<p>
  <?php echo get_option('address_title') ?><br />
<?php echo get_option('address_line_1') ?><br />
<?php echo get_option('address_line_2') ?><br />
<?php echo get_option('address_line_3') ?><br />
<?php echo get_option('address_postcode') ?>
</p>
<p>
<a href="tel:<?php echo get_option('telephone') ?>"><?php echo get_option('telephone') ?></a><br />
<a href="mailto:<?php echo get_option('email') ?>"><?php echo get_option('email') ?></a></p>
</address>
</div>
</aside>
	<?php /* <div id="wrapper"> */ ?>
<?php if(is_front_page()): ?>
<?php /* <div id="top-band">Menu</div> */ ?>

<header id="header">

<div class="row main-container">
	<div class="small-12  large-centered large-9 columns">
	<h1 id="home-link"><img src="<?php echo get_template_directory_uri(); ?>/images/roseberry-cottage.svg" onerror="this.onerror=null; this.src='<?php echo get_template_directory_uri(); ?>/images/roseberry-cottage.png'" alt="Roseberry Cottage Boutique Bed &amp; Breakfast" /></h1>
	<h2><?php echo get_field('intro_heading',2) ?></h2>
</div>
</div>
</header>
<?php else: ?>
<header id="header">
   
<a href="<?php echo home_url() ?>" id="home-link"><img src="<?php echo get_template_directory_uri(); ?>/images/roseberry-cottage.svg" onerror="this.onerror=null; this.src='<?php echo get_template_directory_uri(); ?>/images/roseberry-cottage.png'" alt="Roseberry Cottage Boutique Bed &amp; Breakfast" /></a>
</header>
<?php endif ?>
<!-- /header -->