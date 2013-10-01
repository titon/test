<?php
/**
 * @copyright   2010-2013, The Titon Project
 * @license     http://opensource.org/licenses/bsd-license.php
 * @link        http://titon.io
 */

namespace Titon\Test\Stub;

use Titon\Type\Enum;

/**
 * Stub for Titon\Type\Enum.
 */
class EnumStub extends Enum {

    const WARRIOR = 0;
    const RANGER = 1;
    const MAGE = 2;

    public $name;
    public $melee;
    public $health;
    public $energy;

    protected $_enums = array(
        self::WARRIOR => array('Warrior', true, 1000),
        self::RANGER => array('Ranger', false, 500, 250),
        self::MAGE => array('Mage', false, 300, 600)
    );

    public function initialize($name, $melee, $health, $energy = 0) {
        $this->name = $name;
        $this->melee = $melee;
        $this->health = $health;
        $this->energy = $energy;
    }

}