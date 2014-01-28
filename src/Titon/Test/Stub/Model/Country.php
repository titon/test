<?php
/**
 * @copyright   2010-2013, The Titon Project
 * @license     http://opensource.org/licenses/bsd-license.php
 * @link        http://titon.io
 */

namespace Titon\Test\Stub\Model;

class Country extends TestModel {

    protected $table = 'countries';

    protected $hasMany = [
        'Users' => ['Titon\Test\Stub\Model\User', 'country_id']
    ];

}