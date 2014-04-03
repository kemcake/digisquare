<?php
App::uses('AppModel', 'Model');
/**
 * Rule Model
 *
 * @property Badge $Badge
 * @property Point $Point
 */
class Rule extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Badge' => array(
			'className' => 'Badge',
			'foreignKey' => 'badge_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Point' => array(
			'className' => 'Point',
			'foreignKey' => 'rule_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
