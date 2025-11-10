<?php 
	
	require_once './../U_Model/KetNoiDb.php';

	$sql = "SELECT * from tb_binhluan where DanhGia = 'good'";

	$qr = mysqli_query($connect,$sql);

	$num = mysqli_num_rows($qr);
?>
