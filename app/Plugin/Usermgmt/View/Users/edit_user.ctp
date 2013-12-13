<?php
/*
  This file is part of UserMgmt.

  Author: Chetan Varshney (http://ektasoftwares.com)

  UserMgmt is free software: you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation, either version 3 of the License, or
  (at your option) any later version.

  UserMgmt is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with Foobar.  If not, see <http://www.gnu.org/licenses/>.
 */

?>
<div class="row">
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Cập nhật thông tin cá nhân</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<?php echo $this->Form->create('User'); ?>
				<fieldset>
					<legend>Nhập thông tin người dùng</legend>
					<?php echo $this->Form->input("id", array('type' => 'hidden', 'label' => false, 'div' => false)) ?>
					<div class="control-group">
						<label>Tên đăng nhập</label>
						<div class="controls">
							<?php echo $this->Form->input("username", array('label' => false, 'div' => false, 'class' => 'input-xxlarge')) ?>
						</div>
					</div>

					<div class="control-group">
						<label>Họ tên</label>
						<div class="controls">
							<?php echo $this->Form->input("first_name", array('label' => false, 'div' => false, 'class' => 'input-xxlarge')) ?>
						</div>
					</div>

					<div class="control-group">
						<label>Địa chỉ email</label>
						<div class="controls">
							<?php echo $this->Form->input("email", array('label' => false, 'div' => false, 'class' => 'input-xxlarge')) ?>
						</div>
					</div>
					<div class="form-actions">
						<?php echo $this->Form->submit('Cập nhật thông tin', array('class' => 'btn btn-large btn-primary', 'div' => false)) ?>
					</div>

				</fieldset>
				<?php echo $this->Form->end(); ?>
			</div>
		</div>
	</div>

</div>