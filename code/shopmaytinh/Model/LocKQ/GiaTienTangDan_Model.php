<?php 
	
	require_once 'KetNoiDb.php';
	$tang = "SELECT * from danh_sach_san_pham order by(Gia_Cu)ASC";

	$gt = mysqli_query($connect,$tang);

?>