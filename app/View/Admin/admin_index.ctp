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
					echo $this->Html->link($this->Html->image('admin/ql-baiviet-bg.png'), '/admin/danh-sach-bai-viet', array('escape' => false, 'class' => 'thumbnail'))

					?>
				</div>
				<div class="span3">
					<?php
					echo $this->Html->link($this->Html->image('admin/ql-danhmuc-bg.png'), '/admin/danh-muc', array('escape' => false, 'class' => 'thumbnail'))

					?>
				</div>
				<div class="span3">
					<?php
					echo $this->Html->link($this->Html->image('admin/ql-tailieu-bg.png'), '/admin/tai-lieu', array('escape' => false, 'class' => 'thumbnail'))

					?>
				</div>
				<?php if ($isAdmin):

					?>
					<div class="span3">
						<?php
						echo $this->Html->link($this->Html->image('admin/ql-nguoidung-bg.png'), '/admin/nguoi-dung', array('escape' => false, 'class' => 'thumbnail'))

						?>
					</div>
				<?php endif;

				?>
			</div>
			<div class="row-fluid padd-bottom">
				<?php echo $this->Session->flash() ?>
				<div class="span3">
					<?php
					echo $this->Html->link($this->Html->image('admin/ql-video-bg.png'), '/admin/videos', array('escape' => false, 'class' => 'thumbnail'))

					?>
				</div>
				<div class="span3">
					<?php
					echo $this->Html->link($this->Html->image('admin/ql-hinhanh-bg.png'), '/admin/album-anh', array('escape' => false, 'class' => 'thumbnail'))

					?>
				</div>
			</div>
		</div>
	</div>
</div>

