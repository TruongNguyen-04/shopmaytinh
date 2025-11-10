<div class="container">
	<div class="row" style="height: 330px">
		<?php 
			while ($SP = mysqli_fetch_array($qr)) {?>
				<a href="index.php?action=xemsp&loaisp=<?php echo $SP['Loai_SP'] ?>&id=<?php echo $SP['id'] ?>">
					<div class="col-md-2" style="height: 330px">
						<img style="width: 170px;height: 190px" src=".../../Images/<?php echo $SP['Hinh_Anh'] ?>">
						<p style="text-align: center;">
							<?php echo $SP['Ten_San_Pham'] ?>
						</p>
						<p style="text-align: center;">
							<?php 
								if ($SP['GiamGia'] == "YES") {
									echo "Giá Tiền : " . number_format($SP['Gia_Ban']) ."đ";
									echo "<del>-".$SP['Phan_Tram']."</del><br>";
									echo "Giá Cũ : ".number_format($SP['Gia_Cu'])."đ";
								}
								else{
									echo "Giá Tiền : ".number_format($SP['Gia_Cu'])."đ";
								}
							?>
						</p>
					</div>
				</a>
			<?php } ?>
	</div>
</div>