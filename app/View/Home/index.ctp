<?php echo $this->Html->css('css_observatorio'); ?>
<div id="divmid">
<div id="lefttop">
	<div class="divmapainterativo">
  	<p align="center"><?php echo $this->Html->image('index/mapa.png', array('width' => '400', 'height'=>'190')); ?></p>
    <subtopico>MAPA INTERATIVO</subtopico><br />
  &quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commod.
  </div>

  <div class="divindicadores">
    <p>
    	<?php echo $this->Html->image('index/indicadores/boaspraticas.png', array('width' => '228', 'height'=>'110')); ?>
    </p>
  </div>
  <div class="divboaspraticas">
  	<?php echo $this->Html->image('index/indicadores/indicadores.png', array('width' => '187', 'height'=>'145', 'align'=>'left')); ?>
  </div>
  <p>&nbsp;</p>
</div>

<div id="divisaovertical">
	<?php echo $this->Html->image('index/divisores/divisorvertical.png'); ?>
</div>

<div id="righttop">

<?php echo $this->Html->image('noticias.png'); ?>
<br /><br />
<?php if (count($notices) > 0): ?>
<?php foreach ($notices as $notices): ?>	
<div id="not1">
	<div id="not1image">
		<?php

		if (!$notices['Notice']['image_small']):
			$img = 'notice/nophoto.jpg';
		else:
			$img = 'notices/' . $notices['Notice']['image_small'];
		endif; 

		echo
							$this->Html->link(
    							$this->Html->image($img, array('alt' => 'Noticia')),
								array(
									'controller' => 'notices',
									'action' => 'view',
									'id' => $notices['Notice']['id'],
									'slug' => $notices['Notice']['slug']
								),
								array(
									'escape' => false,
									'class' => 'pull-left'
								)
							);
		?>
	</div>

	<h3><?php echo $notices['Notice']['title']; ?> </h3>
		<p><?php echo $notices['Notice']['briefDescription']; ?></p>
		<hr />
		<?php endforeach; ?>
		<?php else: ?>
		<p>Nenhuma notícia cadastrada.</p>
		<?php endif; ?>
    

    
    
</div>


</div>


</div>
<div id="divisaohorizontal">
	<?php echo $this->Html->image('index/divisores/divisorhorizontal.png', array('width' => '870')); ?>
</div>

<!-- AQUI VEM O CONTEUDO DA PARTE INFERIOR -->

<div id="content"> 

<div id="div1">


</div>


<div id="divisaovertical2">
	<?php echo $this->Html->image('index/divisores/divisorvertical.png', array('height'=>'320')); ?>
</div>

    
<div id="div2">
	<?php echo
							$this->Html->link(
    							$this->Html->image('index/biblioteca.png', array('width' => '227', 'height'=>'298')),
								array(
									'controller' => 'libraries',
									'action' => 'index',
								),
								array(
									'escape' => false,
								)
							); ?>
</div>

<div id="divisaovertical3">
	<?php echo $this->Html->image('index/divisores/divisorvertical.png'); ?>
</div>

<div id="div3">
  <p align="center">
  	<?php echo $this->Html->image('index/logomarcas/pbevclogo.png', array('width'=>'180','height'=>'72')); ?>
  </p>

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

      <p><strong>Enquete:</strong><br />
        Digite aqui o que vai ser o tema a ser perguntado na enquete.
      </p>
      <p>&nbsp;</p>
</div>

<div id="parceiros">

	<div id="p1">
		<?php echo $this->Html->image('index/parceiros.png', array('width'=>'92','height'=>'15')); ?>
	</div>
	<?php if (count($parceiros) > 0): ?>
    	<?php foreach ($parceiros as $parceiros): ?>

	<div id="p2">
		<?php
						if (!$parceiros['Partner']['image_small']):
							$img = 'partners/nophoto.jpg';
						else:
							$img = 'partners/' . $parceiros['Partner']['image_small'];
						endif;

						echo
							$this->Html->image($img, array('alt' => 'Parceiro'));
			?>

    </div>

<?php endforeach; ?>
<?php else: ?>
		<p>Nenhum parceiro cadastrado.</p>
		<?php endif; ?>
</div>

</div>
