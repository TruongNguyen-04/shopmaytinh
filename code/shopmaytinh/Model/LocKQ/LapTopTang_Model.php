<?php 
	$dtg = "SELECT * from danh_sach_san_pham where Loai_SP = 'LT' order by (Gia_Cu) ASC ";

	$qr = mysqli_query($connect,$dtg);
?>