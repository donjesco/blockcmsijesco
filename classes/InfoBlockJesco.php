<?php

class InfoBlockJesco extends ObjectModel
{
	public $id;
	
	public $id_shop;
	
	public $text;

	/**
	 * @see ObjectModel::$definition
	 */
	public static $definition = array(
		'table' => 'jesco_informacion',
		'primary' => 'id_info',
		'multilang' => true,
		'fields' => array(
			'id_shop' =>			array('type' => self::TYPE_NOTHING, 'validate' => 'isUnsignedId'),
			// Lang fields
			'text' =>				array('type' => self::TYPE_HTML, 'lang' => true, 'validate' => 'isCleanHtml', 'required' => true),
		)
	);

}
