<?php 
	
	$user = $_SESSION['user'];
	
	$result = "";
	require_once '../U_Model/KetNoiDb.php';

	require_once '../U_Model/DonHang_Custommer/LayMaDonHang_M.php';
	
	if ($num >= 1) {
		$madonhang = $mdh['MaDonHang'];
		$nguoinhan = $mdh['TenNguoiNhan'];
		$diachi    = $mdh['DiaChi'];
		$sodienthoai = $mdh['SoDienThoai'];
		require_once '../U_Model/DonHang_Custommer/XemDonHang_M.php';
		require_once '../U_View/DonHang_Custommer/XemDonHang_V.php';
	}
	else{
		echo "Bạn Không Có Đơn Hàng Nào";
	}

	

	

?>