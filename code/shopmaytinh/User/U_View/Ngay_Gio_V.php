<?php 
	$date = getdate();
	switch ($date['weekday']) {
		case 'Monday':
			$date['weekday'] = "Thứ Hai";
			break;
		case 'Tuesday':
			$date['weekday'] = "Thứ Ba";
			break;
		case 'Wednesday':
			$date['weekday'] = "Thứ Tư";
			break;
		case 'Thursday':
			$date['weekday'] = "Thứ Năm";
			break;
		case 'Friday':
			$date['weekday'] = "Thứ Sáu";
			break;
		case 'Saturday':
			$date['weekday'] = "Thứ Bảy";
			break;
		case 'Sunday':
			$date['weekday'] = "Chủ Nhật";
			break;
		default:
			# code...
			break;
	}
?>
 <div class="container-fluid" style="font-size: 14px" >
	<div class="row" style="margin-bottom: 3px;">

		
		<div class="col-md-1"></div>
		<div class="col-md-2"><h3 style="margin-top: 10px;"><?php echo $date['weekday'] ?>,</h3></div>
		<div class="col-md-2"><h3 style="margin-top: 10px;">Ngày: <?php echo date("d") ?></h3> </div>
		<div class="col-md-3"><h3 style="margin-top: 10px;">Tháng : <?php echo date("m") ?></h3></div>
		<div class="col-md-3"><h3 style="margin-top: 10px;">Năm : <?php echo date("Y") ?></h3></div>
	</div>
</div>