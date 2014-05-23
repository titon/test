<?php
namespace Titon\Test\Fixture;

use Titon\Test\TestFixture;

class CountriesFixture extends TestFixture {

    public $repository = 'Titon\Test\Stub\Repository\Country';

    public $records = [
        ['name' => 'United States of America', 'iso' => 'USA'],
        ['name' => 'Canada', 'iso' => 'CAN'],
        ['name' => 'England', 'iso' => 'ENG'],
        ['name' => 'Australia', 'iso' => 'AUS'],
        ['name' => 'Mexico', 'iso' => 'MEX'],
    ];

}
