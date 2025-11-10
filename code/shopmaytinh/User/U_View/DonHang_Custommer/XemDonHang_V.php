<div class="row">
	<div class="col-md-4">
		Tên Người Nhận : <b><?php echo $nguoinhan ?></b>
	</div>
	<div class="col-md-4">
		Địa Chỉ : <b><?php echo $diachi ?></b>
	</div>
	<div class="col-md-4">
		Số Điện Thoại : <b><?php echo $sodienthoai ?></b>
	</div>

</div>
<hr style="background-color: red">
<div class="row">
	<h3 style="width: 100%;text-align: center;">
		Thông Tin Đơn Hàng : <?php echo $madonhang ?>
	</h3>
</div>
<div class="row">
	<div class="col-md-3">
		Tên Sản Phẩm
	</div>
	<div class="col-md-1">
		Màu Sắc
	</div>
	<div class="col-md-2">
		Số Lượng
	</div>
	<div class="col-md-2">
		Giá Tiền
	</div>
	<div class="col-md-2">
		Thành Tiền
	</div>
	<div class="col-md-2">
		Tình Trạng
	</div>
</div>
<hr>
<?php 
$tongtien = 0;
	while ($dh = mysqli_fetch_array($qrs)) {
		switch ($dh['TinhTrang']) {
			case '':
				$dh['TinhTrang'] = "Đang chờ";
				break;
			
			default:
				# code...
				break;
		}
		 ?>
		
		<div class="row">
			<div class="col-md-3">
				<?php echo $dh['TenSanPham'] ?>
			</div>
			<div class="col-md-1">
				<?php echo $dh['MauSac'] ?>
			</div>
			<div class="col-md-2">
				<?php echo $dh['SoLuong'] ?>
			</div>
			<div class="col-md-2">
				<?php echo $dh['GiaTien'] ?>
			</div>
			<div class="col-md-2">
				<?php echo $dh['TongTienSp'];  ?>
			</div>
			<div class="col-md-2">
				<?php echo $dh['TinhTrang'] ?>
			</div>
		</div>
		
		<hr style="background-color: green">
<?php   $tongtien += $dh['TongTienSp']; }?>

<div class="row">
	<p style="width: 100%;text-align: right;font-size: 20px">
		<b>Tổng Tiền Đơn Hàng : <?php echo number_format($tongtien)."đ" ?></b>
	</p>
</div>