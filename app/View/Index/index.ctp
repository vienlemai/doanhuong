<div class="rightbottom">
	<h1 class="title"><?php echo $this->Html->link('Thuốc', array('controller' => 'thuocs', 'action' => 'index')) ?></h1>
	<div class="maincontent">
		<ul>
			<?php //debug($benhs[0]['Benh']['trieu_chung'])?>
			<?php foreach ($thuocs as $row) : ?>
				<li><div>
						<a href="<?php echo $this->Html->url('/thuocs/view/' . $row['Thuoc']['id']) ?>"><img src="<?php echo $row['Thuoc']['thumbnail'] ?>"/></a>
						<!--<div class="desc"><?php echo $row['Thuoc']['trieu_chung'] ?></div>-->
						<p><span><?php echo $row['Thuoc']['ten_thuoc'] ?></span></p>
						<?php echo $this->Html->link('Chi tiết', array('controller' => 'thuocs', 'action' => 'view', $row['Thuoc']['id']), array('class' => 'more')) ?>
					</div>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>

</div>
