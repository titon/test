<?php
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