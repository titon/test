<?php
/**
 * @copyright   2010-2013, The Titon Project
 * @license     http://opensource.org/licenses/bsd-license.php
 * @link        http://titon.io
 */

namespace Titon\Test;

use Titon\Db\Repository;
use Titon\Db\Query;
use \Exception;

/**
 * Allows fixtures to setup database records through the db layer.
 */
class TestFixture {

    /**
     * Name of table to use.
     *
     * @type string
     */
    public $table;

    /**
     * List of records to insert into the table.
     *
     * @type array
     */
    public $records = array();

    /**
     * Repository instance.
     *
     * @type \Titon\Db\Repository
     */
    protected $_repository;

    /**
     * Create the database table using the table's schema.
     *
     * @return bool
     * @throws \Exception
     */
    public function createTable() {
        if (!$this->loadRepository()->createTable()) {
            throw new Exception(sprintf('Failed to create database table for %s', get_class($this)));
        }

        return true;
    }

    /**
     * Drop the table.
     *
     * @return bool
     */
    public function dropTable() {
        return (bool) $this->loadRepository()->query(Query::DROP_TABLE)->save();
    }

    /**
     * Instantiate a new table instance.
     *
     * @return \Titon\Db\Repository
     * @throws \Exception
     */
    public function loadRepository() {
        if ($this->_repository) {
            return $this->_repository;
        }

        if (!$this->table) {
            throw new Exception(sprintf('Repository for %s has not been defined', get_class($this)));
        }

        $name = $this->table;
        $this->_repository = new $name();

        return $this->_repository;
    }

    /**
     * Insert records into the database.
     *
     * @return bool
     */
    public function insertRecords() {
        $table = $this->loadRepository();

        foreach ($this->records as $record) {
            $table->create($record);
        }

        return true;
    }

    /**
     * Truncate the table of all records.
     *
     * @return bool
     */
    public function truncateTable() {
        return (bool) $this->loadRepository()->query(Query::TRUNCATE)->save();
    }

}