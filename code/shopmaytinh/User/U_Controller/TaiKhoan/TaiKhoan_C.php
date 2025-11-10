<?php 
	
	require_once '../U_Model/TaiKhoan/TaiKhoan_M.php';

	require_once '../U_View/TaiKhoan/TaiKhoan_V.php';

	function randomString($length = 5){
		$arrCharacter = array_merge(range('A', 'Z'), range('a', 'z'), range(0, 9));
		$arrCharacter = implode( ',',$arrCharacter);
		$arrCharacter = str_shuffle($arrCharacter);
		$rd     	  = substr($arrCharacter,0 , $length );
		return $rd;
	}
	$result = "";
	$random = randomString(5);

	if (isset($_POST['submit'])) {
		$tdnbd = $_POST['tdnbd'];
		$mk  = $_POST['mk'];
		$dc = $_POST['dc'];
		$sdt = $_POST['sdt'];
		$FILE = $_FILES['img'];
		if ($mk != $cus['MatKhau']) {
			$mk = md5($_POST['mk']);
			if ($FILE['name'] == "") {
				require_once '../U_Model/TaiKhoan/CapNhatTaiKhoan_M.php';
			}
			if ($FILE['name'] != "") {
				
				$file_name = $_FILES['img']['name'];
			
				$file_tmp = $_FILES['img']['tmp_name'];
			
				$img = $random . $_FILES['img']['name'];
				
				require_once '../U_Model/TaiKhoan/CapNhatHinhAnh_M.php';

				$target = "../../Images/" .basename($img) ;
					
				move_uploaded_file($_FILES['img']['tmp_name'], $target);
			}
			if ($result == 1) {
				header("location:index.php");
			}
			if ($result == 2) {
				echo "Cập Nhật Thất Bại";
			}
		}
		if ($mk == $cus['MatKhau']) {
			if ($FILE['name'] == "") {
				require_once '../U_Model/TaiKhoan/CapNhatTaiKhoan_M.php';
			}
			if ($FILE['name'] != "") {

				$file_name = $_FILES['img']['name'];
		
				$file_tmp = $_FILES['img']['tmp_name'];
				
				$img = $random . $_FILES['img']['name'];
				
				require_once '../U_Model/TaiKhoan/CapNhatHinhAnh_M.php';

				$target = "../../Images/" .basename($img) ;
					
				move_uploaded_file($_FILES['img']['tmp_name'], $target);
			}
			if ($result == 1) {
				header("location:index.php");
			}
			if ($result == 2) {
				echo "Cập Nhật Thất Bại";
			}
		}
	}
?>

		