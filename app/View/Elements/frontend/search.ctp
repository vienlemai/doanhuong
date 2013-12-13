<form id="searchform" method="GET" action="<?php echo $this->Html->url('/index/search') ?>">
	<div class="tab">
		<div class="tab1">
			<input type="radio" name="typesearch" value="thuoc" id="drug"/><label for="drug">Tên thuốc</label>
		</div>
		<div class="tab1">
			<input type="radio" name="typesearch" value="benh" id="flu"/><label for="flu">Tên bệnh</label>
		</div>
		<div class="tab1">
			<input type="radio" name="typesearch" value="trieuChung" id="symptom"/><label for="symptom">Triệu chứng</label>
		</div>
	</div>
	<div class="searchbox">
		<input type="text" name="key" id="search"  placeholder="Tìm kiếm..."/>
		<input type="submit" name="submit" value="Tìm kiếm" />
	</div>
</form>