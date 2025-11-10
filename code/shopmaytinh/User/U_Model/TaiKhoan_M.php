<?php 
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	
	// Check if user is logged in
	if (!isset($_SESSION['user']) || empty($_SESSION['user'])) {
		$acc = null;
	} else {
		$us = $_SESSION['user'];

		require_once 'KetNoiDb.php';

		// Use prepared statement for security
		$sql = "SELECT * FROM taikhoan WHERE TenDangNhap = ?";
		$stmt = mysqli_prepare($connect, $sql);
		
		if ($stmt) {
			mysqli_stmt_bind_param($stmt, "s", $us);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			$acc = mysqli_fetch_array($result);
			mysqli_stmt_close($stmt);
		} else {
			$acc = null;
		}
	}
?>