<?php

add_filter( 'gform_pre_render_2', 'populate_dates' );
add_filter( 'gform_pre_validation_2', 'populate_dates' );
add_filter( 'gform_pre_submission_filter_2', 'populate_dates' );
add_filter( 'gform_admin_pre_render_2', 'populate_dates' );
add_filter("gform_confirmation_anchor", create_function("","return false;"));


function populate_dates($form){
	foreach ( $form['fields'] as &$field ) :
		//print_r($field);
		if($field->id==8):
			$field->defaultValue = date('d/m/Y');
			endif;
		if($field->id==9):
			$field->defaultValue = date("d/m/Y", strtotime("tomorrow"));
			endif;
		//echo $field->id.'<br />';
	/*
        if ( $field->type != 'select' || strpos( $field->cssClass, 'universities' ) === false ):
          continue;
        endif;
        */
        endforeach;
        return $form;
}