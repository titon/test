<?php
namespace Titon\Test\Stub;

use Titon\Db\Repository;

/**
 * Stub for Titon\Db\Repository
 */
class RepositoryStub extends Repository {

    protected $_config = [
        'table' => 'stub',
        'prefix' => 'test_'
    ];

    protected $_schema = [
        'id' => ['type' => 'int', 'ai' => true, 'primary' => true],
        'integer' => ['type' => 'int', 'index' => true],
        'string' => 'varchar',
        'boolean' => 'boolean',
        'float' => 'float',
        'datetime' => 'datetime'
    ];

}