<div class="righttop">
	<h1 class="title">Liên hệ</h1>
	<div class="maincontent">
		<div>
			<div class="lienhe">
				<p>Nếu bạn đang có những thắc mắc cần được hỗ trợ tư vấn và giải đáp xin vui lòng liên hệ với chúng tôi.</p>
				<p>Chúng tôi sẽ trả lời bạn trong thời gian sớm nhất</p>
				<p style="font-style: italic;">Trân trọng!</p>
				<?php if (isset($success)): ?>
				<div class="contact contact-success">Tin nhắn của bạn đã được gửi đi.
					<br>Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất. 
					<br>Xin chân thành cảm ơn !
				</div>
				<?php else : ?>
					<?php echo $this->Form->create('Lienhe', array('class' => 'contact')); ?>

					<?php echo $this->Form->input('ho_ten', array('div' => false, 'label' => false, 'placeholder' => 'Họ và tên')) ?>
					<?php echo $this->Form->input('dia_chi', array('div' => false, 'label' => false, 'placeholder' => 'Địa chỉ')) ?>
					<?php echo $this->Form->input('dien_thoai', array('div' => false, 'label' => false, 'placeholder' => 'Số điện thoại')) ?>
					<?php echo $this->Form->input('email', array('div' => false, 'label' => false, 'placeholder' => 'Địa chỉ email')) ?>
					<?php echo $this->Form->input('noi_dung', array('div' => false, 'label' => false, 'placeholder' => 'Nội dung')) ?>

					<?php echo $this->Form->end('Gửi'); ?>
				<?php endif; ?>

				<div class="myinfo">
					<p><span>Địa chỉ: </span>145 Trần Hưng Đạo, Đà Nẵng</p>
					<p><span>Điện thoại: </span>05113 444 333</p>
					<p><span>Di động: </span>0988 325 888</p>
					<p><span>Email: </span>thuocchobe@hotmail.com</p>
					<iframe width="260" height="260" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=145+L%C3%AA+Du%E1%BA%A9n,+Da+Nang,+Vietnam&amp;aq=2&amp;oq=145+le+duan&amp;sll=37.0625,-95.677068&amp;sspn=40.27343,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=145+L%C3%AA+Du%E1%BA%A9n,+H%E1%BA%A3i+Ch%C3%A2u,+%C4%90%C3%A0+N%E1%BA%B5ng,+Vietnam&amp;t=m&amp;z=14&amp;ll=16.070465,108.214817&amp;output=embed"></iframe>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
</div>
<?php echo $this->Html->script('http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js', array('block' => 'scriptBottom')); ?>
<?php echo $this->Html->script('frontend/validator/lienhe', array('block' => 'scriptBottom')); ?>