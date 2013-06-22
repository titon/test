<?php
/**
 * @copyright	Copyright 2010-2013, The Titon Project
 * @license		http://opensource.org/licenses/bsd-license.php
 * @link		http://titon.io
 */

namespace Titon\Test\Stub;

use Titon\Model\Model;

/**
 * Stub for Titon\Model\Model
 */
class ModelStub extends Model {

	protected $_config = [
		'table' => 'stub',
		'prefix' => 'test_'
	];

	protected $_schema = [
		'id' => ['type' => 'int', 'ai' => true, 'primary' => true],
		'integer' => ['type' => 'int', 'index' => true],
		'string' => 'varchar',
		'boolean' => 'boolean',
		'float' => 'float',
		'datetime' => 'datetime'
	];

}