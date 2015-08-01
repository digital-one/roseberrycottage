<?php /* Template Name: Local Area */ ?>
<?php get_header() ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section id="map" class="bg-image-break centered-text">
		<div class="outer-wrapper">

</div>
</section>
<?php
	$intro_heading =  get_field('intro_heading');
	$intro = get_field('intro');
	$no_intro = false;
	if(empty($intro) and empty($intro_heading)) $no_intro = true;
	$section_class  = $no_intro ? ' no-intro' : '';
?>
<section class="offset-section<?php echo $section_class ?> centered-text">
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
<div class="grid-button link-<?php echo $i ?>">
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
							<h3><span class="wrap"><?php echo $location->post_title ?></h3><?php echo $location->post_content ?><footer><p><a href="#" class="more map">VIEW ON MAP</a></p><p><a href="<?php echo get_field('website',$location->ID) ?>" class="more" target="_blank">WEBSITE</a></p></footer>
						</div></div>
					</div></div>
				</div>
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
	<div class="grid-button link-3">
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
							<h3><span class="wrap"><?php echo $location->post_title ?></h3><?php echo $location->post_content ?><footer><p><a href="#" class="more map">VIEW ON MAP</a></p><p><a href="<?php echo get_field('website',$location->ID) ?>" class="more" target="_blank">WEBSITE</a></p></footer>
						</div></div>
					</div></div>
			<!-- /block -->
	</div>
	<?php
	endforeach;
	endif;
	?>
</div>

</div>




	
			<footer class="section-footer"><h2><?php echo get_field('ob_heading') ?></h2><a href="<?php echo get_field('ob_button_link') ?>" title="<?php echo get_field('ob_button_label') ?>" class="button-outline-white"><?php echo get_field('ob_button_label') ?></a></footer>
<div class="row">
	<div class="xsmall-11 xsmall-centered small-10 small-centered columns">
<section id="other-places" class="section divide mid">
<h3 class="underline-hd">Other places worth a visit</h3>
<ul class="small-block-1 large-block-grid-2 text-left">
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
<footer><a href="http://www.visitharrogate.co.uk" target="_blank" class="more arrow">VISIT LOCAL TOURIST INFORMATION</a></footer>
</section>
<?php get_template_part('partials/content','social-nav' ); ?>
</div>
</div>
	</div>

</section>
<?php get_template_part('partials/content','mailing-list-form' ); ?>
<main>
<?php get_footer() ?> 
</div>
<?php /* <div id="bg-image" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/house-exterior.jpg');"></div> */ ?>

</main>
<?php endwhile ?>
<?php endif ?>
