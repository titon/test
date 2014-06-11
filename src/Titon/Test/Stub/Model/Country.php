<?php
namespace Titon\Test\Stub\Model;

class Country extends TestModel {

    protected $table = 'countries';

    protected $hasMany = [
        'Users' => 'Titon\Test\Stub\Model\User'
    ];

}