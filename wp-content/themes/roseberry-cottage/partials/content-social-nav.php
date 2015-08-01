	<section id="social" class="section small-12 columns last">
	<h4>Follow us</h4>
	<?php
		$twitter = get_option('twitter');
		$facebook = get_option('facebook');
		$gplus  = get_option('gplus');
		?>
	<menu class="social"><ul>
<?php if(!empty($twitter)): ?>
		<li><a href="<?php echo $twitter ?>" title="Twitter" target="_blank" class="icon-twitter"></a></li>
	<?php endif ?>
	<?php if(!empty($facebook)): ?>
		<li><a href="<?php echo $facebook ?>" title="Facebook" target="_blank" class="icon-facebook"></a></li>
	<?php endif ?>
	<?php if(!empty($gplus)): ?>
		<li><a href="<?php echo $gplus ?>" title="Google Plus" target="_blank" class="icon-google-plus"></a></li>
	<?php endif ?>

	</ul></menu>
</section>