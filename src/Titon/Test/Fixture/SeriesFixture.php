<?php
namespace Titon\Test\Fixture;

use Titon\Test\TestFixture;

class SeriesFixture extends TestFixture {

    public $repository = 'Titon\Test\Stub\Repository\Series';

    public $records = [
        ['author_id' => 1, 'name' => 'A Song of Ice and Fire'],
        ['author_id' => 2, 'name' => 'Harry Potter'],
        ['author_id' => 3, 'name' => 'The Lord of the Rings'],
    ];

}
