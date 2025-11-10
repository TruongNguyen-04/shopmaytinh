<?php 
	
	require_once './../U_Model/KetNoiDb.php';

	$sql = "SELECT * FROM tb_donhang where MaDonHang = '$mdh'";

	$qr = mysqli_query($connect,$sql);

	

?>