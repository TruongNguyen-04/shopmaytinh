<?php 
	require_once 'KetNoiDb.php';
	
	$giam = "SELECT * from danh_sach_san_pham order by(Gia_Cu)DESC";

	$gt = mysqli_query($connect,$giam);

?>