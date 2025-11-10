<?php 
	
	require_once '../U_Model/KetNoiDb.php';

	require_once '../U_Model/ToanBoSanPham_M.php';
	echo "<h1 style='text-align:center'> Danh sách sản phẩm - Thêm Chi Tiết </h1>";
	echo '<div class="container">
	<div class="row">';
	while ($rs = mysqli_fetch_array($qr)) {
		require '../U_View/ToanBoSanPham2_V.php';
	}
	echo "</div>
			</div>";
	


?>