<div class="benhs form">
<?php echo $this->Form->create('Benh'); ?>
	<fieldset>
		<legend><?php echo __('Add Benh'); ?></legend>
	<?php
		echo $this->Form->input('ten_benh');
		echo $this->Form->input('thong_tin');
		echo $this->Form->input('mua');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Benhs'), array('action' => 'index')); ?></li>
	</ul>
</div>
