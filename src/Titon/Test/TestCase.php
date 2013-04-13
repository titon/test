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
	protected $is54 = false;

	/**
	 * Object being tested.
	 *
	 * @var object
	 */
	protected $object;

	/**
	 * Setup flags.
	 */
	protected function setUp() {
		parent::setUp();

		// Check version
		$this->is54 = version_compare(PHP_VERSION, '5.4.0', '>=');

		// Reset globals
		$_POST = array();
		$_GET = array();
		$_COOKIE = array();
		$_SESSION = array();
		$_REQUEST = array();
		$_SERVER['HTTP_HOST'] = 'localhost';
		$_SERVER['PHP_SELF'] = '/index.php';
		$_SERVER['REQUEST_URI'] = '/';
		$_SERVER['SERVER_ADDR'] = '';
		$_SERVER['HTTP_USER_AGENT'] = 'titon';

		// Setup environment
		date_default_timezone_set('UTC');

		// Start the router if it exists
		if (class_exists('Titon\Route\Router')) {
			\Titon\Route\Router::initialize();
		}
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