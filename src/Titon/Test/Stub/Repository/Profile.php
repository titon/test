<?php
namespace Titon\Test\Stub\Repository;

class Profile extends TestRepository {

    protected $_config = [
        'table' => 'profiles'
    ];

    protected $_schema = [
        'id' => ['type' => 'int', 'ai' => true, 'primary' => true],
        'user_id' => ['type' => 'int', 'index' => true],
        'lastLogin' => 'datetime',
        'currentLogin' => 'datetime'
    ];

}