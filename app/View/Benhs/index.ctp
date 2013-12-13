<div class="rightbottom">
	<h1 class="title"><?php echo $sub_title?></h1>
	<div class="maincontent">
		<ul>
			<?php //debug($benhs[0]['Benh']['trieu_chung'])?>
			<?php foreach ($benhs as $row) : ?>
			<li><div>
					<a href="<?php echo $this->Html->url('/benhs/view/'.$row['Benh']['id']) ?>"><img src="<?php echo $row['Benh']['thumbnail'] ?>"/></a>
					<!--<div class="desc"><?php echo $row['Benh']['trieu_chung'] ?></div>-->
					<p><span><?php echo $row['Benh']['ten_benh'] ?></span></p>
					<?php echo $this->Html->link('Chi tiết',array('controller'=>'benhs','action'=>'view',$row['Benh']['id']),array('class'=>'more')) ?>
				</div>
			</li>
			<?php endforeach;?>
		</ul>
	</div>
</div>