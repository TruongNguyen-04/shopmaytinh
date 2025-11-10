<?php 
	
	$sql = "SELECT * FROM tb_binhluan where id = '$id' order by ThoiGian DESC";

	$blqr = mysqli_query($connect,$sql);


?>