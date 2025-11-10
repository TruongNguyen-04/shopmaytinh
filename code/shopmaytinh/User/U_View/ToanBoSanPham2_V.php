
<div class="col-md-2" style="border: 1px solid silver;margin-top: 2px;">
	<!-- <a href="index.php?act=xemsp&loaisp=<?php echo $rs['Loai_SP'] ?>"> -->
	<form method="POST">
		<img style="width: 100%;height: 150px;" src="../../Images/<?php echo $rs['Hinh_Anh'] ?>">
		<p style="text-align: center;">
			<?php echo $rs['Ten_San_Pham'] ?> <br>
			<?php if ($rs['GiamGia'] == "YES") {
				echo "Giá Tiền : ".number_format($rs['Gia_Ban']) ."đ";
				echo "<del>-".$rs['Phan_Tram']."</del><br>";
				echo "Giá Cũ : " .number_format($rs['Gia_Cu']) ."đ";
			} else{
				echo "Giá Tiền : ".number_format($rs['Gia_Cu']) ."đ";
			} ?>
		</p>
		<input type="hidden" name="tensp" value="<?php echo $rs['Ten_San_Pham'] ?>">
		
	<!-- </a> -->
	
		- <a href="index.php?act=themchitiet&loaisp=<?php echo $rs['Loai_SP'] ?>&id=<?php echo $rs['id'] ?>">Thêm chi tiết sản phẩm</a><br>
		- <a href="index.php?act=suachitiet&loaisp=<?php echo $rs['Loai_SP'] ?>&id=<?php echo $rs['id'] ?>">Sửa chi tiết sản phẩm</a>


	</form>


</div>
	