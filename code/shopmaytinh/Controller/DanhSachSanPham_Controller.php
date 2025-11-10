<?php 


	
	require_once './Model/KetNoiDb.php';

	while ($row = mysqli_fetch_array($query)) {
		require './View/DanhSachSanPham_View.php';
	}
?>