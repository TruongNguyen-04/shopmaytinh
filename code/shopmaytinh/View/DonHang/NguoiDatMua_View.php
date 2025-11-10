<style type="text/css">
	table{
		border-style: double;

	}
	tr th, tr td{
		padding: 10px;
		border-right: 1px solid black
	}
	tr td{
		border-top: 1px solid black
	}
	#f1{
		border: 1px solid green;
		padding: 10px;
	}
	a:hover{
		text-decoration: none;
	}
</style>
<div class="container" style="margin-top: 20px;">
	<h3>
		Thông Tin Đơn Hàng : <b><i  style="font-size: 30px"><?php echo $tnm['MaDonHang'] ?> </i></b>
	</h3>
	<div class="row" id="f1">
		<div class="col-md-4">
			Tên Người Nhận : <?php echo $tnm['TenNguoiNhan'] ?>
		</div>
		<div class="col-md-4">
			Địa Chỉ : <?php echo $tnm['DiaChi'] ?>
		</div>
		<div class="col-md-4">
			Thời Gian Đặt : <?php echo $tnm['ThoiGianDat'] ?>
		</div>
	</div>	

	<div class="row">
		<h3>
			Sản Phẩm Trong Đơn Hàng
		</h3>
		<form method="POST">
		<table border="1" style="width: 100%" cellpadding="10">
		<tr>
			<th>Tên Sản Phẩm</th>
			<th style="text-align: center;">Màu Sắc</th>
			<th style="text-align: center;">Số Lượng</th>
			<th style="text-align: center;">Thành Tiền</th>
			<th style="text-align: center;">Tình Trạng</th>
		</tr>
		
			<?php 

				while ($ttdh = mysqli_fetch_array($QR)) {?>
					<?php switch ($ttdh['TinhTrang']) {
						case 'duyet':
							$ttdh['TinhTrang'] = "Đã Phê Duyệt";
							break;
						case '':
							$ttdh['TinhTrang'] = "Đang Chờ Phê Duyệt";
							break;
						default:
							# code...
							break;
					} ?>
					<?php 
						switch ($ttdh['MauSac']) {
							case '':
								$ttdh['MauSac'] = "Mặc Định";
								break;
							
							default:
								# code...
								break;
						}
					?>
					<tr>
						<td>
							<?php echo $ttdh['TenSanPham'] ?>
						</td>
						<td style="text-align: center;">
							<?php echo $ttdh['MauSac'] ?>
						</td>
						<td style="text-align: center;">
							<?php echo $ttdh['SoLuong'] ?>
						</td>
						<td style="text-align: center;">
							<?php echo $ttdh['TongTienSp'] ?>
						</td>
						<td style="text-align: center;">
							<?php echo $ttdh['TinhTrang'] ?>
						</td>
					</tr>
				<?php } ?>
			
					
			
		</table>
		<a href="index.php?action=huydh&mdh=<?php echo $tnm['MaDonHang'] ?>" style="float: right;color: silver">Hủy</a>
		<a href="index.php" style="height: 30px;width: 200px;background-color: red;color:yellow">
			Quay Về Trang Chủ
		</a>
		</form>
	</div>
</div>
