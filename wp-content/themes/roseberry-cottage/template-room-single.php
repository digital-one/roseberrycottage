<?php /* Template Name: Room Single */ ?>
<?php get_header() ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php
	list($src,$w,$h) = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'banner-image'); ?>
	<section class="bg-image-break centered-text">
		<span class="slide outer-wrapper" data-image="<?php echo $src ?>">



		</span>
</section>
<section class="offset-section centered-text">
	<div class="row main-container">
		<div class="small-12 medium-10 medium-centered large-8 columns">
			<div class="section first">
				<?php $title = explode(' ',get_the_title()); ?>
			<h1 class="mid-line-hd"><span class="wrap"><span class="top"><?php echo $title[0] ?></span><span class="bottom"><?php echo $title[1] ?></span></span></h1>
<?php the_content() ?>
</div>


</div>
	<div class="grid row collapse">
		<?php
			list($feature_img_1,$w,$h) = wp_get_attachment_image_src(get_field('feature_image_1'),'double-square-image');
			list($feature_img_2,$w,$h) = wp_get_attachment_image_src(get_field('feature_image_2_1'),'square-image');	
			list($feature_img_3,$w,$h) = wp_get_attachment_image_src(get_field('feature_image_2_2'),'square-image');	
			?>
					<!--block-->
			<div class="xsmall-12 medium-6 xlarge-8 columns"><div class="double box"><div class="inner-wrapper" style="background-image:url('<?php echo $feature_img_1 ?>');"></div></div></div>
			<!--/block-->
				<!--block-->
			<div class="xsmall-12 medium-6 xlarge-4 columns">
				<div class="box text">
					<?php /*
					<a href="" class="inner-wrapper box-button">
						<div class="v-center">
							<h3><span class="wrap"><?php echo get_field('feature_title_1') ?></h3><p><?php echo get_field('feature_text_1') ?></p><footer><span class="more">VIEW GALLERY</span></footer>
						</div></a>
						*/ ?>
						<div class="inner-wrapper">
						<div class="v-center">
							<h3><span class="wrap"><?php echo get_field('feature_title_1') ?></h3><p><?php echo get_field('feature_text_1') ?></p>
						</div></div>

					</div></div>
					<!--/block-->
		
					<!-- block -->
					<div class="xsmall-12 medium-6 xlarge-4 show-for-xlarge-up hide-for-xsmall-only columns">
				<div class="box">
					<div class="inner-wrapper block-link" style="background-image:url('<?php echo $feature_img_2 ?>');">
						</div>
					</div></div>
					<!--/block-->
					
					<!-- block -->
					<div class="small-12 medium-6 medium-push-6 xlarge-4 xlarge-push-4 columns">
				<div class="box">
					<div class="inner-wrapper"  style="background-image:url('<?php echo $feature_img_3 ?>');">
						</div>
					</div></div>
					<!-- /block -->
					<!-- block -->
					<div class="xsmall-12 medium-6 medium-pull-6 xlarge-4 xlarge-pull-4 columns">
				<div class="box text">
					<?php /*
					<a href="" class="inner-wrapper box-button">
						<div class="v-center">
							<h3><?php echo get_field('feature_title_2')?></h3><p><?php echo get_field('feature_text_2')?>
</p><footer><span class="more">MORE</span></footer>
						</div></a> */ ?>

						<div class="inner-wrapper">
						<div class="v-center">
							<h3><?php echo get_field('feature_title_2')?></h3><p><?php echo get_field('feature_text_2')?>
</p>
						</div></div>


					</div></div>
					<!-- /block -->
					
			</div>
			<footer class="section-footer"><h2>Book with us during May or June and enjoy 10% discount off your stay</h2><a href="" class="button-outline-white">Check Availability</a></footer>
<div class="row collapse">
	<div class="small-10 small-centered columns">
<section id="rates" class="section mid divide">
<h3>Rates</h3>
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
