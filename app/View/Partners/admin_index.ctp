<!-- <div class="partners index">
	<h2><?php echo __('Parceiros'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	
	<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('Novo Parceiro'), array('action' => 'add')); ?></li>
	</ul>
	</div>	
	
	<tr>
			<th><?php echo $this->Paginator->sort('id_parceiro'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('endereco'); ?></th>
			<th><?php echo $this->Paginator->sort('telefone'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('link'); ?></th>
			<th><?php echo $this->Paginator->sort('imagem'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php foreach ($partners as $partner): ?>
	<tr>
		<td><?php echo h($partner['Partner']['id']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['name']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['address']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['phone']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['email']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['link']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['image']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $partner['Partner']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $partner['Partner']['id'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $partner['Partner']['id']), null, __('Tem certeza que deseja deletar # %s?', $partner['Partner']['name'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Próximo') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div> -->


<?php if (count($results) > 0): ?>
<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<th><?php echo $this->Paginator->sort('name', 'Nome'); ?></th>
				<th><?php echo $this->Paginator->sort('address', 'Endereço'); ?></th>
				<th><?php echo $this->Paginator->sort('phone', 'Telefone'); ?></th>
				<th><?php echo $this->Paginator->sort('link', 'Link'); ?></th>
				<th><?php echo $this->Paginator->sort('image', 'Imagem'); ?></th>
				<th class="text-right">Ações</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($results as $result): ?>
			<tr>
				<td>
					<?php echo $result['Partner']['name']; ?>
				</td>
				<td>
					<?php echo $result['Partner']['address']; ?>
				</td>
				<td>
					<?php echo $result['Partner']['phone']; ?>
				</td>
				<td>
					<?php echo $result['Partner']['link']; ?>
				</td>
				<td>
					<?php echo $result['Partner']['image']; ?>
				</td>
				<td class="text-right">
					<?php
					echo
						$this->Html->link(
							'Editar',
							array(
								'controller' 			=> 'partners',
								'action' 				=> 'edit', $result['Partner']['id'],
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
								'controller' 			=> 'partners',
								'action' 				=> 'delete', $result['Partner']['id'],
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
<div class="alert alert-warning">Nenhum Parceiro Adicionado</div>
<?php endif; ?>
