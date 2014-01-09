<?php
/**
 * @copyright   2010-2013, The Titon Project
 * @license     http://opensource.org/licenses/bsd-license.php
 * @link        http://titon.io
 */

namespace Titon\Test\Fixture;

use Titon\Test\TestFixture;

class PostsFixture extends TestFixture {

    public $table = 'Titon\Test\Stub\Table\Post';

    public $records = [
        ['topic_id' => 1, 'active' => 1, 'content' => 'Curabitur vulputate sem eget metus dignissim varius.'],
        ['topic_id' => 1, 'active' => 1, 'content' => 'Proin sed magna accumsan, mattis dolor at, commodo nisl.'],
        ['topic_id' => 1, 'active' => 1, 'content' => 'Nullam vel pulvinar lorem. Ut id egestas justo.'],
        ['topic_id' => 1, 'active' => 0, 'content' => 'Vestibulum dapibus nunc quis erat placerat accumsan.'],
        ['topic_id' => 1, 'active' => 1, 'content' => 'Nullam congue dolor sed luctus pulvinar.'],
        ['topic_id' => 2, 'active' => 1, 'content' => 'Suspendisse faucibus lacus eget ullamcorper dictum.'],
        ['topic_id' => 2, 'active' => 0, 'content' => 'Quisque dui nulla, semper nec sagittis quis.'],
    ];

}
