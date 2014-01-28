<?php
/**
 * @copyright   2010-2013, The Titon Project
 * @license     http://opensource.org/licenses/bsd-license.php
 * @link        http://titon.io
 */

namespace Titon\Test\Stub\Model;

class Profile extends TestModel {

    protected $table = 'profiles';

    protected $guarded = ['*'];

    protected $belongsTo = [
        'User' => ['Titon\Test\Stub\Model\User', 'user_id']
    ];

}