<div class="row">
	<div class="col-md-7 col-sm-12">
	<?php
	echo
		$this->Form->create(
			'Library', array(
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
			'category', array(
				'id' => 'category',
				'label' => 'Categoria',
				'class' => 'form-control'
			)
		);

	echo
		$this->Form->input(
			'title', array(
				'id' => 'title',
				'label' => 'Titulo',
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
/*
		echo
		$this->Form->input(
			'file', array(
				'id' => 'file',
				'label' => 'Arquivo',
				'type' => 'file'
			)
		);

*/
	echo
		$this->Form->end();
	?>
	</div>
</div>
