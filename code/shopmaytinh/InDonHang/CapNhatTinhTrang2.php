<?php 
	require_once '../Model/KetNoiDb.php';
	$sql = "UPDATE tb_nguoidatmua SET TinhTrang = '$tinhtrang' where MaDonHang = '$mdhs'";

	$qr = mysqli_query($connect,$sql);

?>