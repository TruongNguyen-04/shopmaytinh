<?php 

	require_once '../U_Model/SanPhamGiamGia/SanPhamGiamGia_M.php';
	echo '<div class="row"><h2 style="margin-top:10px;">
			Sản Phẩm Đang Giảm Giá
		</h2></div>';
	echo "<div class='row'>";
	while ($row = mysqli_fetch_array($qr)) {
		require '../U_View/SanPhamGiamGia/SanPhamGiamGia_V.php';
	}
	echo "</div>";
?>