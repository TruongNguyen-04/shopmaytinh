
<?php 
	while ($bl = mysqli_fetch_array($blqr)) {
		// switch ($bl['DanhGia']) {
		// 	case 'verybad':
		// 		$bl['DanhGia'] = "Cực tệ";
		// 		break;
		// 	case 'bad':
		// 		$bl['DanhGia'] = "Tệ";
		// 		break;
		// 	case 'normal':
		// 		$bl['DanhGia'] = "Bình thường";
		// 		break;
		// 	case 'good':
		// 		$bl['DanhGia'] = "Tốt";
		// 		break;
		// 	case 'verygood':
		// 		$bl['DanhGia'] = "Rất tốt";
		// 		break;
		// 	default:
		// 		# code...
		// 		break;
		// }
?>
	<div class="row">
		
		<div class="col-md-1"></div>
		<div class="col-md-11">
			<b><?php echo $bl['TenNguoiBinhLuan'] ?> </b>

			đã đánh giá <?php
				if ($bl['DanhGia'] == 'verybad') {
					echo '<img  style="border-radius: 50%;width: 20px;height: 20px" src=.../../Images/1sao.png>';
				}
				if ($bl['DanhGia'] == 'bad') {
					echo '<img  style="border-radius: 50%;width: 20px;height: 20px" src=.../../Images/2sao.png>';
					echo '<img  style="border-radius: 50%;width: 20px;height: 20px" src=.../../Images/2sao.png>';
				}
				if ($bl['DanhGia'] == 'normal') {
					echo '<img  style="border-radius: 50%;width: 20px;height: 20px" src=.../../Images/3sao.png>';
					echo '<img  style="border-radius: 50%;width: 20px;height: 20px" src=.../../Images/3sao.png>';
					echo '<img  style="border-radius: 50%;width: 20px;height: 20px" src=.../../Images/3sao.png>';
				}
				if ($bl['DanhGia'] == 'good') {
					echo '<img  style="border-radius: 50%;width: 20px;height: 20px" src=.../../Images/4sao.png>';
					echo '<img  style="border-radius: 50%;width: 20px;height: 20px" src=.../../Images/4sao.png>';
					echo '<img  style="border-radius: 50%;width: 20px;height: 20px" src=.../../Images/4sao.png>';
					echo '<img  style="border-radius: 50%;width: 20px;height: 20px" src=.../../Images/4sao.png>';
				}
				if ($bl['DanhGia'] == 'verygood') {
					echo '<img  style="border-radius: 50%;width: 20px;height: 20px" src=.../../Images/5sao.png>';
					echo '<img  style="border-radius: 50%;width: 20px;height: 20px" src=.../../Images/5sao.png>';
					echo '<img  style="border-radius: 50%;width: 20px;height: 20px" src=.../../Images/5sao.png>';
					echo '<img  style="border-radius: 50%;width: 20px;height: 20px" src=.../../Images/5sao.png>';
					echo '<img  style="border-radius: 50%;width: 20px;height: 20px" src=.../../Images/5sao.png>';
				}
			?>


			lúc <?php echo $bl['ThoiGian'] ?> :
			<p><?php echo $bl['NoiDungBinhLuan'] ?></p>
		</div>

	</div>
	
<?php } ?>
<img src="">