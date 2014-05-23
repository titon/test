<?php
namespace Titon\Test\Stub\Repository;

use Titon\Db\Repository;

class TestRepository extends Repository {

    /**
     * Swap between types depending on the driver.
     */
    public function initialize() {
        parent::initialize();

        $driver = $this->getDriver();

        if ($driver instanceof \Titon\Db\Pgsql\PgsqlDriver) {
            foreach ($this->_schema as $field => $data) {
                if ($field === 'id') {
                    $this->_schema[$field] = ['type' => 'serial', 'null' => false, 'primary' => true];

                }  else if (is_array($data)) {
                    $this->_schema[$field]['type'] = $this->migratePgsql($data['type']);

                } else {
                    $this->_schema[$field] = $this->migratePgsql($data);
                }
            }

        } else if ($driver instanceof \Titon\Db\Mongo\MongoDriver) {
            $this->setConfig('primaryKey', '_id');
            $this->_schema = [];
        }
    }

    /**
     * Allow for driver changes.
     */
    public function getPrimaryKey() {
        if ($this->getDriver() instanceof \Titon\Db\Mongo\MongoDriver) {
            return '_id';
        }

        return parent::getPrimaryKey();
    }

    /**
     * Migrate to PostgreSQL types.
     */
    public function migratePgsql($type) {
        switch ($type) {
            case 'datetime':    return 'timestamp'; break;
            case 'tinyint':     return 'smallint'; break;
            case 'blob':        return 'bytea'; break;
            case 'double':      return 'double precision'; break;
            case 'float':       return 'real'; break;
        }

        return $type;
    }

}