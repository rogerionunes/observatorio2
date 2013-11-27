<div class="row">
	<div class="col-md-7 col-sm-12">
	<?php 
	echo
		$this->Form->create(
			'Notice', array(
				'role' => 'form',
				'id' => 'form',
				'type' => 'file',
				'inputDefaults' => array(
					'div' => 'form-group',
					'wrapInput' => false,
					'error' => array(
						'attributes' => array(
							'wrap' => 'span',
							'class' => 'label label-danger'
						)
					)
				)
			)
		);
	
		

	echo
		$this->Form->input(
			'odm', array(
				'id' => 'odm',
				'label' => 'ODM',
				'class' => 'form-control',
				'min' => '1',
				'max' => '8'
			)
		);

	echo
		$this->Form->input(
			'title', array(
				'id' => 'title',
				'label' => 'Título',
				'class' => 'form-control'
			)
		);

	echo
		$this->Form->input(
			'image', array(
				'id' => 'image',
				'label' => 'Imagem',
				'type' => 'file'
			)
		);

	echo
		$this->Form->input(
			'briefDescription', array(
				'id' => 'briefDescription',
				'label' => 'Breve Descrição',
				'class' => 'form-control'
			)
		);

	echo
		$this->Form->input(
			'noticesInIntegra', array(
				'id' => 'noticesInIntegra',
				'label' => 'Notícias na Integra',
				'class' => 'form-control'
			)
		);

	echo $this->Form->end();
	?>
</div>
</div>
