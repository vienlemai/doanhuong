<div class="thuocs form">
<?php echo $this->Form->create('Thuoc'); ?>
	<fieldset>
		<legend><?php echo __('Add Thuoc'); ?></legend>
	<?php
		echo $this->Form->input('ten_thuoc');
		echo $this->Form->input('chi_dinh');
		echo $this->Form->input('chong_chi_dinh');
		echo $this->Form->input('chu_y_de_phong');
		echo $this->Form->input('tac_dung_phu');
		echo $this->Form->input('lieu_luong');
		echo $this->Form->input('nha_sx');
		echo $this->Form->input('nha_pp');
		echo $this->Form->input('category_id');
		echo $this->Form->input('thumbnail');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Thuocs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
