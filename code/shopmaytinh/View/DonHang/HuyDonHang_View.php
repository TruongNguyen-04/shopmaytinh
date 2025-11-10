<style type="text/css">
	.row{
		padding: 5px
	}
</style>
<div class="container" style="margin-top: 60px;">
	<h3>
		Tiến Hành Hủy Đơn Hàng : <b><i style="font-size: 30px;"><?php echo $mdh ?></i></b>
	</h3>
	<form method="POST" style="border-style: dashed;margin-top: 20px">
		<h4 style="text-align: center;">
			Xác Nhận Thông Tin
		</h4>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-2">
				Nhập Số Điện Thoại
			</div>
			<div class="col-md-4">
				<input type="number" placeholder="Số điện thoại đã dùng đặt hàng" name="xnsdt" style="border: 1px solid black;width: 100%" required>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-2">
				Nhập Địa Chỉ Email
			</div>
			<div class="col-md-4">
				<input type="text" placeholder="Email đã dùng đặt hàng" name="xnemail" style="border: 1px solid black;width: 100%" required  pattern="[^ @]*@gmail.com[^ @gmail.com]*" title="Sai định dạng">
			</div>
		</div>
		<div class="row">
		 	<div class="col-md-4"></div>
		 	<div class="col-md-4">
		 		<input style="background-color: red;color: yellow;width: 100%;margin-bottom: 10px" type="submit" name="xacnhantt" value="Xác Nhận">
		 	</div>
		 	<div class="col-md-4"></div>
		</div>
	</form>
</div>