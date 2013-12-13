<div class="row-fluid">	
    <div class="block">
        <div class="navbar navbar-inner block-header">
            <div class="muted pull-left">Quản lí bài viết</div>
        </div>
        <div class="block-content collapse in">
            <?php echo $this->Session->flash() ?>
            <div class="span12">
                <div class="dataTables_wrapper form-inline" role="grid">
                    <?php
                    $columns = array(
                        'Post.title' => 'Tiêu đề',
                        'Category.name' => 'Danh mục',
                        'Post.is_active' => 'Trạng thái',
                        'Post.created' => 'Ngày tạo',
                    );
                    $options = array('paging' => false);
                    echo $this->Table->render($posts, $columns, $options);
                    ?>
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
                    <div  class="row" style="text-align: center">
                        <?php echo $this->Html->link('Đăng bài viết', $this->Html->url('/admin/them-bai-viet'), array('class' => 'btn btn-primary')) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

