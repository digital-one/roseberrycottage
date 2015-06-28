<?php /* Template Name: About */ ?>
<?php get_header() ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="bg-image-break centered-text"  data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/images/house-exterior.jpg">
		<div class="outer-wrapper">



		</div>
</section>
<section class="offset-section centered-text">
	<div class="row main-container">
		<div class="small-12 medium-11 medium-centered xlarge-11 xxlarge-10 columns">
		<section class="first section">
			<h1 class="underline-hd">ABOUT US</h1>
<h2>Welcome to Roseberry Cottage, a new family-owned and run boutique bed &amp; breakfast in beautiful Yorkshire countryside close to Harrogate </h2>

		<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,  sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
<p>ed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. </p>
</section>
<section id="proprietors" class="section">

	<div class="tinted-box">
		<div class="tinted-box-inner">
		<figure>
<img src="<?php echo get_template_directory_uri(); ?>/images/proprietor-placeholder.jpg" />
		</figure>
		<main>
<h5>Title</h5>
<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,  sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>
</main>
</div>
</div>
</section>
<section id="quote" class="section divide">
	<blockquote><p>Our rooms have been designed with a meticulous attention to design and detail in order to create a warm and welcoming atmosphere. Roseberry Cottage Bed and Breakfast feels like home.</p><footer>Sara Jaffar, Proprietor</footer></blockquote>

</section>

</div>
	<section id="social" class="section last">
	<h4>Follow us</h4>
	<menu class="social"><ul><li><a href="" class="icon-twitter"></a></li><li><a href="" class="icon-facebook"></a></li><li><a href="" class="icon-google-plus"></a></li></ul></menu>
</section>

	</div>

</section>
<section id="mailing-list-form">
	<div class="row main-container">
		<div class="small-12 small-centered large-9 columns">
<h2>Join our mailing list and stay in touch with the latest news and offers at Roseberry Cottage</h2>
<?php
//(id, display title, display desc, display inactive, field values, ajax, tab index)
gravity_form(1, false, false, false, '', true, 1);
?>
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
