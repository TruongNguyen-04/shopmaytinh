<?php 
	
	require_once 'KetNoiDb.php';

	$sql  = "UPDATE taikhoan SET Email = '$email', DiaChi = '$dc', SoDienThoai = '$sdt', AnhDaiDIen = '$img' where TenDangNhap = '$us' ";

	$qr = mysqli_query($connect,$sql);

	if ($qr) {
		$result = 1;
	}else{
		$result = 2;
	}

?>