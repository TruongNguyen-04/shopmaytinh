<?php 
	
	require_once './../U_Model/KetNoiDb.php';

	$gg = "SELECT * from danh_sach_san_pham where GiamGia = 'YES'";

	$qr = mysqli_query($connect,$gg);



 ?>