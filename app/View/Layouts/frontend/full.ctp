<!DOCTYPE HTML>
<?php echo $this->Facebook->html(); ?>
	<head>
		<meta http-equiv="content-type" content="text/html" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Mục bệnh</title>
		<?php
		echo $this->Html->css(array('frontend/style', 'frontend/jquery-ui'));

		?>

	</head>

	<body>
		<div id="wrapper">
			<div id="header">
				<ul class="main-menu">
					<li><a href="<?php echo $this->Html->url('/') ?>">Trang Chủ</a></li>
					<li><a href="<?php echo $this->Html->url('/thuocs') ?>">Mục Thuốc</a></li>
					<li><a href="<?php echo $this->Html->url('/benhs') ?>">Mục Bệnh</a></li>
					<li><a href="<?php echo $this->Html->url('/index/gioithieu'); ?>">Giới Thiệu</a></li>
					<li><a href="<?php echo $this->Html->url('/lienhes/add') ?>">Liên Hệ</a></li>
				</ul>
				<div class="sun"></div>
				<div class="cloud"></div>
				<div class="rainbow"></div>
				<div class="clear"></div>
				<div class="search2">
					<?php echo $this->element('frontend/search')  ?>
				</div>
				<div class="sociallink">
					<ul class="social-icons about">
						<li class="facebook"><a href="#">Facebook</a></li>
						<li class="twitter"><a href="#">Twitter</a></li>
						<li class="googleplus"><a href="#">Google Plus</a></li>
					</ul>
				</div>
			</div><!--end #header-->

			<div id="main">
				<div class="clear"></div>
				<div class="left">
					<div class="category">
						<h1 class="title">Danh mục bệnh</h1>
						<ul>
							<?php foreach ($muas as $k => $v): ?>
								<li><a href="<?php echo $this->Html->url('/benhs/index') ?>?mua=<?php echo $k ?>"><?php echo $v ?></a></li>
							<?php endforeach; ?>


						</ul>

						<h1 class="title">Danh mục thuốc</h1>
						<ul>
							<?php foreach ($categories as $k => $v): ?>
								<li><a href="<?php echo $this->Html->url('/thuocs/index') ?>?danhmuc=<?php echo $k ?>"><?php echo $v ?></a></li>
							<?php endforeach; ?>


						</ul>
					</div>
				</div>
				<div class="right">

					<?php echo $this->fetch('content') ?>
				</div>
				<div class="clear"></div>
			</div><!--end #main-->

			<div id="footer">
				<a class="link" href="#">Thuốc <br/>cho bé</a>
			</div><!--end #footer-->
		</div><!--end #wrapper-->
		<?php
		echo $this->Html->script(array('frontend/jquery-1.9.1', 'frontend/jquery-ui'));

		echo $this->fetch('scriptBottom');

		?>

	</body>
	 <?php echo $this->Facebook->init(); ?>
</html>