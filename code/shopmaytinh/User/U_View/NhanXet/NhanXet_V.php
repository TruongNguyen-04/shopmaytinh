<div class="row">
	<p>
		Tất cả bình luận mà bạn đã bình luận
	</p>
</div>
<hr>
<?php while ($bl = mysqli_fetch_array($qr)) {
		switch ($bl['DanhGia']) {
			case 'verygood':
				$bl['DanhGia'] = "5/5";
				break;
			case 'good':
				$bl['DanhGia'] = '4/5';
				break;
			case 'normal':
				$bl['DanhGia'] = '3/5';
				break;
			case 'bad':
				$bl['DanhGia'] = '2/5';
				break;
			case 'verybad':
				$bl['DanhGia'] = '1/5';
				break;
			default:
				# code...
				break;
		}
	?>
	<div class="row">
		<div class="col-md-8">
			<b>Tên Sản Phẩm</b> : <?php
			$id = $bl['id'];
			
			$se = "SELECT * from danh_sach_san_pham where id = '$id'";
			$qrs = mysqli_query($connect,$se);

			$tsp = mysqli_fetch_array($qrs);

			echo $tsp['Ten_San_Pham'];
		?>
		</div>
		<div class="col-md-4">
			<a href="../../index.php?action=xemsp&loaisp=<?php echo $tsp['Loai_SP'] ?>&id=<?php echo $tsp['id'] ?>">Xem</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
			Đánh giá : <?php echo $bl['DanhGia'] ?>
		</div>
		<div class="col-md-6">
			Nội dung : <?php echo $bl['NoiDungBinhLuan'] ?>
		</div>
		<div class="col-md-3">
			<?php echo $bl['ThoiGian'] ?>
		</div>
		
	</div>
	<hr>
<?php } ?>