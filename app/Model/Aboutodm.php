<?php
/**
 * Aboutodm Model
 *
 */

define('UPLOAD_DIR', WWW_ROOT . 'img/aboutodm/');

App::uses('AppModel', 'Model');
App::uses('AttachmentBehavior', 'Uploader.Model/Behavior');

class Aboutodm extends AppModel {

	/**
	 * Nome
	 */
	public $name = 'Aboutodm';

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
						'width' => 118,
						'height' => 117
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





	public $validate = array(
	    'title' => array(
			'required' => array(
				'rule' => array('notempty'),
				'message' => 'Campo obrigatório.'
			),
		),

		'description' => array(
			'required' => array(
				'rule' => array('notempty'),
				'message' => 'Campo obrigatório.'
			),
		),
			
	);


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
