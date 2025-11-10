<?php 
	
	$sql = "UPDATE taikhoan SET TenDangNhap = '$tdn', MatKhau = '$mk', DiaChi = '$dc', SoDienThoai = '$sdt', AnhDaiDIen = '$img' where TenDangNhap = '$tdnbd' ";

	$qr = mysqli_query($connect,$sql);

	if ($qr) {
		$_SESSION['user'] = $tdn;
		$result = 1;
	}
	else{
		$result = 2;
	}
?>