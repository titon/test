<?php
namespace Titon\Test\Stub\Repository;

class Stat extends TestRepository {

    protected $_config = [
        'table' => 'stats'
    ];

    protected $_schema = [
        'id' => ['type' => 'int', 'ai' => true, 'primary' => true],
        'name' => 'varchar',
        'health' => 'int',
        'energy' => 'smallint',
        'damage' => 'float',
        'defense' => 'double',
        'range' => 'decimal',
        'isMelee' => 'boolean',
        'data' => 'blob'
    ];

}