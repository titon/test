<?php
namespace Titon\Test\Stub\Model;

class Series extends TestModel {

    protected $table = 'series';

    protected $hasMany = [
        'Books' => ['Titon\Test\Stub\Model\Book', 'series_id']
    ];

}