<?php 
	
	$sql = "INSERT INTO tb_binhluan(
	TenNguoiBinhLuan,id,DanhGia,NoiDungBinhLuan,ThoiGian
	) values(
	'$ten','$id','$rate','$noidung',NOW())
	";
	$qr = mysqli_query($connect,$sql);

	if ($qr) {
		$result = 1;
	}
	else{
		$result = 2;
	}
?>