<?php
/**
 * @copyright	Copyright 2010-2013, The Titon Project
 * @license		http://opensource.org/licenses/bsd-license.php
 * @link		http://titon.io
 */

namespace Titon\Test;

/**
 * TestCase with more assert methods.
 */
class TestCase extends \PHPUnit_Framework_TestCase {

	/**
	 * Is the environment PHP 5.4?
	 *
	 * @var bool
	 */
	public $is54 = false;

	/**
	 * Setup flags.
	 */
	protected function setUp() {
		parent::setUp();

		$this->is54 = version_compare(PHP_VERSION, '5.4.0', '>=');
	}

	/**
	 * Assert that two array values are equal, disregarding the order.
	 *
	 * @param array $expected
	 * @param array $actual
	 * @return void
	 */
	public function assertArraysEqual(array $expected, array $actual) {
		ksort($actual);
		ksort($expected);

		$this->assertEquals($expected, $actual);
	}

}