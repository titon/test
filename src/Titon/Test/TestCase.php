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
	 * Strip new lines and tabs to test template files easily.
	 *
	 * @param string $string
	 * @return string
	 */
	public function clean($string) {
		return str_replace(array("\t", "\r", "\n"), '', $string);
	}

	/**
	 * Clean new lines and remove carriage returns.
	 *
	 * @param string $string
	 * @return string
	 */
	public function nl($string) {
		return str_replace("\r", "", $string);
	}

	/**
	 * Assert that two array values are equal, disregarding the order.
	 *
	 * @param array $expected
	 * @param array $actual
	 * @param bool $key
	 */
	public function assertArraysEqual(array $expected, array $actual, $key = false) {
		if ($key) {
			ksort($actual);
			ksort($expected);
		} else {
			sort($actual);
			sort($expected);
		}

		$this->assertEquals($expected, $actual);
	}

}