<section id="mailing-list-form">
	<div class="row main-container">
		<div class="small-12 small-centered large-9 columns">
			<?php $meta = GFFormsModel::get_form_meta(1);
?>
<h2><?php echo $meta['description'] ?></h2>
<?php
//(id, display title, display desc, display inactive, field values, ajax, tab index)
gravity_form(1, false, false, false, '', true, 1);
?>
</div>
</div>
</section>