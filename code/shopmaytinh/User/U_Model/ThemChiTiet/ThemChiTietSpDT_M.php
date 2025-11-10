<?php 
	
	require_once 'KetNoiDb.php';

	$kq = "select id from chi_tiet_san_pham where id = '$id'";

	$qr0 = mysqli_query($connect,$kq);

	$resu = mysqli_num_rows($qr0);

	if ($resu >= 1) {
		echo "Đã tồn tại 1 sản phẩm với id = " . $id;
		return 0;
	}
	else{
		$sql = "INSERT INTO chi_tiet_san_pham(id,Man_Hinh,Do_Phan_Giai,He_Dieu_Hanh,CPU,Camera_Truoc,Camera_Sau,RAM,Bo_Nho_Trong,SIM,PIN,Dung_Luong_Pin)
		values ('$id','$mh','$dpg','$hdh','$cpu','$camera1','$camera2','$ram','$bnt','$sim','$pin','$dlp')
	";

	$qr = mysqli_query($connect,$sql);

	if ($qr) {
		$result = 1;
	}
	else{
		$result =2;
	}
	}

	

?>