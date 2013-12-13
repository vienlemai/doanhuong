<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <div class="nav-collapse collapse">
                <a href="<?php echo $this->Html->url('/') ?>" target="_blank" class="brand">Trang chủ</a> 
                <a class="brand">|</a>
                <a href="<?php echo Router::url('/admin')?>" class="brand">Trang quản trị</a>
                <?php
                $user = $this->Session->read('UserAuth');
                if (!empty($user)):
                    ?>
                    <ul class="nav pull-right">

                        <li class="dropdown">
                            <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> <?php echo $user['User']['first_name'] ?> <i class="caret"></i>

                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo $this->Html->url('/admin/thong-tin-ca-nhan/' . $user['User']['id']) ?>">Thông tin cá nhân</a></li> 
                                <li><a href="<?php echo Router::url('/admin/doi-mat-khau') ?>">Đổi mật khẩu</a></li> 
                                <li><a href="<?php echo Router::url('/logout') ?>">Đăng xuất</a></li> 
                            </ul>
                        </li>
                    </ul>
                    <?php
                endif;
                ?>

                <ul class="nav">
                    <li class="">
                        <a href="<?php echo $this->Html->url('/admin/benhs')?>">Quản lý bệnh</a>
                    </li>
                    <li class="dropdown">
                        <a href="<?php echo $this->Html->url('/admin/thuocs')?>" role="button" class="dropdown-toggle" data-toggle="dropdown">Thuốc<i class="caret"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo $this->Html->url('/admin/thuocs') ?>">Quản lý thuốc</a></li> 
                            <li><a href="<?php echo $this->Html->url('/admin/categories') ?>">Quản lý danh mục thuốc</a></li> 
                        </ul>
                    </li>
					<li class="">
                        <a href="<?php echo $this->Html->url('/admin/lienhes')?>">Liên hệ</a>
                    </li>
                    <?php
                    if (isset($user['UserGroup']['id']) && $user['UserGroup']['id'] == ADMIN_GROUP_ID):
                        ?>

                        <li class="dropdown">
                            <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Người dùng <i class="caret"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="/admin/nguoi-dung">Danh sách người dùng</a></li> 
                                <li><a href="/admin/them-nguoi-dung">Thêm mới người dùng</a></li> 
                            </ul>
                        </li>
                        <?php
                    endif;
                    ?>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>