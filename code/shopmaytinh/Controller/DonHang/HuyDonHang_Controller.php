<?php 
	require_once '.../../Model/KetNoiDb.php';
	$mdh = $_GET['mdh'];
	require_once '.../../View/DonHang/HuyDonHang_View.php';
	$sumxn = "";
	$result = "";
	if (isset($_POST['xacnhantt'])) {
		$xnsdt = $_POST['xnsdt'];
		$xnemail = $_POST['xnemail'];
		require_once '.../../Model/DonHang/HuyDonHang_Model.php';
		
		require_once '.../../Model/DonHang/XoaDonHang_Model.php';
		if ($result == 1) {
			echo "<h3>Hủy Đơn Hàng Thành Công</h3>";
			
		}
		if ($result == 2) {
			echo "<h3>Hủy Đơn Hàng Thất Bại</h3>";
		}
	}
	

?>