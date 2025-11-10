
<div class="col-md-2" style="height: 330px">
	<a href="index.php?id=<?php echo $rs['id'] ?>&loaisp=<?php echo $rs['Loai_SP'] ?>&action=xemsp">
		<img style="width: 170px;height: 190px;" src="./Images/<?php echo $rs['Hinh_Anh'] ?>">
		<p style="text-align: center;margin-top: 5px;margin-bottom: 2px;">
			<?php echo $rs['Ten_San_Pham']; ?>
		</p>
		<p style="text-align: center;">
			<b><?php echo number_format($rs['Gia_Ban']) ."đ" ?></b>
		</p>
	</a>
</div>
	