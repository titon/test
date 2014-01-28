<?php
/**
 * @copyright   2010-2013, The Titon Project
 * @license     http://opensource.org/licenses/bsd-license.php
 * @link        http://titon.io
 */

namespace Titon\Test\Stub\Model;

class Series extends TestModel {

    protected $table = 'series';

    protected $hasMany = [
        'Books' => ['Titon\Test\Stub\Model\Book', 'series_id']
    ];

}