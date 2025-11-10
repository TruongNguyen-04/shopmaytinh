<?php 
	
	require_once '../Model/KetNoiDb.php';
	$mdh = $_GET['mdh'];
	$sql = "SELECT * FROM tb_donhang where MaDonHang = '$mdh'";

	$qr = mysqli_query($connect,$sql);

	

?>