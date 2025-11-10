<?php 
	
	require_once 'KetNoiDb.php';

	$sql = "UPDATE danh_sach_san_pham set 
		Ten_San_Pham = '$tsp',
		
		Gia_Cu  	 = '$gc',
		
		Loai_SP		 = '$lsp',
		Dong_May	 = '$GT',
		So_Luong	 = '$sl',
		TGian_CSua   = CURRENT_TIMESTAMP()
		where id = '$id'
	";

	$qr = mysqli_query($connect,$sql);

	if ($qr) {
		$result = 1;
	}
	else{
		$result = 2;
	}

?>