<?php 
	require_once'KetNoiDb.php';
	
	$sql2 = "INSERT INTO tb_nguoidatmua(TenDangNhap,TenNguoiNhan,DiaChi,SoDienThoai,Email,MaDonHang,ThoiGianDat)
			values ('$tdn','$tnn','$dc','$sdt','$email','$random',NOW());
	";

	$qr2 = mysqli_query($connect,$sql2);




?>