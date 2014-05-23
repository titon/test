<?php
namespace Titon\Test\Stub;

use Titon\View\Helper\AbstractHelper;

/**
 * Stub for Titon\View\Helper.
 */
class HelperStub extends AbstractHelper {

    protected $_tags = array(
        'noattr' => '<tag>{body}</tag>',
        'nobody' => '<tag{attr} />',
        'custom' => '<tag {one} {two}>{three}</tag>',
        'default' => '<tag {0}>{1}</tag>{2}'
    );

}