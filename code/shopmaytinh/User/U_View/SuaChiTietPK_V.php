<style type="text/css">
	tr th,tr td{
		padding: 10px;
	}
</style>

<div class="container">
	<form method="POST" style="padding: 10px;" >
		<table border="1" style="width: 100%;">
			<h1>
				Sửa thông tin phụ kiện :  <?php echo $tsp['Ten_San_Pham'] ?>
			</h1>
			<tr>
				<th>
					Tương Thích
				</th>
				<td>
					<input type="text" name="tt" style="width: 100%" value="<?php echo $row2['Tuong_Thich'] ?>">
				</td>
			</tr>
			<tr>
				<th>
					Cổng Kết Nối
				</th>
				<td>
					<input type="text" name="ckn" style="width: 100%" value="<?php echo $row2['Cong_Ket_Noi'] ?>">
				</td>
			</tr>
			<tr>
				<th>
					Thời Gian Sạc
				</th>
				<td>
					<input type="text" name="tgs" style="width: 100%" value="<?php echo $row2['Thoi_Gian_Sac'] ?>">
				</td>
			</tr>
			<tr>
				<th>
					Thời Gian Sử Dụng
				</th>
				<td>
					<input type="text" name="tgsd" style="width: 100%" value="<?php echo $row2['Thoi_Gian_Su_Dung'] ?>">
				</td>
			</tr>

			
			<tr>
				<th>
					Kích Thước - Khoảng Cách
				</th>
				<td>
					<input type="text" name="ktkc" style="width: 100%" value="<?php echo $row2['KichThuoc_KhoangCach'] ?>">
				</td>
			</tr>
			
			<tr>
				<th>
					Thương Hiệu
				</th>
				<td>
					<input type="text" name="th" style="width: 100%" value="<?php echo $row2['Thuong_Hieu'] ?>">
				</td>
			</tr>

			<tr>
				<th>
					Xuất Xứ
				</th>
				<td>
					<input type="text" name="xx" style="width: 100%" value="<?php echo $row2['Xuat_Xu'] ?>">
				</td>
			</tr>

		
			<tr>
				<td colspan="2" style="text-align: center;">
					<input style="width: 30%" type="submit" name="suachitietpk" value="Sửa">
				</td>
			</tr>

		</table>
	</form>
</div>
