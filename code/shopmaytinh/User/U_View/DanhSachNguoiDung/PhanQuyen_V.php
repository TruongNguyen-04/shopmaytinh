<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
		<form method="POST">
			<h3 style="padding: 20px;">
				Thay Đổi Cấp Độ
			</h3>
			<div class="row" style="">
				<div class="col-md-3"></div>
				<div class="col-md-3" style="margin-top: 20px;">
					Tên Đăng Nhập
				</div>
				<div class="col-md-3" style="margin-top: 20px;">
					<?php echo $pq['TenDangNhap'] ?>
				</div>
				<div class="col-md-3"></div>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-3" style="margin-top: 20px;">
					Email
				</div>
				<div class="col-md-3" style="margin-top: 20px;">
					<?php echo $pq['Email'] ?>
				</div>
				<div class="col-md-3"></div>
			</div>
			<hr>
			<div class="row" style="">
				<div class="col-md-3"></div>
				<div class="col-md-3" style="margin-top: 20px;">
					Số Điện Thoại
				</div>
				<div class="col-md-3" style="margin-top: 20px;">
					<?php echo $pq['SoDienThoai'] ?>
				</div>
				<div class="col-md-3"></div>
			</div>
			<hr>
			<div class="row" style="">
				<div class="col-md-3"></div>
				<div class="col-md-3" style="margin-top: 10px;">
					Cấp Độ Hiện Tại [<?php echo $pq['CapDo'] ?>]
				</div>
				<div class="col-md-3" style="margin-top: 10px;">
					<select name="capdo">
						<option value="LV0">SHIPPER</option>
						<option value="LV1">Xem Sản Phẩm Đang Bán + Sản Phẩm Giảm Giá [1]</option>
						<option value="LV2">Thêm Sản Phẩm + Thêm Chi Tiết Sản Phẩm + Thêm màu, ảnh [2]</option>
						<option value="LV3">
							Sửa, Xóa Sản Phẩm [3]
						</option>
					</select>
				</div>
				<div class="col-md-3"></div>
			</div>
			<hr>
				<div class="row" style="">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<input type="submit" style="width: 100%;margin-bottom: 20px;" name="submit" value="Sửa Cấp Độ">
					</div>
					<div class="col-md-4"></div>
				</div>
		</form>
	</div>
</body>
</html>