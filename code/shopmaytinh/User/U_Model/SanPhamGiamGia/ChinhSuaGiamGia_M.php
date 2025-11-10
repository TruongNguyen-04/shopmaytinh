<?php 
	
	require_once './../U_Model/KetNoiDb.php';

	$sql = "UPDATE danh_sach_san_pham SET Gia_Ban = $gb, Gia_Cu = $gdb, Phan_Tram = $ptgg where id = $id";

	$qr = mysqli_query($connect,$sql);

	if ($qr) {
		$result = 1;
	}
	else{
		$result = 2;
	}
?>