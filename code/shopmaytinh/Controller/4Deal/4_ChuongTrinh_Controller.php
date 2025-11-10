<?php 

	require_once './Model/4Deal/4_ChuongTrinh_Model.php';

	
	$rs1 = mysqli_fetch_array($query1);
	$rs2 = mysqli_fetch_array($query2);
	$rs3 = mysqli_fetch_array($query3);
	$rs4 = mysqli_fetch_array($query4);

	require_once './View/4Deal/4ChuongTrinhDeal_View.php'

?>