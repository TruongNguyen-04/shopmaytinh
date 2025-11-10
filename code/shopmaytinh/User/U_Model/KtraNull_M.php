<?php 
	
	require_once 'KetNoiDb.php';
	
	$check_dtlt = "SELECT * from chi_tiet_san_pham where id = '$id'";

	$check_pk = "SELECT * FROM chi_tiet_phu_kien where id = '$id'";

	$qr1 = mysqli_query($connect,$check_dtlt);

	$qr2 = mysqli_query($connect,$check_pk);

	$count1 = mysqli_num_rows($qr1);

	$count2 = mysqli_num_rows($qr2);


	$color = "SELECT * from tb_mausac where id = '$id'";

	$qrr = mysqli_query($connect,$color);

	$count3 = mysqli_num_rows($qrr);

	$ten = "SELECT * from danh_sach_san_pham where id = '$id'";
	$qe = mysqli_query($connect,$ten);

	$tenn = mysqli_fetch_array($qe);
?>