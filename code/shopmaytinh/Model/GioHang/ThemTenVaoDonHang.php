<?php 
	
	require_once'KetNoiDb.php';
	
	$sql4 = "INSERT INTO tb_donhang(TenNguoiNhan,MaDonHang) values ('$tnn','$random')";

	// $sql5 = "INSERT INTO tb_donhang(TenNguoiNhan) values ('$tnn')";
	$qr4 = mysqli_query($connect,$sql4);
	// $qr5 = mysqli_query($connect,$sql4);

?>