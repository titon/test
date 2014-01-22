<?php
/**
 * @copyright   2010-2013, The Titon Project
 * @license     http://opensource.org/licenses/bsd-license.php
 * @link        http://titon.io
 */

namespace Titon\Test\Fixture;

use Titon\Test\TestFixture;

class BooksFixture extends TestFixture {

    public $table = 'Titon\Test\Stub\Repository\Book';

    public $records = [
        ['series_id' => 1, 'name' => 'A Game of Thrones', 'isbn' => '0-553-10354-7', 'released' => '1996-08-02'],
        ['series_id' => 1, 'name' => 'A Clash of Kings', 'isbn' => '0-553-10803-4', 'released' => '1999-02-25'],
        ['series_id' => 1, 'name' => 'A Storm of Swords', 'isbn' => '0-553-10663-5', 'released' => '2000-11-11'],
        ['series_id' => 1, 'name' => 'A Feast for Crows', 'isbn' => '0-553-80150-3', 'released' => '2005-11-02'],
        ['series_id' => 1, 'name' => 'A Dance with Dragons', 'isbn' => '0-553-80147-3', 'released' => '2011-07-19'],
        // 5
        ['series_id' => 2, 'name' => 'Harry Potter and the Philosopher\'s Stone', 'isbn' => '0-7475-3269-9', 'released' => '1997-06-27'],
        ['series_id' => 2, 'name' => 'Harry Potter and the Chamber of Secrets', 'isbn' => '0-7475-3849-2', 'released' => '1998-07-02'],
        ['series_id' => 2, 'name' => 'Harry Potter and the Prisoner of Azkaban', 'isbn' => '0-7475-4215-5', 'released' => '1999-07-09'],
        ['series_id' => 2, 'name' => 'Harry Potter and the Goblet of Fire', 'isbn' => '0-7475-4624-X', 'released' => '2000-07-08'],
        ['series_id' => 2, 'name' => 'Harry Potter and the Order of the Phoenix', 'isbn' => '0-7475-5100-6', 'released' => '2003-06-21'],
        ['series_id' => 2, 'name' => 'Harry Potter and the Half-blood Prince', 'isbn' => '0-7475-8108-8', 'released' => '2005-07-16'],
        ['series_id' => 2, 'name' => 'Harry Potter and the Deathly Hallows', 'isbn' => '0-545-01022-5', 'released' => '2007-07-21'],
        // 12
        ['series_id' => 3, 'name' => 'The Fellowship of the Ring', 'isbn' => '', 'released' => '1954-07-24'],
        ['series_id' => 3, 'name' => 'The Two Towers', 'isbn' => '', 'released' => '1954-11-11'],
        ['series_id' => 3, 'name' => 'The Return of the King', 'isbn' => '', 'released' => '1955-10-25'],
    ];

}
