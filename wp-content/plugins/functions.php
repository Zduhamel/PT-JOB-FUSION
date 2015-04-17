<?php

/*
Plugin Name: 
Plugin URI: http://www.ptjobfusion.com
Description: A site-specific functionality plugin for  where you can paste your code snippets instead of using the theme's functions.php file
Author: 
Author URI: 
Version: 2015.02.06
License: GPL
*/

// Hook into user_has_cap filter. This assumes you have setup resumes to require the capability 'has_active_job_package'
add_filter( 'user_has_cap', 'has_active_job_package_capability_check', 10, 3 );

/**
 * has_active_job_package_capability_check()
 *
 * Filter on the current_user_can() function.
 *
 * @param array $allcaps All the capabilities of the user
 * @param array $cap     [0] Required capability
 * @param array $args    [0] Requested capability
 *                       [1] User ID
 *                       [2] Associated object ID
 */

add_filter( 'wcpl_job_package_is_sold_individually', '__return_false' );