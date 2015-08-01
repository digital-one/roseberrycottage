<section id="rates" class="section divide">
<?php if($post->ID!=308): ?><h3>Tariffs</h3><?php endif ?>
<div class="row">
<?php
if(get_field('rate')):
	$rows = count( get_field('rate') );
while(the_repeater_field('rate')): 
?>
<div class="tinted-block small-12<?php if($rows==1): ?> large-6 large-centered<?php else: ?> large-6<?php endif ?> columns"><div class="inner"><h4><?php echo get_sub_field('rate_title') ?></h4><span class="price">&pound;<?php echo get_sub_field('rate_price') ?></span><small><?php echo get_sub_field('rate_text') ?></small></div></div>
<?php endwhile ?>
<?php endif ?>

</div>
<p><small><?php echo get_field('disclaimer') ?></small></p>
</section>