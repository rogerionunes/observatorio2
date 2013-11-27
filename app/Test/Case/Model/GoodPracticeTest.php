<?php
App::uses('GoodPractice', 'Model');

/**
 * GoodPractice Test Case
 *
 */
class GoodPracticeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.good_practice'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GoodPractice = ClassRegistry::init('GoodPractice');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GoodPractice);

		parent::tearDown();
	}

}
