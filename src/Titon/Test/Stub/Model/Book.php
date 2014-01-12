<?php
/**
 * @copyright   2010-2013, The Titon Project
 * @license     http://opensource.org/licenses/bsd-license.php
 * @link        http://titon.io
 */

namespace Titon\Test\Stub\Model;

use Titon\Model\Model;

class Book extends Model {

    protected $table = 'books';

    protected $belongsToMany = [
        'Genres' => ['Titon\Test\Stub\Model\Genre', 'Titon\Test\Stub\Model\BookGenre', 'book_id', 'genre_id']
    ];

}