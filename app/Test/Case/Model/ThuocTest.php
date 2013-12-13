<?php
App::uses('Thuoc', 'Model');

/**
 * Thuoc Test Case
 *
 */
class ThuocTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.thuoc',
		'app.category',
		'app.post',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Thuoc = ClassRegistry::init('Thuoc');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Thuoc);

		parent::tearDown();
	}

}
