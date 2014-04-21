<?php
/**
 * @copyright   2010-2013, The Titon Project
 * @license     http://opensource.org/licenses/bsd-license.php
 * @link        http://titon.io
 */

namespace Titon\Test\Stub;

use Titon\Route\Filter;
use Titon\Route\Route;
use Titon\Route\Router;

/**
 * Stub for Titon\Route\Filter.
 */
class FilterStub implements Filter {

    public function filter(Router $router, Route $route) {}

}