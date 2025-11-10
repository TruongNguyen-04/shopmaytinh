<style type="text/css">
	#ms{
		border: 1px solid black;
		padding: 15px;
		text-align: center;
	}
</style>
<form method="POST" enctype="multipart/form-data">
	<div class="row" >
		<h2>Nhập Thông Tin Màu Cho Sản Phẩm : <?php echo $tenn['Ten_San_Pham'] ?> (<?php echo $tenn['Loai_SP'] ?>) </h2><br>
	</div>
	<div class="row" style="max-width: 105%;background-color: yellow;">
		<p>
			<h3 style="margin-left: 10%;margin-top: 20px;">LƯU Ý</h3>
		</p>
		<p style="color: red;margin-left: 10%;margin-bottom: 5px;margin-top: 5px;">
			- Nhập tên màu thì phải có ảnh <br>
			- Nhập đủ 4 ảnh <br>
			- Không nhập tên màu vẫn có thể nhập ảnh
		</p> 
	</div>
	<div class="row">
		<div class="col-md-4" id="ms">
			Tên Màu
		</div>
		<div class="col-md-4" id="ms">
			Ảnh
		</div>
		<div class="col-md-4" id="ms">
			Số Lượng
		</div>
	</div>
	<div class="row">
		<div class="col-md-4" id="ms">
			<input type="text" name="mau1" placeholder="Tên Màu ">
		</div>
		<div class="col-md-4" id="ms">
			<input type="file" name="img1">
		</div>
		<div class="col-md-4" id="ms">
			<input type="number" name="sl1">
		</div>
	</div>
	<div class="row">
		<div class="col-md-4" id="ms">
			<input type="text" name="mau2" placeholder="Tên Màu ">
		</div>
		<div class="col-md-4" id="ms">
			<input type="file" name="img2">
		</div>
		<div class="col-md-4" id="ms">
			<input type="number" name="sl2">
		</div>
	</div>
	<div class="row">
		<div class="col-md-4" id="ms">
			<input type="text" name="mau3" placeholder="Tên Màu ">
		</div>
		<div class="col-md-4" id="ms">
			<input type="file" name="img3">
		</div>
		<div class="col-md-4" id="ms">
			<input type="number" name="sl3">
		</div>
	</div>
	<div class="row">
		<div class="col-md-4" id="ms">
			<input type="text" name="mau4" placeholder="Tên Màu ">
		</div>
		<div class="col-md-4" id="ms">
			<input type="file" name="img4">
		</div>
		<div class="col-md-4" id="ms">
			<input type="number" name="sl4">
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4" style="padding: 10px;">
			<input type="submit" style="width: 100%" name="themmausac" value="Thêm màu, ảnh">
		</div>
		<div class="col-md-4"></div>
	</div>
</form>
