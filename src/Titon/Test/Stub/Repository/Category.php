<?php
namespace Titon\Test\Stub\Repository;

class Category extends TestRepository {

    protected $_config = [
        'table' => 'categories',
        'displayField' => 'name'
    ];

    protected $_schema = [
        'id' => ['type' => 'int', 'ai' => true, 'primary' => true],
        'parent_id' => ['type' => 'int', 'index' => true, 'null' => true, 'default' => null],
        'name' => 'varchar',
        'left' => ['type' => 'smallint', 'index' => true],
        'right' => ['type' => 'smallint', 'index' => true],
    ];

}