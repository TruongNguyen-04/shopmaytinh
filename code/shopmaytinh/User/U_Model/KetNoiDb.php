<?php 
	
	$server = "localhost";
	$user   = "root";
	$pass	= "";
	$dbname = "electronic_shop";

	$connect = mysqli_connect($server,$user,$pass,$dbname) or die("Không Thể Kết Nối Tới Cơ Sở Dữ Liệu" . $dbname);

?>