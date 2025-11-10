<?php 
	$user = $_SESSION['user'];

	require_once './../U_Model/KetNoiDb.php';

	$sql  = "SELECT * from tb_binhluan where TenNguoiBinhLuan = '$user' order by (ThoiGian) DESC";

	$qr = mysqli_query($connect,$sql);
?>