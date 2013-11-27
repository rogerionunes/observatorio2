<div class="row">
	<div class="col-md-7 col-sm-12">
	<?php
	echo
		$this->Form->create(
			'User', array(
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
			'username', array(
				'id' => 'username',
				'label' => 'Login',
				'class' => 'form-control',
				'readonly' => 'readonly'
			)
		);
	?>



	<?php
	echo
		$this->Form->input(
			'password', array(
				'id' => 'password',
				'label' => 'Senha',
				'class' => 'form-control',
				'value' => false
			)
		);
	?>



	<?php
	echo
		$this->Form->input(
			'email', array(
				'id' => 'email',
				'label' => 'E-mail',
				'class' => 'form-control'
			)
		);
	?>

	<?php
	echo
		$this->Form->input(
			'is_active',
			array(
				'id' => 'is_active',
				'label' => 'Ativo?'
			)
		);
	?>

	<?php
	echo
		$this->Form->end();
	?>

	</div>
</div>