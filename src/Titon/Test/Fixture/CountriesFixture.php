<?php
/**
 * @copyright	Copyright 2010-2013, The Titon Project
 * @license		http://opensource.org/licenses/bsd-license.php
 * @link		http://titon.io
 */

namespace Titon\Test\Fixture;

use Titon\Test\TestFixture;

class CountriesFixture extends TestFixture {

	public $model = 'Titon\Test\Stub\Model\Country';

	public $records = [
		['id' => 1, 'name' => 'United States of America', 'iso' => 'USA'],
		['id' => 2, 'name' => 'Canada', 'iso' => 'CAN'],
		['id' => 3, 'name' => 'England', 'iso' => 'ENG'],
		['id' => 4, 'name' => 'Australia', 'iso' => 'AUS'],
		['id' => 5, 'name' => 'Mexico', 'iso' => 'MEX'],
	];

}
