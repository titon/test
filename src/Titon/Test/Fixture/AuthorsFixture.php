<?php
namespace Titon\Test\Fixture;

use Titon\Test\TestFixture;

class AuthorsFixture extends TestFixture {

    public $repository = 'Titon\Test\Stub\Repository\Author';

    public $records = [
        ['name' => 'George R. R. Martin'],
        ['name' => 'J. K. Rowling'],
        ['name' => 'J. R. R. Tolkien'],
    ];

}
