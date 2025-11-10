<?php 
	
	$sql = "SELECT * from danh_sach_san_pham order by(id) DESC";

	$qr = mysqli_query($connect,$sql);

?>