<div class="contacts view">
<h2><?php echo __(''); ?></h2>
	<dl>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mensagem'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['message']); ?>
			&nbsp;
		</dd>
	</dl>
</div>