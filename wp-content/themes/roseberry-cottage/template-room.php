<?php /* Template Name: Room */ ?>
<?php get_header() ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="bg-image-break centered-text"  data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/images/swaledale-room.jpg">
		<div class="outer-wrapper">



		</div>
</section>
<section class="offset-section centered-text">
	<div class="row main-container">
		<div class="content small-12 medium-10 medium-centered large-8 columns">
			<h1 class="mid-line-hd"><span class="wrap"><span class="top">SWALEDALE</span><span class="bottom">ROOM</span></span></h1>
<h2>Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt</h2>

		<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,  sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>	
<p>Ed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. </p>



</div>
	<div class="grid row collapse">
			
					<!--block-->
			<div class="xsmall-12 medium-6 xlarge-8 columns"><div class="double box"><div class="inner-wrapper" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/swaledale-room.jpg');">column 2</div></div></div>
			<!--/block-->
				<!--block-->
			<div class="xsmall-12 medium-6 xlarge-4 columns">
				<div class="box text">
					<a href="" class="inner-wrapper box-button">
						<div class="v-center">
							<h3><span class="wrap">RELAX<br />IN COMFORT</h3><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,  sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero </p><footer><span class="more">VIEW GALLERY</span></footer>
						</div></a>
					</div></div>
					<!--/block-->
		
					<!-- block -->
					<div class="xsmall-12 medium-6 xlarge-4 show-for-xlarge-up hide-for-xsmall-only columns">
				<div class="box">
					<div class="inner-wrapper block-link" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/harrogate.jpg');">
						</div>
					</div></div>
					<!--/block-->
					
					<!-- block -->
					<div class="small-12 medium-6 medium-push-6 xlarge-4 xlarge-push-4 columns">
				<div class="box">
					<div class="inner-wrapper"  style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/dales.jpg');">
						</div>
					</div></div>
					<!-- /block -->
					<!-- block -->
					<div class="xsmall-12 medium-6 medium-pull-6 xlarge-4 xlarge-pull-4 columns">
				<div class="box text">
					<a href="" class="inner-wrapper box-button">
						<div class="v-center">
							<h3><span class="wrap">LOREM IPSUM<br />DOLAR SIT AMET</h3><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,  sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero </p><footer><span class="more">MORE</span></footer>
						</div></a>
					</div></div>
					<!-- /block -->
					
			</div>
			<footer class="section-footer"><h2>Book with us during May or June and enjoy 10% discount off your stay</h2><a href="" class="button-outline-white">Check Availability</a></footer>
<div class="row">
	<div class="small-10 small-centered columns">
<section id="rates" class="section">
<h3>Rates</h3>
<div>
<div class="tinted-block"><div class="inner"><h4>OFF-SEASON</h4><span class="price">&pound;00.00</span><small>Per room / Per night / October - May</small></div></div>
<div class="tinted-block"><div class="inner"><h4>HIGH-SEASON</h4><span class="price">&pound;00.00</span><small>Per room / Per night / June - September</small></div></div>
</div>
<p><small>Please contact us for current availability and rates</small></p>
</section>
<section id="availability" class="section">
	<h3>Availability</h3>
	<div id="datepicker"></div>
	<div class="key"><span class="avail">Available</span><span class="unavail">Unavailable</span></div>
	</section>
	<section id="booking-request" class="section">
	<h3>Booking Request</h3>
	<?php
//(id, display title, display desc, display inactive, field values, ajax, tab index)
gravity_form(2, false, false, false, '', true, 1);
?>
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
