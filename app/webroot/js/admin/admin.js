$("#thumbnail-benh").on("click",function(){
	var $div = $(this);
	window.KCFinder = {
		callBack: function(url) {
			window.KCFinder = null;
			$div.html('<div style="margin:5px">Đang tải ảnh...</div>');
			var img = new Image();
			img.src = url;
			img.onload = function() {
				base_url_str = url.replace(base_url + 'app/webroot', '');
				$div.html('<img id="img" src="' + url + '" />');
				//$("#image_path").val(base_url_str);
				$("#BenhThumbnail").val(url);
				var img = document.getElementById('img');
				img.style.visibility = "visible";
			};
		}
	};
	window.open(base_url + 'app/webroot/js/ckeditor/kcfinder/browse.php?type=images&dir=images',
			'kcfinder_image', 'status=0, toolbar=0, location=0, menubar=0, ' +
			'directories=0, resizable=1, scrollbars=0, width=800, height=600'
			);
});

$("#thumbnail-thuoc").on("click",function(){
	var $div = $(this);
	window.KCFinder = {
		callBack: function(url) {
			window.KCFinder = null;
			$div.html('<div style="margin:5px">Đang tải ảnh...</div>');
			var img = new Image();
			img.src = url;
			img.onload = function() {
				base_url_str = url.replace(base_url + 'app/webroot', '');
				$div.html('<img id="img" src="' + url + '" />');
				//$("#image_path").val(base_url_str);
				$("#ThuocThumbnail").val(url);
				var img = document.getElementById('img');
				img.style.visibility = "visible";
			};
		}
	};
	window.open(base_url + 'app/webroot/js/ckeditor/kcfinder/browse.php?type=images&dir=images',
			'kcfinder_image', 'status=0, toolbar=0, location=0, menubar=0, ' +
			'directories=0, resizable=1, scrollbars=0, width=800, height=600'
			);
});
