<?php
/**
 * @copyright   2010-2013, The Titon Project
 * @license     http://opensource.org/licenses/bsd-license.php
 * @link        http://titon.io
 */

namespace Titon\Test\Stub\Model;

use Titon\Model\Model;

class BookGenre extends Model {

    protected $table = 'books_genres';

    protected $belongsTo = [
        'Book' => ['Titon\Test\Stub\Model\Book', 'book_id'],
        'Genre' => ['Titon\Test\Stub\Model\Genre', 'genre_id']
    ];

}