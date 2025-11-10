<?php 
	require_once 'KetNoiDb.php';
	$id = $_GET['id'];

	$sql = "DELETE From danh_sach_san_pham where id = '$id'";

	$qr = mysqli_query($connect,$sql);

	if ($qr) {	
		echo "Xóa thành công";
		echo "<a href='index.php?act=sspdb'>Quay lại</a>";
	}
	else{
		echo 'Không xóa được <a href="index.php?act=sspdb">back</a>';
	}



?>
