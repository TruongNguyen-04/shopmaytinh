<?php
	echo "<h3 style='margin-left:10%;'>
		Danh sách sản phẩm Đang Được Giảm Giá
		</h3>"; 
	require_once '.../../Model/KetNoiDb.php';
	
	
	require_once '.../../Model/GiamGia/MoreGiamGia_Model.php';
	echo '<div class="container">
			<div class="row">';
	while ($rs = mysqli_fetch_array($qr)) {
		require '.../../View/GiamGia/DanhSachSanPhamGiamGia_View.php';	
	}
	echo '</div>
			</div>';
 ?> 