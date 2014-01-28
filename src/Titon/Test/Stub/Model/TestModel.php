<?php
/**
 * @copyright   2010-2013, The Titon Project
 * @license     http://opensource.org/licenses/bsd-license.php
 * @link        http://titon.io
 */

namespace Titon\Test\Stub\Model;

use Titon\Common\Registry;
use Titon\Db\Mongo\Collection;
use Titon\Model\Model;

class TestModel extends Model {

    /**
     * Swap between types depending on the driver.
     */
    public function getRepository() {
        $driver = Registry::factory('Titon\Db\Connection')->getDriver('default');

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