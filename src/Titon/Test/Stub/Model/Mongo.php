<?php
/**
 * @copyright	Copyright 2010-2013, The Titon Project
 * @license		http://opensource.org/licenses/bsd-license.php
 * @link		http://titon.io
 */

namespace Titon\Test\Stub\Model;

use Titon\Model\Mongo\Model;

class Mongo extends Model {

	protected $_config = [
		'primaryKey' => '_id',
		'table' => 'mongo'
	];

	protected $_schema = [
		'array' => ['type' => 'array', 'default' => []],
		'blob' => 'blob',
		'datetime' => ['type' => 'datetime', 'default' => null],
		'int' => 'int',
		'int32' => 'int32',
		'int64' => 'int64',
		'object' => 'object'
	];

}