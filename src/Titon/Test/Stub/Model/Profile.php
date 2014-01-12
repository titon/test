<?php
/**
 * @copyright   2010-2013, The Titon Project
 * @license     http://opensource.org/licenses/bsd-license.php
 * @link        http://titon.io
 */

namespace Titon\Test\Stub\Model;

use Titon\Model\Model;

class Profile extends Model {

    protected $table = 'profiles';

    protected $guarded = ['*'];

    protected $belongsTo = [
        'User' => ['Titon\Test\Stub\Model\User', 'user_id']
    ];

}