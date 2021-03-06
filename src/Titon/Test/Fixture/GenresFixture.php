<?php
namespace Titon\Test\Fixture;

use Titon\Test\TestFixture;

class GenresFixture extends TestFixture {

    public $repository = 'Titon\Test\Stub\Repository\Genre';

    public $records = [
        ['name' => 'Action', 'book_count' => 0],
        ['name' => 'Adventure', 'book_count' => 7],
        ['name' => 'Action-Adventure', 'book_count' => 8],
        ['name' => 'Comedy', 'book_count' => 0],
        ['name' => 'Horror', 'book_count' => 5],
        ['name' => 'Thriller', 'book_count' => 3],
        ['name' => 'Mystery', 'book_count' => 7],
        ['name' => 'Fantasy', 'book_count' => 15],
        ['name' => 'Romance', 'book_count' => 0],
        ['name' => 'Sci-fi', 'book_count' => 0],
        // 10
        ['name' => 'Fiction', 'book_count' => 0]
    ];

}
