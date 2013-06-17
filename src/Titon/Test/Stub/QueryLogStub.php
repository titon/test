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

	public function __construct($statement) {
		$this->_statement = $statement;
		$this->_count = 5;
		$this->_time = 0.01337;
	}

}