<?php
/**
 * LibraryFixture
 *
 */
class LibraryFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id_libraries' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'odm' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 1),
		'category' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 15, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'title' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'image' => array('type' => 'binary', 'null' => false, 'default' => null),
		'file' => array('type' => 'binary', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id_libraries', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id_libraries' => 1,
			'odm' => 1,
			'category' => 'Lorem ipsum d',
			'title' => 'Lorem ipsum dolor sit amet',
			'image' => 'Lorem ipsum dolor sit amet',
			'file' => 'Lorem ipsum dolor sit amet'
		),
	);

}
