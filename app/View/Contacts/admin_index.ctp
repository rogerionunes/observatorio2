<?php if (count($results) > 0): ?>
<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<th><?php echo $this->Paginator->sort('name', 'Nome'); ?></th>
				<th><?php echo $this->Paginator->sort('email', 'E-mail'); ?></th>
				<th><?php echo $this->Paginator->sort('created', 'Criado em'); ?></th>
				<th class="text-right">Acoes</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($results as $result): ?>
			<tr>
				<td>
					<?php echo $result['Contact']['name']; ?>
				</td>
				<td>
					<?php echo $result['Contact']['email']; ?>
				</td>
				<td>
					<?php echo $result['Contact']['created']; ?>
				</td>
				<td class="text-right">
					<?php 
					echo
						$this->Html->link(
							'Ver',
							array(
								'controller' 			=> 'contacts',
								'action' 				=> 'view', $result['Contact']['id'],
								'admin' 				=> true
							),
							array(
								'title' 				=> 'Ver',
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
<div class="alert alert-warning">Nenhuma contato cadastrada!</div>
<?php endif; ?>
