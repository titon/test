<?php
/**
 * @copyright	Copyright 2010-2013, The Titon Project
 * @license		http://opensource.org/licenses/bsd-license.php
 * @link		http://titon.io
 */

namespace Titon\Test\Stub\Model;

use Titon\Model\Model;

class TestModel extends Model {

	/**
	 * Swap between types depending on the driver.
	 */
	public function initialize() {
		parent::initialize();

		$driver = $this->getDriver();

		if ($driver instanceof \Titon\Model\Pgsql\PgsqlDriver) {
			foreach ($this->_schema as $field => $data) {
				if (is_array($data)) {
					$this->_schema[$field]['type'] = $this->migratePgsql($data['type']);
				} else {
					$this->_schema[$field] = $this->migratePgsql($data);
				}
			}
		}
	}

	/**
	 * Migrate to PostgreSQL types.
	 */
	public function migratePgsql($type) {
		switch ($type) {
			case 'datetime':	return 'timestamp'; break;
			case 'tinyint':		return 'smallint'; break;
			case 'blob':		return 'bytea'; break;
			case 'double':		return 'double precision'; break;
			case 'float':		return 'real'; break;
		}

		return $type;
	}

}