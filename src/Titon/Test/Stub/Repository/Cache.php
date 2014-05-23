<?php
namespace Titon\Test\Stub\Repository;

class Cache extends TestRepository {

    protected $_config = [
        'table' => 'cache'
    ];

    protected $_schema = [
        'id' => ['type' => 'int', 'ai' => true, 'primary' => true],
        'key' => 'varchar',
        'value' => 'text',
        'expires_at' => 'datetime'
    ];

}