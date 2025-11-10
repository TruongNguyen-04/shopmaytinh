<?php 
	require_once './../U_Model/KetNoiDb.php';

	$sql = "DELETE from tb_binhluan where DanhGia = 'verybad'";

	$qr = mysqli_query($connect,$sql);

	if ($qr) {
		$result = 1;
	}
	else{
		$result = 2;
	}
?>