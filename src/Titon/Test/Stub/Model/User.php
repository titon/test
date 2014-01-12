<?php
/**
 * @copyright   2010-2013, The Titon Project
 * @license     http://opensource.org/licenses/bsd-license.php
 * @link        http://titon.io
 */

namespace Titon\Test\Stub\Model;

use Titon\Model\Model;

class User extends Model {

    protected $table = 'users';

    protected $fillable = ['username', 'firstName'];

    protected $guarded = ['password'];

    protected $belongsTo = [
        'Country' => ['Titon\Test\Stub\Model\Country', 'country_id']
    ];

    protected $hasOne = [
        'Profile' => ['Titon\Test\Stub\Model\Profile', 'user_id']
    ];

}