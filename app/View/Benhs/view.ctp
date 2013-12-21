<div class="rightbottom">
	<div class="maindetail">
		<h2 class="titledetail"><?php echo $benh['Benh']['ten_benh'] ?></h2>
		<div>
			<div class="left">
				<img src="<?php echo $benh['Benh']['thumbnail'] ?>"/>
				<ul>
					<li>Ngày đăng : <?php echo date('d/m/Y',  strtotime($thuoc['Benh']['created'])) ?></li>
					<li>Lượt xem : <?php echo $thuoc['Benh']['viewed'] ?></li>
				</ul>
			</div>

			<div class="right">
				<h3 class="bigtit">Triệu chứng</h3>
				<div class="viewtit">
					<?php echo $benh['Benh']['trieu_chung'] ?>
				</div>

				<h3 class="bigtit">Nguyên nhân</h3>
				<div class="viewtit">
					<?php echo $benh['Benh']['nguyen_nhan'] ?>
				</div>

				<h3 class="bigtit">Cách phòng tránh</h3>
				<div class="viewtit">
					<?php echo $benh['Benh']['cach_phong_tranh'] ?>
				</div>

				<h3 class="bigtit">Thông tin thêm</h3>
				<div class="viewtit">
					<?php echo $benh['Benh']['thong_tin_them'] ?>
				</div>
				<?php echo $this->Facebook->comments(array('width'=>'480px')); ?>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>