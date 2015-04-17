<?php

// Register options page
paf_options( array(
	'ptjf-i-m-candidate' => array(
		'page' => 'ptjf-tweaks',
		'title' => __( '"I\'m a candidate" text' ),
	),
	'ptjf-i-m-employer' => array(
		'page' => 'ptjf-tweaks',
		'title' => __( '"I\'m an employer" text' ),
	),
	'ptjf-text' => array(
		'type' => 'textarea',
		'editor' => true,
		'page' => 'ptjf-tweaks',
		'title' => __( 'Text below form' ),
		'editor_height' => '10',
		'teeny' => true,
	),
) );


// Override employer and candidate text
// Add links
add_filter( 'register_form_fields', 'ptjf_tweaks' );
function ptjf_tweaks( $fields )  {

	$paf = paf();

	if ( paf( 'ptjf-i-m-candidate' ) ) {
		$fields[ 'info' ][ 'role' ][ 'options' ][ 'candidate' ] = paf( 'ptjf-i-m-candidate' );
	}
	if ( paf( 'ptjf-i-m-employer' ) ) {
		$fields[ 'info' ][ 'role' ][ 'options' ][ 'employer' ] = paf( 'ptjf-i-m-employer' );
	}

	return $fields;
}