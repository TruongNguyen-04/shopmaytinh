<?php 
	
	$sqls = "SELECT * from tb_donhang where MaDonHang = '$madonhang'";

	$qrs = mysqli_query($connect,$sqls);



?>