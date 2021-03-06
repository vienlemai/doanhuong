<div class="row-fluid">	
    <div class="block">
        <div class="navbar navbar-inner block-header">
            <div class="muted pull-left">Người dùng liên hệ</div>
        </div>
        <div class="block-content collapse in">
			<?php echo $this->Session->flash() ?>
            <div class="span12">
                <div class="dataTables_wrapper form-inline" role="grid">


                    <table class="table table-striped table-bordered dataTable" >
                        <thead>
                            <tr>
                                <th>TT</th>
                                <th>Họ tên</th>
                                <th>Email</th>
                                <th>Điện thoại</th>
                                <th>Ngày gửi</th>
                                <th>Nội dung</th>
                            </tr>
                        </thead>
                        <tbody>
							<?php
							//debug($categories);
							$stt = 1;
							foreach ($lienhes as $row):

								?>
								<tr>
									<td><?php echo $stt++ ?></td>
									<td><?php echo $row['Lienhe']['ho_ten'] ?></td>
									<td><?php echo $row['Lienhe']['email'] ?></td>
									<td><?php echo $row['Lienhe']['dien_thoai'] ?></td>

									<td>
										<?php echo date('d/m/Y', strtotime($row['Lienhe']['created'])) ?>
									</td>
									<td>
										<?php
										echo $this->Html->link($this->Html->image('admin/view.png'), array('action' => 'view', $row['Lienhe']['id']), array('escape' => false));
										echo $this->Form->postLink(
													$this->Html->image('admin/delete.png'), array('action' => 'delete', $row['Lienhe']['id']), array('escape' => false), 'Bạn có chắc chắn muốn xóa ?'
											);

										?>

									</td>
								</tr>
							<?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="span6"></div>
                        <div class="span6">
                            <div class="dataTables_paginate paging_bootstrap pagination">
                                <ul>
									<?php
									echo $this->Paginator->prev('Trước', array('tag' => 'li'), null, array('tag' => 'li', 'class' => 'disabled', 'disabledTag' => 'a'));
									echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'currentClass' => 'active', 'tag' => 'li', 'first' => 1));
									echo $this->Paginator->next('Tiếp', array('tag' => 'li', 'currentClass' => 'disabled'), null, array('tag' => 'li', 'class' => 'disabled', 'disabledTag' => 'a'));

									?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

