<?php
/**
 * @copyright	Copyright 2010-2013, The Titon Project
 * @license		http://opensource.org/licenses/bsd-license.php
 * @link		http://titon.io
 */

namespace Titon\Test\Stub\Model;

class Stat extends TestModel {

	protected $_config = [
		'table' => 'stats'
	];

	protected $_schema = [
		'id' => ['type' => 'int', 'ai' => true, 'primary' => true],
		'name' => 'varchar',
		'health' => 'int',
		'energy' => 'smallint',
		'damage' => 'float',
		'defense' => 'double',
		'range' => 'decimal',
		'isMelee' => 'boolean',
		'data' => 'blob'
	];

}