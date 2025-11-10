<?php 
	
	require_once'KetNoiDb.php';
	
	// Check if MaDonHang exists in tb_nguoidatmua first
	$checkSql = "SELECT MaDonHang FROM tb_nguoidatmua WHERE MaDonHang = '$random'";
	$checkResult = mysqli_query($connect, $checkSql);
	
	if (mysqli_num_rows($checkResult) > 0) {
		// MaDonHang exists, safe to insert
		$sql = "INSERT INTO tb_donhang(id,TenNguoiNhan,TenSanPham,MauSac,SoLuong,GiaTien,TongTienSp,MaDonHang)
		 VALUES ('$ids','$tnn','$tsp','$ms','$sl','$gt','$ThanhTien','$random')";
		
		$qr = mysqli_query($connect,$sql);
		
		if (!$qr) {
			echo "Lỗi: " . mysqli_error($connect);
		}
	} else {
		echo "Lỗi: MaDonHang '$random' không tồn tại trong tb_nguoidatmua. Vui lòng thử lại.";
	}
				
?>