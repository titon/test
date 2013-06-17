<?php
/**
 * @copyright	Copyright 2010-2013, The Titon Project
 * @license		http://opensource.org/licenses/bsd-license.php
 * @link		http://titon.io
 */

namespace Titon\Test\Stub\Model;

use Titon\Model\Model;
use Titon\Model\Relation\OneToOne;

class Author extends Model {

	protected $_config = [
		'table' => 'authors'
	];

	protected $_schema = [
		'id' => ['type' => 'int', 'ai' => true, 'primary' => true],
		'name' => 'varchar'
	];

	public function initialize() {
		parent::initialize();

		// Has one
		$this->addRelation(new OneToOne('Series', 'Titon\Test\Stub\Series'))
			->setRelatedForeignKey('author_id');
	}

}