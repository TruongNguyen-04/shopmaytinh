<?php 
	
	$id = $_GET['id'];
	$result = "";
	require_once '../U_Model/SanPhamGiamGia/LayIDSpGiamGia.php';

	require_once '../U_View/SanPhamGiamGia/FormThemGiamGia.php';
	$giaban = 0;
	if (isset($_POST['submit'])) {
		$giamgia = $_POST['giamgia'];// trạng thái
		$ptgg = $_POST['ptgg'];
		$giaban = $tsp['Gia_Cu'] - ($tsp['Gia_Cu'] * ("0.".$ptgg));
		require_once '../U_Model/SanPhamGiamGia/BatTatGiamGia.php';
		if ($result==1) {
			echo "<b> Bạn Đã Bật(Tắt) Giảm Giá Thành Công Sản Phẩm : " . $tsp['Ten_San_Pham'];
		}
		if ($result==2) {
			echo "<b> Bạn Đã Bật(Tắt) Giảm Giá Không Thành Công Sản Phẩm : " . $tsp['Ten_San_Pham'];
		}
	}


?>	