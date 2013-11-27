<?php
/**
 * Notice Model
 *
 */

define('UPLOAD_DIR', WWW_ROOT . 'img/notices/');

App::uses('AppModel', 'Model');
App::uses('AttachmentBehavior', 'Uploader.Model/Behavior');

class Notice extends AppModel {

	/**
	 * Nome
	 */
	public $name = 'Notice';

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
						'append' => '-small',
						'overwrite' => true,
						'width' => 120,
						'height' => 80
					),
					'image_medium' => array(
						'method' => AttachmentBehavior::CROP,
						'nameCallback' => 'getSlug',
						'append' => '-medium',
						'overwrite' => true,
						'width' => 450,
						'height' => 230
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
	 *
	 * 
	 */
	public $validate = array(
		'odm' => array(
			'required' => array(
				'rule' => array('numeric'),
				'message' => 'Campo obrigatório.'
			)
		),
		'title' => array(
			'required' => array(
				'rule' => array('notempty'),
				'message' => 'Campo obrigatório.'
			)
		),
		'briefDescription' => array(
			'required' => array(
				'rule' => array('notempty'),
				'message' => 'Campo obrigatório.'
			)
		),
		'noticesInIntegra' => array(
			'required' => array(
				'rule' => array('notempty'),
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
