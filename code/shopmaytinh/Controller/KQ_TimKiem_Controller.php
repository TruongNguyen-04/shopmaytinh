<?php 
	
	require_once './View/Menu_TimKiem_View.php';
	if (isset($_POST['submit'])) {
		$_GET['action'] = 'none';
		$search = $_POST['search'];
		if (isset($search)) {
		
 
            // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
            if (empty($search)) {
                echo "<div class='container'>";
				echo "Bạn cần nhập thông tin";
				echo "</div>";
            } 
            else
            {
                // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
               require_once './Model/TimKiem_Model.php';
 
                // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
                if ($num > 0 && $search != "") 
                {
                    // Dùng $num để đếm số dòng trả về.
                    
 
                    // Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.
                    require_once './View/KQ_TimKiem_View.php';
                    
                } 
                else {
                    echo "<div class='container'>";
					echo "Không Tìm Thấy Kết Quả";
					echo "</div>";
                }
			
		}
		
	}
}
	

 ?>