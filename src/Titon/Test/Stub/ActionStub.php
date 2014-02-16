<?php
/**
 * @copyright   2010-2013, The Titon Project
 * @license     http://opensource.org/licenses/bsd-license.php
 * @link        http://titon.io
 */

namespace Titon\Test\Stub;

use Titon\Controller\Action\AbstractAction;

/**
 * Stub for Titon\Controller\Action.
 */
class ActionStub extends AbstractAction {

    public function get() {
        $this->_controller->addConfig(array(
            'foo' => 'baz',
            'test' => 'value'
        ));
    }

    public function post() {}

    public function delete() {}

    public function put() {}

}