<?php

App::uses('AppModel', 'Model');

/**
 * Category Model
 *
 * @property Category $ParentCategory
 * @property Category $ChildCategory
 * @property Post $Post
 */
class Lienhe extends AppModel {
	/**
	 * Display field
	 *
	 * @var string
	 */
	public $displayField = 'id';

	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public $validate = array(
	);

}
