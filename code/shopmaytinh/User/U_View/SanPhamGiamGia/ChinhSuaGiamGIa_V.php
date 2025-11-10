<style type="text/css">
	tr th, tr td {
		padding: 20px;
	}
</style>
<div class="row">
	<h3 style="margin-top: 10px;margin-left: 10px;">
	Chỉnh sửa giảm giá cho sản phẩm :  <?php echo $tsp['Ten_San_Pham'] ?> (<?php echo $tsp['Loai_SP'] ?>) (id = <?php echo $tsp['id'] ?>)
	</h3>
</div>
<div class="row">
	<form method="POST" style="width: 100%;margin-bottom: 50px;margin-top: 50px;">
		<table border="1" style="width: 90%;margin-left: 5%;margin-right: 5%">
			<tr>
				<th>
					Giá Ban Đầu
				</th>
				<td>
					<input type="text" name="gdb" value="<?php echo $tsp['Gia_Cu'] ?>">
				</td>
			</tr>
			<tr>
				<th>
					Phần Trăm Giảm Giá
				</th>
				<td>
					<input type="text" name="ptgg" value="<?php echo $tsp['Phan_Tram'] ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<b><i>Giá Mới (tự động) = Giá Ban Đầu - Giá Ban Đầu * Phần Trăm Giảm Giá </i></b>
				</td>
			</tr>
			<tr>
				<td colspan="2" style="text-align: center;">
					<input style="width: 30%" type="submit" name="submit" value="Thay Đổi">
				</td>
			</tr>
		</table>
	</form>
</div>
