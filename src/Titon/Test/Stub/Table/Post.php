<?php
/**
 * @copyright   2010-2013, The Titon Project
 * @license     http://opensource.org/licenses/bsd-license.php
 * @link        http://titon.io
 */

namespace Titon\Test\Stub\Table;

use Titon\Db\Relation\ManyToOne;

class Post extends TestTable {

    protected $_config = [
        'table' => 'posts'
    ];

    protected $_schema = [
        'id' => ['type' => 'int', 'ai' => true, 'primary' => true],
        'topic_id' => ['type' => 'int', 'index' => true],
        'active' => 'smallint',
        'content' => 'text'
    ];

    public function initialize() {
        parent::initialize();

        $this->addRelation(new ManyToOne('Topic', 'Titon\Test\Stub\Table\Topic'))
            ->setForeignKey('topic_id');
    }

}