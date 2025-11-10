
<?php 
	require_once 'KetNoiDb.php';
	    //Tìm Tổng số records
	$sql = "select count(id) as total from danh_sach_san_pham where Loai_SP = 'DT'";
	$result = mysqli_query($connect,$sql);
	$row= mysqli_fetch_assoc($result);
	$total_records_DT = $row['total'];
	//Tìm limit và current page
	$current_page_DT = isset($_GET['PAGE']) ?  $_GET['PAGE'] : 1;
	$limit = 30;

	// tính toán total page và start
	// tổng số trang

	$total_page_DT = ceil($total_records_DT/  $limit);
	// Giới hạn current page trong khoảng 1 -> total page
	if($current_page_DT > $total_page_DT){
	    $current_page_DT = $total_page_DT;
	}
	elseif ($current_page_DT < 1) {
	    $current_page_DT =1;
	}

	//Tìm start
	$start = ($current_page_DT - 1)*$limit;
	// $result = mysqli_query($connect,'select * from danh_sach_san_pham limit $start,$limit');

	$sql = "select * from danh_sach_san_pham where Loai_SP = 'DT' limit $start,$limit";
	$result = mysqli_query($connect,$sql);
?>
  
  

