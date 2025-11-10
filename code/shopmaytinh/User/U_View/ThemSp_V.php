<style type="text/css">
	#row{
		padding: 20px;
		border-bottom: 1px solid black;

	}
	form{
		margin-bottom: 18%;
	}
</style>
<div class="container" >
	<h3 align="center" style='padding: 20px;'>
		Nhập thông tin sản phẩm mới
	</h3>
	<form method="POST" enctype="multipart/form-data" style="border: 1px solid black">
		<div class="row" id="row">
			<div class="col-md-1"></div>
			<div class="col-md-4" style="text-align: right;">
				Tên sản phẩm
			</div>
			<div class="col-md-5">
				<input type="text" name="tsp" required>
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row"  id="row">
			<div class="col-md-1"></div>
			<div class="col-md-4" style="text-align: right;">
				Hình ảnh
			</div>
			<div class="col-md-5">
				<input type="file" name="img">
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row"  id="row">
			<div class="col-md-1"></div>
			<div class="col-md-4" style="text-align: right;">
				Giá gốc
			</div>
			<div class="col-md-5">
				<input type="number" name="gc" required>
			</div>
			<div class="col-md-2"></div>
		</div>
		<!-- <div class="row"  id="row">
			<div class="col-md-1"></div>
			<div class="col-md-4" style="text-align: right;">
				Phần Trăm Giảm
			</div>
			<div class="col-md-5">
				<input type="number" name="ptg">
			</div>
			<div class="col-md-2"></div>
		</div> -->
		<div class="row"  id="row">
			<div class="col-md-1"></div>
			<div class="col-md-4" style="text-align: right;">
				Loại sản phẩm
			</div>
			<div class="col-md-5">
				<select name="loaisp">
					<option value="DT">Điện Thoại</option>
					<option value="LT">Máy Tính, Laptop</option>
					<option value="PK">Phụ Kiện</option>
				</select>
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row" id="row">
			<div class="col-md-1"></div>
			<div class="col-md-4" style="text-align: right;">
				Dòng máy, loại phụ kiện
			</div>
			<div class="col-md-5">
				<select name="dongmay_loaiphukien1">
						<option value="">Điện thoại</option>
						<option value="IPHONE">Iphone</option>
						<option value="SAMSUNG">Samsung</option>
						<option value="HUAWEI">Huawei</option>
						<option value="MOBIISTAR">Mobiistar</option>
						<option value="NOKIA">Nokia</option>
						<option value="XIAOMI">Xiaomi</option>
						<option value="REALME">Realme</option>
						<option value="OPPO">Oppo</option>
						<option value="VIVO">VIVO</option>
						<option value="MOBELL">Mobell</option>
						<option value="VSMART">Vsmart</option>
						<option value="MASSTEL">Masstel</option>
					</select>
					<select name="dongmay_loaiphukien2">
						<option value="">Máy tính, Laptop</option>
						<option value="DELL">Dell</option>
						<option value="HP">Hp</option>
						<option value="ASUS">Asus</option>
						<option value="MACBOOK">Macbook</option>
						<option value="THINKPAD">Thinkpad</option>
						<option value="ACER">Acer</option>
					</select>
					<select name="dongmay_loaiphukien3">
						<option value="">Phụ kiện</option>
						<option value="PK_TN_BL">Tai nghe bluetooth</option>
						<option value="PK_TN">Tai nghe có dây</option>
						<option value="PK_D-L">D-Link</option>
						<option value="PK_MT_CKD">Chuột không dây</option>
						<option value="PK_LOA_BL">Loa bluetooth</option>
						<option value="PK_SDP">Sạc dự phòng</option>
						<option value="PK_BP">Bàn phím</option>
					</select>
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row"  id="row">
			<div class="col-md-1"></div>
			<div class="col-md-4" style="text-align: right;">
				Số lượng
			</div>
			<div class="col-md-5">
				<input type="number" name="sl" required>
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row" id="row">
			<div class="col-md-5"></div>
			<div class="col-md-2">
				<button type="submit" name="submit" style='padding: 3px 20px; background: skyblue; border: 1px solid #ccc'>Thêm sản phẩm</button>
			</div>
			<div class="col-md-5"></div>
		</div>

	</form>
</div>







