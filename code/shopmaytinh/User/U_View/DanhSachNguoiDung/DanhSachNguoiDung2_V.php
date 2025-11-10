<style type="text/css">
	tr th, tr td{
		padding: 10px;
	}
</style>
<div class="container"  style="margin-bottom: 10px;">
	<h3>
		Danh Sách Người Dùng
	</h3>
	<form>
		<table style="width: 100%" border="1">
			<tr>
				<th>
					Tên Đăng Nhập
				</th>
				<!-- <th>
					Mật Khẩu
				</th> -->
				<th>
					Email
				</th>
				<th>
					Địa Chỉ
				</th>
				<th>
					Số Điện Thoại
				</th>
				<th>
					Mã Nhà Cung Cấp
				</th>
				<th>
					Cấp Độ
				</th>
				<th colspan="2">
					Action
				</th>
			</tr>
			<?php while ($row=mysqli_fetch_array($qr)) { ?>
			<tr>
				<td>
					<?php echo $row['TenDangNhap'] ?>
				</td>
				<!-- <td>
					<?php echo $row['MatKhau'] ?>
				</td> -->
				<td>
					<?php echo $row['Email'] ?>
				</td>
				<td>
					<?php echo $row['DiaChi'] ?>
				</td>
				<td>
					<?php echo $row['SoDienThoai'] ?>
				</td>
				<td>
					<?php echo $row['MaNcc'] ?>
				</td>
				<td>
					<?php echo $row['CapDo'] ?>
				</td>
				<td>
					<a href="index.php?act=xoauser&id=<?php echo $row['TenDangNhap'] ?>">Xóa</a><br>
					
				</td>
				<td>
					<a href="index.php?act=phanquyen&id=<?php echo $row['TenDangNhap'] ?>">Phân Quyền</a>
				</td>
			</tr>
			
			<?php } ?>
			<tr>
				<td colspan="8"></td>
			</tr>
			<br>
		</table>
	</form>
</div>