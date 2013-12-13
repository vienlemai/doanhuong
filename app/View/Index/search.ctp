
<?php
$maps = array(
	'benh' => 'Bệnh',
	'thuoc' => 'Thuốc',
	'trieuChung' => 'Triệu chứng',
);
$mapModel = array(
	'benh' => 'Benh',
	'thuoc' => 'Thuoc',
	'trieuChung' => 'Benh',
);
$mapName = array(
	'benh' => 'ten_benh',
	'thuoc' => 'ten_thuoc',
	'trieuChung' => 'ten_benh',
);
$mapDes = array(
	'benh' => 'trieu_chung',
	'trieuChung' => 'trieu_chung',
	'thuoc' => 'thanh_phan',
);

$mapController = array(
	'benh' => 'benhs',
	'trieuChung' => 'benhs',
	'thuoc' => 'thuocs',
);
//var_dump($typeSearch)

?>
<div class="righttop">
	<h1 class="title">Kết quả tìm kiếm theo <?php echo $maps[$typeSearch] ?>: <span><?php echo $key ?></span></h1>
	<div class="maincontent">
		<div>
			<?php if (!empty($result)): ?>
				<?php foreach ($result as $row): ?>
					<div class="box">
						<a href="#"><img src="<?php echo $row[$mapModel[$typeSearch]]['thumbnail'] ?>" /></a>
						<div class="right">
							<h2 class="bigtit"><?php echo $row[$mapModel[$typeSearch]][$mapName[$typeSearch]] ?></h2>
							<div>
								<?php echo $row[$mapModel[$typeSearch]][$mapDes[$typeSearch]] ?>
							</div>
							<?php echo $this->Html->link('Chi tiết', array('controller' => $mapController[$typeSearch], 'action' => 'view', $row[$mapModel[$typeSearch]]['id']), array('class' => 'more')) ?>
						</div>
						<div class="clear"></div>
					</div>
				<?php endforeach; ?>
			<?php else : ?>
				<h3>Không tìm thấy kết quả nào !</h3>
			<?php endif; ?>
		</div>
	</div>
</div>