<?php

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Class WP_Job_Manager_Field_Editor_ShortCodes
 *
 * @since 1.1.9
 *
 */
class WP_Job_Manager_Field_Editor_ShortCodes {


	function __construct() {

		add_shortcode( 'job_field', array( $this, 'shortcode_output' ) );
		add_shortcode( 'company_field', array( $this, 'shortcode_output' ) );
		add_shortcode( 'custom_field', array( $this, 'shortcode_output' ) );
		add_shortcode( 'resume_field', array( $this, 'shortcode_output' ) );

	}

	/**
	 * Output for Shortcode
	 *
	 * @since 1.1.9
	 *
	 * @param $atts
	 */
	function shortcode_output( $atts ) {

		try {
			// Attributes
			extract( shortcode_atts( array(
				                         'key'    => '',
				                         'field'  => '',
				                         'job_id' => get_the_ID(),
			                         ), $atts ) );

			if ( empty( $key ) && empty( $field ) ) {
				throw new Exception( __( 'Meta Key was not specified!', 'wp-job-manager-field-editor' ) );
			}

			if ( empty( $job_id ) ) {
				throw new Exception( __( 'Unable to determine correct job/resume/post ID!', 'wp-job-manager-field-editor' ) );
			}

			if( $key ) $meta_key = $key;
			if( $field ) $meta_key = $field;

			$post_meta = get_post_meta( $job_id, '_' . $meta_key, true );

			return $post_meta;

		} catch ( Exception $error ) {

			error_log( 'Shortcode output error: ' . $error->getMessage() );

		}

	}
}

new WP_Job_Manager_Field_Editor_ShortCodes();