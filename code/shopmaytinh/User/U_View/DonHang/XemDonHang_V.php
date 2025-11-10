<style type="text/css">
	tr th, tr td{
		padding: 10px;
	}
	table{
		width: 100%
	}
</style>

<div class="container">
	<form method="POST">
	<table border="1">
		
		<tr>
			<th>
				Tên Sản Phẩm
			</th>
			<th>
				Màu Sắc
			</th>
			<th>
				Số Lượng
			</th>
			<th style="text-align: center;">
				Giá Tiền
			</th>
			<th style="text-align: center;">
				Thành Tiền
			</th>
			<th>
				Tình Trạng
			</th>
		</tr>
		<?php 
			while ($dh = mysqli_fetch_array($qr)) {
				switch ($dh['TinhTrang']) {
					case 'duyet':
						$dh['TinhTrang'] = "Đã duyệt";
						break;
					
					default:
						# code...
						break;
				}
				?>
				<tr>
					<td>
						<?php echo $dh['TenSanPham'] ?>
					</td>
					<td>
						<?php echo $dh['MauSac'] ?>
					</td>
					<td style="text-align: center;">
						<?php echo $dh['SoLuong'] ?>
					</td>
					<td style="text-align: center;">
						<?php echo number_format($dh['GiaTien'])."đ"; ?>
					</td>
					<td style="text-align: center;">
						<?php echo number_format($dh['TongTienSp'])."đ"; ?>
					</td>
					<?php $tnn = $dh['TenNguoiNhan']; ?>
					<td>
					<?php
						echo $dh['TinhTrang'];
					 ?>
				</td>
				</tr>
			<?php } ?>
			<tr>
				
				
				<input type="hidden" name="mdh" value="<?php echo $dh['MaDonHang'] ?>">

				
				<td colspan="6">
					Thao Tác : 
					<select name="tinhtrang" style="width: 40%;margin-left: 10%">
						<option value="duyet">Duyệt</option>
						<option value=" ">Để sau</option>
					</select>
				</td>
				
			</tr>
			<tr>
				<td colspan="6" style="text-align: center;">
					<input style="width: 30%;" type="submit" name="submit" value="Xác Nhận">
				</td>
			</tr>
	</table>
	</form>
</div>
