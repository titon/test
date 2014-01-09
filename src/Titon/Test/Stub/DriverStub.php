<?php
/**
 * @copyright   2010-2013, The Titon Project
 * @license     http://opensource.org/licenses/bsd-license.php
 * @link        http://titon.io
 */

namespace Titon\Test\Stub;

use Titon\Db\Driver\AbstractPdoDriver;

/**
 * Stub for Titon\Db\Driver.
 */
class DriverStub extends AbstractPdoDriver {

    protected $_config = array('port' => 3306);

    public function initialize() {
        $this->setDialect(new DialectStub($this));
    }

    public function getDriver() {
        return 'mysql';
    }

    public function getDsn() {
        if ($dsn = $this->config->dsn) {
            return $dsn;
        }

        $params = ['dbname=' . $this->getDatabase()];

        if ($socket = $this->getSocket()) {
            $params[] = 'unix_socket=' . $socket;
        } else {
            $params[] = 'host=' . $this->getHost();
            $params[] = 'port=' . $this->getPort();
        }

        if ($encoding = $this->getEncoding()) {
            $params[] = 'charset=' . $encoding;
        }

        $dsn = $this->getDriver() . ':' . implode(';', $params);

        return $dsn;
    }

    public function getSupportedTypes() {
        return array(
            'tinyint' => 'Titon\Db\Driver\Type\IntType',
            'smallint' => 'Titon\Db\Driver\Type\IntType',
            'mediumint' => 'Titon\Db\Driver\Type\IntType',
            'int' => 'Titon\Db\Driver\Type\IntType',
            'bigint' => 'Titon\Db\Driver\Type\BigintType',
            'float' => 'Titon\Db\Driver\Type\FloatType',
            'double' => 'Titon\Db\Driver\Type\DoubleType',
            'decimal' => 'Titon\Db\Driver\Type\DecimalType',
            'boolean' => 'Titon\Db\Driver\Type\BooleanType',
            'date' => 'Titon\Db\Driver\Type\DateType',
            'datetime' => 'Titon\Db\Driver\Type\DatetimeType',
            'timestamp' => 'Titon\Db\Driver\Type\DatetimeType',
            'time' => 'Titon\Db\Driver\Type\TimeType',
            'year' => 'Titon\Db\Driver\Type\YearType',
            'char' => 'Titon\Db\Driver\Type\CharType',
            'varchar' => 'Titon\Db\Driver\Type\StringType',
            'tinytext' => 'Titon\Db\Driver\Type\TextType',
            'mediumtext' => 'Titon\Db\Driver\Type\TextType',
            'text' => 'Titon\Db\Driver\Type\TextType',
            'longtext' => 'Titon\Db\Driver\Type\TextType',
            'tinyblob' => 'Titon\Db\Driver\Type\BlobType',
            'mediumblob' => 'Titon\Db\Driver\Type\BlobType',
            'blob' => 'Titon\Db\Driver\Type\BlobType',
            'longblob' => 'Titon\Db\Driver\Type\BlobType',
        );
    }

    public function isEnabled() {
        return extension_loaded('pdo_mysql');
    }

}