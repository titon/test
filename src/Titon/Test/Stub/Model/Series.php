<?php
/**
 * @copyright   2010-2013, The Titon Project
 * @license     http://opensource.org/licenses/bsd-license.php
 * @link        http://titon.io
 */

namespace Titon\Test\Stub\Model;

use Titon\Model\Model;

class Series extends Model {

    protected $table = 'series';

    protected $hasMany = [
        'Books' => ['Titon\Test\Stub\Model\Book', 'series_id']
    ];

}