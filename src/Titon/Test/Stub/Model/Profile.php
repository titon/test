<?php
namespace Titon\Test\Stub\Model;

class Profile extends TestModel {

    protected $table = 'profiles';

    protected $guarded = ['*'];

    protected $belongsTo = [
        'User' => ['Titon\Test\Stub\Model\User', 'user_id']
    ];

}