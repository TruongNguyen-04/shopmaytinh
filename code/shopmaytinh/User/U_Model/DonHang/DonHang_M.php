<?php 
	
	require_once './../U_Model/KetNoiDb.php';

	$sql = "SELECT * from tb_nguoidatmua where TinhTrang = ''";

	$qr = mysqli_query($connect,$sql);
	
?>