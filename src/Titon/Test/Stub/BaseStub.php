<?php
/**
 * @copyright	Copyright 2010-2013, The Titon Project
 * @license		http://opensource.org/licenses/bsd-license.php
 * @link		http://titon.io
 */

namespace Titon\Test\Stub;

use Titon\Common\Base;

/**
 * Stub for Titon\Common\Base.
 */
class BaseStub extends Base {

	protected $_config = array(
		'foo' => 'bar',
		'cfg' => true
	);

}