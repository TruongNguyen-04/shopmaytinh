<?php 
	
	require_once './../U_Model/KetNoiDb.php';

	$gg = "SELECT * from danh_sach_san_pham where id = '$id'";

	$qr = mysqli_query($connect,$gg);

	
	$tsp = mysqli_fetch_array($qr);

 ?>