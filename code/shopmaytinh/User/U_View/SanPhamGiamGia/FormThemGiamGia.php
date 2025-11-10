<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<h3>
			Sản Phẩm : <?php echo $tsp['Ten_San_Pham'] ?>
		</h3>
		<div class="row" style="padding: 10px;">
			<div class="col-md-3"></div>
			<div class="col-md-3" style="margin-top: 10px;">
				Trạng Thái 
			</div>
			<div class="col-md-3" style="margin-top: 10px;">
				<?php 
					switch ($tsp['GiamGia']) {
						case 'YES':
							echo "Đang Giảm Giá";;
							break;
						case 'NO':
							echo "Không Giảm Giá";
							break;
						case '':
							echo "Không Giảm Giá";
							break;
						default:
							# code...
							break;
					}
				?>
			</div>
			<div class="col-md-3"></div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-3">Giá Ban Đầu</div>
			<div class="col-md-3"><?php echo number_format($tsp['Gia_Cu'])."đ"; ?></div>
			<div class="col-md-3"></div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-3">Phần Trăm Giảm</div>
			<div class="col-md-3">
				<input type="number" placeholder="Phần trăm giảm giá" name="ptgg" required  title="Bạn phải nhập %">
			</div>
			<div class="col-md-3"></div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-3" style="margin-top: 10px;">Mở, Đóng Giảm Giá</div>
			<div class="col-md-3" style="margin-top: 10px;">
				<select name="giamgia">
					<option value="YES">Mở</option>
					<option value="NO">Đóng</option>
				</select>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-5"></div>
			<div class="col-md-2" style="margin-bottom: 10px;"><input type="submit" name="submit" value="Xác Nhận"></div>
			<div class="col-md-5"></div>
		</div>
		<a href="../Admin/index.php?act=themspgiamgia">Quay lại</a>
	</form>
</body>
</html>