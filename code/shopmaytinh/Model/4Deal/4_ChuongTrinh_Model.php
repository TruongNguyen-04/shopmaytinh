<?php 
	
	$sql1 = "SELECT * FROM chuongtrinh_1";
	$sql2 = "SELECT * FROM chuongtrinh_2";
	$sql3 = "SELECT * FROM chuongtrinh_3";
	$sql4 = "SELECT * FROM chuongtrinh_4";

	$query1 = mysqli_query($connect,$sql1);
	$query2 = mysqli_query($connect,$sql2);
	$query3 = mysqli_query($connect,$sql3);
	$query4 = mysqli_query($connect,$sql4);

	
?>