<?php echo $this->Html->css('sobre'); ?>
<div id="divmid">

  <?php if (count($results) > 0): ?>
  <?php foreach ($results as $result): ?>

  <div id="retangulo">
    <div id="box">
    <?php
            if (!$result['Aboutodm']['image_small']):
              $img = 'aboutodm/nophoto.jpg';
            else:
              $img = 'aboutodm/' . $result['Aboutodm']['image_small'];
            endif;

            echo
              $this->Html->image($img, array('width'=>'80','height'=>'80','alt' => 'Aboutodm'));
            ?></div>
    <p class="subtopico"><strong><?php echo $result['Aboutodm']['title']; ?></strong></p>
    <p class="texto"><?php echo $result['Aboutodm']['description']; ?></p>
  </div>
  <?php endforeach; ?>  
  <?php endif; ?>  
</div>