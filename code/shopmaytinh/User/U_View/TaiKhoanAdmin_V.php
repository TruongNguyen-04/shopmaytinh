<style type="text/css">
	#capnhat{
		color: #ffffff;
	    font-weight: bold;
	    background-color: #b23434;
	    display: inline-block;
	    padding: 2px 40px;
	    border-radius: 1px;
	    margin-top: 10px;
	    margin-bottom: 10px;
	}
	th{
		padding: 10px;
	}
</style>
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4" style="margin-top: 10px;">
		<?php 
		if ($acc && isset($acc['AnhDaiDIen']) && $acc['AnhDaiDIen'] != "") {?>
			<img style="width: 80px;height: 80px;display:block;margin-left: auto;margin-right: auto;" src="../../Images/<?php echo htmlspecialchars($acc['AnhDaiDIen']); ?>">
		<?php } else { ?>
			<img style="width: 80px;height: 80px;display:block;margin-left: auto;margin-right: auto;" src="../../Images/user.png">
		<?php } ?>
	</div>
	<div class="col-md-4"></div>
</div>
<div class="row" style="height: 390px;margin-top: 30px;">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<form method="POST" enctype="multipart/form-data">
			<table  border="1" style="width: 100%;height: 300px;" cellpadding="10" cellspacing="0">
				<h1>
					Thông tin tài khoản
				</h1>
				<tr>
					<th style="margin-left: 20px;">
						Tên Đăng Nhập
					</th>
					<td>
						<input  style="width: 100%" type="text" name="tdn" value="<?php echo $acc ? htmlspecialchars($acc['TenDangNhap']) : ''; ?>">
					</td>
				</tr>
				<tr>
					<th>
						Mật Khẩu
					</th>
					<td>
						<input  style="width: 100%" type="password" name="mk" value="<?php echo $acc ? htmlspecialchars($acc['MatKhau']) : ''; ?>">
					</td>
				</tr>
				<tr>
					<th>
						Email
					</th>
					<td>
						<input  style="width: 100%" type="email" name="email" value="<?php echo $acc ? htmlspecialchars($acc['Email']) : ''; ?>">
					</td>
				</tr>
				<tr>
					<th>
						Địa Chỉ
					</th>
					<td>
						<input  style="width: 100%" type="text" name="dc" value="<?php echo $acc ? htmlspecialchars($acc['DiaChi']) : ''; ?>">
					</td>
				</tr>
				<tr>
					<th>
						Số Điện Thoại
					</th>
					<td>
						<input  style="width: 100%" type="tel" name="sdt" value="<?php echo $acc ? htmlspecialchars($acc['SoDienThoai']) : ''; ?>">
					</td>
				</tr>
				<tr>
					<th>
						Đổi Ảnh Đại Điện
					</th>
					<td>
						<input type="file" name="img">
					</td>
				</tr>
				<tr>
					<td colspan="2" style="text-align: center;">
						<input type="submit" name="capnhattaikhoan" id="capnhat">
					</td>
				</tr>
			</table>
		</form>
	</div>
	<div class="col-md-2"></div>
</div>