<?php 
		
	require_once 'KetNoiDb.php';

	$sql = "SELECT * FROM chi_tiet_san_pham where id = '$id'";
	$tensp = "SELECT * from danh_sach_san_pham where id = '$id'";
	$sql2 = "SELECT * from chi_tiet_phu_kien where id = '$id'";
	$qrr = mysqli_query($connect,$tensp);

	$tsp = mysqli_fetch_array($qrr);
	
	$qr = mysqli_query($connect,$sql);
	$qr2 = mysqli_query($connect,$sql2);

	$row2 = mysqli_fetch_array($qr2);
	$row = mysqli_fetch_array($qr);


?>