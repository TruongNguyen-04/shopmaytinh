<script type="text/javascript">
	   function tai_lai_trang(){
            location.reload();
        }
</script>
<style>
	#update-t24{
		background: skyblue;
		border: 1px solid silver;
		padding: 3px 25px;
		border-radius: 10px;
	}
	</style>
<form method="POST" enctype="multipart/form-data">
	<table  style="width: 100%" border="1" cellpadding="10" cellspacing="0">
		<tr>
			<td colspan="2" style="text-align: center;">
				<?php 
					if ($cus['AnhDaiDIen'] == "" || $cus['AnhDaiDIen'] == NULL) {
						echo '<img style="height: 100px;width: 100px;border-radius: 50%" src="../../Images/user.png">';
					}
					else{
				?>
				<img style="height: 100px;width: 100px;border-radius: 50%" src="../../Images/<?php echo $cus['AnhDaiDIen'] ?>">
			<?php } ?>
			</td>
		</tr>
		<input type="hidden" name="tdnbd" value="<?php echo $cus['TenDangNhap'] ?>">
		<tr>
			<th>
				Tên đăng nhập
			</th>
			<td>
				<?php echo $cus['TenDangNhap'] ?>
			</td>
		</tr>
		<tr>
			<th>
				Mật khẩu
			</th>
			<td>
				<!-- <input style="width: 100%" type="" name="mk" value="<?php echo $cus['MatKhau'] ?>" required> -->
				<input style="width: 100%" type="" name="mk"  required>
			</td>
		</tr>
		<tr>
			<th>
				Email
			</th>
			<td>
				<?php echo $cus['Email'] ?>
			</td>
		</tr>
		<tr>
			<th>
				Địa chỉ
			</th>
			<td>
				<input style="width: 100%" type="" name="dc" value="<?php echo $cus['DiaChi'] ?>">
			</td>
		</tr>
		<tr>
			<th>
				Số điện thoại
			</th>
			<td>
				<input style="width: 100%" type="" name="sdt" value="<?php echo $cus['SoDienThoai'] ?>">
			</td>
		</tr>
		<tr>
			<th>
				Đổi ảnh đại diện
			</th>
			<td>
				<input style="width: 100%" type="file" name="img">
			</td>
		</tr>
		<tr>
			<td colspan="2" style="text-align: center;">
				<button id='update-t24' type="submit" >Cập nhật</button>
			</td>
		</tr>
	</table>
</form>