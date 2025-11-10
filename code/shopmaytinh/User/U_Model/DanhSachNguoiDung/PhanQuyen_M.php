<?php 

	require_once './../U_Model/KetNoiDb.php';

	$sql = "SELECT * from taikhoan where TenDangNhap = '$ten'";

	$qr = mysqli_query($connect,$sql);

	$pq = mysqli_fetch_array($qr);
?>