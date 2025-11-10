<style type="text/css">
	#pad{
		padding: 10px
	}
</style>
<h3 style="text-align: center;">
	Danh Sách Bình luận
</h3>
<div id="pad" class="row"  style="background-color: rgba(0,255,255,0.3);">
	<div class="col-md-3">
		<h4 style="text-align: center;">Tên người bình luận</h4>
	</div>
	<div class="col-md-1">
		<h4 style="text-align: center;">Mức Độ ★</h4>
	</div>
	<div class="col-md-7">
		<h4 style="text-align: center;">Nội Dung</h4>
	</div>
	<div class="col-md-1">
		<h4 style="text-align: center;">Xóa</h4>
	</div>
</div>
<div class="row" id="pad">
	<div class="col-md-1"></div>
	<div class="col-md-4">
		<a href="index.php?act=xoabl" class="btn btn-danger">Xóa bình luận đã chọn</a>
	</div>
	<div class="col-md-4">
		<a href="index.php?act=xembinhluan" class="btn btn-info">Làm mới</a>
	</div>
	<div class="col-md-3">
		<a href="index.php?act=xoabl3sao">Xóa toàn bộ bình luận 3 ★</a>
	</div>
</div>
<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-2">
		<a href="index.php?act=xembl1sao">Bình luận 1★</a>
	</div>
	<div class="col-md-2">
		<a href="index.php?act=xembl2sao">Bình luận 2★</a>
	</div>
	<div class="col-md-2">
		<a href="index.php?act=xembl3sao">Bình luận 3★</a>
	</div>
	<div class="col-md-2">
		<a href="index.php?act=xembl4sao">Bình luận 4★</a>
	</div>
	<div class="col-md-2">
		<a href="index.php?act=xembl5sao">Bình luận 5★</a>
	</div>
	<div class="col-md-1"></div>
</div>
<div class="row" id="pad">
	
	<?php 
		while ($bl = mysqli_fetch_array($qr)) {
			switch ($bl['DanhGia']) {
				case 'verybad':
					$bl['DanhGia'] = "1/5 ★";
					break;
				case 'bad':
					$bl['DanhGia'] = "2/5 ★";
					break;
				case 'normal':
					$bl['DanhGia'] = "3/5 ★";
					break;
				case 'good':
					$bl['DanhGia'] = "4/5 ★";
					break;
				case 'verygood':
					$bl['DanhGia'] = "5/5 ★";
					break;
				default:
					# code...
					break;
			}
			?>
			<div class="col-md-3" style="border-right: 1px solid black;border-top: 1px solid silver">
				 
				 
				 <div class="row">
				 - - -	<?php echo $bl['TenNguoiBinhLuan'] ?>
				 </div>
				 <div class="row">
				 	lúc : <?php echo $bl['ThoiGian'] ?>
				 </div>
			</div>
			<div class="col-md-1" style="border-right: 1px solid black;border-top: 1px solid silver"><?php echo $bl['DanhGia'] ?></div>
			<div class="col-md-7" style="border-right: 1px solid black;border-top: 1px solid silver">
				<?php echo $bl['NoiDungBinhLuan'] ?>
			</div>
			<div class="col-md-1" style="text-align: center;">
				<a href="index.php?act=xoabl&id=<?php echo $bl['id'] ?>&time=<?php echo $bl['ThoiGian'] ?>">Xóa</a>
			</div>
		<?php } ?>

</div>