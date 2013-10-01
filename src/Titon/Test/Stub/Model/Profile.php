<?php
/**
 * @copyright   2010-2013, The Titon Project
 * @license     http://opensource.org/licenses/bsd-license.php
 * @link        http://titon.io
 */

namespace Titon\Test\Stub\Model;

use Titon\Model\Relation\ManyToOne;

class Profile extends TestModel {

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

        $this->addRelation(new ManyToOne('User', 'Titon\Test\Stub\Model\User'))
            ->setForeignKey('user_id');
    }

}