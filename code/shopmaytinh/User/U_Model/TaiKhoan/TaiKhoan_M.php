<?php
	require_once './../U_Model/KetNoiDb.php';
	$user = $_SESSION['user'];
	$sql = "SELECT * from taikhoan where TenDangNhap = '$user'";

	$qr = mysqli_query($connect,$sql);

	$cus = mysqli_fetch_array($qr); 
?>