<?php 
	
	require_once'KetNoiDb.php';

	$sql3 =  "INSERT INTO tb_nguoidatmua(TenNguoiNhan,DiaChi,SoDienThoai,Email,MaDonHang,ThoiGianDat)
			values ('$Tnn','$Dc','$Sdt','$EMAIL','$random',NOW());
	";

	$qr3 = mysqli_query($connect,$sql3);

?>