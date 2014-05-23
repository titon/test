<?php
namespace Titon\Test\Stub\Repository;

class Series extends TestRepository {

    protected $_config = [
        'table' => 'series'
    ];

    protected $_schema = [
        'id' => ['type' => 'int', 'ai' => true, 'primary' => true],
        'author_id' => ['type' => 'int', 'index' => true],
        'name' => 'varchar'
    ];

}