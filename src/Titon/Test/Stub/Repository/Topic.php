<?php
/**
 * @copyright   2010-2013, The Titon Project
 * @license     http://opensource.org/licenses/bsd-license.php
 * @link        http://titon.io
 */

namespace Titon\Test\Stub\Repository;

use Titon\Db\Relation\OneToMany;

class Topic extends TestRepository {

    protected $_config = [
        'table' => 'topics'
    ];

    protected $_schema = [
        'id' => ['type' => 'int', 'ai' => true, 'primary' => true],
        'title' => 'varchar',
        'slug' => 'varchar',
        'content' => 'text',
        'post_count' => 'int',
        'created' => 'datetime',
        'modified' => 'datetime'
    ];

    public function initialize() {
        parent::initialize();

        $this->addRelation(new OneToMany('Posts', 'Titon\Test\Stub\Repository\Post'))
            ->setRelatedForeignKey('topic_id')
            ->setConditions(function() {
                $this->orderBy('id', 'asc');
            });
    }

}