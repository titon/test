<?php
namespace Titon\Test\Stub\Repository;

class Author extends TestRepository {

    protected $_config = [
        'table' => 'authors'
    ];

    protected $_schema = [
        'id' => ['type' => 'int', 'ai' => true, 'primary' => true],
        'name' => 'varchar'
    ];

}