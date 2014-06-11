<?php
namespace Titon\Test\Stub\Model;

class Order extends TestModel {

    protected $table = 'orders';

    protected $belongsTo = [
        'User' => 'Titon\Test\Stub\Model\User'
    ];

}