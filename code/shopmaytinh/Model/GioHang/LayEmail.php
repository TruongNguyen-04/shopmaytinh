<?php 
	require_once 'KetNoiDb.php';
	$sql = "SELECT * from taikhoan where TenDangNhap ='$tdn'";
	$qr  = mysqli_query($connect,$sql);
	$Email = mysqli_fetch_array($qr);

?>