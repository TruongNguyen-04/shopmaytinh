<?php 
	
	
	$Loaisp = $_GET['loaisp'];
	$id = $_GET['id'];
	echo $id;
	$result = "";
	switch ($Loaisp) {
		case 'DT':
			require_once '../U_View/ThemChiTiet/ThemChiTietSpDT_V.php';
			if (isset($_POST['themchitiet'])) {
				$mh			= $_POST['mh'];
				$dpg 		= $_POST['dpg'];
				$hdh 		= $_POST['hdh'];
				$cpu 		= $_POST['cpu'];
				$camera1	= $_POST['cameratruoc'];
				$camera2	= $_POST['camerasau'];
				$ram		= $_POST['ram'];
				$bnt		= $_POST['bnt'];
				$sim		= $_POST['sim'];
				$pin		= $_POST['pin'];
				$dlp		= $_POST['dlp'];
				require_once '../U_Model/ThemChiTiet/ThemChiTietSpDT_M.php';
				if ($result==1) {
					echo "Thành Công";
				}
				if ($result==2) {
					echo "Thất Bại";
				}
			}
			
			break;
		case 'LT':
			require_once '../U_View/ThemChiTiet/ThemChiTietSpLT_V.php';
			if (isset($_POST['themchitietlt'])) {
				$mh 	    = $_POST['mh']; 
				$dpg 	    = $_POST['dpg'];
				$hdh	    = $_POST['hdh'];
				$cpu 	    = $_POST['cpu'];
				$ram	    = $_POST['ram'];
				$bnt	    = $_POST['bnt'];
				$pinn 		= $_POST['pin'];
				$dlp	    = $_POST['dlp'];
				$chip     	= $_POST['chip'];
				$chipdohoa  = $_POST['chipdohoa'];
				$oc 		= $_POST['oc'];
				$tl 		= $_POST['tl'];
				require_once '../U_Model/ThemChiTiet/ThemChiTietSpLT_M.php';
				if ($result==1) {
					echo "Thành Công";
				}
				if ($result==2) {
					echo "Thất Bại";
				}
			}
			



			break;
		case 'PK':
			require_once '../U_View/ThemChiTiet/ThemChiTietSpPK_V.php';
			if (isset($_POST['themchitietpk'])) {
				$tt = $_POST['tt'];
				$ckn = $_POST['ckn'];
				$tgs = $_POST['tgs'];
				$tgsd = $_POST['tgsd'];
				$ktkc = $_POST['ktkc'];
				$th = $_POST['th'];
				$xx = $_POST['xx'];
				require_once '../U_Model/ThemChiTiet/ThemChiTietSpPK_M.php';
				if ($result==1) {
					echo "Thành Công";
				}
				if ($result==2) {
					echo "Thất Bại";
				}
			}
			break;
		default:
			# code...
			break;
	}
	
?>