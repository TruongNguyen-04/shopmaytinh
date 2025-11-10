<?php 
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	
	require_once '../U_Model/TaiKhoan_M.php';

	require_once '../U_View/Modern_TaiKhoanAdmin_V.php';

	function randomString($length = 5){
		$arrCharacter = array_merge(range('A', 'Z'), range('a', 'z'), range(0, 9));
		$arrCharacter = implode('', $arrCharacter); // Fixed parameter order
		$arrCharacter = str_shuffle($arrCharacter);
		$rd = substr($arrCharacter, 0, $length);
		return $rd;
	}
	$result = "";
	$random = randomString(5);
	
	if (isset($_POST['capnhattaikhoan'])) {
		$FILE = $_FILES['img'];
			
		if ($FILE['name'] == "") {
			$tdn = $_POST['tdn'];
			$mk = md5($_POST['mk']);
			$email = $_POST['email'];
			$dc = $_POST['dc'];
			$sdt = $_POST['sdt'];
			require_once '../U_Model/ktra_thaydoi_M.php';
			// Bị thừa !
			if ($tdn == $ar['TenDangNhap'] && $mk == $ar['MatKhau']) {				
				require_once '../U_Model/CNTK/CapNhatTaiKhoan2_M.php';
			}
			if ($tdn != $ar['TenDangNhap'] && $mk != $ar['MatKhau']) {
				$_SESSION['user'] = $tdn;
				require_once '../U_Model/CNTK/CapNhatTaiKhoan_M.php';
			}
			if ($tdn != $ar['TenDangNhap'] && $mk == $ar['MatKhau']) {
				$_SESSION['user'] = $tdn;
				require_once  '../U_Model/CNTK/CapNhatTaiKhoan3_M.php';
			}
			if ($tdn == $ar['TenDangNhap'] && $mk != $ar['MatKhau']) {
				require_once  '../U_Model/CNTK/CapNhatTaiKhoan4_M.php';
			}
			
			if ($result == 1) {
				echo "Sửa Thành Công";
				
			}
			if ($result == 2) {
				echo "Sửa Thất Bại";
			}
		}
		if ($FILE['name'] != "") {
			$tdn = $_POST['tdn'];
			$mk = md5($_POST['mk']);
			$email = $_POST['email'];
			$dc = $_POST['dc'];
			$sdt = $_POST['sdt'];
			$file_name = $_FILES['img']['name'];
			$file_size = $_FILES['img']['size'];
			$file_tmp = $_FILES['img']['tmp_name'];
			$file_type = $_FILES['img']['type'];
			
			$img = $random . $_FILES['img']['name'];
			
			$target = "../../Images/" .basename($img) ;

				
			move_uploaded_file($_FILES['img']['tmp_name'], $target);
			require_once '../U_Model/ktra_thaydoi_M.php';	

			if ($tdn == $ar['TenDangNhap'] && $mk == $ar['MatKhau']) {				
				require_once '../U_Model/CNTK/CapNhatTaiKhoanIMG_M.php';
			}
			if ($tdn != $ar['TenDangNhap'] && $mk != $ar['MatKhau']) {
				$_SESSION['user'] = $tdn;
				require_once '../U_Model/CNTK/CapNhatTaiKhoanTKMK_M.php';
			}
			if ($tdn != $ar['TenDangNhap'] && $mk == $ar['MatKhau']) {
				$_SESSION['user'] = $tdn;
				require_once  '../U_Model/CNTK/CapNhatTaiKhoanTK_M.php';
			}
			if ($tdn == $ar['TenDangNhap'] && $mk != $ar['MatKhau']) {
				require_once  '../U_Model/CNTK/CapNhatTaiKhoanMK_M.php';
			}
			if ($result == 1) {			
				echo "Sửa Thành Công";
			}
			if ($result == 2) {
				echo "Sửa Thất Bại";
			}		
		}		
		


	}
?>