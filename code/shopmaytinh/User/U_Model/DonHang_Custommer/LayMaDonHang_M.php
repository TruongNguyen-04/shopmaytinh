<?php 
	$user = $_SESSION['user'];

	$laymdh = "SELECT * from tb_nguoidatmua where TenDangNhap = '$user'";

	$qr = mysqli_query($connect,$laymdh);

	$num = mysqli_num_rows($qr);

	$mdh = mysqli_fetch_array($qr);

	

?>