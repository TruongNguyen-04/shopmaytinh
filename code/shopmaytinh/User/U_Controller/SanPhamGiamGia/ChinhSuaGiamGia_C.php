<?php 
	$id = $_GET['id'];
	$result = "";
	require_once '../U_Model/HienTTin_M.php';

	require_once '../U_View/SanPhamGiamGia/ChinhSuaGiamGia_V.php';
	if (isset($_POST['submit'])) {
		$gdb    = $_POST['gdb'];
		$ptgg   = $_POST['ptgg'];
		$gb 	= $gdb - ($gdb *("0.".$ptgg));
		require_once '../U_Model/SanPhamGiamGia/ChinhSuaGiamGia_M.php';
		if ($result == 1) {
			echo "Cập Nhật Thành Công";
		}
		if ($result == 2) {
			echo "Cập Nhật Thất Bại";
		}
	}
	

?>