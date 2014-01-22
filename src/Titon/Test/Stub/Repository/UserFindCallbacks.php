<?php
/**
 * @copyright   2010-2013, The Titon Project
 * @license     http://opensource.org/licenses/bsd-license.php
 * @link        http://titon.io
 */

namespace Titon\Test\Stub\Repository;

use Titon\Event\Event;
use Titon\Db\Query;

class UserFindCallbacks extends User {

    public function preFind(Event $event, Query $query, $finder) {
        if ($finder === 'first') {
            return ['custom' => 'data'];

        } else if ($finder === 'all') {
            $query->fields('id', 'username');

        } else if ($finder === 'list') {
            return false;
        }

        return true;
    }

    public function postFind(Event $event, array &$results, $finder) {
        if (isset($this->testApply) && $finder === 'all') {
            foreach ($results as &$result) {
                if ($result['id'] % 2 == 0) {
                    $result['foo'] = 'bar';
                }
            }
        }
    }

}