<?php
namespace Titon\Test\Fixture;

use Titon\Test\TestFixture;

class TopicsFixture extends TestFixture {

    public $repository = 'Titon\Test\Stub\Repository\Topic';

    public $records = [
        ['title' => 'Batman vs Superman?', 'slug' => 'batman-vs-superman', 'content' => 'Lorem ipsum dolor sit amet.', 'post_count' => 4],
        ['title' => 'How old do you think Wolverine is?', 'slug' => 'how-old-do-you-think-wolverine-is', 'content' => 'Lorem ipsum dolor sit amet.', 'post_count' => 1],
    ];

}
