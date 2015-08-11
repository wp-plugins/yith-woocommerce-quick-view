<?php

$settings = array(

	'settings'  => array(

		'section_general_settings_videobox'         => array(
			'name' => __( 'Upgrade to the PREMIUM VERSION', 'yith-wcqv' ),
			'type' => 'videobox',
			'default' => array(
				'plugin_name'        => __( 'YITH WooCommerce Quick View', 'yith-wcqv' ),
				'title_first_column' => __( 'Discover the Advanced Features', 'yith-wcqv' ),
				'description_first_column' => __('Upgrade to the PREMIUM VERSION of YITH WooCommerce Quick View to benefit from all features!', 'yith-wcqv'),

				'video' => array(
					'video_id'           => '120573971',
					'video_image_url'    =>  YITH_WCQV_ASSETS_URL.'/image/video-yith-woocommerce-quick-view.jpg',
					'video_description'  => __( 'YITH WooCommerce Quick View', 'yith-wcqv' ),
				),
				'title_second_column' => __( 'Get Support and Pro Features', 'yith-wcqv' ),
				'description_second_column' => __('By purchasing the premium version of the plugin, you will take advantage of the advanced features of the product and you will get one year of free updates and support through our platform available 24h/24.', 'yith-wcqv' ),
				'button' => array(
					'href' => YITH_WCQV_Admin()->get_premium_landing_uri(),
					'title' => 'Get Support and Pro Features'
				)
			),
			'id'   => 'yith_wcqv_general_videobox'
		),

		'general-options' => array(
			'title' => __( 'General Options', 'yith-wcqv' ),
			'type' => 'title',
			'desc' => '',
			'id' => 'yith-wcqv-general-options'
		),

		'enable-quick-view' => array(
			'id'        => 'yith-wcqv-enable',
			'name'      => __( 'Enable Quick View', 'yith-wcqv' ),
			'type'      => 'checkbox',
			'default'   => 'yes'
		),

		'enable-quick-view-mobile'  => array(
			'id'        => 'yith-wcqv-enable-mobile',
			'name'      => __( 'Enable Quick View on mobile', 'yith-wcqv' ),
			'desc'      => __( 'Enable quick view features on mobile device too', 'yith-wcqv' ),
			'type'      => 'checkbox',
			'default'   => 'yes'
		),

		'quick-view-label'  => array(
			'id'        => 'yith-wcqv-button-label',
			'name'      => __( 'Quick View Button Label', 'yith-wcqv' ),
			'desc'      => __( 'Label for the quick view button in the WooCommerce loop.', 'yith-wcqv' ),
			'type'      => 'text',
			'default'   => __( 'Quick View', 'yith-wcqv' ),
		),

		'enable-lightbox' => array(
			'id'        => 'yith-wcqv-enable-lightbox',
			'name'      => __( 'Enable Lightbox', 'yith-wcqv' ),
			'desc'      => __( 'Enable lightbox. Product images will open in a lightbox.', 'yith-wcqv' ),
			'type'      => 'checkbox',
			'default'   => 'yes'
		),

		'general-options-end' => array(
			'type'      => 'sectionend',
			'id'        => 'yith-wcqv-general-options'
		),

		'style-options' => array(
			'title' => __( 'Style Options', 'yith-wcqv' ),
			'desc'  => '',
			'type'  => 'title',
			'id'    => 'yith-wcqv-style-options'
		),

		'background-color-modal' => array(
			'name'    => __( 'Modal Window Background Color', 'yith-wcqv' ),
			'type'    => 'color',
			'desc'    => '',
			'id'      => 'yith-wcqv-background-modal',
			'default' => '#ffffff'
		),

		'close-button-color' => array(
			'name'    => __( 'Closing Button Color', 'yith-wcqv' ),
			'type'    => 'color',
			'desc'    => '',
			'id'      => 'yith-wcqv-close-color',
			'default' => '#cdcdcd'
		),

		'close-button-color-hover' => array(
			'name'    => __( 'Closing Button Hover Color', 'yith-wcqv' ),
			'type'    => 'color',
			'desc'    => '',
			'id'      => 'yith-wcqv-close-color-hover',
			'default' => '#ff0000'
		),

		'style-options-end' => array(
			'type'  => 'sectionend',
			'id'    => 'yith-wcqv-style-options'
		),


	)
);

return apply_filters( 'yith_wcqv_panel_settings_options', $settings );