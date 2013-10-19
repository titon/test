<?php
/**
 * @copyright   2010-2013, The Titon Project
 * @license     http://opensource.org/licenses/bsd-license.php
 * @link        http://titon.io
 */

namespace Titon\Test\Stub\Model;

use Titon\Model\Relation\ManyToOne;
use Titon\Model\Relation\OneToOne;

class User extends TestModel {

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

        $this->addRelation(new OneToOne('Profile', 'Titon\Test\Stub\Model\Profile'))
            ->setRelatedForeignKey('user_id');

        $this->addRelation(new ManyToOne('Country', 'Titon\Test\Stub\Model\Country'))
            ->setForeignKey('country_id');
    }

}