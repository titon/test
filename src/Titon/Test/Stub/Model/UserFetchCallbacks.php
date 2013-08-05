<?php
/**
 * @copyright	Copyright 2010-2013, The Titon Project
 * @license		http://opensource.org/licenses/bsd-license.php
 * @link		http://titon.io
 */

namespace Titon\Test\Stub\Model;

use Titon\Event\Event;
use Titon\Model\Query;

class UserFetchCallbacks extends User {

	public function preFetch(Event $event, Query $query, $fetchType) {
		if ($fetchType === 'fetch') {
			return ['custom' => 'data'];

		} else if ($fetchType === 'fetchAll') {
			$query->fields('id', 'username');

		} else if ($fetchType === 'fetchList') {
			return false;
		}

		return true;
	}

	public function postFetch(Event $event, array &$results, $fetchType) {
		if (isset($this->testApply) && $fetchType === 'fetchAll') {
			foreach ($results as &$result) {
				if ($result['id'] % 2 == 0) {
					$result['foo'] = 'bar';
				}
			}
		}
	}

}