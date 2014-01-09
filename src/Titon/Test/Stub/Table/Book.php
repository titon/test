<?php
/**
 * @copyright   2010-2013, The Titon Project
 * @license     http://opensource.org/licenses/bsd-license.php
 * @link        http://titon.io
 */

namespace Titon\Test\Stub\Table;

use Titon\Db\Relation\ManyToMany;
use Titon\Db\Relation\ManyToOne;

class Book extends TestTable {

    protected $_config = [
        'table' => 'books'
    ];

    protected $_schema = [
        'id' => ['type' => 'int', 'ai' => true, 'primary' => true],
        'series_id' => ['type' => 'int', 'index' => true],
        'name' => 'varchar',
        'isbn' => 'varchar',
        'released' => 'date'
    ];

    public function initialize() {
        parent::initialize();

        // Belongs to
        $this->addRelation(new ManyToOne('Series', 'Titon\Test\Stub\Table\Series'))
            ->setForeignKey('series_id');

        // Belongs to many
        $this->addRelation(new ManyToMany('Genres', 'Titon\Test\Stub\Table\Genre'))
            ->setForeignKey('book_id')
            ->setRelatedForeignKey('genre_id')
            ->setJunctionClass('Titon\Test\Stub\Table\BookGenre');
    }

}