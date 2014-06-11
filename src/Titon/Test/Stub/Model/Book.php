<?php
namespace Titon\Test\Stub\Model;

class Book extends TestModel {

    protected $table = 'books';

    protected $belongsTo = [
        'Series' => 'Titon\Test\Stub\Model\Series'
    ];

    protected $belongsToMany = [
        'Genres' => [
            'model' => 'Titon\Test\Stub\Model\Genre',
            'junction' => 'books_genres',
            'foreignKey' => 'book_id',
            'relatedForeignKey' => 'genre_id'
        ]
    ];

}