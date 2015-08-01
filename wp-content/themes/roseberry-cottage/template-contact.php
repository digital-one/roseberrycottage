<?php /* Template Name: Contact */ ?>
<?php get_header() ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<?php get_template_part('partials/content','slideshow' ); ?>
<?php
	$intro_heading =  get_field('intro_heading');
	$intro = get_field('intro');
	$no_intro = false;
	if(empty($intro) and empty($intro_heading)) $no_intro = true;
	$section_class  = $no_intro ? ' no-intro' : '';
?>
<section class="offset-section<?php echo $section_class ?> centered-text">
	<div class="row main-container">
		<div class="small-12 medium-11 medium-centered xlarge-11 xxlarge-10 columns">
			<header class="section divide intro<?php if(empty($intro)):?> no-intro-text<?php endif ?>">
			<h1 class="underline-hd"><?php the_title() ?></h1>
<h2><?php echo $intro_heading ?></h2>
<?php
if(!empty($intro)):
echo $intro;
endif;
?>
</header>
<section class="section divide text-left">
<div class="row">
<aside class="address small-12 medium-4 columns"><h5><?php echo get_option('address_title') ?></h5>
<p><?php echo get_option('address_line_1') ?><br />
<?php echo get_option('address_line_2') ?><br />
<?php echo get_option('address_line_3') ?><br />
<?php echo get_option('address_postcode') ?></p><p>
<a href="tel:<?php echo get_option('telephone') ?>"><?php echo get_option('telephone') ?></a><br />
<a href="mailto:<?php echo get_option('email') ?>"><?php echo get_option('email') ?></a></p></aside>
<div class="small-12 medium-8 columns right-col">
<?php get_template_part('partials/content','sections' ); ?>





</div>
</div>
</section>
<?php get_template_part('partials/content','booking-form' ); ?>



	<?php get_template_part('partials/content','social-nav' ); ?>

	</div>

</section>

<main>
<?php get_footer() ?> 
</div>
<?php /* <div id="bg-image" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/house-exterior.jpg');"></div> */ ?>

</main>
<?php endwhile ?>
<?php endif ?>
