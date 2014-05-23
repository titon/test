<?php
namespace Titon\Test\Stub\Repository;

class Genre extends TestRepository {

    protected $_config = [
        'table' => 'genres'
    ];

    protected $_schema = [
        'id' => ['type' => 'int', 'ai' => true, 'primary' => true],
        'name' => 'varchar',
        'book_count' => 'int'
    ];

}