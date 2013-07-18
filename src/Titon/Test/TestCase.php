<?php
/**
 * @copyright	Copyright 2010-2013, The Titon Project
 * @license		http://opensource.org/licenses/bsd-license.php
 * @link		http://titon.io
 */

namespace Titon\Test;

date_default_timezone_set('UTC');

/**
 * TestCase with more assert methods.
 */
class TestCase extends \PHPUnit_Framework_TestCase {

	/**
	 * Is the environment PHP 5.4?
	 *
	 * @type bool
	 */
	public $is54 = false;

	/**
	 * Is the environment windows?
	 *
	 * @type bool
	 */
	public $isWin = false;

	/**
	 * Object being tested.
	 *
	 * @type object
	 */
	public $object;

	/**
	 * List of loaded fixtures.
	 *
	 * @type \Titon\Test\TestFixture[]
	 */
	public $fixtures = array();

	/**
	 * Setup flags.
	 */
	protected function setUp() {
		parent::setUp();

		// Check version
		$this->is54 = version_compare(PHP_VERSION, '5.4.0', '>=');
		$this->isWin = in_array(strtolower(PHP_OS), array('windows', 'winnt'));

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

		// Start the router if it exists
		if (class_exists('Titon\Route\Router')) {
			$router = new \Titon\Route\Router();
			$router->initialize();
		}
	}

	/**
	 * Unload fixtures.
	 */
	protected function tearDown() {
		parent::tearDown();

		$this->unloadFixtures();
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
	 * Get a fixture by name.
	 *
	 * @param string $name
	 * @return \Titon\Test\TestFixture
	 * @throws \Exception
	 */
	public function getFixture($name) {
		if (isset($this->fixtures[$name])) {
			return $this->fixtures[$name];
		}

		throw new \Exception(sprintf('Fixture %s does not exist', $name));
	}

	/**
	 * Load fixtures and generate database records.
	 */
	public function loadFixtures() {
		$fixtures = func_get_args();

		if (is_array($fixtures[0])) {
			$fixtures = $fixtures[0];
		}

		foreach ($fixtures as $fixture) {
			$className = sprintf('Titon\Test\Fixture\%sFixture', $fixture);

			/** @type \Titon\Test\TestFixture $object */
			$object = new $className();
			$object->createTable();
			$object->insertRecords();

			$this->fixtures[$fixture] = $object;
		}
	}

	/**
	 * Delete the fixture and drop the related table.
	 */
	public function unloadFixtures() {
		foreach ($this->fixtures as $name => $fixture) {
			$fixture->dropTable();
			unset($this->fixtures[$name]);
		}
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