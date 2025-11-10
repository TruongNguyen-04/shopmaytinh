<?php 
	

	require_once '../U_View/ThemSp_V.php';


	function randomString($length = 5){
		$arrCharacter = array_merge(range('A', 'Z'), range('a', 'z'), range(0, 9));
		$arrCharacter = implode( ',', $arrCharacter);
		$arrCharacter = str_shuffle($arrCharacter);
		$rd     	  = substr($arrCharacter,0 , $length );
		return $rd;
	}

	$random = randomString(5);

	if (isset($_POST['submit'])) {

		$tsp = $_POST['tsp'];
		// $img = $_POST['img']['name'];
		$gc  = $_POST['gc'];
		// $ptg = $_POST['ptg'];
		// $gb = $gc - ($gc * ("0.".$ptg));
		$lsp = $_POST['loaisp'];
		$file_name = $_FILES['img']['name'];
		$file_size = $_FILES['img']['size'];
		$file_tmp = $_FILES['img']['tmp_name'];
		$file_type = $_FILES['img']['type'];
		$GT = "";
		$GT1 = $_POST['dongmay_loaiphukien1'];
		$GT2 = $_POST['dongmay_loaiphukien2'];
		$GT3 = $_POST['dongmay_loaiphukien3'];
		$img = $random . $_FILES['img']['name'];
		$sl = $_POST['sl'];
		$target = "../../Images/" .basename($img) ;
	
		

		if ($GT1 != "" && $GT2 == "" && $GT3== "") {
			$GT = $GT1;
		}
		else if ($GT1 == "" && $GT2 != "" && $GT3== "") {
			$GT = $GT2;
		}
		else if ($GT1 == "" && $GT2 == "" && $GT3 != "") {
			$GT = $GT3;
		}
		else{
			echo "Chỉ 1 lựa chọn";
			return;
		}

		
		move_uploaded_file($_FILES['img']['tmp_name'], $target);
		
		
		require_once '../U_Model/ThemSp_M.php';		
				
	}
	


?>

