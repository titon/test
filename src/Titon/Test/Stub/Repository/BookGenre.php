<?php
/**
 * @copyright   2010-2013, The Titon Project
 * @license     http://opensource.org/licenses/bsd-license.php
 * @link        http://titon.io
 */

namespace Titon\Test\Stub\Repository;

class BookGenre extends TestRepository {

    protected $_config = [
        'table' => 'books_genres'
    ];

    protected $_schema = [
        'id' => ['type' => 'int', 'ai' => true, 'primary' => true],
        'book_id' => ['type' => 'int', 'index' => true],
        'genre_id' => ['type' => 'int', 'index' => true],
    ];

}