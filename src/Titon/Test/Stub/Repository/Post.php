<?php
namespace Titon\Test\Stub\Repository;

class Post extends TestRepository {

    protected $_config = [
        'table' => 'posts'
    ];

    protected $_schema = [
        'id' => ['type' => 'int', 'ai' => true, 'primary' => true],
        'topic_id' => ['type' => 'int', 'index' => true],
        'active' => ['type' => 'smallint', 'default' => 0],
        'deleted' => ['type' => 'smallint', 'default' => 0],
        'content' => 'text',
        'created_at' => 'datetime',
        'deleted_at' => 'datetime'
    ];

    public function toHash($value, array $options) {
        return base64_encode(serialize($value));
    }

    public function fromHash($value, array $options) {
        return unserialize(base64_decode($value));
    }

}