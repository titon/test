<?php
namespace Titon\Test\Stub;

use Titon\View\View\Engine\AbstractEngine;

/**
 * Stub for Titon\View\Engine.
 */
class EngineStub extends AbstractEngine {

    public function open($partial, array $variables = array()) {}
    public function render($path, array $variables = array()) {}
    public function getExtension() {}

}