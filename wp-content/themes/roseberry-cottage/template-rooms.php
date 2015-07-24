<?php /* Template Name: Rooms */ ?>
<?php get_header() ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php	list($src,$w,$h) = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'banner-image'); ?>
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
			<h1 class="underline-hd"><?php the_title() ?></h1>
<?php the_content() ?>
</div>


</div>
		<?php get_template_part('partials/content','featured-links' ); ?>
				<footer class="section-footer"><h2><?php echo get_field('ob_heading') ?></h2><a href="<?php echo get_field('ob_button_link') ?>" title="<?php echo get_field('ob_button_label') ?>" class="button-outline-white"><?php echo get_field('ob_button_label') ?></a></footer>
<div class="row">
	<div class="small-10 small-centered xlarge-9 columns">
		<?php
if(get_field('section')):
	$rows = count( get_field('section') );
$c=1;
while(the_repeater_field('section')): 
?>
<section id="<?php echo get_sub_field('section_anchor') ?>" class="section<?php if($c==1):?> mid<?php endif ?> divide text-left bullet-list">
	<h3><?php echo get_sub_field('section_title') ?></h3>
	<?php if(get_sub_field('section_image')>0): ?>
<div class="row">
<div class="small-12 large-8 columns">
<?php echo get_sub_field('section_content') ?>
</div>
<div class="small-8 small-centered large-4 large-uncentered columns">
<?php	list($src,$w,$h) = wp_get_attachment_image_src(get_sub_field('section_image'),'square-image'); ?>
<img src="<?php echo $src ?>" />
</div>

</div>
<?php else: ?>

<?php echo get_sub_field('section_content') ?>
<?php endif ?>
</section>
<?php 
$c++;
endwhile;
endif;
?>

<section id="rates" class="section">
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
