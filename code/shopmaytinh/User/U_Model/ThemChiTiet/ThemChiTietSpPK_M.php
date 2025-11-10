<?php 
	
	require_once 'KetNoiDb.php';

	$kq = "select id from chi_tiet_phu_kien where id = '$id'";

	$qr0 = mysqli_query($connect,$kq);

	$resu = mysqli_num_rows($qr0);

	if ($resu >= 1) {
		echo "Đã tồn tại 1 sản phẩm với id = " . $id;
		return 0;
	}
	else{
		$sql = "INSERT INTO chi_tiet_phu_kien(id,Tuong_Thich,Cong_Ket_Noi,Thoi_Gian_Sac,Thoi_Gian_Su_Dung,KichThuoc_KhoangCach,Thuong_Hieu,Xuat_Xu) values('$id','$tt','$ckn','$tgs','$tgsd','$ktkc','$th','$xx')";

		$qr = mysqli_query($connect,$sql);

		if ($qr) {
			$result = 1;
		}
		else{
			$result =2;
		}
	}

	

?>