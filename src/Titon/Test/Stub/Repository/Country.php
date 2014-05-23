<?php
namespace Titon\Test\Stub\Repository;

class Country extends TestRepository {

    protected $_config = [
        'table' => 'countries'
    ];

    protected $_schema = [
        'id' => ['type' => 'int', 'ai' => true, 'primary' => true],
        'name' => 'varchar',
        'iso' => 'varchar'
    ];

}