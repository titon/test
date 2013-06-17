<?php
/**
 * @copyright	Copyright 2010-2013, The Titon Project
 * @license		http://opensource.org/licenses/bsd-license.php
 * @link		http://titon.io
 */

namespace Titon\Test\Stub\Model;

use Titon\Model\Model;
use Titon\Model\Relation\ManyToOne;
use Titon\Model\Relation\OneToMany;

class Genre extends Model {

	protected $_config = [
		'table' => 'genres'
	];

	protected $_schema = [
		'id' => ['type' => 'int', 'ai' => true, 'primary' => true],
		'name' => 'varchar'
	];

}