<?php 
	
	$sqls = "SELECT * from danh_sach_san_pham where Dong_May = '$dongmay' AND id != '$id'  ";

	$qrs = mysqli_query($connect,$sqls);



?>