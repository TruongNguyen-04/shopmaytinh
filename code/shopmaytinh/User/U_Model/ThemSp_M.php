<?php 
	
	require_once 'KetNoiDb.php';

	$sql = "INSERT INTO danh_sach_san_pham(
			Ten_San_Pham,
			Hinh_Anh,
			Gia_Cu,
			Loai_SP,
			Dong_May,
			So_Luong,
			TGian_BatDau	
		) values(
			'$tsp',
			'$img',
			'$gc',
			'$lsp',
			'$GT',
			'$sl',
			CURRENT_TIMESTAMP()
		)";

	$qr = mysqli_query($connect,$sql);

	if ($qr) {
		require_once '../U_View/ThongBao/ThemSpThanhCong.php';
	}

?>