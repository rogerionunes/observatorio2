<?php if (count($results) > 0): ?>
<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<th><?php echo $this->Paginator->sort('odm', 'Odm'); ?></th>
				<th><?php echo $this->Paginator->sort('title', 'Título'); ?></th>
				<th><?php echo $this->Paginator->sort('created', 'Criado em'); ?></th>
				<th><?php echo $this->Paginator->sort('updated', 'Modificado em'); ?></th>
				<th class="text-right">Ações</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($results as $result): ?>
			<tr>
				<td>
					<?php echo $result['Notice']['odm']; ?>
				</td>
				<td>
					<?php echo $result['Notice']['title']; ?>
				</td>
				<td>
					<?php echo $result['Notice']['created']; ?>
				</td>
				<td>
					<?php echo $result['Notice']['updated']; ?>
				</td>
				<td class="text-right">
					<?php /*
					echo
						$this->Html->link(
							'Ver',
							array(
								'controller' 			=> 'notices',
								'action' 				=> 'view', $result['Notice']['id'],
								'admin' 				=> true
							),
							array(
								'title' 				=> 'Ver',
								'escape' 				=> false,
								'class'					=> 'btn btn-default btn-xs'
							)
						);
					*/ ?>
					<?php
					echo
						$this->Html->link(
							'Editar',
							array(
								'controller' 			=> 'notices',
								'action' 				=> 'edit', $result['Notice']['id'],
								'admin' 				=> true
							),
							array(
								'title' 				=> 'Editar',
								'escape' 				=> false,
								'class'					=> 'btn btn-default btn-xs'
							)
						);
					?>
					<?php
					echo
						$this->Html->link(
							'Remover',
							array(
								'controller' 			=> 'notices',
								'action' 				=> 'delete', $result['Notice']['id'],
								'admin' 				=> true
							),
							array(
								'title' 				=> 'Excluir',
								'escape' 				=> false,
								'class'					=> 'btn btn-default btn-xs'
							)
						);
					?>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>

<?php echo $this->element('cms/pagination'); ?>

<?php else: ?>
<div class="alert alert-warning">Nenhuma notícia cadastrada!</div>
<?php endif; ?>