<?php 

	$anh = "SELECT * from tb_mausac where id = '$id'";

	$qr = mysqli_query($connect,$anh);

	$img = mysqli_fetch_array($qr);
?>