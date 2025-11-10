<?php 
	
	require_once '../Model/KetNoiDb.php';
	// $ten = $row['TenNguoiNhan'];
	// $mdhh = $dh['MaDonHang'];
	$sqll = "SELECT * from tb_nguoidatmua where MaDonHang = '$mdhs'";
	$qrs = mysqli_query($connect,$sqll);

	$MAIL = mysqli_fetch_array($qrs);
?>