<?php /* Template Name: Contact */ ?>
<?php get_header() ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<?php
	list($src,$w,$h) = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'banner-image'); ?>
	<section class="bg-image-break centered-text">
		<span class="slide outer-wrapper" data-image="<?php echo $src ?>">
</span>
</section>

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
		<section class="first section intro">
			<h1 class="underline-hd">CONTACT US</h1>
<h2>Roseberry Cottage is conveniently located on the south side of Bath, just a 12-15 minute stroll down into the City centre. We are very accessible by road as well as being near to Bath Spa railway and bus stations, detailed below.</h2>
	
</section>
<section class="section divide text-left">
<div class="row">
<div class="small-12 medium-4 columns"><h5>Roseberry Cottage B&amp;B</h5>
<p>Bishop Thornton<br />
Harrogate<br />
North Yorkshire<br />
HG3 3JP</p><p>
<a href="tel:01225403020">+44 (0) 1225 403020</a><br />
<a href="mailto:infor@roseberrycottage.co.uk">info@roseberrycottage.co.uk</a></p></div>
<div class="small-12 medium-8 columns">
<h5>Road Directions</h5>
<p>From M4 Jct 18 onto A46, signposted towards Bath. After approx. 8 miles, you enter Bath on the A4 London Road. At the end of the London Road, turn left following the signs towards Bath University. Pass the fire station and at the second set of traffic lights, turn right, follow the road around a bend and go straight over a roundabout. After a short piece of dual carriageway, go through the next set of traffic lights and continue on </p>
<h5>Public Transport Directions</h5>
<p>Grays is just a 10 minute walk from Bath Spa railway and bus stations. From both, cross the river and the A36 and walk approx.700 metres up the Wellsway. Turn right into Upper Oldfield Park and Grays is 200 metres along on the left handside – Number 9. A taxi will typically take 5-7 minutes.</p>





</div>
</div>
</section>
<section id="booking-request" class="section divide">
	<h3>Booking Request</h3>
	<?php
//(id, display title, display desc, display inactive, field values, ajax, tab index)
gravity_form(2, false, false, false, '', true, 1);
?>
	</section>



	<section id="social" class="section last">
	<h4>Follow us</h4>
	<menu class="social"><ul><li><a href="" class="icon-twitter"></a></li><li><a href="" class="icon-facebook"></a></li><li><a href="" class="icon-google-plus"></a></li></ul></menu>
</section>

	</div>

</section>

<main>
<?php get_footer() ?> 
</div>
<?php /* <div id="bg-image" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/house-exterior.jpg');"></div> */ ?>

</main>
<?php endwhile ?>
<?php endif ?>
