<?php
namespace Titon\Test\Stub\Repository;

use Titon\Event\Event;
use Titon\Db\Query;

class UserSaveCallbacks extends User {

    public function preSave(Event $event, $id, array &$data) {
        if ($id === 1) {
            return false;
        }

        if ($id) {
            $data['firstName'] = 'UPDATE';
        } else {
            $data['firstName'] = 'CREATE';
        }

        return true;
    }

    public function postSave(Event $event, $id, $created = false) {
        $this->data = ['id' => $id, 'created' => $created];
    }

}