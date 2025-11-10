<?php 
	
	session_start();
	require_once './U_Model/KetNoiDb.php';

	$user = $_SESSION['user'];

	$sql = "SELECT CapDo from taikhoan WHERE TenDangNhap = '$user' ";

	$qr = mysqli_query($connect,$sql);

	$ar = mysqli_fetch_array($qr);


	switch ($ar['CapDo']) {
		case 'MAX':
			
			header("location: ./Admin/index.php");
			break;
		case 'LV1':
		case 'LV2':
		case 'LV3':	
			header("location: ./Staff/index.php");
			break;
		case 'LV0':
			header("location: ./Shipper/index.php");
			break;
		default:
			header("location: ./Customer/index.php");
			break;
	}


?>

<!-- MAX = full quyền

LV1 = Xem sản phẩm

LV2 = LV1 + Thêm sản phẩm + Thêm chi tiết sản phẩm

LV3 = LV1 + LV2 + Sửa sản phẩm

LV4 = LV1 + LV2 + LV3 + xóa sản phẩm

LV5 = LV1 + LV2 + LV3 + LV4 + 	 -->