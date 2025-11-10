<?php 
	
	// require_once 'KetNoiDb.php';

	$sql2 = "SELECT * from danh_sach_san_pham where id = '$id'";

	$qr2 = mysqli_query($connect,$sql2);

	$row = mysqli_fetch_array($qr2);

	
?>