<?php
namespace Titon\Test\Stub\Repository;

class Topic extends TestRepository {

    protected $_config = [
        'table' => 'topics'
    ];

    protected $_schema = [
        'id' => ['type' => 'int', 'ai' => true, 'primary' => true],
        'title' => 'varchar',
        'slug' => 'varchar',
        'content' => 'text',
        'post_count' => 'int',
        'created' => 'datetime',
        'modified' => 'datetime'
    ];

}