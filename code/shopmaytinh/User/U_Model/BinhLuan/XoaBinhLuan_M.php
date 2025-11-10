<?php 
	
	require_once './../U_Model/KetNoiDb.php';
	$time = $_GET['time'];
	$id = $_GET['id'];
	$xoabl = "DELETE FROM tb_binhluan where id = '$id' AND ThoiGian = '$time'";

	$qr = mysqli_query($connect,$xoabl);

	if ($qr) {
		$result = 1;
	}
	else{
		$result = 2;
	}

?>