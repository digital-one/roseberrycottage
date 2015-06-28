<?php /* Template Name: Local Area */ ?>
<?php get_header() ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section id="map" class="bg-image-break centered-text">
		<div class="outer-wrapper">

map here

		</div>
</section>
<section class="offset-section centered-text">
	<div class="row main-container">
		<div class="small-12 large-10 medium-centered xlarge-9 columns">
			<header class="section first intro">
			<h1 class="underline-hd">LOCAL AREA</h1>
<h2>Roseberry Cottage is conveniently situated between the Spa town of Harrogate and the market town of Ripon and just eight miles from the typical Dales market town of Pateley Bridge
</h2>
</header>
</div>
<div class="grid row collapse">
<div class="small-12 xlarge-8 columns">
	<?php
	 $args = array(
        'post_type'=>'cpt-location',
        'post_status' => 'publish',
        'numberposts' => 2,
        'orderby' => 'menu_order',
        'order' => 'ASC'
        );
      if($locations = get_posts($args)):
      	$count = count($locations);
      	$i=1;
      foreach($locations as $location):
      	?>
<a href="" class="grid-button map link-<?php echo $i ?>">
	<!-- block -->
<div class="small-12 medium-6<?php if($i==2):?> medium-push-6<?php endif ?> columns">
				<div class="box">
					<?php list($src,$w,$h) = wp_get_attachment_image_src(get_post_thumbnail_id($location->ID),'square-image'); ?>
					<div class="inner-wrapper block-link" style="background-image:url('<?php echo $src ?>');">
						</div>
					</div></div>
					<!--/block-->
					<!-- block -->
					<div class="small-12 medium-6<?php if($i==2):?> medium-pull-6<?php endif ?> columns">
				<div class="box text">
					<div class="inner-wrapper">
						<div class="v-center">
							<h3><span class="wrap"><?php echo $location->post_title ?></h3><?php echo $location->post_content ?><footer><span class="more map">VIEW ON MAP</span></footer>
						</div></div>
					</div></div>
				</a>
					<!-- /block -->
<?php
$i++;
endforeach;
endif;
?>
<?php /*
<a href="" class="grid-button link-2">
	<!-- block -->
<div class="small-12 medium-6 medium-push-6 columns">
				<div class="box">
					<div class="inner-wrapper block-link" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/harrogate.jpg');">
						</div>
					</div></div>
					<!--/block-->
<!-- block -->
					<div class="small-12 medium-6 medium-pull-6 columns">
				<div class="box text">
					<div class="inner-wrapper">
						<div class="v-center">
							<h3><span class="wrap">HARROGATE</h3><p>Two miles north of the lovely village of Ripley, which boasts Ripley Castle, a grade 1 listed 14th century castle open to the public.</p><footer><span class="more map">VIEW ON MAP</span></footer>
						</div></div>
					</div></div>
			<!-- /block -->
			
</a>
*/ ?>
</div>
<div class="small-12 xlarge-4 columns">
	<?php
	 $args = array(
        'post_type'=>'cpt-location',
        'post_status' => 'publish',
        'numberposts' => 1,
        'offset' => 2,
        'orderby' => 'menu_order',
        'order' => 'ASC'
        );
      if($locations = get_posts($args)):
      	$count = count($locations);
      	$i=1;
      foreach($locations as $location):
      	?>
	<a href="" class="grid-button map link-3">
		<!-- block -->
<div class="small-12 medium-6 xlarge-12 columns">
				<div class="box">
					<?php list($src,$w,$h) = wp_get_attachment_image_src(get_post_thumbnail_id($location->ID),'square-image'); ?>
					<div class="inner-wrapper block-link" style="background-image:url('<?php echo $src ?>');">
						</div>
					</div></div>
					<!--/block-->
					<!-- block -->
					<div class="small-12 medium-6 xlarge-12 columns">
				<div class="box text">
					<div class="inner-wrapper">
						<div class="v-center">
							<h3><span class="wrap"><?php echo $location->post_title ?></h3><?php echo $location->post_content ?><footer><span class="more map">VIEW ON MAP</span></footer>
						</div></div>
					</div></div>
			<!-- /block -->
	</a>
	<?php
	endforeach;
	endif;
	?>
</div>

</div>




	
			<footer class="section-footer"><h2>Book with us during May or June and enjoy 10% discount off your stay</h2><a href="" class="button-outline-white">Check Availability</a></footer>
<div class="row">
	<div class="small-10 small-centered columns">
<section id="other-places" class="section divide mid">
<h3 class="underline-hd">Other places worth a visit</h3>
<ul class="small-block-1 large-block-grid-2 xlarge-block-grid-3 text-left">
	<?php
	 $args = array(
        'post_type'=>'cpt-location',
        'post_status' => 'publish',
        'numberposts' => 999999,
        'offset' => 3,
        'orderby' => 'menu_order',
        'order' => 'ASC'
        );
      if($locations = get_posts($args)):
      	$count = count($locations);
      	$i=1;
      foreach($locations as $location):
      	?>
<li><h5><?php echo $location->post_title ?></h5><?php echo $location->post_content ?>
<footer><a href="#" class="map">View on map</a> / <a href="<?php echo get_field('website',$location->ID) ?>" target="_blank">Website</a></footer></li>
<?php endforeach;
endif;
?>
</ul>
<footer><a href="" class="more arrow">VISIT LOCAL TOURIST INFORMATION</a></footer>
</section>
<section id="social" class="section last">
	<h4>Follow us</h4>
	<menu class="social"><ul><li><a href="" class="icon-twitter"></a></li><li><a href="" class="icon-facebook"></a></li><li><a href="" class="icon-google-plus"></a></li></ul></menu>
</section>
</div>
</div>
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
