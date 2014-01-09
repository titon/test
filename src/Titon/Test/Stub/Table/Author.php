<?php
/**
 * @copyright   2010-2013, The Titon Project
 * @license     http://opensource.org/licenses/bsd-license.php
 * @link        http://titon.io
 */

namespace Titon\Test\Stub\Table;

use Titon\Db\Relation\OneToOne;

class Author extends TestTable {

    protected $_config = [
        'table' => 'authors'
    ];

    protected $_schema = [
        'id' => ['type' => 'int', 'ai' => true, 'primary' => true],
        'name' => 'varchar'
    ];

    public function initialize() {
        parent::initialize();

        // Has one
        $this->addRelation(new OneToOne('Series', 'Titon\Test\Stub\Table\Series'))
            ->setRelatedForeignKey('author_id');
    }

}