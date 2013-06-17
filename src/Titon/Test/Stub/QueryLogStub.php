<?php
/**
 * @copyright	Copyright 2010-2013, The Titon Project
 * @license		http://opensource.org/licenses/bsd-license.php
 * @link		http://titon.io
 */

namespace Titon\Test\Stub;

use Titon\Model\Query\Log\AbstractLog;

/**
 * Stub for Titon\Model\Query\Log.
 */
class QueryLogStub extends AbstractLog {

	public function __construct($statement, array $params = []) {
		$this->_statement = $statement;
		$this->_params = $params;
		$this->_count = 5;
		$this->_time = 0.01337;
	}

	public function getStatement() {
		$statement = parent::getStatement();

		foreach ($this->getParams() as $value) {
			$statement = preg_replace('/\?/', $value, $statement, 1);
		}

		return $statement;
	}

}