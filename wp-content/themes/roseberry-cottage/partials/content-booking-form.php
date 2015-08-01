<section id="booking-request" class="section divide">
	<h3>Booking Request</h3>
	<?php $meta = GFFormsModel::get_form_meta(2);
	//print_r($meta);

	?>
	<p><?php echo $meta['description'] ?></p>
	<?php
//(id, display title, display desc, display inactive, field values, ajax, tab index)
gravity_form(2, false, false, false, '', true, 1);
?>
	</section>