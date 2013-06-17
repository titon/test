<?php
/**
 * @copyright	Copyright 2010-2013, The Titon Project
 * @license		http://opensource.org/licenses/bsd-license.php
 * @link		http://titon.io
 */

namespace Titon\Test\Stub\Model;

use Titon\Model\Model;
use Titon\Model\Relation\ManyToOne;

class BookGenre extends Model {

	protected $_config = [
		'table' => 'books_genres'
	];

	protected $_schema = [
		'id' => ['type' => 'int', 'ai' => true, 'primary' => true],
		'book_id' => ['type' => 'int', 'index' => true],
		'genre_id' => ['type' => 'int', 'index' => true],
	];

	public function initialize() {
		parent::initialize();

		// Belongs to
		$this->addRelation(new ManyToOne('Book', 'Titon\Test\Stub\Book'))
			->setForeignKey('book_id');

		$this->addRelation(new ManyToOne('Genre', 'Titon\Test\Stub\Genre'))
			->setForeignKey('genre_id');
	}

}