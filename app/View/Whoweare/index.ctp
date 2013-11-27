
<div id="divmid">
	<div id="divesquerda">
	  <div id="img1">
	  	<?php echo $this->Html->image('whoweare/imagem2.png', array('width' => '253', 'height'=>'173')); ?>
      </div>
      <div id="img2">
      	<?php echo $this->Html->image('whoweare/imagem1.png', array('width' => '231', 'height'=>'171', 'align'=>'right')); ?>
       </div>
	  <div id="img3">
	  	<?php echo $this->Html->image('whoweare/imagem3.png', array('width' => '238', 'height'=>'168')); ?>
      </div>
	</div>
    
	<div id="divdireita">
      <div id="8jeitos">
      	<?php echo $this->Html->image('whoweare/8jeitos.png', array('width' => '293', 'height'=>'134')); ?>
      </div>
      <?php if (count($results) > 0): ?>
      <?php foreach ($results as $result): ?>
      <p><subtopico><?php echo $result['Whoweare']['title']; ?></subtopico></p>
      <p><?php echo $result['Whoweare']['description']; ?></p>
      <?php endforeach; ?>
      <?php else: ?>
      <?php endif; ?>
    </div>
</div>
