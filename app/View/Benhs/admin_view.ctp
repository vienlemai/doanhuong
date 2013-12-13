<div class="benhs view">
<h2><?php echo __('Benh'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($benh['Benh']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ten Benh'); ?></dt>
		<dd>
			<?php echo h($benh['Benh']['ten_benh']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Thong Tin'); ?></dt>
		<dd>
			<?php echo h($benh['Benh']['thong_tin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mua'); ?></dt>
		<dd>
			<?php echo h($benh['Benh']['mua']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($benh['Benh']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($benh['Benh']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Benh'), array('action' => 'edit', $benh['Benh']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Benh'), array('action' => 'delete', $benh['Benh']['id']), null, __('Are you sure you want to delete # %s?', $benh['Benh']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Benhs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Benh'), array('action' => 'add')); ?> </li>
	</ul>
</div>
