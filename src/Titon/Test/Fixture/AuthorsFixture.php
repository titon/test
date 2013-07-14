<?php
/**
 * @copyright	Copyright 2010-2013, The Titon Project
 * @license		http://opensource.org/licenses/bsd-license.php
 * @link		http://titon.io
 */

namespace Titon\Test\Fixture;

use Titon\Test\TestFixture;

class AuthorsFixture extends TestFixture {

	public $model = 'Titon\Test\Stub\Model\Author';

	public $records = [
		['name' => 'George R. R. Martin'],
		['name' => 'J. K. Rowling'],
		['name' => 'J. R. R. Tolkien'],
	];

}
