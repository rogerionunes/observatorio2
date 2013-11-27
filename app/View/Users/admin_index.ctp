<?php if (count($results) > 0): ?>
<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<th><?php echo $this->Paginator->sort('username', 'Login'); ?></th>
				<th><?php echo $this->Paginator->sort('email', 'E-mail'); ?></th>
				<th><?php echo $this->Paginator->sort('is_active', 'Status'); ?></th>
				<th class="text-right">Ações</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($results as $result): ?>
			<tr>
				<td>
					<?php echo $result['User']['username']; ?>
				</td>
				<td>
					<?php echo $result['User']['email']; ?>
				</td>
				<td>
					<?php echo $result['User']['is_active'] === true ? 'Ativo' : 'Desativado'; ?>
				</td>
				<td class="text-right">
					<?php
					echo
						$this->Html->link(
							'Editar',
							array(
								'controller' 			=> 'users',
								'action' 				=> 'edit', $result['User']['id'],
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
								'controller' 			=> 'users',
								'action' 				=> 'delete', $result['User']['id'],
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
<div class="alert alert-warning">Nenhum usuário cadastrado!</div>
<?php endif; ?>