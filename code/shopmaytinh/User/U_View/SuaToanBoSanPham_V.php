
<div class="col-md-2" style="border: 1px solid silver;margin-top: 2px;">
	<a href="index.php?act=xemsp&loaisp=<?php echo $rs['Loai_SP'] ?>">
		<img style="width: 100%;height: 150px;" src="../../Images/<?php echo $rs['Hinh_Anh'] ?>">
		<p style="text-align: center;">
			<?php echo $rs['Ten_San_Pham'] ?> <br>
			<?php if ($rs['GiamGia'] == 'YES') {
				echo "<p style='text-align: center;'>";
				echo number_format($rs['Gia_Ban']) . "đ";
				echo "</p>";
			}else{
				echo "<p style='text-align: center;'>";
				echo number_format($rs['Gia_Cu'])."đ";
				echo "</p>";
			} ?>
		</p>
		
	</a>
	<span>
		<a href="index.php?act=suasp&loaisp=<?php echo $rs['Loai_SP'] ?>&id=<?php echo $rs['id'] ?>">Sửa</a>
		<a style="margin-left: 80px;" href="index.php?act=xoasp&id=<?php echo $rs['id'] ?>">Xóa</a>
	</span>
</div>
	