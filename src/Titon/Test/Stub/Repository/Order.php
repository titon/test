<?php
namespace Titon\Test\Stub\Repository;

class Order extends TestRepository {

    protected $_config = [
        'table' => 'orders'
    ];

    protected $_schema = [
        'id' => ['type' => 'int', 'ai' => true, 'primary' => true],
        'user_id' => ['type' => 'int', 'index' => true],
        'quantity' => 'int',
        'status' => 'varchar',
        'shipped' => 'datetime'
    ];


}