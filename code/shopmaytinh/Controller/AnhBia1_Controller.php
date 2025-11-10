<?php 
	require_once './Model/AnhBia1_Model.php';
	
	while ($row = mysqli_fetch_array($query)) {
		require_once './View/AnhBia1_View.php';
	}
?>