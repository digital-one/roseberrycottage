<div class="grid row collapse">
			<?php
			if(get_field('featured_links_rptr')):
				$rooms =  array(7,10);
				while(the_repeater_field('featured_links_rptr')): 
					$page = get_sub_field('link_page');
					$url = get_sub_field('link_url');
					$is_room = false;
					$is_link = false;
					$is_anchor = false;
					if(!empty($page)):
					$is_room = in_array($page->ID,$rooms) ? true : false;
					$is_link = true;
					endif;
					if(!empty($url)):
						$is_anchor = true;
					endif;
					list($src,$w,$h) = wp_get_attachment_image_src(get_sub_field('link_image'), 'double-square-image');
					$title = explode(' ',get_sub_field('link_heading'));
					switch(get_sub_field('link_style')){
						case 'one_image_text_left':
						?>
						<!--row-->
			<!--block-->
			<div class="xsmall-12 medium-6 medium-push-6 xlarge-8 xlarge-push-4 columns"><div class="double box"><div class="inner-wrapper" style="background-image:url('<?php echo $src ?>');"></div></div></div>
			<!--/block-->
			<!--block-->
			<div class="xsmall-12 medium-6 medium-pull-6 xlarge-4 xlarge-pull-8 columns">
				<div class="box text">
					<?php if($is_link): ?>
					<a href="<?php echo get_permalink($page->ID) ?>" title="More" class="inner-wrapper box-button">
						<?php elseif($is_anchor): ?>
						<a href="<?php echo $url ?>" class="inner-wrapper box-button scrollto">
					<?php else: ?>
					<div class="inner-wrapper">
					<?php endif ?>
						<div class="v-center">
							<?php if($is_room): ?>
							<h3 class="mid-line-hd"><span class="wrap"><span class="top"><?php echo strtoupper($title[0]) ?></span><span class="bottom"><?php echo strtoupper($title[1]) ?></span></span></h3>
						<?php else: ?>
						<h3><?php echo get_sub_field('link_heading') ?></h3>
					<?php endif; ?>
							<p><?php echo get_sub_field('link_text') ?></p>

							<?php if($is_link or $is_anchor): ?>
							<footer><span class="more"><?php echo get_sub_field('link_button_label') ?></span></footer>
						<?php endif ?>
						</div>
						<?php if($is_link or $is_anchor): ?></a><?php else: ?></div><?php endif ?>
					</div></div>
					<!--/block-->
					<!--/row-->
						<?php
						break;
						case 'one_image_text_right':
						?>
						<!--row-->
						<!--block-->
			<div class="xsmall-12 medium-6 xlarge-8 columns"><div class="double box"><div class="inner-wrapper" style="background-image:url('<?php echo $src ?>');"></div></div></div>
			<!--/block-->
			<!--block-->
			<div class="xsmall-12 medium-6 xlarge-4 columns">
				<div class="box text">
				<?php if($is_link): ?>
				<a href="<?php echo get_permalink($page->ID) ?>" title="More" class="inner-wrapper box-button">
					<?php elseif($is_anchor): ?>
						<a href="<?php echo $url ?>" class="inner-wrapper box-button scrollto">
				<?php else: ?>
				<div class="inner-wrapper">
			<?php endif ?>
						<div class="v-center">
							<?php if($is_room):?>
							<h3 class="mid-line-hd"><span class="wrap"><span class="top"><?php echo strtoupper($title[0]) ?></span><span class="bottom"><?php echo strtoupper($title[1]) ?></span></span></h3>
						<?php else: ?>
						<h3><?php echo get_sub_field('link_heading') ?></h3>
					<?php endif; ?>
							<p><?php echo get_sub_field('link_text') ?></p>
							<?php if($is_link or $is_anchor): ?>
							<footer><span class="more"><?php echo get_sub_field('link_button_label') ?></span></footer>
						<?php endif ?>
						</div>
						<?php if($is_link or $is_anchor): ?></a><?php else: ?></div><?php endif ?>
					</div></div>
					<!--/block-->
					<!--/row-->
						<?php
						break;
						case 'two_image':
						?>
						<?php list($src,$w,$h) = wp_get_attachment_image_src(get_sub_field('link_image'), 'square-image'); ?>
						<?php list($src_2,$w,$h) = wp_get_attachment_image_src(get_sub_field('link_image_2'), 'square-image'); ?>
							<!-- block -->
					<div class="xsmall-12 medium-6 xlarge-4 show-for-xlarge-up hide-for-xsmall-only columns">
				<div class="box">
					<div class="inner-wrapper block-link" style="background-image:url('<?php echo $src ?>');">
						</div>
					</div></div>
					<!--/block-->
					<!-- block -->
					<div class="small-12 medium-6 medium-push-6 xlarge-4 xlarge-push-4 columns">
				<div class="box">
					<div class="inner-wrapper"  style="background-image:url('<?php echo $src_2 ?>');">
						</div>
					</div></div>
					<!-- /block -->
					<!-- block -->
					<div class="xsmall-12 medium-6 medium-pull-6 xlarge-4 xlarge-pull-4 columns">
				<div class="box text">
					<?php 
					//$link = get_field('feature_page_link_2');
					if($is_link): 
						?>
					<a href="<?php echo get_permalink($page->ID) ?>" class="inner-wrapper box-button">
						<?php elseif($is_anchor): ?>
						<a href="<?php echo $url ?>" class="inner-wrapper box-button scrollto">
					<?php else: ?>
					<div class="inner-wrapper">
					<?php endif ?>

						<div class="v-center">
							<?php if($is_room):?>
							<h3 class="mid-line-hd"><span class="wrap"><span class="top"><?php echo strtoupper($title[0]) ?></span><span class="bottom"><?php echo strtoupper($title[1]) ?></span></span></h3>
						<?php else: ?>
						<h3><?php echo get_sub_field('link_heading') ?></h3>
					<?php endif; ?>
					<p><?php echo get_sub_field('link_text') ?>
</p><?php if($is_link or $is_anchor): ?><footer><span class="more"><?php echo get_sub_field('link_button_label') ?></span></footer><?php endif ?>
						</div>
						<?php if($is_link or $is_anchor): ?></a> <?php else: ?></div><?php endif ?>
					
					</div></div>
					<!-- /block -->
						<?php
						break;
					}
				?>
				<?php endwhile;
				endif;
				?>	
					</div>