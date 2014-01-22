<?php
/**
 * @copyright   2010-2013, The Titon Project
 * @license     http://opensource.org/licenses/bsd-license.php
 * @link        http://titon.io
 */

namespace Titon\Test\Stub\Repository;

use Titon\Db\Mongo\Collection;

class Mongo extends Collection {

    protected $_config = [
        'primaryKey' => '_id',
        'table' => 'mongo'
    ];

    protected $_schema = [
        'array' => ['type' => 'array', 'default' => []],
        'blob' => 'blob',
        'datetime' => ['type' => 'datetime', 'default' => null],
        'int' => 'int',
        'int32' => 'int32',
        'int64' => 'int64',
        'object' => 'object'
    ];

}