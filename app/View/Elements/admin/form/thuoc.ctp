<?php //debug($this->request->data);     ?>
<div class="row">
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Quản lí thuốc</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<?php echo $this->Form->create('Thuoc'); ?>
				<fieldset>
					<legend>Nhập thông tin thuốc</legend>
					<div class="control-group">
						<label class="control-label">Chọn danh mục thuốc</label>
						<div class="controls">
							<?php echo $this->Form->input('category_id', array('type' => 'select', 'div' => false, 'label' => false, 'class' => 'input-xlarge')) ?>
						</div>
					</div>
					<div class="control-group">
						<label>Tên thuốc</label>
						<div class="controls">
							<?php echo $this->Form->input('ten_thuoc', array('class' => 'input-xxlarge', 'div' => false, 'label' => false)) ?>
						</div>
					</div>
					<div class="control-group">
						<label>Ảnh</label>
						<div class="controls">
							<?php
							if (!empty($this->request->data['Thuoc']['thumbnail'])) {

								?>
								<div class="thumbnail post-thumnail" id="thumbnail-thuoc"><img src="<?php echo $this->request->data['Thuoc']['thumbnail'] ?>"/></div>
								<?php
							} else {
								echo $this->Html->tag('div', 'Click để chọn hình.', array('class' => 'thumbnail post-thumnail', 'id' => 'thumbnail-thuoc'));
							}

							?>
						</div>
					</div>
					<div class="control-group">
						<label>Thành phần</label>
						<div class="controls">
							<?php
							echo $this->Form->input('thanh_phan', array('div' => FALSE, 'label' => false, 'id' => 'full_text', 'class' => 'input-xxlarge textarea wysihtml5-editor'));

							?>
						</div>
					</div>

					<div class="control-group">
						<label>Dạng bào chế</label>
						<div class="controls">
							<?php
							echo $this->Form->input('dang_bao_che', array('div' => FALSE, 'label' => false, 'id' => 'full_text', 'class' => 'input-xxlarge textarea wysihtml5-editor'));

							?>
						</div>
					</div>
					<div class="control-group">
						<label>Quy cách đóng gói</label>
						<div class="controls">
							<?php
							echo $this->Form->input('quy_cach_dong_goi', array('div' => FALSE, 'label' => false, 'class' => 'input-xxlarge'));

							?>
						</div>
					</div>

					<div class="control-group">
						<label>Chỉ định/Chống chỉ định</label>
						<div class="controls">
							<?php
							echo $this->Form->input('chong_chi_dinh', array('div' => FALSE, 'label' => false, 'id' => 'full_text', 'class' => 'input-xxlarge textarea wysihtml5-editor'));

							?>
						</div>
					</div>

					<div class="control-group">
						<label>Cách dùng</label>
						<div class="controls">
							<?php
							echo $this->Form->input('cach_dung', array('div' => FALSE, 'label' => false, 'id' => 'full_text', 'class' => 'input-xxlarge textarea wysihtml5-editor'));

							?>
						</div>
					</div>

					<div class="control-group">
						<label>Nhà phân phối</label>
						<div class="controls">
							<?php
							echo $this->Form->input('cty_phan_phoi', array('div' => FALSE, 'label' => false, 'class' => 'input-xxlarge'));

							?>
						</div>
					</div>
					<div class="control-group">
						<label>Số đăng ký</label>
						<div class="controls">
							<?php
							echo $this->Form->input('so_dabg_ky', array('div' => FALSE, 'label' => false, 'id' => 'full_text', 'class' => 'input-xxlarge textarea wysihtml5-editor'));

							?>
						</div>
					</div>

					<div class="control-group">
						<label>Thông tin thêm</label>
						<div class="controls">
							<?php
							echo $this->Form->input('thong_tin_them', array('div' => FALSE, 'label' => false, 'id' => 'full_text', 'class' => 'input-xxlarge textarea wysihtml5-editor'));

							?>
						</div>
					</div>
					
					<?php echo $this->Form->hidden('thumbnail') ?>

					<div style="text-align: center">
						<?php echo $this->Form->submit('Lưu', array('class' => 'btn btn-success', 'div' => false)) ?>
					</div>
				</fieldset>
				<?php echo $this->Form->end(); ?>
			</div>
		</div>
	</div>

</div>