<?php
/**
 * @copyright	Copyright 2010-2013, The Titon Project
 * @license		http://opensource.org/licenses/bsd-license.php
 * @link		http://titon.io
 */

namespace Titon\Test\Fixture;

use Titon\Common\Base;
use Titon\Common\Traits\Cacheable;

/**
 * Fixture for Titon\Common\Augment.
 */
class AugmentFixture extends Base {
	use Cacheable;

	const YES = true;
	const NO = false;

	public $publicProp;
	protected $protectedProp;
	private $privateProp;

	public static $staticPublicProp;
	protected static $staticProtectedProp;
	private static $staticPrivateProp;

	public function publicMethod() { }
	protected function protectedMethod() { }
	private function privateMethod() { }

	public static function staticPublicMethod() { }
	protected static function staticProtectedMethod() { }
	private static function staticPrivateMethod() { }

	public function serialize() { }
	public function unserialize($data) { }

}