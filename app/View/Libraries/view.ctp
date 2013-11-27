<section id="libraries" class="section b2">
	<div class="container">
		<div class="row">
			<header class="col-md-12">
				<h1><?php echo $result['Library']['title']; ?></h1>
			</header>
			<article>
				<?php if ($result['Library']['image']): ?>
				<div class="col-sm-4 col-md-4">
				<?php echo $this->Html->image('libraries/' . $result['Library']['image'], array('alt' => 'Biblioteca', 'class' => 'pull-left img-rounded img-responsive')); ?>
				</div>
				<?php endif; ?>
				<div class="col-sm-8 col-md-8">
					<?php echo $result['Library']['category']; ?>
				</div>
			</article>
		</div>
	</div>
</section>
