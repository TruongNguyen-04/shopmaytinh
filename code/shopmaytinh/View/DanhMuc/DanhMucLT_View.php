<style type="text/css">
	
	p{
		font-size: 16px;

	}
	a:hover{
		color: #DF3A01;
		text-decoration: none;
	}
</style>
<div class="container" style="margin-top: 80px;height: 100px;margin-bottom: 10px">
	<h3>
		Danh Mục Sản Phẩm > Máy Tính, Laptop 
	</h3>
	<div class="row" style="background-color: white">
		<?php 
			while ($dt = mysqli_fetch_array($result)) {?>
				<div class="col-md-2" style="height: 300px">
					<a href="index.php?action=xemsp&loaisp=<?php echo $dt['Loai_SP'] ?>&id=<?php echo $dt['id'] ?>">
						<img style="width: 180px;height: 190px" src=".../../Images/<?php echo $dt['Hinh_Anh'] ?>">
						<p style="text-align: center;margin-top: 10px;">
							<?php echo $dt['Ten_San_Pham'] ?>
						</p>
						 <p style="text-align: center;margin-top: -5px; ">
           
				            <?php if ($dt['GiamGia'] == 'YES') {
				              $giatien = $dt['Gia_Ban'];
				              echo "Giá Tiền : " . number_format($dt['Gia_Ban'])."đ";
				              echo "<small> -".$dt['Phan_Tram']."% </small><br>";
				              echo "Giá Cũ : " .number_format($dt['Gia_Cu']) ."đ";
				            }else{
				              $giatien = $dt['Gia_Cu'];
				               echo "Giá Tiền : " . number_format($dt['Gia_Cu']) . "đ";
				            } ?>
				         </p>
				      
					</a>
				</div>
			<?php } ?>
	</div>
</div>