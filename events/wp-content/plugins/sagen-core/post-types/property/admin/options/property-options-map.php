<?php

if ( ! function_exists( 'sagen_select_property_options_map' ) ) {
	function sagen_select_property_options_map() {
		
		sagen_select_add_admin_page(
			array(
				'slug'  => '_property',
				'title' => esc_html__( 'Property', 'qodef-core' ),
				'icon'  => 'fa fa-camera-retro'
			)
		);

        $panel_filter = sagen_select_add_admin_panel(
            array(
                'title' => esc_html__( 'Property Full Screen Filter', 'qodef-core' ),
                'name'  => 'panel_property_filter',
                'page'  => '_property'
            )
        );

        sagen_select_add_admin_field(
            array(
                'name'              => 'property_filter_enable',
                'type'              => 'yesno',
                'default_value'     => 'yes',
                'label'             => esc_html__( 'Enable Property Filter', 'qodef-core' ),
                'description'       => esc_html__( 'In order to show the filter you need to add the filter opener widget into desired widget area', 'qodef-core' ),
                'parent'            => $panel_filter,
            )
        );

		sagen_select_add_admin_field(
			array(
				'parent'      => $panel_filter,
				'name'        => 'filter_background_image',
				'type'        => 'image',
				'label'       => esc_html__('Filter Background Image', 'qodef-core'),
				'description' => esc_html__('Choose an Image for Property Filter', 'qodef-core')
			)
		);
		
		$panel_archive = sagen_select_add_admin_panel(
			array(
				'title' => esc_html__( 'Property Archive', 'qodef-core' ),
				'name'  => 'panel_property_archive',
				'page'  => '_property'
			)
		);
		
		sagen_select_add_admin_field(
			array(
				'name'        => 'property_archive_number_of_items',
				'type'        => 'text',
				'label'       => esc_html__( 'Number of Items', 'qodef-core' ),
				'description' => esc_html__( 'Set number of items for your property list on archive pages. Default value is 12', 'qodef-core' ),
				'parent'      => $panel_archive,
				'args'        => array(
					'col_width' => 3
				)
			)
		);
		
		sagen_select_add_admin_field(
			array(
				'name'          => 'property_archive_number_of_columns',
				'type'          => 'select',
				'label'         => esc_html__( 'Number of Columns', 'qodef-core' ),
				'default_value' => '4',
				'description'   => esc_html__( 'Set number of columns for your property list on archive pages. Default value is 4 columns', 'qodef-core' ),
				'parent'        => $panel_archive,
				'options'       => array(
					'2' => esc_html__( '2 Columns', 'qodef-core' ),
					'3' => esc_html__( '3 Columns', 'qodef-core' ),
					'4' => esc_html__( '4 Columns', 'qodef-core' ),
					'5' => esc_html__( '5 Columns', 'qodef-core' )
				)
			)
		);
		
		sagen_select_add_admin_field(
			array(
				'name'          => 'property_archive_space_between_items',
				'type'          => 'select',
				'label'         => esc_html__( 'Space Between Items', 'qodef-core' ),
				'description'   => esc_html__( 'Set space size between property items for your property list on archive pages. Default value is normal', 'qodef-core' ),
				'default_value' => 'normal',
				'options'       => sagen_select_get_space_between_items_array(),
				'parent'        => $panel_archive
			)
		);
		
		sagen_select_add_admin_field(
			array(
				'name'          => 'property_archive_image_size',
				'type'          => 'select',
				'label'         => esc_html__( 'Image Proportions', 'qodef-core' ),
				'default_value' => 'landscape',
				'description'   => esc_html__( 'Set image proportions for your property list on archive pages. Default value is landscape', 'qodef-core' ),
				'parent'        => $panel_archive,
				'options'       => array(
					'full'      => esc_html__( 'Original', 'qodef-core' ),
					'landscape' => esc_html__( 'Landscape', 'qodef-core' ),
					'portrait'  => esc_html__( 'Portrait', 'qodef-core' ),
					'square'    => esc_html__( 'Square', 'qodef-core' )
				)
			)
		);
		
		sagen_select_add_admin_field(
			array(
				'name'          => 'property_archive_item_layout',
				'type'          => 'select',
				'label'         => esc_html__( 'Item Style', 'qodef-core' ),
				'default_value' => 'standard-shader',
				'description'   => esc_html__( 'Set item style for your property list on archive pages. Default value is Standard - Shader', 'qodef-core' ),
				'parent'        => $panel_archive,
				'options'       => array(
					'standard-shader' => esc_html__( 'Standard - Shader', 'qodef-core' ),
					'gallery-overlay' => esc_html__( 'Gallery - Overlay', 'qodef-core' )
				)
			)
		);

        $panel = sagen_select_add_admin_panel(
            array(
                'title' => esc_html__( 'Property Single', 'qodef-core' ),
                'name'  => 'panel_property_single',
                'page'  => '_property'
            )
        );

        sagen_select_add_admin_field(
            array(
                'type'          => 'select',
                'name'          => 'property_single_item_layout',
                'default_value' => 'custom',
                'label'         => esc_html__( 'Single Item Layout', 'qodef-core' ),
                'parent'        => $panel,
                'options'       => array(
                    'custom'             => esc_html__( 'Custom', 'qodef-core' ),
                    'full-width-custom'  => esc_html__( 'Full Width Custom', 'qodef-core' )
                ),
                'args'          => array(
                    'col_width' => 3
                )
            )
        );
		
		sagen_select_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'show_title_area_property_single',
				'default_value' => '',
				'label'         => esc_html__( 'Show Title Area', 'qodef-core' ),
				'description'   => esc_html__( 'Enabling this option will show title area on single projects', 'qodef-core' ),
				'parent'        => $panel,
				'options'       => array(
					''    => esc_html__( 'Default', 'qodef-core' ),
					'yes' => esc_html__( 'Yes', 'qodef-core' ),
					'no'  => esc_html__( 'No', 'qodef-core' )
				),
				'args'          => array(
					'col_width' => 3
				)
			)
		);
		
		sagen_select_add_admin_field(
			array(
				'name'          => 'property_single_lightbox_images',
				'type'          => 'yesno',
				'label'         => esc_html__( 'Enable Lightbox for Images', 'qodef-core' ),
				'description'   => esc_html__( 'Enabling this option will turn on lightbox functionality for projects with images', 'qodef-core' ),
				'parent'        => $panel,
				'default_value' => 'yes'
			)
		);
		
		sagen_select_add_admin_field(
			array(
				'name'          => 'property_single_lightbox_videos',
				'type'          => 'yesno',
				'label'         => esc_html__( 'Enable Lightbox for Videos', 'qodef-core' ),
				'description'   => esc_html__( 'Enabling this option will turn on lightbox functionality for YouTube/Vimeo projects', 'qodef-core' ),
				'parent'        => $panel,
				'default_value' => 'no'
			)
		);
		
		sagen_select_add_admin_field(
			array(
				'name'          => 'property_single_enable_categories',
				'type'          => 'yesno',
				'label'         => esc_html__( 'Enable Categories', 'qodef-core' ),
				'description'   => esc_html__( 'Enabling this option will enable category meta description on single projects', 'qodef-core' ),
				'parent'        => $panel,
				'default_value' => 'yes'
			)
		);
		
		sagen_select_add_admin_field(
			array(
				'name'          => 'property_single_hide_date',
				'type'          => 'yesno',
				'label'         => esc_html__( 'Enable Date', 'qodef-core' ),
				'description'   => esc_html__( 'Enabling this option will enable date meta on single projects', 'qodef-core' ),
				'parent'        => $panel,
				'default_value' => 'yes'
			)
		);
		
		sagen_select_add_admin_field(
			array(
				'name'          => 'property_single_sticky_sidebar',
				'type'          => 'yesno',
				'label'         => esc_html__( 'Enable Sticky Side Text', 'qodef-core' ),
				'description'   => esc_html__( 'Enabling this option will make side text sticky on Single Project pages. This option works only for Full Width Images, Small Images, Small Gallery and Small Masonry property types', 'qodef-core' ),
				'parent'        => $panel,
				'default_value' => 'yes'
			)
		);
		
		sagen_select_add_admin_field(
			array(
				'name'          => 'property_single_comments',
				'type'          => 'yesno',
				'label'         => esc_html__( 'Show Comments', 'qodef-core' ),
				'description'   => esc_html__( 'Enabling this option will show comments on your page', 'qodef-core' ),
				'parent'        => $panel,
				'default_value' => 'no'
			)
		);
		
		sagen_select_add_admin_field(
			array(
				'name'          => 'property_single_hide_pagination',
				'type'          => 'yesno',
				'label'         => esc_html__( 'Hide Pagination', 'qodef-core' ),
				'description'   => esc_html__( 'Enabling this option will turn off property pagination functionality', 'qodef-core' ),
				'parent'        => $panel,
				'default_value' => 'yes',
				'args'          => array(
					'dependence'             => true,
					'dependence_hide_on_yes' => '#qodef_navigate_same_category_container'
				)
			)
		);
		
		$container_navigate_category = sagen_select_add_admin_container(
			array(
				'name'            => 'navigate_same_category_container',
				'parent'          => $panel,
				'hidden_property' => 'property_single_hide_pagination',
				'hidden_value'    => 'yes'
			)
		);
		
		sagen_select_add_admin_field(
			array(
				'name'          => 'property_single_nav_same_category',
				'type'          => 'yesno',
				'label'         => esc_html__( 'Enable Pagination Through Same Category', 'qodef-core' ),
				'description'   => esc_html__( 'Enabling this option will make property pagination sort through current category', 'qodef-core' ),
				'parent'        => $container_navigate_category,
				'default_value' => 'no'
			)
		);
		
		sagen_select_add_admin_field(
			array(
				'name'        => 'property_single_slug',
				'type'        => 'text',
				'label'       => esc_html__( 'Property Single Slug', 'qodef-core' ),
				'description' => esc_html__( 'Enter if you wish to use a different Single Project slug (Note: After entering slug, navigate to Settings -> Permalinks and click "Save" in order for changes to take effect)', 'qodef-core' ),
				'parent'      => $panel,
				'args'        => array(
					'col_width' => 3
				)
			)
		);
	}
	
	add_action( 'sagen_select_action_options_map', 'sagen_select_property_options_map', 14 );
}