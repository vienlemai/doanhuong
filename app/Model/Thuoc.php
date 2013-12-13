<?php
App::uses('AppModel', 'Model');
/**
 * Thuoc Model
 *
 * @property Category $Category
 */
class Thuoc extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'ten_thuoc';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Category' => array(
			'className' => 'Category',
			'foreignKey' => 'category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
