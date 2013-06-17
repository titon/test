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

class Series extends Model {

	protected $_config = [
		'table' => 'series'
	];

	protected $_schema = [
		'id' => ['type' => 'int', 'ai' => true, 'primary' => true],
		'author_id' => ['type' => 'int', 'index' => true],
		'name' => 'varchar'
	];

	public function initialize() {
		parent::initialize();

		// Belongs to
		$this->addRelation(new ManyToOne('Author', 'Titon\Test\Stub\Author'))
			->setForeignKey('author_id');

		// Has many
		$this->addRelation(new OneToMany('Book', 'Titon\Test\Stub\Book'))
			->setRelatedForeignKey('series_id');
	}

}