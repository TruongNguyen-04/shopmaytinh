<?php 
	
	require_once 'KetNoiDb.php';
	$us = $_SESSION['user'];
	$sql = "SELECT * FROM taikhoan where TenDangNhap = '$us' ";
	$qr = mysqli_query($connect,$sql);
	$CapDo = mysqli_fetch_array($qr);

	
?>