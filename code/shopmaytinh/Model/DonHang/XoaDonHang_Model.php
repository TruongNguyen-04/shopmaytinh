<?php 
	$xoa = "DELETE from tb_nguoidatmua where SoDienThoai = '$xnsdt' AND Email = '$xnemail' AND MaDonHang = '$mdh'";

	$tt = mysqli_query($connect,$xoa);

	if ($tt) {
		$result =1;
	}
	else{
		$result = 2;
	}
?>