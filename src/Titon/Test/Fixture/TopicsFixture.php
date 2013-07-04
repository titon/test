<?php
/**
 * @copyright	Copyright 2010-2013, The Titon Project
 * @license		http://opensource.org/licenses/bsd-license.php
 * @link		http://titon.io
 */

namespace Titon\Test\Fixture;

use Titon\Test\TestFixture;

class TopicsFixture extends TestFixture {

	public $model = 'Titon\Test\Stub\Model\Topic';

	public $records = [
		['id' => 1, 'title' => 'Batman vs Superman?', 'content' => 'Lorem ipsum dolor sit amet.', 'post_count' => 4],
		['id' => 2, 'title' => 'How old do you think Wolverine is?', 'content' => 'Lorem ipsum dolor sit amet.', 'post_count' => 1],
	];

}
