<?php 
	$action = "";
	require_once '.../../Model/KetNoiDb.php';

	require_once '.../../View/LocKQ/LocKQ_View.php';
	if (isset($_POST['loc'])) {
		$loaisp = $_POST['loaisp'];
		$giatien = $_POST['giatien'];
	
		if ($loaisp == " " && $giatien != " ") {
			if ($giatien == 'giam') {
				require_once '.../../Model/LocKQ/GiaTienGiamDan_Model.php';
				require_once '.../../View/LocKQ/GiaTien_View.php';
			}
			if ($giatien == 'tang') {
				require_once '.../../Model/LocKQ/GiaTienTangDan_Model.php';
				require_once '.../../View/LocKQ/GiaTien_View.php';
			}
		}
		if ($loaisp != " " && $giatien == " ") {
			if ($loaisp == "DT") {
				require_once '../DanhMuc/DanhMucDT_Controller.php';
			}
			if ($loaisp == "LT") {
				require_once '../DanhMuc/DanhMucLT_Controller.php';
			}
			if ($loaisp == "PK") {
				require_once '../DanhMuc/DanhMucPK_Controller.php';
			}
		}
		if ($loaisp != " " && $giatien != " ") {
			if ($loaisp == "DT" && $giatien == "giam") {
				require_once '.../../Model/LocKQ/DienThoaiGiam_Model.php';
				require_once '.../../View/LocKQ/SanPham_View.php';
			}
			if ($loaisp == "DT" && $giatien == "tang") {
				require_once '.../../Model/LocKQ/DienThoaiTang_Model.php';
				require_once '.../../View/LocKQ/SanPham_View.php';
			}
			if ($loaisp == "LT" && $giatien =="giam") {
				require_once '.../../Model/LocKQ/LapTopGiam_Model.php';
				require_once '.../../View/LocKQ/SanPham_View.php';
			}
			if ($loaisp == "LT" && $giatien =="tang") {
				require_once '.../../Model/LocKQ/LapTopTang_Model.php';
				require_once '.../../View/LocKQ/SanPham_View.php';
			}
			if ($loaisp == "PK" && $giatien =="giam") {
				require_once '.../../Model/LocKQ/PhuKienGiam_Model.php';
				require_once '.../../View/LocKQ/SanPham_View.php';
			}
			if ($loaisp == "PK" && $giatien =="tang") {
				require_once '.../../Model/LocKQ/PhuKienTang_Model.php';
				require_once '.../../View/LocKQ/SanPham_View.php';
			}

			
		}

	}
	// require_once '.../../Model/LocKQ/LocKQ_Model.php';
?>