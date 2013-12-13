<?php
App::uses('Benh', 'Model');

/**
 * Benh Test Case
 *
 */
class BenhTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.benh'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Benh = ClassRegistry::init('Benh');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Benh);

		parent::tearDown();
	}

}
