<div class="row-fluid">	
    <div class="block">
        <div class="navbar navbar-inner block-header">
            <div class="muted pull-left">Quản lí danh mục</div>
        </div>
        <div class="block-content collapse in">
			<?php echo $this->Session->flash() ?>
            <div class="span12">
                <div class="dataTables_wrapper form-inline" role="grid">


                    <table class="table table-striped table-bordered dataTable" >
                        <thead>
                            <tr>
                                <th>TT</th>
                                <th>Tên danh mục</th>
                                <th>Danh mục cha</th>
                                <th>Ngày tạo</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
							<?php
							//debug($categories);
							$stt = 1;
							foreach ($categories as $row):

								?>
								<tr>
									<td><?php echo $stt++ ?></td>
									<td><?php echo $row['Category']['name'] ?></td>
									<td><?php echo $row['ParentCategory']['name'] ?></td>
									<td>
										<?php echo date('d/m/Y', strtotime($row['Category']['created'])) ?>
									</td>
									<td>
										<?php
										echo $this->Html->link($this->Html->image('admin/edit.png'), array('action' => 'edit', $row['Category']['id']), array('escape' => false));
										if (!empty($row['Category']['parent_id'])):
											//echo $this->Form->postLink($this->Html->image('admin/delete.png'), array('action' => 'delete'), array('escape' => false));
											echo $this->Form->postLink(
													$this->Html->image('admin/delete.png'), array('action' => 'delete', $row['Category']['id']), array('escape' => false), 'Bạn có chắc chắn muốn xóa ?'
											);
										endif;

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
                    <div  class="row" style="text-align: center;">
						<?php echo $this->Html->link('Thêm danh mục',array('action'=>'add'), array('class' => 'btn btn-primary')) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

