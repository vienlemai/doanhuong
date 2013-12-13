<div class="row">
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Quản lí bài viết</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<?php echo $this->Form->create('Category'); ?>
				<fieldset>
					<legend>Chi tiết liên hệ</legend>
					<?php echo $this->Form->create('Lienhe',array('class'=>'form-horizontal')) ?>
					<div class="control-group">
						<label>Họ tên</label>
						<div class="controls">
							<?php echo $this->Form->input('ho_ten', array('class' => 'input-xxlarge','disabled'=>'disabled', 'div' => false, 'label' => false)) ?>
						</div>
					</div>	
					<div class="control-group">
						<label>Địa chỉ</label>
						<div class="controls">
							<?php echo $this->Form->input('dia_chi', array('class' => 'input-xxlarge','disabled'=>'disabled', 'div' => false, 'label' => false)) ?>
						</div>
					</div>	
					<div class="control-group">
						<label>Số điện thoại</label>
						<div class="controls">
							<?php echo $this->Form->input('dien_thoai', array('class' => 'input-xxlarge', 'disabled'=>'disabled','div' => false, 'label' => false)) ?>
						</div>
					</div>	
					
					<div class="control-group">
						<label>Email</label>
						<div class="controls">
							<?php echo $this->Form->input('email', array('class' => 'input-xxlarge', 'disabled'=>'disabled','div' => false, 'label' => false)) ?>
						</div>
					</div>	
					
					<div class="control-group">
						<label>Nội dung</label>
						<div class="controls">
							<?php echo $this->Form->input('noi_dung', array('class' => 'input-xxlarge', 'disabled'=>'disabled','div' => false, 'label' => false)) ?>
						</div>
					</div>	


				</fieldset>
				<?php echo $this->Form->end(); ?>
			</div>
		</div>
	</div>

</div>