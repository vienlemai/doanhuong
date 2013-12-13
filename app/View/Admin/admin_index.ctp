<div class="row-fluid">	
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Quản trị nội dung trang web</div>
		</div>
		<div class="block-content collapse in">
			<div class="row-fluid padd-bottom">
				<?php echo $this->Session->flash() ?>
				<div class="span3">
					<?php
					echo $this->Html->link($this->Html->image('admin/ql-thuoc.png'), '/admin/thuocs', array('escape' => false, 'class' => 'thumbnail'))

					?>
				</div>
				<div class="span3">
					<?php
					echo $this->Html->link($this->Html->image('admin/ql-benh.png'), '/admin/benhs', array('escape' => false, 'class' => 'thumbnail'))

					?>
				</div>

				<div class="span3">
					<?php
					echo $this->Html->link($this->Html->image('admin/ql-lienhe.png'), '/admin/lienhes', array('escape' => false, 'class' => 'thumbnail'))

					?>
				</div>


			</div>
		</div>
	</div>
</div>

