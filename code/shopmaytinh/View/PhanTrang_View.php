
<a  href="index.php?id=<?php echo $row['id'] ?>&loaisp=<?php echo $row['Loai_SP'] ?>&action=xemsp">
	<div class="sanpham" style="margin-left: 1%">
		<form>
			<table>
				<tr>
					<td colspan="2">
						<img class="sp" src="./Images/<?php echo $row['Hinh_Anh']; ?>">
					</td>
				</tr>
				
				<tr>
					<td colspan="2" align="center">
						<p class="product-name-t24" style="text-align: center;">
							<b><?php echo $row['Ten_San_Pham']; ?></b>
						</p>
					</td>
				</tr>

				<tr>
					<td colspan="2" align="center">
						<p class="product-price-t24">
							<?php 
								if ($row['GiamGia'] == 'YES') {
									echo number_format($row['Gia_Ban']) . "đ";
								}
								else{
									echo number_format($row['Gia_Cu']) . "đ";
								}
							?>
							
						</p>
					</td>
				</tr>
			</table>
		</form>
	</div>
</a>
