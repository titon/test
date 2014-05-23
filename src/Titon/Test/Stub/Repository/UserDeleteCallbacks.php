<?php
namespace Titon\Test\Stub\Repository;

use Titon\Event\Event;
use Titon\Db\Query;

class UserDeleteCallbacks extends User {

    public function preDelete(Event $event, $id, &$cascade) {
        if ($id === 1) {
            return false;
        } else if ($id === 3) {
            $cascade = false;
        }

        return true;
    }

    public function postDelete(Event $event, $id) {
        $this->data = ['id' => $id];
    }

}