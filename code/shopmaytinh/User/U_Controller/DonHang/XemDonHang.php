<?php 
	$mdh = $_GET['mdh'];

	require_once '../U_Model/DonHang/XemDonHang_M.php';

	require_once '../U_View/DonHang/XemDonHang_V.php';
	
	if (isset($_POST['submit'])) {
		$tinhtrang = $_POST['tinhtrang'];
		$mdhs = $_GET['mdh'];
		$_SESSION['madonhang'] = $mdhs;
		if ($tinhtrang == 'duyet') {

			require_once '../U_Model/DonHang/CapNhatTinhTrang.php';
			require_once '../U_Model/DonHang/CapNhatTinhTrang2.php';
			require_once '../U_Model/DonHang/LayEmail.php';
			require_once '../U_View/DonHang/XemDonHang_V.php';
			$email = $MAIL['Email'];
			require_once 'GuiEmail.php';
		}
		else{
			require_once '../U_Model/DonHang/CapNhatTinhTrang.php';
		}
	}
?>

