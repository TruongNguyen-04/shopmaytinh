<style type="text/css">
	tr th, tr td{
		padding: 10px;
	}
	.container{
		padding: 10px;
	}
</style>
<div class="container">
	<h3>
		Danh Sách Đơn Hàng
	</h3>
	<form method="POST" style="margin-bottom: 10px;">
		<table style="width: 100%;" border="1">
			<tr>
				<th>
					Tên Người Nhận
				</th>
				<th>
					Địa Chỉ
				</th>
				<th>
					Số Điện Thoại
				</th>
				<th>
					Email
				</th>
				
				<th>
					Mã Đơn Hàng
				</th>
				<th>
					Tình Trạng
				</th>
				<th>
					Xem
				</th>
			
			</tr>
			<?php while ($row=mysqli_fetch_array($qr)) { ?>
				<tr>
				<td>
					<?php echo $row['TenNguoiNhan'] ?>
				</td>
				<td>
					<?php echo $row['DiaChi'] ?>
				</td>
				<td>
					<?php echo $row['SoDienThoai'] ?>
				</td>
				<td>
					<?php echo $row['Email'] ?>
				</td>
				<td>
					<?php echo $row['MaDonHang']; ?>
				</td>
				<td>
					<?php switch ($row['TinhTrang']) {
						case '':
							$row['TinhTrang'] = "Chưa duyệt";
							break;
						case 'duyet':
							$row['TinhTrang'] = "Đã duyệt";
							break;
						default:
							# code...
							break;
							;
					} echo $row['TinhTrang']?>
				</td>
				<td>
					<a href=".../../../../InDonHang/InDonHang.php?mdh=<?php echo $row['MaDonHang'] ?>">( Xem )</a>
				</td>
			</tr>
		<!-- 	<tr>
				<td>Tình Trạng</td>
				<td>
					<?php switch ($row['TinhTrang']) {
						case '':
							echo "Chưa phê duyệt";
							break;
						
						default:
							# code...
							break;
					} ?>
				</td>
				<td colspan="3">
					<select name="tinhtrang" style="width: 100%">
						<option value="pheduyet">Phê Duyệt</option>
						<option value="chuapheduyet">Để Sau</option>
					</select>
				</td>	<?php require_once '../U_Model/DonHang/LayEmail.php'; ?>
				<td colspan="3">
					Email : <?php echo $MAIL['Email'] ?>
				</td>
			</tr> -->
		
			
			<!-- <tr>
				<td colspan="8">
					<input type="submit" name="submit" value="OK">
				</td>
			</tr> -->
			<?php } ?>
		</table>
	</form>
</div>
