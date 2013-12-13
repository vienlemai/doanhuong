<?php //debug($this->request->data);   ?>
<div class="row">
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Quản lí bài viết</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<?php echo $this->Form->create('Post'); ?>
				<fieldset>
					<legend>Nhập nội dung bài viết</legend>
					<div class="control-group">
						<label class="control-label">Chọn danh mục</label>
						<div class="controls">
							<select name="data[Post][category_id]" class="input-xxlarge">
								<?php
								foreach ($categories as $category):
									if ($category['Category']['id'] == 1) {

										?>
										<option value="<?php echo $category['Category']['id'] ?>" <?php echo (isset($this->request->data['Post']['category_id']) && $this->request->data['Category']['id'] == $category['Category']['id']) ? 'selected' : '' ?>><?php echo $category['Category']['name'] ?></option>
										<?php
									} else {

										?><optgroup label="<?php echo $category['Category']['name'] ?>">
											<?php foreach ($category['ChildCategory'] as $child):

												?>
												<option value="<?php echo $child['id'] ?>" <?php echo (isset($this->request->data['Post']['category_id']) && $this->request->data['Category']['id'] == $child['id']) ? 'selected' : '' ?>><?php echo $child['name'] ?></option>
												<?php
											endforeach;

											?>
										</optgroup>
										<?php
									}

									?>

									<?php
								endforeach;

								?>
							</select>
						</div>
					</div>
					<div class="control-group">
						<label>Tiêu đề</label>
						<div class="controls">
							<?php echo $this->Form->input('title', array('class' => 'input-xxlarge', 'div' => false, 'label' => false)) ?>
						</div>
					</div>
					<div class="control-group">
						<label>Ảnh</label>
						<div class="controls">
							<?php
							if (!empty($this->request->data['Post']['thumbnail'])) {

								?>
								<div class="thumbnail post-thumnail" onclick="openKCFinder_singleFile(this)"><img src="<?php echo $this->request->data['Post']['thumbnail'] ?>"/></div>
								<?php
							} else {
								echo $this->Html->tag('div', 'Click để chọn hình.', array('class' => 'thumbnail post-thumnail', 'onclick' => 'openKCFinder_singleFile(this)'));
							}

							?>
						</div>
					</div>
					<div class="control-group">
						<label>Tóm tắt</label>
						<div class="controls">
							<?php echo $this->Form->input('sumary', array('rows' => 3, 'div' => false, 'label' => false, 'class' => 'input-xxlarge textarea wysihtml5-editor')); ?>
						</div>
					</div>
					<div class="control-group">
						<label>Nội dung</label>
						<div class="controls">
							<?php
							echo $this->Form->input('content', array('div' => FALSE, 'label' => false, 'id' => 'full_text', 'class' => 'input-xxlarge textarea wysihtml5-editor'));
							echo $this->TvFck->create('full_text', array('toolbar' => 'extra'), 'full_text');

							?>
						</div>
					</div>
					<div style="text-align: center">
						<?php echo $this->Form->submit('Lưu', array('class' => 'btn btn-success', 'div' => false)) ?>
					</div>
					<?php echo $this->Form->hidden('thumbnail', array('id' => 'post-thumbnail')) ?>
				</fieldset>
				<?php echo $this->Form->end(); ?>
			</div>
		</div>
	</div>

</div>