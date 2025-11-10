<?php 
	
	require_once './../U_Model/KetNoiDb.php';

	$sql = "INSERT INTO tb_mausac(id
		, TenMau1, AnhMau1, SoLuong1
		, TenMau2, AnhMau2, SoLuong2
		, TenMau3, AnhMau3, SoLuong3
		, TenMau4, AnhMau4, SoLuong4
	)Values (
		$id, '$mau1', '$img1', '$sl1',
			 '$mau2', '$img2', '$sl2',
			 '$mau3', '$img3', '$sl3',
			 '$mau4', '$img4', '$sl4'
	)
	";

	$qr = mysqli_query($connect,$sql);

	if ($qr) {
		$result = 1;
	}
	else{
		$result = 2;
	}

?>