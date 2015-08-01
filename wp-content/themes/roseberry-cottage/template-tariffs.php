<?php /* Template Name: Tariffs */ ?>
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
<section class="offset-section centered-text">
	<div class="row main-container">
		<div class="small-12 medium-11 medium-centered xlarge-11 xxlarge-10 columns">
		<section class="intro section">
			<h1 class="underline-hd"><?php the_title() ?></h1>
		</section>
<?php get_template_part('partials/content','tariffs' ); ?>
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
