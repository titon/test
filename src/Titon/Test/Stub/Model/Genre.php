<?php
/**
 * @copyright	Copyright 2010-2013, The Titon Project
 * @license		http://opensource.org/licenses/bsd-license.php
 * @link		http://titon.io
 */

namespace Titon\Test\Stub\Model;

class Genre extends TestModel {

	protected $_config = [
		'table' => 'genres'
	];

	protected $_schema = [
		'id' => ['type' => 'int', 'ai' => true, 'primary' => true],
		'name' => 'varchar',
		'book_count' => 'int'
	];

}