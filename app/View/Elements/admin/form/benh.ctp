<?php //debug($this->request->data);      ?>
<div class="row">
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Quản lí bệnh</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<?php echo $this->Form->create('Benh'); ?>
				<fieldset>
					<legend>Nhập thông tin bệnh</legend>
					<div class="control-group">
						<label>Tên bệnh</label>
						<div class="controls">
							<?php echo $this->Form->input('ten_benh', array('class' => 'input-xxlarge', 'div' => false, 'label' => false)) ?>
						</div>
					</div>
					<div class="control-group">
						<label>Ảnh</label>
						<div class="controls">
							<?php
							if (!empty($this->request->data['Benh']['thumbnail'])) {

								?>
								<div class="thumbnail post-thumnail" id="thumbnail-benh"><img src="<?php echo $this->request->data['Benh']['thumbnail'] ?>"/></div>
								<?php
							} else {
								echo $this->Html->tag('div', 'Click để chọn hình.', array('class' => 'thumbnail post-thumnail', 'id' => 'thumbnail-benh'));
							}

							?>
						</div>
					</div>
					<div class="control-group">
						<label>Mùa</label>
						<div class="controls">
							<?php echo $this->Form->input('mua', array('type' => 'select', 'options' => $mua, 'class' => 'input-xxlarge', 'div' => false, 'label' => false)) ?>
						</div>
					</div>
					<div class="control-group">
						<label>Triệu chứng</label>
						<div class="controls">
							<?php
							echo $this->Form->input('trieu_chung', array('div' => FALSE, 'label' => false, 'id' => 'full_text', 'class' => 'input-xxlarge textarea wysihtml5-editor'));

							?>
						</div>
					</div>

					<div class="control-group">
						<label>Nguyên nhân</label>
						<div class="controls">
							<?php
							echo $this->Form->input('nguyen_nhan', array('div' => FALSE, 'label' => false, 'id' => 'full_text', 'class' => 'input-xxlarge textarea wysihtml5-editor'));

							?>
						</div>
					</div>

					<div class="control-group">
						<label>Cách phòng tránh</label>
						<div class="controls">
							<?php
							echo $this->Form->input('cach_phong_tranh', array('div' => FALSE, 'label' => false, 'id' => 'full_text', 'class' => 'input-xxlarge textarea wysihtml5-editor'));

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