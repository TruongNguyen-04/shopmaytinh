<?php 
	
	require_once '../../View/GioHang/Form.php';
	function randomString($length = 5){
	$arrCharacter = array_merge(range('A', 'Z'), range('a', 'z'), range(0, 9));
	$arrCharacter = implode('', $arrCharacter);
	$arrCharacter = str_shuffle($arrCharacter);
	$rd     	  = substr($arrCharacter,0 , $length );
	return $rd;
}

	

	$random = randomString(10);
	if (isset($_POST['submit'])) {

		if (isset($_SESSION['user']) && $_SESSION['user'] != null) {
			$tdn = $_SESSION['user'];
			$tnn = $_POST['tenNguoiNhan'] ?? '';
			$dc = $_POST['diaChi'] ?? '';
			$sdt = $_POST['soDienThoai'] ?? '';
			
			// require_once '../../Model/GioHang/ThemTenVaoDonHang.php';
			// Lấy email của tài khoản
			require_once '../../Model/GioHang/LayEmail.php';
			$email = $Email['Email'];
			// insert ttin người mua

			require_once '../../Model/GioHang/ThemVaoTb_nguoidatmua.php';
		}

		if (!isset($_SESSION['user'])) {
			$tdn = "";
			$tnn = $_POST['tenNguoiNhan'] ?? '';
			$dc = $_POST['diaChi'] ?? '';
			$sdt = $_POST['soDienThoai'] ?? '';
			$email = $_POST['email'] ?? '';

			// insert thông tin người mua
			// require_once '../../Model/GioHang/ThemTenVaoDonHang.php';
			require_once '../../Model/GioHang/ThemVaoTb_nguoidatmua.php';

		}

	

	

	}else{
		$tnn = "";
	}

	
?>