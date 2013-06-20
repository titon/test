<?php
/**
 * @copyright	Copyright 2010-2013, The Titon Project
 * @license		http://opensource.org/licenses/bsd-license.php
 * @link		http://titon.io
 */

namespace Titon\Test\Stub\Model;

use Titon\Model\Model;
use Titon\Model\Relation\ManyToMany;
use Titon\Model\Relation\ManyToOne;

class Book extends Model {

	protected $_config = [
		'table' => 'books'
	];

	protected $_schema = [
		'id' => ['type' => 'int', 'ai' => true, 'primary' => true],
		'series_id' => ['type' => 'int', 'index' => true],
		'name' => 'varchar',
		'isbn' => 'varchar',
		'released' => 'date'
	];

	public function initialize() {
		parent::initialize();

		// Belongs to
		$this->addRelation(new ManyToOne('Series', 'Titon\Test\Stub\Model'))
			->setForeignKey('series_id');

		// Belongs to many
		$this->addRelation(new ManyToMany('Genre', 'Titon\Test\Stub\Genre'))
			->setForeignKey('book_id')
			->setRelatedForeignKey('genre_id')
			->setJunctionModel('Titon\Test\Stub\BookGenre');
	}

}