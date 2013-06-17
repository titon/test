<?php
/**
 * @copyright	Copyright 2010-2013, The Titon Project
 * @license		http://opensource.org/licenses/bsd-license.php
 * @link		http://titon.io
 */

namespace Titon\Test\Fixture;

use Titon\Test\TestFixture;

class GenresFixture extends TestFixture {

	public $table = 'genres';

	public $records = [
		['id' => 1, 'name' => 'Action'],
		['id' => 2, 'name' => 'Adventure'],
		['id' => 3, 'name' => 'Action-Adventure'],
		['id' => 4, 'name' => 'Comedy'],
		['id' => 5, 'name' => 'Horror'],
		['id' => 6, 'name' => 'Thriller'],
		['id' => 7, 'name' => 'Mystery'],
		['id' => 8, 'name' => 'Fantasy'],
		['id' => 9, 'name' => 'Romance'],
		['id' => 10, 'name' => 'Sci-fi'],
		['id' => 11, 'name' => 'Fiction']
	];

}
