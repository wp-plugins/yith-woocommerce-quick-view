<?php

$settings = array(

	'settings'  => array(

		'general-options' => array(
			'title' => __( 'General Options', 'yith-wcqv' ),
			'type' => 'title',
			'desc' => '',
			'id' => 'yith-wcqc-general-options'
		),

		'enable-quick-view' => array(
			'id'        => 'yith-wcqv-enable',
			'name'      => __( 'Enable Quick View', 'yith-wcqv' ),
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