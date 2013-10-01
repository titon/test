<?php
/**
 * @copyright   2010-2013, The Titon Project
 * @license     http://opensource.org/licenses/bsd-license.php
 * @link        http://titon.io
 */

namespace Titon\Test\Fixture;

use Titon\Test\TestFixture;

class CategoriesFixture extends TestFixture {

    public $model = 'Titon\Test\Stub\Model\Category';

    public $records = [
        ['name' => 'Fruit', 'parent_id' => null, 'left' => 1, 'right' => 20], // 1
            ['name' => 'Banana', 'parent_id' => 1, 'left' => 2, 'right' => 3],
            ['name' => 'Apple', 'parent_id' => 1, 'left' => 4, 'right' => 5],
            ['name' => 'Pear', 'parent_id' => 1, 'left' => 6, 'right' => 7],
            ['name' => 'Berry', 'parent_id' => 1, 'left' => 8, 'right' => 15], // 5
                ['name' => 'Blueberry', 'parent_id' => 5, 'left' => 9, 'right' => 10],
                ['name' => 'Blackberry', 'parent_id' => 5, 'left' => 11, 'right' => 12],
                ['name' => 'Strawberry', 'parent_id' => 5, 'left' => 13, 'right' => 14],
            ['name' => 'Pineapple', 'parent_id' => 1, 'left' => 16, 'right' => 17],
            ['name' => 'Watermelon', 'parent_id' => 1, 'left' => 18, 'right' => 19],
        ['name' => 'Grain', 'parent_id' => null, 'left' => 21, 'right' => 30], // 11
            ['name' => 'Wheat', 'parent_id' => 11, 'left' => 22, 'right' => 23],
            ['name' => 'Bulgur', 'parent_id' => 11, 'left' => 24, 'right' => 25],
            ['name' => 'Barley', 'parent_id' => 11, 'left' => 26, 'right' => 27],
            ['name' => 'Farro', 'parent_id' => 11, 'left' => 28, 'right' => 29],
        ['name' => 'Meat', 'parent_id' => null, 'left' => 31, 'right' => 38], // 16
            ['name' => 'Beef', 'parent_id' => 16, 'left' => 32, 'right' => 33],
            ['name' => 'Pork', 'parent_id' => 16, 'left' => 34, 'right' => 35],
            ['name' => 'Chicken', 'parent_id' => 16, 'left' => 36, 'right' => 37],
        ['name' => 'Seafood', 'parent_id' => null, 'left' => 39, 'right' => 52], // 20
            ['name' => 'Fish', 'parent_id' => 20, 'left' => 40, 'right' => 41],
            ['name' => 'Shellfish', 'parent_id' => 20, 'left' => 42, 'right' => 49], // 22
                ['name' => 'Shrimp', 'parent_id' => 22, 'left' => 43, 'right' => 44],
                ['name' => 'Crab', 'parent_id' => 22, 'left' => 45, 'right' => 46],
                ['name' => 'Lobster', 'parent_id' => 22, 'left' => 47, 'right' => 48],
            ['name' => 'Calamari', 'parent_id' => 20, 'left' => 50, 'right' => 51],
    ];

}