<?php
/**
 * @copyright   2010-2013, The Titon Project
 * @license     http://opensource.org/licenses/bsd-license.php
 * @link        http://titon.io
 */

namespace Titon\Test\Stub\Repository;

use Titon\Db\Relation\ManyToOne;

class Post extends TestRepository {

    protected $_config = [
        'table' => 'posts'
    ];

    protected $_schema = [
        'id' => ['type' => 'int', 'ai' => true, 'primary' => true],
        'topic_id' => ['type' => 'int', 'index' => true],
        'active' => ['type' => 'smallint', 'default' => 0],
        'deleted' => ['type' => 'smallint', 'default' => 0],
        'content' => 'text',
        'created_at' => 'datetime',
        'deleted_at' => 'datetime'
    ];

    public function initialize() {
        parent::initialize();

        $this->addRelation(new ManyToOne('Topic', 'Titon\Test\Stub\Repository\Topic'))
            ->setForeignKey('topic_id');
    }

}