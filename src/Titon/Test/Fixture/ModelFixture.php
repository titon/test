<?php
/**
 * @copyright	Copyright 2010-2013, The Titon Project
 * @license		http://opensource.org/licenses/bsd-license.php
 * @link		http://titon.io
 */

namespace Titon\Test\Fixture;

use Titon\Model\Model\AbstractModel;

/**
 * Fixture for Titon\Model\Model.
 */
class ModelFixture extends AbstractModel {

	protected $_getters = array(
		'created' => 'getDate',
		'modified' => 'getDate'
	);

	protected $_setters = array(
		'created' => 'setDate',
		'modified' => 'setDate'
	);

	public function getDate($value) {
		return date('Y-m-d H:i:s', $value);
	}

	public function setDate($value) {
		return is_numeric($value) ? $value : strtotime($value);
	}

}