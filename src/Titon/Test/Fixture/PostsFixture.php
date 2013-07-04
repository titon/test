<?php
/**
 * @copyright	Copyright 2010-2013, The Titon Project
 * @license		http://opensource.org/licenses/bsd-license.php
 * @link		http://titon.io
 */

namespace Titon\Test\Fixture;

use Titon\Test\TestFixture;

class PostsFixture extends TestFixture {

	public $model = 'Titon\Test\Stub\Model\Post';

	public $records = [
		['id' => 1, 'topic_id' => 1, 'active' => 1, 'content' => 'Curabitur vulputate sem eget metus dignissim varius.'],
		['id' => 2, 'topic_id' => 1, 'active' => 1, 'content' => 'Proin sed magna accumsan, mattis dolor at, commodo nisl.'],
		['id' => 3, 'topic_id' => 1, 'active' => 1, 'content' => 'Nullam vel pulvinar lorem. Ut id egestas justo.'],
		['id' => 4, 'topic_id' => 1, 'active' => 0, 'content' => 'Vestibulum dapibus nunc quis erat placerat accumsan.'],
		['id' => 5, 'topic_id' => 1, 'active' => 1, 'content' => 'Nullam congue dolor sed luctus pulvinar.'],
		['id' => 6, 'topic_id' => 2, 'active' => 1, 'content' => 'Suspendisse faucibus lacus eget ullamcorper dictum.'],
		['id' => 7, 'topic_id' => 2, 'active' => 0, 'content' => 'Quisque dui nulla, semper nec sagittis quis.'],
	];

}
