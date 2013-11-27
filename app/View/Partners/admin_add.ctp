<div class="row">
	<div class="col-md-7 col-sm-12">
	<?php 
	echo
		$this->Form->create(
			'Partner', array(
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
			'name', array(
				'id' => 'name',
				'label' => 'Nome',
				'class' => 'form-control'
			)
		);

	echo
		$this->Form->input(
			'address', array(
				'id' => 'address',
				'label' => 'Endereço',
				'class' => 'form-control'
			)
		);

	echo
		$this->Form->input(
			'email', array(
				'id' => 'email',
				'label' => 'E-mail',
				'class' => 'form-control'
			)
		);

	echo
		$this->Form->input(
			'phone', array(
				'id' => 'phone',
				'label' => 'Telefone',
				'class' => 'form-control'
			)
		);

	echo $this->Form->input(
			'link', array(
				'id' => 'link',
				'label' => 'Link',
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

	echo $this->Form->end();
	?>
</div>
</div>
