<!-- Aqui começa a DIV esquerda da Página --> 	
    <div id="divesquerda">
	  <div id="divnoticias">
	  	<?php if (count($results) > 0): ?>
	  	<?php foreach ($results as $result): ?>
      	<div id="divtitulo"><p><?php echo $result['Notice']['title']; ?></p></div>
        	<div id="imagem"><?php
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
						?></div>
						<br />
				
        	<div id="conteudo"><p><?php echo $result['Notice']['briefDescription']; ?></p></div> 
        	<?php endforeach; ?>
				<?php else: ?>
				<p>Nenhuma notícia cadastrada.</p>
				<?php endif; ?>       
      </div>
    </div> 