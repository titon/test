<?php
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