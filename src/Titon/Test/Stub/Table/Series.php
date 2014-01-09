<?php
/**
 * @copyright   2010-2013, The Titon Project
 * @license     http://opensource.org/licenses/bsd-license.php
 * @link        http://titon.io
 */

namespace Titon\Test\Stub\Table;

use Titon\Db\Relation\ManyToOne;
use Titon\Db\Relation\OneToMany;

class Series extends TestTable {

    protected $_config = [
        'table' => 'series'
    ];

    protected $_schema = [
        'id' => ['type' => 'int', 'ai' => true, 'primary' => true],
        'author_id' => ['type' => 'int', 'index' => true],
        'name' => 'varchar'
    ];

    public function initialize() {
        parent::initialize();

        // Belongs to
        $this->addRelation(new ManyToOne('Author', 'Titon\Test\Stub\Table\Author'))
            ->setForeignKey('author_id');

        // Has many
        $this->addRelation(new OneToMany('Books', 'Titon\Test\Stub\Table\Book'))
            ->setRelatedForeignKey('series_id')
            ->setConditions(function() {
                $this->orderBy('id', 'asc');
            });
    }

}