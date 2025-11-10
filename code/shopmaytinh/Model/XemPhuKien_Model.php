<?php 
	
	$id = $_GET['id'];
	$loaisp= $_GET['loaisp'];
	
	$sql = "SELECT * FROM chi_tiet_phu_kien where id ='$id'";

	$sql2 = "SELECT * from danh_sach_san_pham where id = '$id'";

	$qr2 = mysqli_query($connect,$sql2);

	$query = mysqli_query($connect,$sql);

	$ktra = mysqli_fetch_array($qr2);

	$pk = mysqli_fetch_array($query);
?>