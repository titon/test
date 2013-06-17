<?php
/**
 * @copyright	Copyright 2010-2013, The Titon Project
 * @license		http://opensource.org/licenses/bsd-license.php
 * @link		http://titon.io
 */

namespace Titon\Test\Stub;

use Titon\Model\Driver\AbstractPdoDriver;

/**
 * Stub for Titon\Model\Driver.
 */
class DriverStub extends AbstractPdoDriver {

	protected $_config = array('port' => 3306);

	public function initialize() {
		$this->setDialect(new DialectStub($this));
	}

	public function getDriver() {
		return 'mysql';
	}

	public function getSupportedTypes() {
		return array(
			'tinyint' => 'Titon\Model\Driver\Type\IntType',
			'smallint' => 'Titon\Model\Driver\Type\IntType',
			'mediumint' => 'Titon\Model\Driver\Type\IntType',
			'int' => 'Titon\Model\Driver\Type\IntType',
			'bigint' => 'Titon\Model\Driver\Type\BigintType',
			'float' => 'Titon\Model\Driver\Type\FloatType',
			'double' => 'Titon\Model\Driver\Type\DoubleType',
			'decimal' => 'Titon\Model\Driver\Type\DecimalType',
			'boolean' => 'Titon\Model\Mysql\Type\BooleanType',
			'date' => 'Titon\Model\Driver\Type\DateType',
			'datetime' => 'Titon\Model\Driver\Type\DatetimeType',
			'timestamp' => 'Titon\Model\Driver\Type\DatetimeType',
			'time' => 'Titon\Model\Driver\Type\TimeType',
			'year' => 'Titon\Model\Driver\Type\YearType',
			'char' => 'Titon\Model\Driver\Type\CharType',
			'varchar' => 'Titon\Model\Driver\Type\StringType',
			'tinytext' => 'Titon\Model\Driver\Type\TextType',
			'mediumtext' => 'Titon\Model\Driver\Type\TextType',
			'text' => 'Titon\Model\Driver\Type\TextType',
			'longtext' => 'Titon\Model\Driver\Type\TextType',
			'tinyblob' => 'Titon\Model\Driver\Type\BlobType',
			'mediumblob' => 'Titon\Model\Driver\Type\BlobType',
			'blob' => 'Titon\Model\Driver\Type\BlobType',
			'longblob' => 'Titon\Model\Driver\Type\BlobType',
		);
	}

	public function isEnabled() {
		return extension_loaded('pdo_mysql');
	}

}