<!-- <div class="partners form">
<?php echo $this->Form->create('Partner'); ?>
	<fieldset>
		<legend><?php echo __('Editar Parceiro'); ?></legend>
	<?php
		echo $this->Form->input('id_parceiro');
		echo $this->Form->input('nome');
		echo $this->Form->input('endereco');
		echo $this->Form->input('telefone');
		echo $this->Form->input('email');
		echo $this->Form->input('link');
		echo $this->Form->input('imagem', array('type' => 'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Editar')); ?>
</div> -->



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
				'class' => 'form-control',
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
			'phone', array(
				'id' => 'phone',
				'label' => 'Telefone',
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

	echo $this->Form->input(
			'link', array(
				'id' => 'link',
				'label' => 'Link',
				'class' => 'form-control'
			)
		);

	echo "<p><b>Imagem atual: </b></p> ";
	echo $this->Html->image('partners/'.$partner['Partner']['image_small']);
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