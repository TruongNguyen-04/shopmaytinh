<?php 
	
	$result = "";

	require_once '../U_Model/BinhLuan/XoaBinhLuan_M.php';

	
	if ($result == 1) {
		require_once '../U_View/BinhLuan/XoaBinhLuan_V.php';
	}
	if ($result == 2) {
		echo "Xóa Thất Bại";
	}
?>