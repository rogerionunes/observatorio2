<div id="divmid">
<div id="form">
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
		?>

	<p class="name">
	    <?php 
	    	echo
			$this->Form->input(
			'name', array(
				'id' => 'name',
				'label' => '',
				'placeholder' => 'Nome'
			)
		);
		?> 
	</p>

	<p class="email">
	 	 <?php
			echo
			$this->Form->input(
			'email', array(
				'id' => 'email',
				'label' => '',
				'placeholder' => 'E-mail'
			)
		);
		?>
	</p>

	<p class="text">
	 	 <?php
			echo
			$this->Form->input(
			'message', array(
				'id' => 'message',
				'label' => '',
				'placeholder' => 'Mensagem'
			)
		);
		?>
	</p>

	<p class="submit">
		<input type="submit" value="Enviar" />
		<input type="reset" value="Limpar" />
		<?php
		 	echo $this->Form->end();
		?>
	</p>

</form>
</div>

</div>