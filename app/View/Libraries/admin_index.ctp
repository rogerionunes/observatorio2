<?php if (count($results) > 0): ?>
<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<th><?php echo $this->Paginator->sort('odm', 'Odm'); ?></th>
				<th><?php echo $this->Paginator->sort('category', 'Categoria'); ?></th>
				<th><?php echo $this->Paginator->sort('title', 'Titulo'); ?></th>
				<th><?php echo $this->Paginator->sort('created', 'Criado em'); ?></th>
				<th><?php echo $this->Paginator->sort('updated', 'Modificado em'); ?></th>
				<th class="text-right">Ações</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($results as $result): ?>
			<tr>
				<td>
					<?php echo $result['Library']['odm']; ?>
				</td>
				<td>
					<?php echo $result['Library']['category']; ?>
				</td>
				<td>
					<?php echo $result['Library']['title']; ?>
				</td>

				<td>
					<?php echo $result['Library']['created']; ?>
				</td>
				<td>
					<?php echo $result['Library']['updated']; ?>
				</td>

				<td class="text-right">


					<?php
					echo
						$this->Html->link(
							'Editar',
							array(
								'controller' 			=> 'libraries',
								'action' 				=> 'edit', $result['Library']['id'],
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
								'controller' 			=> 'libraries',
								'action' 				=> 'delete', $result['Library']['id'],
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
<div class="alert alert-warning">Nenhuma biblioteca cadastrada!</div>
<?php endif; ?>
