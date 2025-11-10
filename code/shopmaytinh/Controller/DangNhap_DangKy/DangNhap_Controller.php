<?php 
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	
	require_once '.../../View/DangNhap_DangKy/DangNhap_View.php';
	$error = "";
	
	if (isset($_POST['login'])) {
		$tdn = $_POST['username'];
		$mk  = md5($_POST['pass']);
		
		require_once '.../../Model/DangNhap_DangKy/DangNhap_Model.php';
		
		if ($error == 1) {
			require_once '.../../View/ThongBao/LoiDangNhap_View.php';
		} else {
			$_SESSION['user'] = $tdn;
			require_once '.../../View/ThongBao/DangNhapThanhCong_View.php';
		}
	}
?>
