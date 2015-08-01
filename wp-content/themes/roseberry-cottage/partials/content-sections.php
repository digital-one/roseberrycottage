		<?php
if(get_field('section')):
	$rows = count( get_field('section') );
$c=1;
while(the_repeater_field('section')): 
	$type = get_sub_field('section_type');
	$divide = get_sub_field('section_dividing_line');
	$section_class = $c==1 ? ' first' : '';
switch($type){
	case 'inset':
	?>
<section id="<?php echo get_sub_field('section_anchor') ?>" class="section<?php echo $section_class ?>">
<div class="tinted-box">
	<div class="tinted-box-inner">
	<figure>
		<?php	list($src,$w,$h) = wp_get_attachment_image_src(get_sub_field('section_image'),'square-image'); ?>
<img src="<?php echo $src ?>" />
	</figure>
	<main>
<h5><?php echo get_sub_field('section_title') ?></h5>
<?php echo get_sub_field('section_content') ?>
</main>
</div>
</div>
</section>
<?php
	break;
	case 'quote':
?>
<section id="quote" class="section<?php echo $section_class ?> <?php if($divide==1): ?> divide<?php endif ?>">
	<blockquote><p><?php echo get_sub_field('section_quote') ?></p><footer><?php echo get_sub_field('section_quote_name') ?></footer></blockquote>
</section>
<?php
	break;
	case 'title_text':
	?>
<section id="<?php echo get_sub_field('section_anchor') ?>" class="section<?php echo $section_class ?><?php if($divide==1): ?> divide<?php endif ?> text-left bullet-list">
	<h3><?php echo get_sub_field('section_title') ?></h3>
	<?php if(get_sub_field('section_image')>0): ?>
<div class="row">
<div class="small-12 large-8 columns">
<?php echo get_sub_field('section_content') ?>
</div>
<aside class="image small-8 small-centered large-4 large-uncentered columns">
<?php	list($src,$w,$h) = wp_get_attachment_image_src(get_sub_field('section_image'),'square-image'); ?>
<img src="<?php echo $src ?>" />
</aside>

</div>
<?php else: ?>
<?php echo get_sub_field('section_content') ?>
<?php endif ?>
</section>
<?php 
break;
case 'text':
?>
<section id="<?php echo get_sub_field('section_anchor') ?>" class="section<?php echo $section_class ?><?php if($divide==1): ?> divide<?php endif ?> text-left bullet-list">
	<?php if(get_sub_field('section_image')>0): ?>
<div class="row">
<div class="small-12 large-8 columns">
<?php echo get_sub_field('section_content') ?>
</div>
<aside class="image small-8 small-centered large-4 large-uncentered columns">
<?php	list($src,$w,$h) = wp_get_attachment_image_src(get_sub_field('section_image'),'square-image'); ?>
<img src="<?php echo $src ?>" />
</aside>

</div>
<?php else: ?>
<?php echo get_sub_field('section_content') ?>
<?php endif ?>
</section>
<?php
break;
}
$c++;
endwhile;
endif;
?>