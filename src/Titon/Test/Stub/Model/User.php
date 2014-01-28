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

    protected $validate = [
        'username' => 'between:5,25|alphaNumeric',
        'firstName' => 'alpha',
        'lastName' => 'numeric'
    ];

    protected $messages = [
        'between' => 'Must be between {0} and {1} chars',
        'alphaNumeric' => 'Must be alpha numeric',
        'alpha' => 'Must be alphabetical',
        'numeric' => 'Must be a number'
    ];

    public function getFullNameField($value) {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function setFullNameField($value) {
        list($first, $last) = explode(' ', $value);

        $this->firstName = $first;
        $this->lastName = $last;
    }

}