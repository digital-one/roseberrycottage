<!--footer-->
<footer id="footer">
<div class="top">
<div class="row main-container">
<div class="small-12 columns"><div class="inner-wrap">

<div id="footer-center">
	<nav id="footer-links">

<?php wp_nav_menu( array(
    'theme_location' => 'footer-menu',
    'menu_id'=> 'footer-menu',
    'container' => '',
    'container_class' => ''//,
    //'walker' => new navWalker()
    ));
     ?>
</nav>
	<p><?php echo get_option('address_title') ?>   |   <?php echo get_option('address_line_1') ?>   |   <?php echo get_option('address_line_2') ?>   |   <?php echo get_option('address_line_3') ?>   |  <?php echo get_option('address_postcode') ?><br />Telephone: <a href="tel:<?php echo get_option('address_line_1') ?>"><?php echo get_option('telephone') ?></a>   |   Email: <a href="mailto:<?php echo get_option('email') ?>"><?php echo get_option('email') ?></a> | <a href="<?php echo get_permalink(229) ?>">Terms &amp; Conditions</a></p>
	<menu id="tourist-links"><a href="<?php echo get_option('trip_advisor_url') ?>" target="_blank" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/tripadvisor.jpg" /></a><a href="<?php echo get_option('ydnp_url') ?>" class="logo" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/yorkshire-dales-national-park.jpg" /></a><a href="<?php echo get_option('wty_url') ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/welcome-to-yorkshire.jpg" /></a></menu></div>
</div>
</div>
</div>
</div>
<div class="bottom">
<div class="row main-container">
<div class="small-12 medium-8 columns"><small>&copy; Copyright <?php echo date('Y'); ?> Roseberry Cottage. All rights reserved.</small></div>
<div class="small-12 medium-4 columns"><menu class="social">

	<ul>
		<?php
		$twitter = get_option('twitter');
		$facebook = get_option('facebook');
		$gplus  = get_option('gplus');
		?>
		<?php if(!empty($twitter)): ?>
		<li><a href="<?php echo $twitter ?>" title="Twitter" target="_blank" class="icon-twitter"></a></li>
	<?php endif ?>
	<?php if(!empty($facebook)): ?>
		<li><a href="<?php echo $facebook ?>" title="Facebook" target="_blank" class="icon-facebook"></a></li>
	<?php endif ?>
	<?php if(!empty($gplus)): ?>
		<li><a href="<?php echo $gplus ?>" title="Google Plus" target="_blank" class="icon-google-plus"></a></li>
	<?php endif ?>
		</ul></menu></div>

</div>
</div>
</div>
</footer>
<!--/footer-->
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65874902-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>