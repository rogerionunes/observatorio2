
<div id="divmid">
	<p align="center"><?php echo $this->Html->image('noticias.png'); ?></p>
	<br />
	<p align="center"><?php echo $this->Html->image('em_construcao.gif'); ?></p>

<!-- Ocultar para apresentacao 

    
  
    <div id="divdireita">
      <div id="noticias">
		<?php if (count($results) > 0): ?>
		<?php foreach ($results as $result): ?>	
		<div id="not1">
			<div id="not1image">
				<?php

				if (!$result['Notice']['image_small']):
					$img = 'notice/nophoto.jpg';
				else:
					$img = 'notices/' . $result['Notice']['image_small'];
				endif; 

				echo
									$this->Html->link(
		    							$this->Html->image($img, array('alt' => 'Noticia', 'class' => 'img-rounded img-responsive')),
										array(
											'controller' => 'notices',
											'action' => 'view',
											'id' => $result['Notice']['id'],
											'slug' => $result['Notice']['slug']
										),
										array(
											'escape' => false,
											'class' => 'pull-left'
										)
									);
				?>
			</div>

			<h3><?php echo $result['Notice']['title']; ?> </h3>
				<p><?php echo $result['Notice']['briefDescription']; ?></p>
				<hr />
				<?php endforeach; ?>
				<?php else: ?>
				<p>Nenhuma notícia cadastrada.</p>
				<?php endif; ?>
		</div>

      </div>
	</div>


</div>

fim da ocultacao --> 