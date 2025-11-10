	<?php 	
	session_start();
	require_once './Model/KetNoiDb.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>T-L-D Shop</title>
	<meta charset="utf-8">
	
	<link rel="stylesheet" type="text/css" href="./Font-awesome/css/font-awesome.min.css">	
		<link rel="stylesheet" type="text/css" href="./Css/css_index.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="js/jquery-1.11.1.min.js"></script>
	<style type="text/css">
		body{
			background-color: #f5f5f5;
		}
	</style>

	<link rel="stylesheet" href="./Css/new_css.css">

</head>
<body>

	<?php define('app_path', __DIR__); ?>
	<!-- Ảnh Bìa -->
	<?php require_once app_path.'/Controller/AnhBia1_Controller.php'; ?>
	<!-- <marquee>Cửa hàng có : Máy tính, Laptop, Điện thoại, Phụ kiện</marquee> -->
	
	<!-- Tìm Kiếm -->
	<?php require './Controller/KQ_TimKiem_Controller.php';?>
	

	<?php 
		if (isset($_GET['action'])) {
			switch ($_GET['action']) {
				case 'xemsp':
					// require_once './Controller/XemSanPham_Controller.php';
					require './Controller/XemSanPham_Controller.php';
					break;
				case 'login':
					require './Controller/DangNhap_DangKy/DangNhap_Controller.php';
					break;
				case 'signup':
					require './Controller/DangNhap_DangKy/DangKy_Controller.php';
					break;
				case 'dmdt':
					require_once './Controller/DanhMuc/DanhMucDT_Controller.php';
					break;
				case 'more':
					require_once './Controller/GiamGia/MoreGiamGia_Controller.php';
					break;
				case 'nccdk':
					require_once './Controller/DangNhap_DangKy/NCC_DangKy_Controller.php';
					break;
				case 'dmmtlt':
					require_once './Controller/DanhMuc/DanhMucLT_Controller.php';
					break;
				case 'dmpk':
					require_once './Controller/DanhMuc/DanhMucPK_Controller.php';
					break;
				case 'donhang':
					require_once './Controller/DonHang/DonHang_Controller.php';
					break;
				case 'huydh':
					require_once './Controller/DonHang/HuyDonHang_Controller.php';
					break;
				case 'support':
					require_once './View/HoTro_View.php';
					break;
				default:
					# code...
					break;
			}
		}
		else{
			require_once './Controller/LocKQ/LocKQ_Controller.php';
			
			require_once './Controller/Slide_Controller.php';

			// require_once './View/Slide_View.php';
			// require_once './Controller/DanhSachSanPham_Controller.php';
			// Danh mục sản phẩm
			require_once './View/DanhMucSanPham_View.php';
			
			//Giảm Giá
			require_once './Controller/GiamGia/GiamGia_Controller.php';
			
			// require_once './View/GiamGia/MoreGiamGia_View.php';

			// Sản Phẩm Đang Bán + Phân Trang
			require './Controller/PhanTrang_Controller.php';
			
		}

	?>
	



	<?php require_once './View/Footer_View.php'; ?>

	<?php require_once './Js/Js_index.php'; ?>
</body>
</html>