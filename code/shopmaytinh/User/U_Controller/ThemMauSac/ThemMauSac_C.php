<?php 
	$id = $_GET['id'];
		
	$count3 = "";
	require_once './../U_Model/KtraNull_M.php';
	if ($count3 > 0) {
		echo "<h2>Bạn không thể thêm màu và ảnh cho sản phẩm này</h2><br>";
		echo '<a href="index.php?act=themmausac">Thêm Màu Cho Sản Phẩm Khác</a><br>';
		echo '<a href="">Cập Nhật Lại Sản Phẩm Này</a>';
	}
	if ($count3 == 0) {
		require_once './../U_View/ThemMauSac/ThemMauSac_V.php';
		if (isset($_POST['themmausac'])) {
			
			// Lấy giá trị
			$mau1 = $_POST['mau1'];
			$mau2 = $_POST['mau2'];
			$mau3 = $_POST['mau3'];
			$mau4 = $_POST['mau4'];

			$FILE1 = $_FILES['img1'];
			$FILE2 = $_FILES['img2'];
			$FILE3 = $_FILES['img3'];
			$FILE4 = $_FILES['img4'];

			$sl1 = $_POST['sl1'];
			$sl2 = $_POST['sl1'];
			$sl3 = $_POST['sl1'];
			$sl4 = $_POST['sl1'];

			// Kiểm tra có tên màu nhưng không có ảnh và só lượng
			if (!empty($mau1) && $FILE1['name'] == "") {
				echo "Không thể cập nhật màu";
				return;
			}
			if (!empty($mau1) && $FILE1['name'] != "" && $sl1 == "") {
				echo "Bạn chưa cập nhật số lượng";
				return;
			}

			if (!empty($mau2) && $FILE2['name'] == "") {
				echo "Không thể cập nhật màu";
				return;
			}
			if (!empty($mau2) && $FILE2['name'] != "" && $sl2 == "") {
				echo "Bạn chưa cập nhật số lượng";
				return;
			}

			if (!empty($mau3) && $FILE3['name'] == "") {
				echo "Không thể cập nhật màu";
				return;
			}
			if (!empty($mau3) && $FILE3['name'] != "" && $sl3 =="") {
				echo "Bạn chưa cập nhật số lượng";
				return;
			}

			if (!empty($mau4) && $FILE4['name'] == "") {
				echo "Không thể cập nhật màu";
				return;
			}
			if (!empty($mau4) && $FILE4['name'] != "" && $sl4=="") {
				echo "Bạn chưa cập nhật số lượng";
				return;
			}

			// Kiểm tra ảnh có đủ 4 không
			if ($FILE1['name']=="" || $FILE2['name']=="" || $FILE3['name']=="" || $FILE4['name']=="") {
				echo "Không thể cập nhật ảnh (cần đủ 4 ảnh)";
				return;
			}

			if ($FILE1['name'] != "" && $FILE2['name'] != "" && $FILE3['name'] !="" && $FILE4['name'] != "") {
				$result ="";
				function randomString($length = 5){
					$arrCharacter = array_merge(range('A', 'Z'), range('a', 'z'), range(0, 9));
					$arrCharacter = implode($arrCharacter, '');
					$arrCharacter = str_shuffle($arrCharacter);
					$rd     	  = substr($arrCharacter,0 , $length );
					return $rd;
				}
				
				$random = randomString(5);

				$file_tmp1 = $_FILES['img1']['tmp_name'];
				$file_tmp2 = $_FILES['img2']['tmp_name'];
				$file_tmp3 = $_FILES['img3']['tmp_name'];
				$file_tmp4 = $_FILES['img4']['tmp_name'];

				$img1 = $random . $_FILES['img1']['name'];
				$img2 = $random . $_FILES['img2']['name'];
				$img3 = $random . $_FILES['img3']['name'];
				$img4 = $random . $_FILES['img4']['name'];

				$target1 = "./../../Images/" .basename($img1);
				$target2 = "./../../Images/" .basename($img2);
				$target3 = "./../../Images/" .basename($img3);
				$target4 = "./../../Images/" .basename($img4);

				move_uploaded_file($_FILES['img1']['tmp_name'], $target1);
				move_uploaded_file($_FILES['img2']['tmp_name'], $target2);
				move_uploaded_file($_FILES['img3']['tmp_name'], $target3);
				move_uploaded_file($_FILES['img4']['tmp_name'], $target4);

				require_once './../U_Model/ThemMauSac/ThemAnhVaMauSac_M.php';
				if ($result == 1) {
					echo "Cập Nhật Thành Công";
				}
				if ($result == 2) {
					echo "Cập Nhật Thất Bại";
				}
			}






		}
	}
	
?>




		

			