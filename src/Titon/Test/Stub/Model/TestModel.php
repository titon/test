<?php
/**
 * @copyright   2010-2013, The Titon Project
 * @license     http://opensource.org/licenses/bsd-license.php
 * @link        http://titon.io
 */

namespace Titon\Test\Stub\Model;

use Titon\Db\Database;
use Titon\Db\Mongo\Collection;
use Titon\Model\Model;

class TestModel extends Model {

    /**
     * Fix PK for MongoDB.
     */
    public function initialize() {
        $driver = Database::registry()->getDriver('default');

        if ($driver instanceof \Titon\Db\Mongo\MongoDriver) {
            $this->primaryKey = '_id';
        }
    }

    /**
     * Fix repo for MongoDB.
     */
    public function getRepository() {
        $driver = Database::registry()->getDriver('default');

        if ($driver instanceof \Titon\Db\Mongo\MongoDriver && !$this->_repository) {
            $this->setRepository(new Collection([
                'connection' => $this->connection,
                'table' => $this->table,
                'prefix' => $this->prefix,
                'primaryKey' => '_id',
                'displayField' => $this->displayField,
                'entity' => get_class($this)
            ]));
        }

        return parent::getRepository();
    }

}