<?php
/**
 * @copyright	Copyright 2010-2013, The Titon Project
 * @license		http://opensource.org/licenses/bsd-license.php
 * @link		http://titon.io
 */

namespace Titon\Test\Fixture;

use Titon\Cache\Storage\AbstractStorage;

/**
 * Fixture for Titon\Cache\Storage\AbstractStorage.
 */
class StorageFixture extends AbstractStorage {

	public function decrement($key, $step = 1) {}
	public function flush() {}
	public function get($key) {}
	public function has($key) {}
	public function increment($key, $step = 1) {}
	public function remove($key) {}
	public function set($key, $value, $expires = null) {}

}