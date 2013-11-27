<div id="divmid">
	<div id="content">
		<?php if (count($results) > 0): ?>
    	<?php foreach ($results as $result): ?>
      <div id="logo1">
      	 <p align="center"><strong><?php echo $result['Partner']['name']; ?></strong><br /></p>
       	 <div align="center"><a href="<?php echo $result['Partner']['link']; ?>"><?php
						if (!$result['Partner']['image_small']):
							$img = 'partners/nophoto.jpg';
						else:
							$img = 'partners/' . $result['Partner']['image_small'];
						endif;

						echo
							$this->Html->image($img, array('alt' => 'Parceiro'));
						?>

					
      </div>
      <?php endforeach; ?>

  </div>
		<?php else: ?>
		<p>Nenhum parceiro cadastrado.</p>
		<?php endif; ?>			
</div>

</div>
