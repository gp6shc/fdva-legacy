<?php
	$pxlSetup = array(
		'support' => array(
			'admin-bar' => array(
				'display' => true,
				'style' => "border-bottom:10px solid red;",
			), // Not implemented yet.
			'add_theme_support' => array(
				'automatic-feed-links' => true,
				'custom-background' => false,
				'custom-header' => false,
				'post-formats' => false,
				'post-thumbnails' => true,
			),
			'misc' => array(
				'responsive' => true,
				'shortcodes' => true,
				'widget-shortcode' => true,
			)
		),
		'theme' => array(
			'boxes' => array(
				// 'page_details' => array(
				// 	'options' => array(
				// 		'title' => 'Page Details',
				// 	),
				// 	'fields' => array(
				// 		'featured_page' => array(
				// 			'label' => 'Featured Page'
				// 			,'field' => 'select'
				// 			,'default' => array(0,'None')
				// 			,'fn' => array(
				// 				'prefix' => 'pxl'
				// 				,'name' => 'select_posts'
				// 				,'query' => "type=page show=-1 orderby=title order=asc"
				// 			)
				// 			,'description' => 'Choose a page to show up in the sidebar of this page.'
				// 		),
				// 	)
				// ),
			),
			'menus' => array(
				'main' => 'Main',
			),
			'panel' => array(
				'sections' => array(
					 'general' => true
					,'appearance' => false
					,'social' => true
					,'about' => false
					,'reset' => false
				),
				'fields' => array(
					'donate' => array(
						'section' => 'general'
						,'title'   => __( 'Donate Text' )
						,'desc'    => __( 'The text that goes above the donate button.' )
						,'type'    => 'textarea'
					)
					,'donate_img' => array(
						'section' => 'general'
						,'title'   => __( 'Donate Image' )
						,'desc'    => __( 'The url of the image that goes in the donate section.' )
						,'type'    => 'text'
					)
					,'donate_link' => array(
						'section' => 'general'
						,'title'   => __( 'Donate Link' )
						,'desc'    => __( 'The url of the donation page.' )
						,'type'    => 'text'
					)
					,'footer-line' => array(
						'section' => 'general'
						,'title'   => __( 'Footer Call Line' )
						,'desc'    => __( 'The text in the gray bar that starts off the footer.' )
						,'type'    => 'textarea'
					)
					,'footer-espanol' => array(
						'section' => 'general'
						,'title'   => __( 'Footer Espanol Text' )
						,'type'    => 'textarea'
					)
					,'footer-copy' => array(
						'section' => 'general'
						,'title'   => __( 'Footer Copy &copy; Text' )
						,'type'    => 'textarea'
					)
					,'facebook' => array(
						'section' => 'social'
						,'title'   => __( 'Facebook Page ID or Name' )
						,'desc'    => __( 'Please only paste in the Page ID or Page Name' )
						,'type'    => 'text'
					)
					,'youtube' => array(
						'section' => 'social'
						,'title'   => __( 'Youtube Channel' )
						,'desc'    => __( 'Please only paste in the Twitter Username' )
						,'type'    => 'text'
					)
				)
			),
			'postTypes' => array(
				'page' => array(
					'supports' => 'excerpt',
					// 'boxes' => array('page_details')
				),
				'post' => array(
					'query' => array(
						'orderby' => 'date',
						'order' => 'DESC',
					),
					'paging' => array(
						'prev' => 'Previous Posts',
						'next' => 'Next Posts',
					)
				),
			),
			'resources' => array(
				'css' => array(
					'theme' => true
				),
				'js' => array(
					 'basic-jquery-slider.min' => array( 'deps' => array('jquery'), 'async' => true, 'defer' => true, 'in_footer' => true)
					,'site' => array( 'deps' => array('basic-jquery-slider.min'), 'async' => true, 'defer' => true, 'in_footer' => true)
				),
			),
			'sidebars' => array(
				'form' => array(
					'name' => 'form',
					'description' => "The form area in the footer.",
					'before_widget' => htmlentities('<div class="span4">'),
					'after_widget' => htmlentities('</div>'),
					'before_title' => htmlentities('<h4>'),
					'after_title' => htmlentities('</h4>'),
				),
			),
			'taxonomies' => array(
				'box' => array( 'postTypes' => array('page'), 'labels' => 'Box,Boxes' ),
			),
			'profile' => array(
				'fields' => array(

				),
				'url' => 'staff',
			),
		),
	);
