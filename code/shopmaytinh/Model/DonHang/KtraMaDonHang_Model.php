<?php 

	$sql = "SELECT * from tb_nguoidatmua where MaDonHang = '$donhang'";

	$qr = mysqli_query($connect,$sql);

	$dem = mysqli_num_rows($qr);

	$SQL  ="SELECT * from tb_donhang where MaDonHang = '$donhang'";

	$QR = mysqli_query($connect,$SQL);


 ?>