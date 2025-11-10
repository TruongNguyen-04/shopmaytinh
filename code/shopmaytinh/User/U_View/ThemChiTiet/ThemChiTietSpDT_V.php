<style type="text/css">
	tr th,tr td{
		padding: 10px;
	}
</style>
<div class="container">
	<form method="POST" style="padding: 10px;" >
		<table border="1" style="width: 100%;">
			<h1>
				Nhập thông tin - Điện Thoại
			</h1>
			<tr>
				<th>
					Màn Hình
				</th>
				<td>
					<input type="text" name="mh" style="width: 100%">
				</td>
			</tr>
			<tr>
				<th>
					Độ Phân Giải
				</th>
				<td>
					<input type="text" name="dpg" style="width: 100%">
				</td>
			</tr>
			<tr>
				<th>
					Hệ Điều Hành
				</th>
				<td>
					<input type="text" name="hdh" style="width: 100%">
				</td>
			</tr>
			<tr>
				<th>
					CPU
				</th>
				<td>
					<input type="text" name="cpu" style="width: 100%">
				</td>
			</tr>
			
			<tr>
				<th>
					Camera Sau
				</th>
				<td>
					<input type="text" name="camerasau" style="width: 100%">
				</td>
			</tr>
			<tr>
				<th>
					Camera Trước
				</th>
				<td>
					<input type="text" name="cameratruoc" style="width: 100%">
				</td>
			</tr>
			<tr>
				<th>
					RAM
				</th>
				<td>
					<select name="ram" style="width: 100%;">
						<option value="2GB">2GB</option>
						<option value="3GB">3GB</option>
						<option value="4GB">4GB</option>
						<option value="6GB">6GB</option>
						<option value="8GB">8GB</option>
						<option value="12GB">12GB</option>
						<option value="16GB">16GB</option>
						<option value="32GB">32GB</option>
						<option value="64GB">64GB</option>
						<option value="128GB">128GB</option>
					</select>
				</td>
			</tr>
			<tr>
				<th>
					Bộ Nhớ Trong
				</th>
				<td>
					<input type="text" name="bnt" style="width: 100%">
				</td>
			</tr>
			<tr>
				<th>
					SIM
				</th>
				<td>
					<select name="sim" style="width: 100%;">
						<option value="1SIM">1 SIM</option>
						<option value="2SIM">2 SIM</option>
					</select>
				</td>
			</tr>
			<tr>
				<th>
					PIN
				</th>
				<td>
					<input type="text" name="pin" style="width: 100%">
				</td>
			</tr>
			<tr>
				<th>
					Dung Lượng Pin
				</th>
				<td>
					<input type="text" name="dlp" style="width: 100%">
				</td>
			</tr>
			<tr>
				<td colspan="2" style="text-align: center;">
					<input style="width: 30%" type="submit" name="themchitiet" value="Thêm">
				</td>
			</tr>

		</table>
	</form>
</div>