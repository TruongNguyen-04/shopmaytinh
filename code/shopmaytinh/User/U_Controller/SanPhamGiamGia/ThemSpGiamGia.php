<?php
	require_once '../U_Model/SanPhamGiamGia/SanPhamKhongGiamGia.php';
	echo "<div class='row'>";
	while ($rs = mysqli_fetch_array($qr)) {
		require '../U_View/SanPhamGiamGia/SanPhamKhongGiamGia_V.php';
	}
	echo "</div>";
	
?>