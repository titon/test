<?php
/**
 * @copyright   2010-2013, The Titon Project
 * @license     http://opensource.org/licenses/bsd-license.php
 * @link        http://titon.io
 */

namespace Titon\Test\Stub\Repository;

class User extends TestRepository {

    protected $_config = [
        'table' => 'users'
    ];

    protected $_schema = [
        'id' => ['type' => 'int', 'ai' => true, 'primary' => true],
        'country_id' => ['type' => 'int', 'index' => true, 'null' => true, 'default' => null],
        'username' => ['type' => 'varchar', 'unique' => true],
        'password' => 'varchar',
        'email' => 'varchar',
        'firstName' => 'varchar',
        'lastName' => 'varchar',
        'age' => 'smallint',
        'created' => 'datetime',
        'modified' => 'datetime'
    ];

}