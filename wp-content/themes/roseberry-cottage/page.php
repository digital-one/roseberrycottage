<?php get_header() ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<?php get_template_part('partials/content','slideshow' ); ?>

<?php /*
	 <section class="bg-image-break centered-text"  data-parallax="scroll">  
		<div class="outer-wrapper">



		</div>
		<span  style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/house-exterior.jpg');"></span>
</section>
*/ ?>
<?php
	$intro_heading =  get_field('intro_heading');
	$intro = get_field('intro');
	$no_intro = false;
	if(empty($intro) and empty($intro_heading)) $no_intro = true;
	$section_class  = $no_intro ? ' no-intro' : '';
?>
<section class="offset-section<?php echo $section_class ?> centered-text dotted-links">
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
<?php //the_content() ?>
<?php get_template_part('partials/content','sections' ); ?>
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
