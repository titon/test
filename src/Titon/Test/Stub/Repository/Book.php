<?php
/**
 * @copyright   2010-2013, The Titon Project
 * @license     http://opensource.org/licenses/bsd-license.php
 * @link        http://titon.io
 */

namespace Titon\Test\Stub\Repository;

class Book extends TestRepository {

    protected $_config = [
        'table' => 'books'
    ];

    protected $_schema = [
        'id' => ['type' => 'int', 'ai' => true, 'primary' => true],
        'series_id' => ['type' => 'int', 'index' => true],
        'name' => 'varchar',
        'isbn' => 'varchar',
        'released' => 'date'
    ];

}