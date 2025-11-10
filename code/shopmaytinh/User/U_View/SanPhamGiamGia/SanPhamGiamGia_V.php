
<div class="col-md-2" style="border: 1px solid green;margin-top: 10px;">
	<img style="width: 100%;height: 100px;margin-top: 10px;" src="../../Images/<?php echo $row['Hinh_Anh']; ?>">
	<strong style="margin-left: 20%">
		<?php echo $row['Ten_San_Pham']; ?>
	</strong>
	<br>
	<a href="index.php?act=chinhsuagiamgia&id=<?php echo $row['id'] ?>">Chỉnh sửa giảm giá</a>
</div>	
