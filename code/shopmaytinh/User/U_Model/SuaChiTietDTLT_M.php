<?php 
	
	require_once 'KetNoiDb.php';


	$sql = "UPDATE chi_tiet_san_pham SET Man_Hinh = '$mh', Do_Phan_Giai = '$dpg', He_Dieu_Hanh = '$hdh', CPU = '$cpu', Camera_Truoc = '$camtruoc', Camera_Sau = '$camsau', RAM = '$ram', Bo_Nho_Trong = '$bnt', SIM = '$sim', PIN = '$pin' , Dung_Luong_Pin = '$dlp' , Chip = '$chip' , Chip_do_hoa = '$chipdohoa' , O_Cung = '$oc', Trong_Luong = '$tl' where id = '$id'";

	$upd = mysqli_query($connect,$sql);
	
	if ($upd) {
		$result = 1;
	}
	else{
		$result = 2;
	}
	

?>