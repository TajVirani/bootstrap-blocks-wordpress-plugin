<?php
/**
 * Register wp-bootstrap-blocks/row block type.
 *
 * @package wp-bootstrap-blocks/row
 */

namespace WP_Bootstrap_Blocks\Row;

use WP_Bootstrap_Blocks\Block_Type;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( '\WP_Bootstrap_Blocks\Row\Row_Block_Type', false ) ) :

	/**
	 * Class Row_Block_Type
	 */
	class Row_Block_Type extends Block_Type {
		/**
		 * Name of block type including namespace.
		 *
		 * @var string
		 */
		protected $name = 'wp-bootstrap-blocks/row';

		/**
		 * Block attributes.
		 *
		 * @var array
		 */
		protected $attributes = array(
			'template' => array(
				'type' => 'string',
			),
			'noGutters' => array(
				'type' => 'boolean',
			),
			'noMargin' => array(
				'type' => 'boolean',
			),
			'includeContainer' => array(
				'type' => 'boolean',
			),
			'alignment' => array(
				'type' => 'string',
			),
			'verticalAlignment' => array(
				'type' => 'string',
			),
			'editorStackColumns' => array(
				'type' => 'boolean',
			),
			'horizontalGutters' => array(
				'type' => 'string',
			),
			'verticalGutters' => array(
				'type' => 'string',
			),
		);

		/**
		 * Default values of block attributes.
		 *
		 * @var array
		 */
		protected $default_attributes = array(
			'template' => '1-1',
			'noGutters' => false,
			'noMargin' => false,
			'includeContainer' => true,
			'alignment' => '',
			'verticalAlignment' => '',
			'editorStackColumns' => false,
			'horizontalGutters' => '',
			'verticalGutters' => '',
		);
	}

endif;
