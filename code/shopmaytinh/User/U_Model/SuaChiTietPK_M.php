<?php 
	
	require_once 'KetNoiDb.php';

	$sql = "UPDATE chi_tiet_phu_kien SET Tuong_Thich = '$tt', Cong_Ket_Noi = '$ckn', Thoi_Gian_Sac = '$tgs', Thoi_Gian_Su_Dung = '$tgsd', KichThuoc_KhoangCach = '$ktkc', Thuong_Hieu = '$th', Xuat_Xu = '$xx' where id = '$id' ";

	$qr = mysqli_query($connect,$sql);

	if ($qr) {
		$result = 1;
	}else{
		$result = 2;
	}



?>