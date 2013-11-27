<div class="row">
	<div class="col-md-7 col-sm-12">
	<?php 
	echo
		$this->Form->create(
			'Whoweare', array(
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
			'title', array(
				'id' => 'title',
				'label' => 'Título',
				'class' => 'form-control'
			)
		);

	echo
		$this->Form->input(
			'description', array(
				'id' => 'description',
				'label' => 'Descrição do Quem Somos',
				'class' => 'form-control'
			)
		);

	echo $this->Form->end();
	?>
</div>
</div>
