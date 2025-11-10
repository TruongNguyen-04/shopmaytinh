<style type="text/css">
	#pad{
		padding: 8px
	}
</style>
<div class="container">
	<h3>
		Toàn bộ những bình luận 1 ★
	</h3>
	<div class="row" id="pad" >
		<div class="col-md-1"></div>
		<div class="col-md-2"><h4>Có Tất Cả</h4></div>
		<div class="col-md-1"><h4><b><?php echo $num ?></b></h4></div>
		<div class="col-md-4"><h4>Bình luận 1 ★</h4></div>
	</div>
	<p style="text-align: right;"><a href="index.php?act=xoabl1sao">Xóa toàn bộ</a></p>
	<p style="text-align: right;">
		<a href="index.php?act=xembinhluan">Quay lại</a>
	</p>
	<div class="row" id="pad" style="">
		<div class="col-md-3"  style="border-right: 1px solid silver"><h4>Tên người bình luận</h4></div>
		<div class="col-md-9"><h4>Nội dung bình luận</h4></div>
	</div>
	<div class="row" id="pad">
		<?php 
			while ($bl = mysqli_fetch_array($qr)) {?>
				<div class="col-md-3" style="border-right: 1px solid silver;border-top: 1px solid silver">
					<div class="row"	>
					- - -	<?php echo $bl['TenNguoiBinhLuan'] ?>						
					</div>
					<div class="row">
						<?php echo $bl['ThoiGian'] ?>
					</div>
				</div>
				<div class="col-md-9" style="border-top: 1px solid silver">
					<?php echo $bl['NoiDungBinhLuan'] ?>
				</div>
				
			<?php } ?>
	</div>
</div>