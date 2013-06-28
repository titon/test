<?php
/**
 * @copyright	Copyright 2010-2013, The Titon Project
 * @license		http://opensource.org/licenses/bsd-license.php
 * @link		http://titon.io
 */

namespace Titon\Test\Stub\Model;

use Titon\Model\Query;

class UserSaveCallbacks extends User {

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

}