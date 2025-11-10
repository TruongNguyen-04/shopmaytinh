<?php 
	
	require_once 'KetNoiDb.php';

	$tkmk = "SELECT * from taikhoan where TenDangNhap ='$us'";

	$qrr = mysqli_query($connect,$sql);

	$ar = mysqli_fetch_array($qrr);

?>