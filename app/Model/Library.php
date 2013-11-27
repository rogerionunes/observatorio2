<?php
/**
 * 
 * Library Model
 * 
 */

define('UPLOAD_DIR', WWW_ROOT . 'img/libraries/');


App::uses('AppModel', 'Model');
App::uses('AttachmentBehavior', 'Uploader.Model/Behavior');

class Library extends AppModel {

	/**
	 * Nome
	 */
	public $name = 'Library';

	/**
	 * Plugins
	 */
	public $actsAs = array(
		'Uploader.Attachment' => array(
			'image' => array(
				'uploadDir' => UPLOAD_DIR,
				'nameCallback' => 'getSlug',
				'overwrite' => true,
				'transforms' => array(
					array(
						'method' => 'exif',
						'self' => true
					),
					'image_small' => array(
						'method' => AttachmentBehavior::CROP,
						'nameCallback' => 'getSlug',
						'append' => '-thumb',
						'overwrite' => true,
						'width' => 125,
						'height' => 90
					)
				)
			)
		),
		'Uploader.FileValidation' => array(
			'image' => array(
				'extension' => array('gif', 'jpg', 'png', 'jpeg'),
				'required' => array(
					'value' => false,
					'allowEmpty' => true
				)
			)
		)
	);

	/**
	 * Validações
	 */
	public $validate = array(

	    'odm' => array(
			'required' => array(
				'rule' => array('numeric'),
				'message' => 'Campo obrigatório.'
			)
	    ),

	   	'category' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'Campo obrigatório.'
			)
	    ),

	   	'title' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'Campo obrigatório.'
			)
	    )

	);

	
	/**
	 * Retorna o slug gerado
	 */
	public function getSlug()
	{
		return $this->generateSlug($this->data[$this->alias]['title']);
	}

	/**
	 * Métodos carregados antes de salvar
	 */
	public function beforeSave($options = array())
	{

		// Seta o slug
		$this->data[$this->alias]['slug'] = $this->getSlug();

		parent::beforeSave($options);

	}


}
