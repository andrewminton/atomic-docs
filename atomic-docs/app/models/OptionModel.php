<?php

/**
 * Class OptionModel
 * @property string $optionId
 * @property string $key
 * @property string $value
 * @property $stylesDir string
 * @property $stylesExt string
 * @property $markupDir string
 * @property $markupExt string
 * @property $jsDir string
 * @property $jsExt string
 *
 */
class OptionModel extends DB\SQL\Mapper {

	public function __construct( DB\SQL $db ) {
		parent::__construct( $db, 'options' );
	}

	static public function addOption( $key, $val ) {

	}




}