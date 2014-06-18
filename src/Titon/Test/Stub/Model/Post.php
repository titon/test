<?php
namespace Titon\Test\Stub\Model;

class Post extends TestModel {

    protected $table = 'posts';

    protected $belongsTo = [
        'Topic' => 'Titon\Test\Stub\Model\Topic'
    ];

}