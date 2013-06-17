<?php
/**
 * @copyright	Copyright 2010-2013, The Titon Project
 * @license		http://opensource.org/licenses/bsd-license.php
 * @link		http://titon.io
 */

namespace Titon\Test\Fixture;

use Titon\Test\TestFixture;

class ProfilesFixture extends TestFixture {

	public $table = 'profiles';

	public $records = [
		['id' => 1, 'user_id' => 4, 'lastLogin' => '2012-02-03 21:22:34', 'currentLogin' => '2013-06-06 19:11:03'],
		['id' => 2, 'user_id' => 3, 'lastLogin' => '2011-05-03 21:22:34', 'currentLogin' => '2013-06-06 19:11:03'],
		['id' => 3, 'user_id' => 5, 'lastLogin' => '2013-06-22 21:22:34', 'currentLogin' => '2013-06-06 19:11:03'],
		['id' => 4, 'user_id' => 1, 'lastLogin' => '2012-02-15 21:22:34', 'currentLogin' => '2013-06-06 19:11:03'],
		['id' => 5, 'user_id' => 2, 'lastLogin' => '2010-08-19 21:22:34', 'currentLogin' => '2013-06-06 19:11:03'],
	];

}
