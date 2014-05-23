<?php
namespace Titon\Test\Stub;

use Titon\View\View\AbstractView;

/**
 * Stub for Titon\View\View.
 */
class ViewStub extends AbstractView {

    public function render($template, $private = false) {}
    public function renderTemplate($path, array $variables = array()) {}

}