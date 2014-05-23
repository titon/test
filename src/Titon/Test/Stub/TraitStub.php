<?php
namespace Titon\Test\Stub;

use Titon\Common\Base;
use Titon\Common\Traits\Attachable;
use Titon\Common\Traits\Cacheable;
use Titon\Common\Traits\Instanceable;

/**
 * Stub for Titon\Common\Traits.
 */
class TraitStub extends Base {
    use Cacheable, Attachable, Instanceable;

    public function initialize() {
        $this->attachObject('relation', function() {
            return new TraitStub();
        });
    }

}