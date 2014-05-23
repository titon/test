<?php
namespace Titon\Test\Stub;

use Titon\Db\Query\ResultSet\AbstractResultSet;

/**
 * Stub for Titon\Db\Query\ResultSet.
 */
class QueryResultSetStub extends AbstractResultSet {

    public function __construct($statement, array $params = []) {
        $this->_statement = $statement;
        $this->_params = $params;
        $this->_count = 5;
        $this->_time = 0.01337;
    }

    public function close() {
    }

    public function count() {
    }

    public function execute() {
    }

    public function find() {
    }

    public function save() {
    }

    public function getStatement() {
        $statement = parent::getStatement();

        foreach ($this->getParams() as $value) {
            $statement = preg_replace('/\?/', $value, $statement, 1);
        }

        return $statement;
    }

}