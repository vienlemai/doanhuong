$("#LienheAddForm").validate({
	rules: {
		"data[Lienhe][ho_ten]": "required",
		"data[Lienhe][dia_chi]": "required",
		"data[Lienhe][dien_thoai]": "required",
		"data[Lienhe][noi_dung]": "required",
		"data[Lienhe][email]": {
			required: true,
			email: true,
		}
		
	},
	messages: {
		"data[Lienhe][ho_ten]": "Nhập họ tên",
		"data[Lienhe][dia_chi]": "Nhập địa chỉ",
		"data[Lienhe][dien_thoai]": "Nhập số điện thoại",
		"data[Lienhe][noi_dung]": "Nhập nội dung",
		
		"data[Lienhe][email]": {
			required: "Nhập địa chỉ email",
			email: "Địa chỉ email không hợp lệ",
		}
	}
});