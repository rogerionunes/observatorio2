<?php
/**
 * User Model
 * 
 */

App::uses('AppModel', 'Model');

class Whoweare extends AppModel {


	/**
	 * Nome
	 */
	public $name = 'Whoweare';

	/**
	 * Validações
	 */
	public $validate = array(
	    'description' => array(
			'required' => array(
				'rule' => array('notempty'),
				'message' => 'Campo obrigatório.'
			)
		),
		'title' => array(
			'required' => array(
				'rule' => array('notempty'),
				'message' => 'Campo obrigatório.'
			)
		)
	);
	
}
