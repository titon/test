<?php
namespace Titon\Test\Stub\Model;

class Book extends TestModel {

    protected $table = 'books';

    protected $belongsToMany = [
        'Genres' => ['Titon\Test\Stub\Model\Genre', 'books_genres', 'book_id', 'genre_id']
    ];

}