<?php 

    //Tìm Tổng số records

	// $SQL = "select count(id) as TOTAL from danh_sach_san_pham where GiamGia = 'YES'";
	// $RESULT = mysqli_query($connect,$SQL);
	// $ROW= mysqli_fetch_assoc($RESULT);
	// $TOTAL_RECORDS = $ROW['TOTAL'];
	// //Tìm LIMIT và current page
	// $CURRENT_PAGE = isset($_GET['PAGE']) ?  $_GET['PAGE'] : 1;
	// $LIMIT = 5;

	// // tính toán TOTAL page và START
	// // tổng số trang

	// $TOTAL_PAGE = ceil($TOTAL_RECORDS/  $LIMIT);
	// // Giới hạn current page trong khoảng 1 -> TOTAL page
	// if($CURRENT_PAGE > $TOTAL_PAGE){
	// 	$CURRENT_PAGE = $TOTAL_PAGE;
	// }
	// elseif ($CURRENT_PAGE < 1) {
	// 	$CURRENT_PAGE =1;
	// }

	// //Tìm START
	// $START = ($CURRENT_PAGE - 1)*$LIMIT;
	// // $RESULT = mySQLi_query($connect,'select * from danh_sach_san_pham LIMIT $START,$LIMIT');

	$SQL = "select * from danh_sach_san_pham where GiamGia ='YES'";
	$RESULT = mysqli_query($connect,$SQL);
?>
  
      

        