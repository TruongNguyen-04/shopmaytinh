
<?php 
	require_once 'KetNoiDb.php';
	    //Tìm Tổng số records
	$sql = "select count(id) as total from danh_sach_san_pham where Loai_SP = 'LT'";
	$result = mysqli_query($connect,$sql);
	$row= mysqli_fetch_assoc($result);
	$total_records_LT = $row['total'];
	//Tìm limit và current page
	$current_page_LT = isset($_GET['PAGE']) ?  $_GET['PAGE'] : 1;
	$limit = 30;

	// tính toán total page và start
	// tổng số trang

	$total_page_LT = ceil($total_records_LT/  $limit);
	// Giới hạn current page trong khoảng 1 -> total page
	if($current_page_LT > $total_page_LT){
	    $current_page_LT = $total_page_LT;
	}
	elseif ($current_page_LT < 1) {
	    $current_page_LT =1;
	}

	//Tìm start
	$start = ($current_page_LT - 1)*$limit;
	// $result = mysqli_query($connect,'select * from danh_sach_san_pham limit $start,$limit');

	$sql = "select * from danh_sach_san_pham where Loai_SP = 'LT' limit $start,$limit";
	$result = mysqli_query($connect,$sql);
?>
  
  

