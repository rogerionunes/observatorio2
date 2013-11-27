<div id="divmid">

<div id="links">
  <div align="center">
  <?php echo $this->Html->image('imagens.png', array('width' => '120', 'height'=>'28')); ?>&nbsp;
  <?php echo $this->Html->image('audio.png', array('width' => '88', 'height'=>'28')); ?>&nbsp;
  <?php echo $this->Html->image('video.png', array('width' => '88', 'height'=>'28')); ?>&nbsp;
  <?php echo $this->Html->image('artigos.png', array('width' => '120', 'height'=>'28')); ?>
  </div>
</div>

<p align="center"><?php echo $this->Html->image('em_construcao.gif'); ?></p>
<!-- Ocultar para apresentacao 
<div id="conteudo1">


</div>

<section id="libraries" class="section b2">
	<div class="container">
		<div class="row">
			<header class="col-md-12">
				<h1>Bibliotecas</h1>
			</header>
			<div class="col-md-12">
				<?php if (count($results) > 0): ?>
				<ul class="media-list row">
					<hr />
					<?php foreach ($results as $result): ?>
					<li class="media col-md-6">
						<?php
						if (!$result['Library']['image_small']):
							$img = 'library/nophoto.jpg';
						else:
							$img = 'libraries/' . $result['Library']['image_small'];
						endif;

						echo
							$this->Html->link(
    							$this->Html->image($img, array('alt' => 'Biblioteca', 'class' => 'img-rounded img-responsive')),
								array(
									'controller' => 'libraries',
									'action' => 'view',
									'id' => $result['Library']['id'],
									'slug' => $result['Library']['slug']
								),
								array(
									'escape' => false,
									'class' => 'pull-left'
								)
							);
						?>

						<div class="media-body">
							<h2 class="media-heading">
								<?php echo $result['Library']['title']; ?>
							</h2>
						</div>
					</li>
					<hr />
					<?php endforeach; ?>
				</ul>
				<?php else: ?>
				<p>Nenhuma biblioteca cadastrada.</p>
				<?php endif; ?>
				<?php echo $this->element('cms/pagination'); ?>
			</div>
		</div>
	</div>
</section>

fim da ocultacao --> 
</div>