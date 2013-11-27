<?php
/**
 * NoticeFixture
 *
 */
class NoticeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id_notices' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'odm' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 1),
		'title' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'image' => array('type' => 'binary', 'null' => false, 'default' => null),
		'briefDescription' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 400, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'noticesInIntegra' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id_notices', 'unique' => 1)
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
			'id_notices' => 1,
			'odm' => 1,
			'title' => 'Lorem ipsum dolor sit amet',
			'image' => 'Lorem ipsum dolor sit amet',
			'briefDescription' => 'Lorem ipsum dolor sit amet',
			'noticesInIntegra' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
