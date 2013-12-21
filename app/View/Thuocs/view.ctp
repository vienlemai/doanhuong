<div class="rightbottom">
	<div class="maindetail">
		<h2 class="titledetail"><?php echo $thuoc['Thuoc']['ten_thuoc'] ?></h2>
		<div>
			<div class="left">
				<img src="<?php echo $thuoc['Thuoc']['thumbnail'] ?>" />
				<ul>
					<li>Ngày đăng : <?php echo date('d/m/Y',  strtotime($thuoc['Thuoc']['created'])) ?></li>
					<li>Lượt xem : <?php echo $thuoc['Thuoc']['viewed'] ?></li>
				</ul>
			</div>

			<div class="right">
				<h3 class="bigtit">Thành phần</h3>
				<div class="viewtit">
					<?php echo $thuoc['Thuoc']['thanh_phan'] ?>
				</div>

				<h3 class="bigtit">Dạng bào chế</h3>
				<div class="viewtit">
					<?php echo $thuoc['Thuoc']['dang_bao_che'] ?>
				</div>

				<h3 class="bigtit">Quy cách đóng gói</h3>
				<div class="viewtit">
					<?php echo $thuoc['Thuoc']['quy_cach_dong_goi'] ?>
				</div>

				<h3 class="bigtit">Chỉ định/Chống chỉ định</h3>
				<div class="viewtit">
					<?php echo $thuoc['Thuoc']['chong_chi_dinh'] ?>
				</div>

				<h3 class="bigtit">Cách dùng</h3>
				<div class="viewtit">
					<?php echo $thuoc['Thuoc']['cach_dung'] ?>
				</div>
				<h3 class="bigtit">Công ty phân phối</h3>
				<div class="viewtit">
					<?php echo $thuoc['Thuoc']['cty_phan_phoi'] ?>

				</div>
				<h3 class="bigtit">Số đăng ký</h3>
				<div class="viewtit">
					<?php echo $thuoc['Thuoc']['so_dang_ky'] ?>

				</div>
				<h3 class="bigtit">Thông tin thêm</h3>
				<div class="viewtit">
					<?php echo $thuoc['Thuoc']['thong_tin_them'] ?>
				</div>
					<?php echo $this->Facebook->comments(array('width'=>'480px')); ?>
			</div>
			
			<div class="clear"></div>

		</div>
	</div>
</div>
