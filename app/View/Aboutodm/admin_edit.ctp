<div class="row">
	<div class="col-md-7 col-sm-12">
	<?php 
	echo
		$this->Form->create(
			'Aboutodm', array(
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
				'label' => 'Descrição do Sobre ODM',
				'class' => 'form-control'
			)
		);

	echo "<p><b>Imagem atual: </b></p> ";
	echo $this->Html->image('aboutodm/'.$aboutodm['Aboutodm']['image_small']);
    echo '<br />';
    echo '<br />';

	echo $this->Form->input(
			'image', array(
				'id' => 'image',
				'label' => 'Alterar Imagem',
				'type' => 'file'
			)
		);

	echo $this->Form->end();
	?>
</div>
</div>
