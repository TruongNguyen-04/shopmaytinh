<div class="container" style="overflow: hidden;">
	<h3>
		Sản phẩm khác
	</h3>
	<div class="row"></div>
	<div class="row">
		<?php 
			while ($sptt = mysqli_fetch_array($qrs)) {
		?>
		
			<div class="col-md-2" style="height: 280px">
				<a href="index.php?id=<?php echo $sptt['id'] ?>&loaisp=<?php echo $sptt['Loai_SP'] ?>&action=xemsp">
				<img style="width:165px;height: 165px" src="./Images/<?php echo $sptt['Hinh_Anh'] ?>">
				<p style="text-align: center;">
					<?php echo $sptt['Ten_San_Pham'] ?><br>
					<?php if ($sptt['GiamGia'] == 'YES') {
						echo "Giá : " . number_format($sptt['Gia_Ban']) . "đ";
						echo " <del>-". $sptt['Phan_Tram']."%</del><br>";
						echo "Giá Cũ : ".number_format($sptt['Gia_Cu'])."đ";
					} else{
						echo "Giá : ".number_format($sptt['Gia_Cu'])."đ";
					}?>
				</p>
				</a>
			</div>
		
		<?php } ?>
	</div>
</div>