<?php
/**
 * @copyright	Copyright 2010-2013, The Titon Project
 * @license		http://opensource.org/licenses/bsd-license.php
 * @link		http://titon.io
 */

namespace Titon\Test\Stub\Model;

use Titon\Model\Query;

class UserCallbacks extends User {

	public function preDelete($id, &$cascade) {
		if ($id === 1) {
			return false;
		} else if ($id === 3) {
			$cascade = false;
		}

		return true;
	}

	public function postDelete($id) {
		$this->data = ['id' => $id];
	}

	public function preSave($id, array $data) {
		if ($id === 1) {
			return false;
		}

		if ($id) {
			$data['firstName'] = 'UPDATE';
		} else {
			$data['firstName'] = 'CREATE';
		}

		return $data;
	}

	public function postSave($id, $created = false) {
		$this->data = ['id' => $id, 'created' => $created];
	}

	public function preFetch(Query $query, $fetchType) {
		if ($fetchType === 'fetch') {
			return ['foo' => 'bar'];

		} else if ($fetchType === 'fetchAll') {
			$query->fields('id', 'username');

		} else if ($fetchType === 'fetchList') {
			return false;
		}

		return true;
	}

	public function postFetch(array $results, $fetchType) {
		if ($fetchType === 'fetchAll') {
			foreach ($results as &$result) {
				if ($result['id'] % 2 == 0) {
					$result['foo'] = 'bar';
				}
			}
		}

		return $results;
	}

}