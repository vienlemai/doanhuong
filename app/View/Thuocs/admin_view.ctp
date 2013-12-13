<div class="thuocs view">
<h2><?php echo __('Thuoc'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($thuoc['Thuoc']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ten Thuoc'); ?></dt>
		<dd>
			<?php echo h($thuoc['Thuoc']['ten_thuoc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Chi Dinh'); ?></dt>
		<dd>
			<?php echo h($thuoc['Thuoc']['chi_dinh']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Chong Chi Dinh'); ?></dt>
		<dd>
			<?php echo h($thuoc['Thuoc']['chong_chi_dinh']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Chu Y De Phong'); ?></dt>
		<dd>
			<?php echo h($thuoc['Thuoc']['chu_y_de_phong']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tac Dung Phu'); ?></dt>
		<dd>
			<?php echo h($thuoc['Thuoc']['tac_dung_phu']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lieu Luong'); ?></dt>
		<dd>
			<?php echo h($thuoc['Thuoc']['lieu_luong']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nha Sx'); ?></dt>
		<dd>
			<?php echo h($thuoc['Thuoc']['nha_sx']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nha Pp'); ?></dt>
		<dd>
			<?php echo h($thuoc['Thuoc']['nha_pp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($thuoc['Category']['name'], array('controller' => 'categories', 'action' => 'view', $thuoc['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Thumbnail'); ?></dt>
		<dd>
			<?php echo h($thuoc['Thuoc']['thumbnail']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Thuoc'), array('action' => 'edit', $thuoc['Thuoc']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Thuoc'), array('action' => 'delete', $thuoc['Thuoc']['id']), null, __('Are you sure you want to delete # %s?', $thuoc['Thuoc']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Thuocs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Thuoc'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
