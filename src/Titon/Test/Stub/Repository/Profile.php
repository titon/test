<?php
/**
 * @copyright   2010-2013, The Titon Project
 * @license     http://opensource.org/licenses/bsd-license.php
 * @link        http://titon.io
 */

namespace Titon\Test\Stub\Repository;

use Titon\Db\Relation\ManyToOne;

class Profile extends TestRepository {

    protected $_config = [
        'table' => 'profiles'
    ];

    protected $_schema = [
        'id' => ['type' => 'int', 'ai' => true, 'primary' => true],
        'user_id' => ['type' => 'int', 'index' => true],
        'lastLogin' => 'datetime',
        'currentLogin' => 'datetime'
    ];

    public function initialize() {
        parent::initialize();

        $this->addRelation(new ManyToOne('User', 'Titon\Test\Stub\Repository\User'))
            ->setForeignKey('user_id');
    }

}