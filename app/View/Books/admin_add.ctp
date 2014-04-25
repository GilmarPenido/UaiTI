<div class="books form">
<?php echo $this->Form->create('Book'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Book'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('author');
		echo $this->Form->input('publisher');
		echo $this->Form->input('isbn');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Books'), array('action' => 'index')); ?></li>
	</ul>
</div>
