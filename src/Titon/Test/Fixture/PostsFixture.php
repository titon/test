<?php
namespace Titon\Test\Fixture;

use Titon\Test\TestFixture;

class PostsFixture extends TestFixture {

    public $repository = 'Titon\Test\Stub\Repository\Post';

    public $records = [
        ['topic_id' => 1, 'active' => 1, 'deleted' => 1, 'content' => 'Curabitur vulputate sem eget metus dignissim varius.', 'created_at' => '2012-01-01 00:12:34', 'deleted_at' => '2012-02-06 23:55:33'],
        ['topic_id' => 1, 'active' => 1, 'deleted' => 0, 'content' => 'Proin sed magna accumsan, mattis dolor at, commodo nisl.', 'created_at' => '2012-04-06 23:55:33', 'deleted_at' => null],
        ['topic_id' => 1, 'active' => 1, 'deleted' => 0, 'content' => 'Nullam vel pulvinar lorem. Ut id egestas justo.', 'created_at' => '2012-07-29 11:36:12', 'deleted_at' => null],
        ['topic_id' => 1, 'active' => 0, 'deleted' => 0, 'content' => 'Vestibulum dapibus nunc quis erat placerat accumsan.', 'created_at' => '2012-11-30 22:42:22', 'deleted_at' => null],
        ['topic_id' => 1, 'active' => 1, 'deleted' => 1, 'content' => 'Nullam congue dolor sed luctus pulvinar.', 'created_at' => '2013-02-26 11:44:33', 'deleted_at' => '2013-11-06 22:13:27'],
        ['topic_id' => 2, 'active' => 1, 'deleted' => 1, 'content' => 'Suspendisse faucibus lacus eget ullamcorper dictum.', 'created_at' => '2013-06-18 03:25:03', 'deleted_at' => '2013-08-08 02:03:11'],
        ['topic_id' => 2, 'active' => 0, 'deleted' => 1, 'content' => 'Quisque dui nulla, semper nec sagittis quis.', 'created_at' => '2013-08-08 02:03:11', 'deleted_at' => null], // deleted_at is null
    ];

}
