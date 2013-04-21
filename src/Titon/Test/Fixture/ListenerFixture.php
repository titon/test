<?php
/**
 * @copyright	Copyright 2010-2013, The Titon Project
 * @license		http://opensource.org/licenses/bsd-license.php
 * @link		http://titon.io
 */

namespace Titon\Test\Fixture;

use Titon\Event\Event;
use Titon\Event\Listener;

/**
 * Fixture for Titon\Event\Listener
 */
class ListenerFixture implements Listener {

	public function registerEvents() {
		return array(
			'event.test1' => array(
				'noop1',
				array('method' => 'noop2', 'priority' => 45)
			),
			'event.test2' => 'noop1',
			'event.test3' => array('method' => 'noop2', 'priority' => 15)
		);
	}

	public function noop1(Event $e) {}
	public function noop2(Event $e) {}
	public function noop3(Event $e, $object1, $object2) {
		$object2->foo = 'bar';
	}

}