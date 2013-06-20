<?php
/**
 * @copyright	Copyright 2010-2013, The Titon Project
 * @license		http://opensource.org/licenses/bsd-license.php
 * @link		http://titon.io
 */

namespace Titon\Test;

use Titon\Model\Model;
use Titon\Model\Query;
use \Exception;

/**
 * Allows fixtures to setup database records through the model layer.
 */
class TestFixture {

	/**
	 * Name of model to use.
	 *
	 * @type string
	 */
	public $model;

	/**
	 * List of records to insert into the table.
	 *
	 * @type array
	 */
	public $records = array();

	/**
	 * Model instance.
	 *
	 * @type \Titon\Model\Model
	 */
	protected $_model;

	/**
	 * Create the database table using the model's schema.
	 *
	 * @return bool
	 * @throws \Exception
	 */
	public function createTable() {
		if (!$this->loadModel()->createTable()) {
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
		return (bool) $this->loadModel()->query(Query::DROP_TABLE)->save();
	}

	/**
	 * Instantiate a new model instance.
	 *
	 * @return \Titon\Model\Model
	 * @throws \Exception
	 */
	public function loadModel() {
		if ($this->_model) {
			return $this->_model;
		}

		if (!$this->model) {
			throw new Exception(sprintf('Model for %s has not been defined', get_class($this)));
		}

		$name = $this->model;
		$this->_model = new $name();

		return $this->_model;
	}

	/**
	 * Insert records into the database.
	 *
	 * @return bool
	 */
	public function insertRecords() {
		$model = $this->loadModel();

		foreach ($this->records as $record) {
			$model->create($record);
		}

		return true;
	}

	/**
	 * Truncate the table of all records.
	 *
	 * @return bool
	 */
	public function truncateTable() {
		return (bool) $this->loadModel()->query(Query::TRUNCATE)->save();
	}

}