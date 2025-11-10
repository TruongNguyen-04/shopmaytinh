<?php 
	
	$sql = "SELECT * From danh_sach_san_pham where GiamGia = 'YES' order by id DESC";

	$qr = mysqli_query($connect,$sql);


?>