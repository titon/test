<?php
namespace Titon\Test\Stub;

use Titon\Event\Event;
use Titon\Event\Listener;

/**
 * Stub for Titon\Event\Listener
 */
class ListenerStub implements Listener {

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