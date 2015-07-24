<?php /* Template Name: About */ ?>
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
		<div class="small-12 medium-11 medium-centered xlarge-10 columns">
		<section class="first section">

			<h1 class="underline-hd">ABOUT US</h1>
<h2>Welcome to Roseberry Cottage, a family run boutique bed and breakfast in a quiet rural location just 15 minutes from Harrogate, Ripon and Pateley Bridge town centres.</h2>
		
		<p>Roseberry Cottage is a Georgian property surrounded by farmland on the edge of Nidderdale, in the Yorkshire Dales. We offer contemporary and luxurious rooms in quiet and peaceful surroundings.  Our rooms have been designed by us, with the local environment in mind, using colour and texture from the local area.  We have combined antique furniture, modern bathrooms, natural wool carpets and throws to offer you luxurious but relaxed surroundings. </p>
</section>
<section id="proprietors" class="section">

	<div class="tinted-box">
		<div class="tinted-box-inner">
		<figure>
<img src="<?php echo get_template_directory_uri(); ?>/images/proprietor-placeholder.jpg" />
		</figure>
		<main>
<h5>Sara and Rob welcome you to Roseberry Cottage</h5>
<p>We are Sara and Rob. When we moved to Roseberry Cottage, looking for a business we could run from home, we decided to convert an unused barn in our grounds into luxurious guest accommodation.</p>
</main>
</div>
</div>
</section>
<section class="section text-left">
<p> Our vision was to create a luxurious, peaceful and private environment for our guests to come and enjoy all that this area of North Yorkshire has to offer. </p>
 <p>We aim to bridge the gap between the sometimes impersonal environment of a high end hotel and the traditional B&amp;B.  To that ends, we offer you the luxury and comfort we have all come to expect when we stay in a good hotel, but with the smaller and more relaxed environment of a bed and breakfast, with attention to detail and personal service.</p>
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
