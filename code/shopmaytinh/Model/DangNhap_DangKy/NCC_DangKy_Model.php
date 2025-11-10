<?php 
	// Sanitize inputs
	$tdn = htmlspecialchars(strip_tags(trim($tdn)), ENT_QUOTES, 'UTF-8');
	$email = htmlspecialchars(strip_tags(trim($email)), ENT_QUOTES, 'UTF-8');
	$dc = htmlspecialchars(strip_tags(trim($dc)), ENT_QUOTES, 'UTF-8');
	$sdt = htmlspecialchars(strip_tags(trim($sdt)), ENT_QUOTES, 'UTF-8');
	$ncc = htmlspecialchars(strip_tags(trim($ncc)), ENT_QUOTES, 'UTF-8');
	
	// Validate inputs
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$result = 3; // Invalid email
		return;
	}
	
	if (!preg_match('/^[0-9]{10,11}$/', $sdt)) {
		$result = 4; // Invalid phone
		return;
	}
	
	// Check if username already exists
	$checkSql = "SELECT TenDangNhap FROM taikhoan WHERE TenDangNhap = ?";
	$stmt = mysqli_prepare($connect, $checkSql);
	mysqli_stmt_bind_param($stmt, "s", $tdn);
	mysqli_stmt_execute($stmt);
	$checkResult = mysqli_stmt_get_result($stmt);
	
	if ($checkResult && mysqli_num_rows($checkResult) > 0) {
		$result = 5; // Username already exists
		mysqli_stmt_close($stmt);
		return;
	}
	mysqli_stmt_close($stmt);
	
	// Insert new supplier
	$sql = "INSERT INTO taikhoan(TenDangNhap,MatKhau,Email,DiaChi,SoDienThoai,MaNcc) VALUES (?,?,?,?,?,?)";
	$stmt = mysqli_prepare($connect, $sql);
	
	if ($stmt) {
		mysqli_stmt_bind_param($stmt, "ssssss", $tdn, $mk, $email, $dc, $sdt, $ncc);
		
		if (mysqli_stmt_execute($stmt)) {
			$result = 1;
		} else {
			$result = 2;
		}
		mysqli_stmt_close($stmt);
	} else {
		$result = 2;
	}
?>