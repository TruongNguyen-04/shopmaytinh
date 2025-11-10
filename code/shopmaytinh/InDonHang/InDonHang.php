<?php 
	
	require_once 'InDonHang_M.php';

	require_once 'InDonHang_V.php';
	if (isset($_POST['submit'])) {
		$tinhtrang = $_POST['tinhtrang'];
		$mdhs = $_GET['mdh'];
		$_SESSION['madonhang'] = $mdhs;
		if ($tinhtrang == 'duyet') {
			require_once 'Hide.php';
			require_once 'CapNhatTinhTrang.php';
			require_once 'CapNhatTinhTrang2.php';
			require_once 'LayEmail.php';
			// require_once 'XemDonHang_V.php';
			$email = $MAIL['Email'];
			require_once 'GuiEmail.php';
		}
		else{
			require_once '../User/U_Model/DonHang/CapNhatTinhTrang.php';
		}
	}
?>