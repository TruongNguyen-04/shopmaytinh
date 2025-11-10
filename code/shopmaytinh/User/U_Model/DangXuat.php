<?php 
	
	if (isset($_SESSION['user']) && $_SESSION['user'] != null) {
		unset($_SESSION['user']);
		header("location:.../../../index.php");
	}

?>