<?php 
	
	$sql1 = "Select link_slide_img from slide where id_slide =1";
	$sql2 = "Select link_slide_img from slide where id_slide =2";
	$sql3 = "Select link_slide_img from slide where id_slide =3";
	$sql4 = "Select link_slide_img from slide where id_slide =4";
	$sql5 = "Select link_slide_img from slide where id_slide =5";
	$query1 = mysqli_query($connect,$sql1);
	$query2 = mysqli_query($connect,$sql2);
	$query3 = mysqli_query($connect,$sql3);
	$query4 = mysqli_query($connect,$sql4);
	$query5 = mysqli_query($connect,$sql5);
	

?>