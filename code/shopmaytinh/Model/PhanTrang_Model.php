    <?php 

        //Tìm Tổng số records
    $sql = "select count(id) as total from danh_sach_san_pham where GiamGia != 'YES'";
    $result = mysqli_query($connect,$sql);
    $row= mysqli_fetch_assoc($result);
    $total_records =    $row['total'];
    //Tìm limit và current page
    $current_page = isset($_GET['page']) ?  $_GET['page'] : 1;
    $limit = 35;

    // tính toán total page và start
    // tổng số trang

    $total_page = ceil($total_records/  $limit);
    // Giới hạn current page trong khoảng 1 -> total page
    if($current_page > $total_page){
        $current_page = $total_page;
    }
    elseif ($current_page < 1) {
        $current_page =1;
    }

    //Tìm start
    $start = ($current_page - 1)*$limit;
    // $result = mysqli_query($connect,'select * from danh_sach_san_pham limit $start,$limit');

    $sql = "select * from danh_sach_san_pham where GiamGia != 'YES' limit $start,$limit";
    $result = mysqli_query($connect,$sql);
    ?>
      
      

        