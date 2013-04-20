<?php
/**
 * @copyright	Copyright 2010-2013, The Titon Project
 * @license		http://opensource.org/licenses/bsd-license.php
 * @link		http://titon.io
 */

namespace Titon\Test\Fixture;

use Titon\View\Helper\AbstractHelper;

/**
 * Fixture for Titon\View\Helper.
 */
class HelperFixture extends AbstractHelper {

	protected $_tags = array(
		'noattr' => '<tag>{body}</tag>',
		'nobody' => '<tag{attr} />',
		'custom' => '<tag {one} {two}>{three}</tag>',
		'default' => '<tag {0}>{1}</tag>{2}'
	);

}