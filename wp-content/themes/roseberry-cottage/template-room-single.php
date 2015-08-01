<?php /* Template Name: Room Single */ ?>
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
			<header class="section intro<?php if(empty($intro)):?> no-intro-text<?php endif ?>">
			<h1 class="underline-hd"><?php the_title() ?></h1>
<h2><?php echo $intro_heading ?></h2>
<?php
if(!empty($intro)):
echo $intro;
endif;
?>
</header>
</div>
	<?php get_template_part('partials/content','featured-links' ); ?>
			<footer class="section-footer"><h2><?php echo get_field('ob_heading') ?></h2><a href="<?php echo get_field('ob_button_link') ?>" title="<?php echo get_field('ob_button_label') ?>" class="button-outline-white"><?php echo get_field('ob_button_label') ?></a></footer>
<div class="row collapse">
	<div class="xsmall-11 xsmall-centered small-10 small-centered columns">
<?php get_template_part('partials/content','tariffs' ); ?>
<section id="availability" class="section divide">
	<h3>Availability</h3>
	<div id="datepicker"></div>
	<div class="key"><span class="avail">Available</span><span class="unavail">Unavailable</span></div>
	</section>
	<?php get_template_part('partials/content','booking-form' ); ?>
	<?php get_template_part('partials/content','social-nav' ); ?>
</div>
</div>
	</div>

</section>

<main>
<?php get_footer() ?> 
</div>
<?php /* <div id="bg-image" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/house-exterior.jpg');"></div> */ ?>

</main>
<?php endwhile ?>
<?php endif ?>
