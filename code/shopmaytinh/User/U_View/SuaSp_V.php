<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		tr th, tr td{
			padding: 10px;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<form method="POST" style="padding: 10px;" enctype="multipart/form-data">
			<table border="1" style="width: 100%" cellpadding="10" cellspacing="0">
				<tr>
					<th>
						Tên Sản Phẩm
					</th>
					<td>
						<input type="text" name="tsp" style="width: 100%" value="<?php echo $tsp['Ten_San_Pham'] ?>">
					</td>
				</tr>
				<tr>
					<th>Hình Ảnh
						<img style="width: 50%;height: 140px;margin-left: 18%" src="../../Images/<?php echo $tsp['Hinh_Anh'] ?>">

					</th>
					<td>
						<input type="file" name="img" style="width: 100%">
					</td>
				</tr>
				<!-- <tr>
					<th>
						Giá Bán
					</th>
					<td>
						<input type="text" name="" style="width: 100%">
					</td>
				</tr> -->
				<tr>
					<th>
						Giá Cũ
					</th>
					<td>
						<input type="text" name="gc" style="width: 100%" value="<?php echo $tsp['Gia_Cu'] ?>">
					</td>
				</tr>
				<!-- <tr>
					<th>
						Phần Trăm Giảm
					</th>
					<td>
						<input type="text" name="ptg" style="width: 100%" value="<?php echo $tsp['Phan_Tram'] ?>">
					</td>
				</tr> -->
				<tr>
					<th>
						Loại Sản Phẩm  
					</th>
					<td>
						<?php echo $tsp['Loai_SP'] ?>
						<select name="loaisp" style="width: 100%" >
							<option value="DT">Điện Thoại</option>
							<option value="LT">Máy Tính, Laptop</option>
							<option value="PK">Phụ Kiện</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>
						Dòng máy, loại phụ kiện 
					</th>
					<td>
						<?php echo $tsp['Dong_May'] ?><br>
						<select name="dongmay_loaiphukien1" style="width: 30%">
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
						<select name="dongmay_loaiphukien2" style="width: 30%">
							<option value="">Máy tính, Laptop</option>
							<option value="DELL">Dell</option>
							<option value="HP">Hp</option>
							<option value="ASUS">Asus</option>
							<option value="MACBOOK">Macbook</option>
							<option value="THINKPAD">Thinkpad</option>
							<option value="ACER">Acer</option>
						</select>
						<select name="dongmay_loaiphukien3" style="width: 30%">
							<option value="">Phụ kiện</option>
							<option value="PK_TN_BL">Tai nghe bluetooth</option>
							<option value="PK_TN">Tai nghe có dây</option>
							<option value="PK_D-L">D-Link</option>
							<option value="PK_MT_CKD">Chuột không dây</option>
							<option value="PK_LOA_BL">Loa bluetooth</option>
							<option value="PK_SDP">Sạc dự phòng</option>
							<option value="PK_BP">Bàn phím</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>
						Số Lượng
					</th>
					<td>
						<input type="text" name="sl" style="width: 100%" value="<?php echo $tsp['So_Luong'] ?>">
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input  style="width: 30%;" type="submit" name="suasp" value="Sửa">
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>