<?php
/**
 * @copyright	Copyright 2010-2013, The Titon Project
 * @license		http://opensource.org/licenses/bsd-license.php
 * @link		http://titon.io
 */

namespace Titon\Test\Fixture;

use Titon\Test\TestFixture;

class SeriesFixture extends TestFixture {

	public $model = 'Titon\Test\Stub\Model\Series';

	public $records = [
		['author_id' => 1, 'name' => 'A Song of Ice and Fire'],
		['author_id' => 2, 'name' => 'Harry Potter'],
		['author_id' => 3, 'name' => 'The Lord of the Rings'],
	];

}
