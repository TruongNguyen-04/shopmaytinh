<?php 
	
	require_once '.../../Model/KetNoiDb.php';



	require_once '.../../View/DonHang/DonHang_View.php';

	if (isset($_POST['ktra'])) {
		$donhang = $_POST['donhang'];
		if ($donhang != "") {
			require_once '.../../Model/DonHang/KtraMaDonHang_Model.php';
			if ($dem != 0) {
				require_once '.../../Model/DonHang/KtraMaDonHang_Model.php';
				$tnm = mysqli_fetch_array($qr);
				require_once '.../../View/DonHang/NguoiDatMua_View.php';
				
			}
			else{
				echo "<div class='container' style='margin-top:20px'>";
				echo "<h3>Xin Lỗi, Chúng Tôi Không Tìm Thấy Đơn Hàng : ".$donhang."</h3>";
				echo "<h3>Hãy Xem Lại Mã Đơn Hàng Và Thử Lại !</h3>";
				echo "</div>";
			}
		}
		else{
			echo "<div class='container' style='margin-top:20px'>";
			echo "<h3>Bạn Không Nhập Mã Đơn Hàng?</h3>";
			echo "<h3>Bạn Cần Nhập Chính Xác Mã Đơn Hàng Của Bạn</h3>";
			echo "<h3>Hãy Thử Lại !!!</h3>";
			echo "</div>";
		}
		

	}
	
?>