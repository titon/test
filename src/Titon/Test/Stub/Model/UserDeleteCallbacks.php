<?php
/**
 * @copyright   2010-2013, The Titon Project
 * @license     http://opensource.org/licenses/bsd-license.php
 * @link        http://titon.io
 */

namespace Titon\Test\Stub\Model;

use Titon\Event\Event;
use Titon\Model\Query;

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