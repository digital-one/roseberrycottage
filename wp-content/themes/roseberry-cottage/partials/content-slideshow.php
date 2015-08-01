<?php
	list($src,$w,$h) = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'banner-image'); ?>
	
		<?php
		if(get_field('slides_rptr')): ?>
		<section class="bg-image-break centered-text slideshow">
			<?php
			while(the_repeater_field('slides_rptr')): 
				list($src,$w,$h) = wp_get_attachment_image_src(get_sub_field('slide_image'),'banner-image');
			?>
		<span class="slide outer-wrapper" data-image="<?php echo $src ?>"></span>
	<?php endwhile; ?>
</section>
<?php else: ?>
	<section class="bg-image-break centered-text">
	<span class="slide outer-wrapper" data-image="<?php echo $src ?>">
</span>
</section>
<?php endif ?>
