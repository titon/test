<?php
/**
 * @copyright	Copyright 2010-2013, The Titon Project
 * @license		http://opensource.org/licenses/bsd-license.php
 * @link		http://titon.io
 */

namespace Titon\Test;

use \Exception;

/**
 * Allows fixtures to setup database records through the model layer.
 */
class TestFixture {

	/**
	 * Class name for model to use.
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
	 * Instantiate a new model instance.
	 *
	 * @return \Titon\Model\Model
	 * @throws \Exception
	 */
	public function loadModel() {
		if (empty($this->model)) {
			throw new Exception(sprintf('Model for %s has not been defined', get_class($this)));
		}

		$modelName = $this->model;

		return new $modelName();
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

}