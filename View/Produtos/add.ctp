<div class="produtos form">
<?php echo $this->Form->create('Produto'); ?>
	<fieldset>
		<legend><?php echo __('Add Produto'); ?></legend>
	<?php
		echo $this->Form->input('id_produto');
		echo $this->Form->input('title');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Produtos'), array('action' => 'index')); ?></li>
	</ul>
</div>
