<div class="container">
	<div class="row">
		<?php 
			while ($GT = mysqli_fetch_array($gt)) {?>
				<a href="index.php?action=xemsp&loaisp=<?php echo $GT['Loai_SP'] ?>&id=<?php echo $GT['id'] ?>">
					<div class="col-md-2" style="height: 300px">
						<img style="width: 170px;height: 190px" src=".../../Images/<?php echo $GT['Hinh_Anh'] ?>">
						<p style="text-align: center;">
							<?php echo $GT['Ten_San_Pham'] ?>
						</p>
						<p style="text-align: center;">
							<?php 
								if ($GT['GiamGia'] == "YES") {
									echo "Giá Tiền : " . number_format($GT['Gia_Ban']) ."đ";
									echo "<del>-".$GT['Phan_Tram']."</del><br>";
									echo "Giá Cũ : ".number_format($GT['Gia_Cu'])."đ";
								}
								else{
									echo "Giá Tiền : ".number_format($GT['Gia_Cu'])."đ";
								}
							?>
						</p>
					</div>
				</a>
			<?php } ?>
	</div>
</div>