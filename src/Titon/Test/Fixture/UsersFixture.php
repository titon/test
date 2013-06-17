<?php
/**
 * @copyright	Copyright 2010-2013, The Titon Project
 * @license		http://opensource.org/licenses/bsd-license.php
 * @link		http://titon.io
 */

namespace Titon\Test\Fixture;

use Titon\Test\TestFixture;

class UsersFixture extends TestFixture {

	public $table = 'users';

	public $records = [
		['id' => 1, 'country_id' => 1, 'username' => 'miles', 'firstName' => 'Miles', 'lastName' => 'Johnson', 'password' => '1Z5895jf72yL77h', 'email' => 'miles@email.com', 'age' => 25, 'created' => '1988-02-26 21:22:34'],
		['id' => 2, 'country_id' => 3, 'username' => 'batman', 'firstName' => 'Bruce', 'lastName' => 'Wayne', 'password' => '1Z5895jf72yL77h', 'email' => 'batman@email.com', 'age' => 35, 'created' => '1960-05-11 21:22:34'],
		['id' => 3, 'country_id' => 2, 'username' => 'superman', 'firstName' => 'Clark', 'lastName' => 'Kent', 'password' => '1Z5895jf72yL77h', 'email' => 'superman@email.com', 'age' => 33, 'created' => '1970-09-18 21:22:34'],
		['id' => 4, 'country_id' => 5, 'username' => 'spiderman', 'firstName' => 'Peter', 'lastName' => 'Parker', 'password' => '1Z5895jf72yL77h', 'email' => 'spiderman@email.com', 'age' => 22, 'created' => '1990-01-05 21:22:34'],
		['id' => 5, 'country_id' => 4, 'username' => 'wolverine', 'firstName' => 'Logan', 'password' => '1Z5895jf72yL77h', 'email' => 'wolverine@email.com', 'age' => 355, 'created' => '2000-11-30 21:22:34'],
	];

}