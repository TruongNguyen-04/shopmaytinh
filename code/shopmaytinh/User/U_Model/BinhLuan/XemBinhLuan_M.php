<?php 

	require_once './../U_Model/KetNoiDb.php';

	$sql = "SELECT * from tb_binhluan order by ThoiGian DESC";

	$qr = mysqli_query($connect,$sql);

?>