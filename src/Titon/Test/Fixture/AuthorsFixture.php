<?php
/**
 * @copyright	Copyright 2010-2013, The Titon Project
 * @license		http://opensource.org/licenses/bsd-license.php
 * @link		http://titon.io
 */

namespace Titon\Test\Fixture;

use Titon\Test\TestFixture;

class AuthorsFixture extends TestFixture {

	public $table = 'authors';

	public $records = [
		['id' => 1, 'name' => 'George R. R. Martin'],
		['id' => 2, 'name' => 'J. K. Rowling'],
		['id' => 3, 'name' => 'J. R. R. Tolkien'],
	];

}
