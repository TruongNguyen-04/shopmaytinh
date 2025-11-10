<?php require_once '../U_Model/KetNoiDb.php'; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
	<title>Admin Dashboard - Quản Trị Hệ Thống</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Modern Admin CSS -->
    <link rel="stylesheet" type="text/css" href="modern_admin.css">
    
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<!-- Modern Header -->
	<?php require_once '../U_View/modern_admin_header.php'; ?>
	
	<!-- Modern Sidebar -->
	<?php require_once '../U_View/modern_admin_sidebar.php'; ?>
	
	<!-- Main Content -->
	<div class="admin-content">
		<?php 
		if (isset($_GET['act'])) {
			switch ($_GET['act']) {
				case 'spdb':
					require_once '../U_Controller/ToanBoSanPham_C.php';
					break;
				case 'sspdb':
					require_once '../U_Controller/SuaToanBoSanPham_C.php';
					break;
				case 'suasp':
					require_once '../U_Controller/SuaSp_C.php';
					break;
				case 'themsp':
					require_once '../U_Controller/ThemSp_C.php';
					break;
				case 'xoasp':
					require_once '../U_Controller/XoaSp_C.php';
					break;
				case 'taikhoanadmin':
					require_once '../U_Controller/TaiKhoanAdmin_C.php';
					break;	
				case 'themchitietsp':
					require_once '../U_Controller/ToanBoSanPham2_C.php';
					break;	
				case 'themchitiet':
					require_once '../U_Controller/ThemChiTiet/ThemChiTietSp_C.php';
					break;
				case 'suachitiet':
					require_once '../U_Controller/SuaChiTiet_C.php';
					break;	
				case 'themmausac':
					require_once '../U_Controller/ThemMauSac/HienSp_C.php';
					break;
				case 'mausac':
					require_once '../U_Controller/ThemMauSac/ThemMauSac_C.php';
					break;
				case 'spgg':
					require_once '../U_Controller/SanPhamGiamGia/SanPhamGiamGia_C.php';
					break;		
				case 'chinhsuagiamgia':
					require_once '../U_Controller/SanPhamGiamGia/ChinhSuaGiamGia_C.php';
					break;
				case 'donhang':
					require_once '../U_Controller/DonHang/DonHang.php';
					break;	
				case 'danhsachnguoidung':
					require_once '../U_Controller/DanhSachNguoiDung/DanhSachNguoiDung_C.php';
					break;
				case 'xoauser':
					require_once '../U_Controller/DanhSachNguoiDung/XoaNguoiDung.php';
					break;
				case 'phanquyen':
					require_once '../U_Controller/DanhSachNguoiDung/PhanQuyen.php';
					break;
				case 'xoanguoidung':
					require_once '../U_Controller/DanhSachNguoiDung/XoaVaPhanQuyen.php';
					break;
				case 'themspgiamgia':
					require_once '../U_Controller/SanPhamGiamGia/ThemSpGiamGia.php';
					break;
				case 'addgg':
					require_once '../U_Controller/SanPhamGiamGia/FormThemGiamGia.php';
					break;
				case 'xemdonhang':
					require_once '../U_Controller/DonHang/XemDonHang.php';
					break;
				case 'xembinhluan':
					require_once '../U_Controller/BinhLuan/XemBinhLuan_C.php';
					break;
				case 'xoabl':
					require_once '../U_Controller/BinhLuan/XoaBinhLuan_C.php';
					break;
				default:
					# code...
					break;
			}
		} else {
			// Modern Dashboard
			require_once '../U_View/modern_dashboard.php';
		}
		?>
	</div>
</body>
</html>