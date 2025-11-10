<?php 
	
	require_once './../U_Model/KetNoiDb.php';

	$sqll = "UPDATE taikhoan SET CapDo = '$capdo' where TenDangNhap ='$ten'";

	$qrr  = mysqli_query($connect,$sqll);

	if ($qrr) {
		$result = 1;
	}
	else{
		$result = 2;
	}
?>