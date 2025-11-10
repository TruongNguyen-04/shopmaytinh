<?php 
	
	require_once '.../../Model/KetNoiDb.php';
	require_once '.../../View/DangNhap_DangKy/NCC_DangKy_View.php';
	$result = "";
	function randomString($length = 5){
		$arrCharacter = array_merge(range('A', 'Z'), range('a', 'z'), range(0, 9));
		$arrCharacter = implode('', $arrCharacter);
		$arrCharacter = str_shuffle($arrCharacter);
		$rd     	  = substr($arrCharacter,0 , $length );
		return $rd;
	}
	

	if (isset($_POST['nccsignup'])) {
		$tdn	 = $_POST['username'];
		$mk		 = md5($_POST['pass']);
		$email 	 = $_POST['email'];
		$dc 	 = $_POST['dc'];
		$sdt	 = $_POST['sdt'];
		$random = randomString(6);
		$ncc= "TLD_".$random;

		require_once '.../../Model/DangNhap_DangKy/NCC_DangKy_Model.php';

		if ($result == 2) {
			require_once '.../../View/ThongBao/LoiDangKy_View.php';
		}
		elseif ($result == 3) {
			echo "<div class='alert alert-danger'>Email không hợp lệ!</div>";
		}
		elseif ($result == 4) {
			echo "<div class='alert alert-danger'>Số điện thoại không hợp lệ!</div>";
		}
		elseif ($result == 5) {
			echo "<div class='alert alert-danger'>Tên đăng nhập đã tồn tại!</div>";
		}
		elseif ($result == 1) {
			require_once '.../../View/ThongBao/DangKyThanhCong_View.php';
		}
		// echo $ncc;
	}
	else{}


?>