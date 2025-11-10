
<div class="col-md-2" style="border: 1px solid silver;margin-top: 2px;">
	
		<img style="width: 100%;height: 150px;" src="../../Images/<?php echo $rs['Hinh_Anh'] ?>">
		<p style="text-align: center;">
			<?php echo $rs['Ten_San_Pham'] ?> <br>
			
		</p>
		
	<a href="index.php?act=addgg&loaisp=<?php echo $rs['Loai_SP'] ?>&id=<?php echo $rs['id'] ?>">Thêm Giảm Giá</a>

</div>
	