<?php /* Template Name: Room Single */ ?>
<?php get_header() ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php
	list($src,$w,$h) = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'banner-image'); ?>
	<section class="bg-image-break centered-text slideshow">
		<?php
		if(get_field('slides_rptr')):
			while(the_repeater_field('slides_rptr')): 
				list($src,$w,$h) = wp_get_attachment_image_src(get_sub_field('slide_image'),'banner-image');
			?>
		<span class="slide outer-wrapper" data-image="<?php echo $src ?>"></span>
	<?php endwhile; ?>
<?php endif ?>
</section>
<section class="offset-section centered-text">
	<div class="row main-container">
		<div class="small-12 medium-10 medium-centered xlarge-9 columns">
			<div class="section first">
				<?php $title = explode(' ',get_the_title()); ?>
			<h1 class="mid-line-hd"><span class="wrap"><span class="top"><?php echo $title[0] ?></span><span class="bottom"><?php echo $title[1] ?></span></span></h1>
<?php the_content() ?>
</div>
</div>
	<?php get_template_part('partials/content','featured-links' ); ?>
			<footer class="section-footer"><h2><?php echo get_field('ob_heading') ?></h2><a href="<?php echo get_field('ob_button_link') ?>" title="<?php echo get_field('ob_button_label') ?>" class="button-outline-white"><?php echo get_field('ob_button_label') ?></a></footer>
<div class="row collapse">
	<div class="small-10 small-centered columns">
<section id="rates" class="section mid divide">
<h3>Tariffs</h3>
<div class="row">
<?php
if(get_field('rate')):
	$rows = count( get_field('rate') );
while(the_repeater_field('rate')): 
?>
<div class="tinted-block small-12<?php if($rows==1): ?> large-6 large-centered<?php else: ?> large-6<?php endif ?> columns"><div class="inner"><h4><?php echo get_sub_field('rate_title') ?></h4><span class="price">&pound;<?php echo get_sub_field('rate_price') ?></span><small><?php echo get_sub_field('rate_text') ?></small></div></div>
<?php endwhile ?>
<?php endif ?>

</div>
<p><small><?php echo get_field('disclaimer') ?></small></p>
</section>
<section id="availability" class="section divide">
	<h3>Availability</h3>
	<div id="datepicker"></div>
	<div class="key"><span class="avail">Available</span><span class="unavail">Unavailable</span></div>
	</section>
	<section id="booking-request" class="section">
	<h3>Booking Request</h3>
	<p>You can request a booking by completing the form below. We can call you back to confirm your booking requirements and take a valid debit or credit card.  Upon booking we will take a £30 deposit.<br />Alternatively please call us directly on <a href="tel:+44 (0)1423 772926">+44 (0)1423 772926</a> to make your reservation.</p>
	<?php
//(id, display title, display desc, display inactive, field values, ajax, tab index)
gravity_form(2, false, false, false, '', true, 1);
?>
	</section>
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
