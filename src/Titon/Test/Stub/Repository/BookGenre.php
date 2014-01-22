<?php
/**
 * @copyright   2010-2013, The Titon Project
 * @license     http://opensource.org/licenses/bsd-license.php
 * @link        http://titon.io
 */

namespace Titon\Test\Stub\Repository;

use Titon\Db\Relation\ManyToOne;

class BookGenre extends TestRepository {

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
        $this->addRelation(new ManyToOne('Book', 'Titon\Test\Stub\Repository\Book'))
            ->setForeignKey('book_id');

        $this->addRelation(new ManyToOne('Genre', 'Titon\Test\Stub\Repository\Genre'))
            ->setForeignKey('genre_id');
    }

}