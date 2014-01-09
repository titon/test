<?php
/**
 * @copyright   2010-2013, The Titon Project
 * @license     http://opensource.org/licenses/bsd-license.php
 * @link        http://titon.io
 */

namespace Titon\Test\Stub\Table;

use Titon\Db\Relation\ManyToOne;

class BookGenre extends TestTable {

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
        $this->addRelation(new ManyToOne('Book', 'Titon\Test\Stub\Table\Book'))
            ->setForeignKey('book_id');

        $this->addRelation(new ManyToOne('Genre', 'Titon\Test\Stub\Table\Genre'))
            ->setForeignKey('genre_id');
    }

}