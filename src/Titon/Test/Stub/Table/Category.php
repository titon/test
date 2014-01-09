<?php
/**
 * @copyright   2010-2013, The Titon Project
 * @license     http://opensource.org/licenses/bsd-license.php
 * @link        http://titon.io
 */

namespace Titon\Test\Stub\Table;

class Category extends TestTable {

    protected $_config = [
        'table' => 'categories',
        'displayField' => 'name'
    ];

    protected $_schema = [
        'id' => ['type' => 'int', 'ai' => true, 'primary' => true],
        'parent_id' => ['type' => 'int', 'index' => true, 'null' => true, 'default' => null],
        'name' => 'varchar',
        'left' => ['type' => 'smallint', 'index' => true],
        'right' => ['type' => 'smallint', 'index' => true],
    ];

}