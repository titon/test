<?php
/**
 * @copyright   2010-2013, The Titon Project
 * @license     http://opensource.org/licenses/bsd-license.php
 * @link        http://titon.io
 */

namespace Titon\Test\Fixture;

use Titon\Test\TestFixture;

class OrdersFixture extends TestFixture {

    public $table = 'Titon\Test\Stub\Repository\Order';

    public $records = [
        ['user_id' => 1, 'quantity' => 15, 'status' => 'pending', 'shipped' => null],
        ['user_id' => 2, 'quantity' => 33, 'status' => 'pending', 'shipped' => null],
        ['user_id' => 3, 'quantity' => 4, 'status' => 'pending', 'shipped' => null],
        ['user_id' => 4, 'quantity' => 24, 'status' => 'pending', 'shipped' => null],
        ['user_id' => 5, 'quantity' => 29, 'status' => 'pending', 'shipped' => null],
        ['user_id' => 2, 'quantity' => 1, 'status' => 'pending', 'shipped' => null],
        ['user_id' => 2, 'quantity' => 2, 'status' => 'pending', 'shipped' => null],
        ['user_id' => 3, 'quantity' => 3, 'status' => 'pending', 'shipped' => null],
        ['user_id' => 4, 'quantity' => 4, 'status' => 'pending', 'shipped' => null],
        ['user_id' => 5, 'quantity' => 5, 'status' => 'pending', 'shipped' => null],
        // 10
        ['user_id' => 1, 'quantity' => 33, 'status' => 'pending', 'shipped' => null],
        ['user_id' => 4, 'quantity' => 26, 'status' => 'pending', 'shipped' => null],
        ['user_id' => 3, 'quantity' => 23, 'status' => 'pending', 'shipped' => null],
        ['user_id' => 4, 'quantity' => 20, 'status' => 'pending', 'shipped' => null],
        ['user_id' => 5, 'quantity' => 18, 'status' => 'pending', 'shipped' => null],
        ['user_id' => 5, 'quantity' => 33, 'status' => 'shipped', 'shipped' => '2013-06-27 12:33:02'],
        ['user_id' => 2, 'quantity' => 26, 'status' => 'shipped', 'shipped' => '2013-06-28 12:33:02'],
        ['user_id' => 3, 'quantity' => 23, 'status' => 'shipped', 'shipped' => '2013-06-29 12:33:02'],
        ['user_id' => 4, 'quantity' => 20, 'status' => 'delivered', 'shipped' => '2013-06-30 12:33:02'],
        ['user_id' => 5, 'quantity' => 18, 'status' => 'delivered', 'shipped' => '2013-06-30 12:33:02'],
        // 20
        ['user_id' => 1, 'quantity' => 17, 'status' => 'delivered', 'shipped' => '2013-05-27 12:33:02'],
        ['user_id' => 2, 'quantity' => 15, 'status' => 'shipped', 'shipped' => '2013-12-28 12:33:02'],
        ['user_id' => 3, 'quantity' => 13, 'status' => 'shipped', 'shipped' => '2013-11-29 12:33:02'],
        ['user_id' => 3, 'quantity' => 11, 'status' => 'shipped', 'shipped' => '2013-02-30 12:33:02'],
        ['user_id' => 5, 'quantity' => 9, 'status' => 'shipped', 'shipped' => '2013-04-30 12:33:02'],
        ['user_id' => 1, 'quantity' => 17, 'status' => 'delivered', 'shipped' => '2013-02-11 12:33:02'],
        ['user_id' => 1, 'quantity' => 15, 'status' => 'shipped', 'shipped' => '2013-04-14 12:33:02'],
        ['user_id' => 3, 'quantity' => 13, 'status' => 'delivered', 'shipped' => '2013-06-03 12:33:02'],
        ['user_id' => 4, 'quantity' => 11, 'status' => 'shipped', 'shipped' => '2013-08-15 12:33:02'],
        ['user_id' => 4, 'quantity' => 9, 'status' => 'delivered', 'shipped' => '2013-10-25 12:33:02'],
        // 30
    ];

}
