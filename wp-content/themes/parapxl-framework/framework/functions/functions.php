<?php
/**
 * WP Theme Functions
 *
 * @package Parapxl Framework
 * @subpackage Functions
 * @since 1.0
 */
	
	/* Define Paths */
		define('FW_FUNCTIONS', get_template_directory() . '/framework/functions' );
		define('FW_RESOURCES', get_template_directory().'/framework/resources' );
		define('FW_RESOURCES_PATH', get_template_directory_uri().'/framework/resources' );
		define('RESOURCES', '/resources' );
		define('PARENT_PATH', get_template_directory().RESOURCES);
		if ( get_template_directory() === get_stylesheet_directory() ) define('CHILD_PATH', false);
		else define('CHILD_PATH', get_stylesheet_directory() . RESOURCES);
		define('TEMPLATES', get_stylesheet_directory() . '/templates' );
		
	/* Query Helper */
		$pxl_query = false;
		
	/* PHP Helper Functions */
		include( FW_FUNCTIONS . '/phpfn.php' );
		include( FW_FUNCTIONS . '/class.formcast.php' );
		
	/* Theme Setup */
		include( get_stylesheet_directory() . '/setup.php' );
		
	// Framework
		include( FW_FUNCTIONS . '/class.pxl.php');
		
	// Disables File Editing inside of WP Admin of all files
		define('DISALLOW_FILE_EDIT', true);
		
	// Remove WordPress version info from head and feeds
		function complete_version_removal() {
		    return '';
		}
		add_filter('the_generator', 'complete_version_removal');