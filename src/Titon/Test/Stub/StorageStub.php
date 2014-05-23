<?php
namespace Titon\Test\Stub;

use Titon\Cache\Storage\AbstractStorage;

/**
 * Stub for Titon\Cache\Storage\AbstractStorage.
 */
class StorageStub extends AbstractStorage {

    public function decrement($key, $step = 1) {}
    public function flush() {}
    public function get($key) {}
    public function has($key) {}
    public function increment($key, $step = 1) {}
    public function remove($key) {}
    public function set($key, $value, $expires = null) {}

}