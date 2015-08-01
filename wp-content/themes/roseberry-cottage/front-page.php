<?php get_header() ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section id="header-images">
	<div class="grid collapse">
		<div class="grid-row">
		<?php
if(get_field('image_grid_rptr')):
	$c=1;
$squares=0;
while(the_repeater_field('image_grid_rptr')): 

if($squares==6):
$squares=0;
?>
</div><div class="grid-row">
<?php endif ?>
<?php
if(get_sub_field('image_size')=='double-square'):
	$squares+=2;
$class= $squares > 4 ? ' show-for-large-up hide-for-xsmall-only' : '';
	?>
<?php list($src,$w,$h) = wp_get_attachment_image_src(get_sub_field('image'), 'double-square-image'); ?>
<div class="xsmall-6 small-6 large-4 columns<?php echo $class ?>"><div class="box double"><div class="inner-wrapper" style="background-image:url('<?php echo $src ?>');"></div></div></div>
<?php
else:
$squares+=1;
$class= $squares > 4 ? ' show-for-large-up hide-for-xsmall-only' : '';
?>
	<?php list($src,$w,$h) = wp_get_attachment_image_src(get_sub_field('image'), 'square-image'); ?>
<div class="xsmall-3 small-3 large-2 columns<?php echo $class ?>"><div class="box"><div class="inner-wrapper" style="background-image:url('<?php echo $src ?>');"></div></div></div>
<?php endif; ?>
<?php
$c++;
if($c==6):
$c=1;
endif;
?>
<?php endwhile ?>
<?php endif ?>
</div>
</section>
<section id="about" class="offset-section centered-text">
	<div class="row main-container">
		<div class="content small-12 medium-10 medium-centered large-8 columns">
		<?php the_field('cb_text') ?>
<footer><a href="<?php the_field('cb_button_link') ?>" title="<?php the_field('cb_button_label') ?>" class="button-outline"><?php the_field('cb_button_label') ?></a>
<a href="#" class="gallery button-outline">Gallery</a>
</footer>
</div>
	</div>
</section>
<section class="bg-image-break centered-text">
	<?php
	list($src,$w,$h) = wp_get_attachment_image_src(get_field('image_block_image'),'banner-image');
	?>
<span class="slide outer-wrapper" data-image="<?php echo $src ?>">
	<span class="inner-wrapper">
<div class="caption">
<h3><em><?php the_field('image_block_caption_top') ?></em><?php strtoupper(the_field('image_block_caption_bottom')) ?></h3>
</div>
</span>
</span>
</section>
<section class="offset-section with-footer centered-text">
	<div class="row main-container">
		
			<header class="section-header small-12 medium-10 medium-centered large-8 columns"><h2><?php the_field('sub_title') ?></h2></header>
			<?php get_template_part('partials/content','featured-links' ); ?>

			<?php get_template_part('partials/content','sections' ); ?>

<footer class="section-footer"><h2><?php echo get_field('ob_heading') ?></h2><a href="<?php echo get_field('ob_button_link') ?>" title="<?php echo get_field('ob_button_label') ?>" class="button-outline-white"><?php echo get_field('ob_button_label') ?></a></footer>


	</div>
</section>
<?php
	list($src,$w,$h) = wp_get_attachment_image_src(get_field('image_block_2_src'),'banner-image');
	?>
<section class="bg-image-break centered-text" data-parallax="scroll"  data-image-src="<?php echo $src; ?>" >
	<span class="slide outer-wrapper" data-image="<?php echo $src; ?>">
	<span class="inner-wrapper">
<div class="caption">
<h3><em><?php echo get_field('image_block_2_caption_top') ?></em><?php echo strtoupper(get_field('image_block_2_caption_bottom')) ?></h3>
</div>
</span>
</span>
</section>
<?php get_template_part('partials/content','mailing-list-form' ); ?>
<main>
<?php get_footer() ?> 
</div>
<?php /* <div id="bg-image" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/house-exterior.jpg');"></div> */ ?>

</main>
<?php endwhile ?>
<?php endif ?>
