<?php 
	
	$hdh = "SELECT * from tb_nguoidatmua where SoDienThoai = '$xnsdt' AND Email = '$xnemail' AND MaDonHang = '$mdh' ";

	$qrs = mysqli_query($connect,$hdh);

	$sumxn = mysqli_num_rows($qrs);

?>