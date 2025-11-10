<?php 
	
	

	$sql = "SELECT * from danh_sach_san_pham where id ='$id'";

	$qr = mysqli_query($connect,$sql);

	$loaisp = mysqli_fetch_array($qr);


?>