<?php 

	$id = $_GET['id'];
	require_once './Model/XemSanPham_Model.php';
	require_once './Model/HienAnhMauSac_Model.php';
	$result ="";
	$loaisp = $_GET['loaisp'];
	if ($loaisp == 'DT') {
		
		
		require_once './View/XemSanPham_DT_View.php';
		
		if (isset($_POST['muadt'])) {
			
			if (!isset($_POST['mausac'])) {
				$MauSac = "";
				$TenSanPham = $rowha['Ten_San_Pham'];
				$HinhAnh 	= $rowha['Hinh_Anh'];
				$SoLuong = $_POST['soluong'];
				$GiaTien = $giatien;
				require_once 'GioHang/SESSION_GioHang.php';
				// echo "Bạn Đã Thêm Vào Giỏ Hàng";
				// require_once './View/ThongBao/ThemVaoGioHang_View.php';
			}
			if (isset($_POST['mausac'])) {
				$TenSanPham = $rowha['Ten_San_Pham'];
				$SoLuong = $_POST['soluong'];
				$MauSac = $_POST['mausac'];
				$GiaTien = $giatien;				
				require_once 'GioHang/SESSION_GioHang.php';
				// echo "Bạn Đã Thêm Vào Giỏ Hàng";
			}

			
		}

				// Bình luận sản phẩm
		require_once './View/BinhLuan/BinhLuan_View.php';

		if (isset($_POST['binhluan'])) {
			$id = $_GET['id'];
			
			if (!isset($_SESSION['user'])) {
				$ten = "TLD custommer";
				$rate = $_POST['vote'];
				$noidung = $_POST['noidungbinhluan'];
				require_once './Model/BinhLuan/BinhLuan_Model.php';
			}
			if (isset($_SESSION['user'])) {
				$ten = $_SESSION['user'];
				$rate = $_POST['vote'];
				$noidung = $_POST['noidungbinhluan'];
				require_once './Model/BinhLuan/BinhLuan_Model.php';
			}
			if ($result == 1) {
				echo "<div class='row'>";
				echo "<div class='col-md-2'></div>";
				echo "<div class='col-md-4'>Bạn đã bình luận thành công</div>";
				echo "<div class='col-md-6'></div>";
				echo "</div>";
			}
			if ($result == 2) {
				echo "<div class='row'>";
				echo "<div class='col-md-2'></div>";
				echo "<div class='col-md-4'>Bình luận Thất Bại</div>";
				echo "<div class='col-md-6'></div>";
				echo "</div>";
			}
		}
		


		echo "<br>";
		require_once 'BinhLuan/HienBinhLuan_Controller.php';

		// Sản Phẩm Tương Tự
		require_once './Model/SanPhamTuongTu/LayLoaiDongMay_Model.php';
		$dongmay = $row['Dong_May'];
		require_once 'SanPhamTuongTu/SanPhamTuongTu_Controller.php';
		


	}
	if($loaisp == 'LT') {
		
		require_once './View/XemSanPham_LT_View.php';
		
		if (isset($_POST['mualt'])) {
			if (!isset($_POST['mausac'])) {
				$MauSac = "";
				$TenSanPham = $rowha['Ten_San_Pham'];
				$SoLuong = $_POST['soluong'];
				$GiaTien = $giatien;
				require_once 'GioHang/SESSION_GioHang.php';
				// echo "Bạn Đã Thêm Vào Giỏ Hàng";
			}
			if (isset($_POST['mausac'])) {
				$TenSanPham = $rowha['Ten_San_Pham'];
				$MauSac = $_POST['mausac'];
				$SoLuong = $_POST['soluong'];
				$GiaTien = $giatien;
				require_once 'GioHang/SESSION_GioHang.php';
				// echo "Bạn Đã Thêm Vào Giỏ Hàng";
			}

		}
		// Bình luận sản phẩm
		require_once './View/BinhLuan/BinhLuan_View.php';
		if (isset($_POST['binhluan'])) {
			$id = $_GET['id'];
			if (!isset($_SESSION['user'])) {
				$ten = "TLD custommer";
				$rate = $_POST['vote'];
				$noidung = $_POST['noidungbinhluan'];
				require_once './Model/BinhLuan/BinhLuan_Model.php';
			}
			if (isset($_SESSION['user'])) {
				$ten = $_SESSION['user'];
				$rate = $_POST['vote'];
				$noidung = $_POST['noidungbinhluan'];
				require_once './Model/BinhLuan/BinhLuan_Model.php';
			}
			if ($result == 1) {
				echo "<div class='row'>";
				echo "<div class='col-md-2'></div>";
				echo "<div class='col-md-4'>Bạn đã bình luận thành công</div>";
				echo "<div class='col-md-6'></div>";
				echo "</div>";
			}
			if ($result == 2) {
				echo "<div class='row'>";
				echo "<div class='col-md-2'></div>";
				echo "<div class='col-md-4'>Bình luận Thất Bại</div>";
				echo "<div class='col-md-6'></div>";
				echo "</div>";
			}
		}
		echo "<br>";
		require_once 'BinhLuan/HienBinhLuan_Controller.php';

		require_once './Model/SanPhamTuongTu/LayLoaiDongMay_Model.php';
		$dongmay = $row['Dong_May'];
		require_once 'SanPhamTuongTu/SanPhamTuongTu_Controller.php';

		
	}
	
	if ($loaisp == 'PK') {

		require_once './Model/XemPhuKien_Model.php';
				
		require_once './View/XemPhuKien_View.php';
		
		if (isset($_POST['muapk'])) {
			if (!isset($_POST['mausac'])) {
				$MauSac = "";
				$TenSanPham = $ktra['Ten_San_Pham'];
				$SoLuong = $_POST['soluong'];
				$GiaTien = $giatien;
				require_once 'GioHang/SESSION_GioHang.php';
				// echo "Bạn Đã Thêm Vào Giỏ Hàng";
			}
			if (isset($_POST['mausac'])) {
				$TenSanPham = $ktra['Ten_San_Pham'];
				$MauSac = $_POST['mausac'];
				$SoLuong = $_POST['soluong'];
				$GiaTien = $giatien;
				require_once 'GioHang/SESSION_GioHang.php';
				// echo "Bạn Đã Thêm Vào Giỏ Hàng";
			}

		}
		
		// Bình luận sản phẩm
		require_once './View/BinhLuan/BinhLuan_View.php';
		if (isset($_POST['binhluan'])) {
			$id = $_GET['id'];
			if (!isset($_SESSION['user'])) {
				$ten = "TLD custommer";
				$noidung = $_POST['noidungbinhluan'];
				$rate = $_POST['vote'];				
				require_once './Model/BinhLuan/BinhLuan_Model.php';
			}
			if (isset($_SESSION['user'])) {
				$ten = $_SESSION['user'];
				$noidung = $_POST['noidungbinhluan'];
				$rate = $_POST['vote'];
			
				require_once './Model/BinhLuan/BinhLuan_Model.php';
			}
			if ($result == 1) {
				echo "<div class='row'>";
				echo "<div class='col-md-2'></div>";
				echo "<div class='col-md-4'>Bạn đã bình luận thành công</div>";
				echo "<div class='col-md-6'></div>";
				echo "</div>";
			}
			if ($result == 2) {
				echo "<div class='row'>";
				echo "<div class='col-md-2'></div>";
				echo "<div class='col-md-4'>Bình luận Thất Bại</div>";
				echo "<div class='col-md-6'></div>";
				echo "</div>";
			}
		}
		echo "<br>";
		require_once 'BinhLuan/HienBinhLuan_Controller.php';
		
		require_once './Model/SanPhamTuongTu/LayLoaiDongMay_Model.php';
		$dongmay = $row['Dong_May'];
		require_once 'SanPhamTuongTu/SanPhamTuongTu_Controller.php';
	
	}
?>
