<?php 
	$dtg = "SELECT * from danh_sach_san_pham where Loai_SP = 'DT' order by (Gia_Cu) ASC ";

	$qr = mysqli_query($connect,$dtg);
?>