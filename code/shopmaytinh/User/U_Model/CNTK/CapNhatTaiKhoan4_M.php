<?php 
	
	require_once 'KetNoiDb.php';

	$sql  = "UPDATE taikhoan SET MatKhau = '$mk', Email = '$email', DiaChi = '$dc', SoDienThoai = '$sdt' where TenDangNhap = '$us' ";

	$qr = mysqli_query($connect,$sql);

	if ($qr) {
		$result = 1;
	}else{
		$result = 2;
	}

?>