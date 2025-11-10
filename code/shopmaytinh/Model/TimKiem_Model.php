<?php 
	require_once 'KetNoiDb.php';

	$query = "select * from danh_sach_san_pham where Ten_San_Pham like '%$search%'";

    $sql = mysqli_query($connect,$query);

    $num = mysqli_num_rows($sql);
?>