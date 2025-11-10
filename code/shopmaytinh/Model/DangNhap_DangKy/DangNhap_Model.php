<?php 
	// Sanitize inputs
	$tdn = htmlspecialchars(strip_tags(trim($tdn)), ENT_QUOTES, 'UTF-8');
	
	// Use prepared statement for security
	$sql = "SELECT * FROM taikhoan WHERE TenDangNhap = ? AND MatKhau = ?";
	$stmt = mysqli_prepare($connect, $sql);
	
	if ($stmt) {
		mysqli_stmt_bind_param($stmt, "ss", $tdn, $mk);
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);
		$rows = mysqli_num_rows($result);
		
		if ($rows == 1) {
			$error = 0;
			// Get user info for session
			$user = mysqli_fetch_assoc($result);
			$_SESSION['user_info'] = $user;
		} else {
			$error = 1;
		}
		mysqli_stmt_close($stmt);
	} else {
		$error = 1;
	}
?>