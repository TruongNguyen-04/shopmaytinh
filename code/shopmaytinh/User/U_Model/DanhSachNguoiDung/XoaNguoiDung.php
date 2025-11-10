<?php 
	
	require_once './../U_Model/KetNoiDb.php';

	$ten = $_GET['id'];

	$sql = "DELETE from taikhoan where TenDangNhap = '$ten'";

	$qr = mysqli_query($connect,$sql);

?>