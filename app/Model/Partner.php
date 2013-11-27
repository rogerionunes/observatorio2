<?php
/**
 * Partner Model
 *
 */

define('UPLOAD_DIR', WWW_ROOT . 'img/partners/');

App::uses('AppModel', 'Model');
App::uses('AttachmentBehavior', 'Uploader.Model/Behavior');

class Partner extends AppModel {

	/**
	 * Nome
	 */
	public $name = 'Partner';

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
						'width' => 200,
						'height' => 200
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
		'name' => array(
			'required' => array(
				'rule' => array('notempty'),
				'message' => 'Campo obrigatório.'
			)
		),
		'address' => array(
			'required' => array(
				'rule' => array('notempty'),
				'message' => 'Campo obrigatório.'
			)
		),
		'phone' => array(
			'required' => array(
				'rule' => array('phone'),
				'message' => 'Telefone Inválido'
			)
		),
		'email'	=> array(
			'required' => array(
				'rule' => array('email'),
				'message' => 'Email Inválido'
			)
		),
		'link' => array(
			'required' => array(
				'rule' => array('url'),
				'message' => 'url Inválida'
			)
		)
	);

	/**
	 * Retorna o slug gerado
	 */
	public function getSlug()
	{
		return $this->generateSlug($this->data[$this->alias]['name']);
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