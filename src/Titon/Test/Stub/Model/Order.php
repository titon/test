<?php
/**
 * @copyright	Copyright 2010-2013, The Titon Project
 * @license		http://opensource.org/licenses/bsd-license.php
 * @link		http://titon.io
 */

namespace Titon\Test\Stub\Model;

use Titon\Model\Model;

class Order extends Model {

	protected $_config = [
		'table' => 'orders'
	];

	protected $_schema = [
		'id' => ['type' => 'int', 'ai' => true, 'primary' => true],
		'user_id' => ['type' => 'int', 'index' => true],
		'quantity' => 'int',
		'status' => 'varchar',
		'shipped' => 'datetime'
	];


}