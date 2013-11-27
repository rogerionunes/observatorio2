<div class="row">
	<div class="col-md-7 col-sm-12">
	<?php 
	echo
		$this->Form->create(
			'Contact', array(
				'role' => 'form',
				'id' => 'form',
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
			'email', array(
				'id' => 'email',
				'label' => 'E-mail',
				'class' => 'form-control'
			)
		);


	echo
		$this->Form->input(
			'message', array(
				'id' => 'message',
				'label' => 'Mensagem',
				'class' => 'form-control'
			)
		);

	echo $this->Form->end();
	?>
</div>
</div>
