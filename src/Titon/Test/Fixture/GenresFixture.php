<?php
/**
 * @copyright	Copyright 2010-2013, The Titon Project
 * @license		http://opensource.org/licenses/bsd-license.php
 * @link		http://titon.io
 */

namespace Titon\Test\Fixture;

use Titon\Test\TestFixture;

class GenresFixture extends TestFixture {

	public $model = 'Titon\Test\Stub\Model\Genre';

	public $records = [
		['id' => 1, 'name' => 'Action', 'book_count' => 0],
		['id' => 2, 'name' => 'Adventure', 'book_count' => 7],
		['id' => 3, 'name' => 'Action-Adventure', 'book_count' => 8],
		['id' => 4, 'name' => 'Comedy', 'book_count' => 0],
		['id' => 5, 'name' => 'Horror', 'book_count' => 5],
		['id' => 6, 'name' => 'Thriller', 'book_count' => 3],
		['id' => 7, 'name' => 'Mystery', 'book_count' => 7],
		['id' => 8, 'name' => 'Fantasy', 'book_count' => 15],
		['id' => 9, 'name' => 'Romance', 'book_count' => 0],
		['id' => 10, 'name' => 'Sci-fi', 'book_count' => 0],
		['id' => 11, 'name' => 'Fiction', 'book_count' => 0]
	];

}
