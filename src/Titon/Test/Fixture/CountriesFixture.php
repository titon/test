<?php
/**
 * @copyright   2010-2013, The Titon Project
 * @license     http://opensource.org/licenses/bsd-license.php
 * @link        http://titon.io
 */

namespace Titon\Test\Fixture;

use Titon\Test\TestFixture;

class CountriesFixture extends TestFixture {

    public $model = 'Titon\Test\Stub\Model\Country';

    public $records = [
        ['name' => 'United States of America', 'iso' => 'USA'],
        ['name' => 'Canada', 'iso' => 'CAN'],
        ['name' => 'England', 'iso' => 'ENG'],
        ['name' => 'Australia', 'iso' => 'AUS'],
        ['name' => 'Mexico', 'iso' => 'MEX'],
    ];

}
