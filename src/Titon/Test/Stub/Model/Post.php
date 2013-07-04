<?php
/**
 * @copyright	Copyright 2010-2013, The Titon Project
 * @license		http://opensource.org/licenses/bsd-license.php
 * @link		http://titon.io
 */

namespace Titon\Test\Stub\Model;

use Titon\Model\Model;
use Titon\Model\Relation\ManyToOne;

class Post extends Model {

	protected $_config = [
		'table' => 'posts'
	];

	protected $_schema = [
		'id' => ['type' => 'int', 'ai' => true, 'primary' => true],
		'topic_id' => ['type' => 'int', 'index' => true],
		'active' => 'smallint',
		'content' => 'text'
	];

	public function initialize() {
		parent::initialize();

		$this->addRelation(new ManyToOne('Topic', 'Titon\Test\Stub\Model\Topic'))
			->setForeignKey('topic_id');
	}

}