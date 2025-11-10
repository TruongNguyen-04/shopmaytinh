<?php 
	
	$sql = "UPDATE taikhoan SET  MatKhau = '$mk', DiaChi = '$dc', SoDienThoai = '$sdt'where TenDangNhap = '$tdnbd' ";

	$qr = mysqli_query($connect,$sql);

	if ($qr) {
		
		$result = 1;
	}
	else{
		$result = 2;
	}
?>