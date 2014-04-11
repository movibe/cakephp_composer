<div class="produtos view">
<h2><?php echo __('Produto'); ?></h2>
	<dl>
		<dt><?php echo __('Id Produto'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['id_produto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Produto'), array('action' => 'edit', $produto['Produto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Produto'), array('action' => 'delete', $produto['Produto']['id']), null, __('Are you sure you want to delete # %s?', $produto['Produto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('action' => 'add')); ?> </li>
	</ul>
</div>
