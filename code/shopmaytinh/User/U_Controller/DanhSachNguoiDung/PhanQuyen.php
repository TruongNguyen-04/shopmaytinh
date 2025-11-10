<?php 
	
	$ten = $_GET['id'];
	$result = "";
	require_once '../U_Model/DanhSachNguoiDung/PhanQuyen_M.php';

	require_once '../U_View/DanhSachNguoiDung/PhanQuyen_V.php';
	if (isset($_POST['submit'])) {
		$capdo = $_POST['capdo'];
		require_once '../U_Model/DanhSachNguoiDung/CapNhatCapDo.php';
		if ($result == 1) {
			echo "Bạn đã cập nhật thành công cấp độ cho : ". "<b>".$ten."</b>";
			echo '<br><a href="index.php?act=xoanguoidung">Quay lại</a>';
		}
		if ($result == 2) {
			echo "Đã xảy ra lỗi khi cập nhật cấp độ cho : ". "<b>" .$ten . "</b>";
			echo '<br><a href="index.php?act=xoanguoidung">Quay lại</a>';
		}
	}
?>
