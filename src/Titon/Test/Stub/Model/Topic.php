<?php
/**
 * @copyright	Copyright 2010-2013, The Titon Project
 * @license		http://opensource.org/licenses/bsd-license.php
 * @link		http://titon.io
 */

namespace Titon\Test\Stub\Model;

use Titon\Model\Model;
use Titon\Model\Relation\OneToMany;

class Topic extends Model {

	protected $_config = [
		'table' => 'topics'
	];

	protected $_schema = [
		'id' => ['type' => 'int', 'ai' => true, 'primary' => true],
		'title' => 'varchar',
		'content' => 'text',
		'post_count' => 'int',
		'created' => 'datetime',
		'modified' => 'datetime'
	];

	public function initialize() {
		parent::initialize();

		$this->addRelation(new OneToMany('Posts', 'Titon\Test\Stub\Model\Post'))
			->setRelatedForeignKey('topic_id');
	}

}