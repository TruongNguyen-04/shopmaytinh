<title>
	Đơn Hàng
</title>
<style type="text/css">
	tr th, tr td{
		padding: 10px;
	}
	table{
		width: 100%
	}
	th{
		;
	}
</style>

<div class="container">
	<h4>
		Trạng thái : Xác nhận Thành Công Đơn Hàng
	</h4>
	<form method="POST">
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<td colspan="5" style="background-color: rgba(0,255,0,0.3)">
				<h1 style="margin-bottom: 5px;text-align: center;">
					Đơn Hàng Của Bạn
				</h1>
			</td>
		</tr>
		<tr>
			<th style="text-align: left;background-color: rgba(0,255,255,0.3)">
				Tên Sản Phẩm
			</th>
			<th style="background-color: rgba(0,255,255,0.3)">
				Màu Sắc
			</th>
			<th style="background-color: rgba(0,255,255,0.3)">
				Số Lượng
			</th>
			<th style="text-align: center;background-color: rgba(0,255,255,0.3)">
				Giá Tiền
			</th>
			<th style="text-align: center;background-color: rgba(0,255,255,0.3)">
				Thành Tiền
			</th>
			
		</tr>
		<?php 
		$tongtien = 0;
			while ($dh = mysqli_fetch_array($qr)) {
				$tongtien += $dh['TongTienSp'];
				switch ($dh['TinhTrang']) {
					case 'duyet':
						$dh['TinhTrang'] = "Đã duyệt";
						break;
					
					default:
						# code...
						break;
				}
				?>
				<tr style="background-color: rgba(0,255,0,0.3)">
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
					
				</tr>
			<?php } ?>
			<tr style="background-color: #FFFF33">
				<td colspan="5" style="text-align: center;">
					<p style="font-size: 30px;" >
						<b>Tổng Tiền : <?php echo number_format($tongtien)."đ"; ?></b>
					</p>
				</td>
			</tr>
			<tr id="hide" style="background-color: rgba(0,255,0,0.3)">
				
				
				<input type="hidden" name="mdh" value="<?php echo $dh['MaDonHang'] ?>">

				<td colspan="3"><h4>Tên người nhận :<?php echo $tnn ?></h4></td>
				<td colspan="2">
					Thao Tác : 
					<select name="tinhtrang" style="width: 40%;margin-left: 10%">
						<option value="duyet">Duyệt</option>
						<option value=" ">Để sau</option>
					</select>
				</td>
				
			</tr>
			<tr id="hide" style="background-color: rgba(0,255,0,0.3)">
				<td colspan="5" style="text-align: center;">
					<input style="height: 18px" id="submit" type="submit" name="submit" value="Xác Nhận">
				</td>

			</tr>
	</table>
	<h3><i>Cảm ơn bạn đã tin tưởng và đặt hàng trên TLD Shop</i></h3>
	</form>
</div>
<a href="../User/Admin/index.php?act=donhang">back</a>