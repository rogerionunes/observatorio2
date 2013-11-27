<div class="row">
	<div class="col-md-7 col-sm-12">
	<?php
	echo
		$this->Form->create(
			'Library', array(
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
	?>


	<?php
	echo
		$this->Form->input(
			'odm', array(
				'id' => 'odm',
				'label' => 'Odm',
				'class' => 'form-control',
			)
		);
	?>

	<?php
	echo
		$this->Form->input(
			'category', array(
				'id' => 'category',
				'label' => 'Categoria',
				'class' => 'form-control'
			)
		);
	?>


	<?php
	echo
		$this->Form->input(
			'title', array(
				'id' => 'title',
				'label' => 'Título',
				'class' => 'form-control'
			)
		);
	?>

		<dt><?php echo __('Imagem'); ?></dt>
        <dd>
        &nbsp;
        <?php 

        echo $this->Html->image('libraries/'.h($library['Library']['image_small']));
        echo '<br />';
        echo h($library['Library']['image']);

        ?>	
        &nbsp;

		<dt><?php echo __('Arquivo'); ?></dt>
        <dd>
        &nbsp;
        <?php 

        echo $this->Html->image('libraries/'.h($library['Library']['file_small']));
        echo '<br />';
        echo h($library['Library']['image']);

        ?>	
        &nbsp;

	<?php
	echo
		$this->Form->end();
	?>

	</div>
</div>
