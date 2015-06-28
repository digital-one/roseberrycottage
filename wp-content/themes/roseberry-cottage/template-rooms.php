<?php /* Template Name: Rooms */ ?>
<?php get_header() ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php	list($src,$w,$h) = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'banner-image'); ?>
	<section class="bg-image-break centered-text slideshow">
		<span class="slide outer-wrapper"  data-parallax="scroll" data-image="<?php echo $src ?>"<?php /* data-image-src="<?php echo $src ?>" */ ?>></span>
		<span class="slide outer-wrapper"  data-parallax="scroll" data-image="<?php echo get_template_directory_uri(); ?>/images/nidderdale-room.jpg" <?php /*data-image-src="<?php echo get_template_directory_uri(); ?>/images/swaledale-room.jpg" */ ?>></span>


		</div>
</section>
<section class="offset-section centered-text">
	<div class="row main-container">
		<div class="small-12 medium-10 medium-centered large-9 columns">
			<div class="section first">
			<h1 class="underline-hd"><?php the_title() ?></h1>
<?php the_content() ?>
</div>


</div>
	<div class="grid row collapse">
			
					
			<?php
				$room = get_post(7); //swaledale
				list($src,$w,$h) = wp_get_attachment_image_src(get_post_thumbnail_id($room->ID),'double-square-image');
				$title = explode(' ',$room->post_title);
				?>
					<!--block-->
			<div class="xsmall-12 medium-6 medium-push-6 xlarge-8 xlarge-push-4 columns"><div class="double box"><div class="inner-wrapper" style="background-image:url('<?php echo $src ?>');"></div></div></div>
			<!--/block-->
				<!--block-->
			<div class="xsmall-12 medium-6 medium-pull-6 xlarge-4 xlarge-pull-8 columns">
				<div class="box text">
					<a href="<?php echo get_permalink($room->ID) ?>" title="More" class="inner-wrapper box-button">
						<div class="v-center">
							<h3 class="mid-line-hd"><span class="wrap"><span class="top"><?php echo strtoupper($title[0]) ?></span><span class="bottom"><?php echo strtoupper($title[1]) ?></span></span></h3><p><?php echo $room->post_excerpt ?></p><footer><span class="more">MORE</span></footer>
						</div></a>
					</div></div>
					<!--/block-->
					<?php
				$room = get_post(10); //nidderdale
				list($src,$w,$h) = wp_get_attachment_image_src(get_post_thumbnail_id($room->ID),'double-square-image');
				$title = explode(' ',$room->post_title);
				?>
		<!--block-->
			<div class="xsmall-12 medium-6 xlarge-8 columns"><div class="double box"><div class="inner-wrapper" style="background-image:url('<?php echo $src ?>');"></div></div></div>
			<!--/block-->
			<!--block-->
			<div class="xsmall-12 medium-6 xlarge-4 columns">
				<div class="box text">
					<a href="<?php echo get_permalink($room->ID) ?>" title="More" class="inner-wrapper box-button">
						<div class="v-center">
							<h3 class="mid-line-hd"><span class="wrap"><span class="top"><?php echo strtoupper($title[0]) ?></span><span class="bottom"><?php echo strtoupper($title[1]) ?></span></span></h3><p><?php echo $room->post_excerpt ?></p><footer><span class="more">MORE</span></footer>
						</div></a>
					</div></div>
					<!--/block-->
					<!-- block -->
					<?php
			list($feature_img_2,$w,$h) = wp_get_attachment_image_src(get_field('feature_image_2_1'),'square-image');	
			list($feature_img_3,$w,$h) = wp_get_attachment_image_src(get_field('feature_image_2_2'),'square-image');	
			?>
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
					<a href="" class="inner-wrapper box-button">
						<div class="v-center">
							<h3><?php echo get_field('feature_title_2') ?></h3><p><?php echo get_field('feature_text_2') ?></p><footer><span class="more">MORE</span></footer>
						</div></a>
					</div></div>
					<!-- /block -->
					
			</div>
			<footer class="section-footer"><h2>Book with us during May or June and enjoy 10% discount off your stay</h2><a href="" class="button-outline-white">Contact Us</a></footer>
<div class="row">
	<div class="small-10 small-centered xlarge-9 columns">
		<?php
if(get_field('section')):
	$rows = count( get_field('section') );
$c=1;
while(the_repeater_field('section')): 
?>
<section id="" class="section<?php if($c==1):?> mid<?php endif ?> divide text-left bullet-list">
<h3><?php echo get_sub_field('section_title') ?></h3>
<?php echo get_sub_field('section_content') ?>
</section>
<?php 
$c++;
endwhile;
endif;
?>

<section id="rates" class="section">
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
