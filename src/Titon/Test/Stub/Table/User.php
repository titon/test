<?php
/**
 * @copyright   2010-2013, The Titon Project
 * @license     http://opensource.org/licenses/bsd-license.php
 * @link        http://titon.io
 */

namespace Titon\Test\Stub\Table;

use Titon\Db\Relation\ManyToOne;
use Titon\Db\Relation\OneToOne;

class User extends TestTable {

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

    public function initialize() {
        parent::initialize();

        $this->addRelation(new OneToOne('Profile', 'Titon\Test\Stub\Table\Profile'))
            ->setRelatedForeignKey('user_id');

        $this->addRelation(new ManyToOne('Country', 'Titon\Test\Stub\Table\Country'))
            ->setForeignKey('country_id');
    }

}