<?php
/**
 * @copyright	Copyright 2010-2013, The Titon Project
 * @license		http://opensource.org/licenses/bsd-license.php
 * @link		http://titon.io
 */

namespace Titon\Test\Fixture;

use Titon\Test\TestFixture;

class StatsFixture extends TestFixture {

	public $model = 'Titon\Test\Stub\Model\Stat';

	public $records = [
		[
			'id' => 1,
			'name' => 'Warrior',
			'health' => 1500,
			'energy' => 150,
			'damage' => 125.25,
			'defense' => 55.75,
			'range' => 1.0,
			'isMelee' => true
		], [
			'id' => 2,
			'name' => 'Ranger',
			'health' => 800,
			'energy' => 335,
			'damage' => 90.45,
			'defense' => 30.5,
			'range' => 6.75,
			'isMelee' => false
		], [
			'id' => 3,
			'name' => 'Mage',
			'health' => 600,
			'energy' => 600,
			'damage' => 55.84,
			'defense' => 40.15,
			'range' => 8.33,
			'isMelee' => false
		]
	];

}
