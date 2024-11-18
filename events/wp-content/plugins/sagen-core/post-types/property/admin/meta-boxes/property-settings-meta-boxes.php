<?php

if ( ! function_exists( 'sagen_core_map_property_settings_meta' ) ) {
	function sagen_core_map_property_settings_meta() {
		$meta_box = sagen_select_create_meta_box( array(
			'scope' => 'property-item',
			'title' => esc_html__( 'Property Settings', 'qodef-core' ),
			'name'  => 'property_settings_meta_box'
		) );

        sagen_select_create_meta_box_field(
            array(
                'name'          => 'qodef_show_title_area_property_single_meta',
                'type'          => 'select',
                'default_value' => '',
                'label'         => esc_html__( 'Show Title Area', 'qodef-core' ),
                'description'   => esc_html__( 'Enabling this option will show title area on your single property page', 'qodef-core' ),
                'parent'        => $meta_box,
                'options'       => sagen_select_get_yes_no_select_array()
            )
        );

		
		sagen_select_create_meta_box_field(
			array(
				'name'          => 'qodef_property_single_item_layout_meta',
				'type'          => 'select',
                'default_value' => '',
                'label'         => esc_html__( 'Single Item Layout', 'qodef-core' ),
                'parent'        => $meta_box,
                'options'       => array(
                    ''                   => esc_html__('Default', 'qodef-core'),
                    'custom'             => esc_html__( 'Custom', 'qodef-core' ),
                    'full-width-custom'  => esc_html__( 'Full Width Custom', 'qodef-core' )
                ),
                'args'          => array(
                    'col_width' => 3
                )
			)
		);
		
		sagen_select_create_meta_box_field(
			array(
				'name'        => 'property_info_top_padding',
				'type'        => 'text',
				'label'       => esc_html__( 'Property Info Top Padding', 'qodef-core' ),
				'description' => esc_html__( 'Set top padding for property info elements holder. This option works only for Property Images, Slider, Gallery and Masonry property types', 'qodef-core' ),
				'parent'      => $meta_box,
				'args'        => array(
					'col_width' => 3,
					'suffix'    => 'px'
				)
			)
		);
		
		sagen_select_create_meta_box_field(
			array(
				'name'        => 'property_external_link',
				'type'        => 'text',
				'label'       => esc_html__( 'Property External Link', 'qodef-core' ),
				'description' => esc_html__( 'Enter URL to link from Property List page', 'qodef-core' ),
				'parent'      => $meta_box,
				'args'        => array(
					'col_width' => 3
				)
			)
		);
		
		sagen_select_create_meta_box_field(
			array(
				'name'        => 'qodef_property_featured_image_meta',
				'type'        => 'image',
				'label'       => esc_html__( 'Featured Image', 'qodef-core' ),
				'description' => esc_html__( 'Choose an image for Property Lists shortcode where Hover Type option is Switch Featured Images', 'qodef-core' ),
				'parent'      => $meta_box
			)
		);
		
		sagen_select_create_meta_box_field(
			array(
				'name'          => 'qodef_property_masonry_fixed_dimensions_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Dimensions for Masonry - Image Fixed Proportion', 'qodef-core' ),
				'description'   => esc_html__( 'Choose image layout when it appears in Masonry type property lists where image proportion is fixed', 'qodef-core' ),
				'default_value' => 'default',
				'parent'        => $meta_box,
				'options'       => array(
					'default'            => esc_html__( 'Default', 'qodef-core' ),
					'large-width'        => esc_html__( 'Large Width', 'qodef-core' ),
					'large-height'       => esc_html__( 'Large Height', 'qodef-core' ),
					'large-width-height' => esc_html__( 'Large Width/Height', 'qodef-core' )
				)
			)
		);
		
		sagen_select_create_meta_box_field(
			array(
				'name'          => 'qodef_property_masonry_original_dimensions_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Dimensions for Masonry - Image Original Proportion', 'qodef-core' ),
				'description'   => esc_html__( 'Choose image layout when it appears in Masonry type property lists where image proportion is original', 'qodef-core' ),
				'default_value' => 'default',
				'parent'        => $meta_box,
				'options'       => array(
					'default'     => esc_html__( 'Default', 'qodef-core' ),
					'large-width' => esc_html__( 'Large Width', 'qodef-core' )
				)
			)
		);
		
		$all_pages = array();
		$pages     = get_pages();
		foreach ( $pages as $page ) {
			$all_pages[ $page->ID ] = $page->post_title;
		}
		
		sagen_select_create_meta_box_field(
			array(
				'name'        => 'property_single_back_to_link',
				'type'        => 'select',
				'label'       => esc_html__( '"Back To" Link', 'qodef-core' ),
				'description' => esc_html__( 'Choose "Back To" page to link from property Single Project page', 'qodef-core' ),
				'parent'      => $meta_box,
				'options'     => $all_pages,
				'args'        => array(
					'select2' => true
				)
			)
		);
	}
	
	add_action( 'sagen_select_action_meta_boxes_map', 'sagen_core_map_property_settings_meta', 41 );
}