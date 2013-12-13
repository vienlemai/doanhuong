<div class="rightbottom">
	<h1 class="title"><?php echo $sub_title?></h1>
	<div class="maincontent">
		<ul>
			<?php //debug($benhs[0]['Thuoc']['trieu_chung'])?>
			<?php foreach ($thuocs as $row) : ?>
			<li><div>
					<a href="<?php echo $this->Html->url('/thuocs/view/'.$row['Thuoc']['id']) ?>"><img src="<?php echo $row['Thuoc']['thumbnail'] ?>"/></a>
					<p>Thuốc: <span><?php echo $row['Thuoc']['ten_thuoc'] ?></span></p>
					<?php echo $this->Html->link('Chi tiết',array('controller'=>'thuocs','action'=>'view',$row['Thuoc']['id']),array('class'=>'more')) ?>
				</div>
			</li>
			<?php endforeach;?>
		</ul>
	</div>
</div>