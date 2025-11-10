<?php 
	
	$id = $_GET['id'];
	$loaisp = $_GET['loaisp'];
	$result = "";

	switch ($loaisp) {
		case 'DT':
			require_once '../U_Model/KtraNull_M.php';
			if ($count1 != 1) {
				echo "Bạn chưa thêm chi tiết cho sản phẩm này<br>";
				echo "Hãy thêm chi tiết sản phẩm trước<br>";
				echo "<a href='index.php?act=themchitiet&id=$id&loaisp=$loaisp'>Thêm Chi Tiết</a><br>";
				echo "<a href='index.php?act=themchitietsp'>Quay lại</a>";
			}
			else{
				require_once '../U_Model/HienTTin_M.php';
				require_once '../U_View/SuaChiTietDTLT_V.php';
				if (isset($_POST['suachitietdtlt'])) {
					$mh = $_POST['mh'];
					$hdh = $_POST['hdh'];
					$dpg =$_POST['dpg'];
					$cpu = $_POST['cpu'];
					$camtruoc = $_POST['camtruoc'];
					$camsau = $_POST['camsau'];
					$ram = $_POST['ram'];
					$bnt = $_POST['bnt'];
					$sim = $_POST['sim'];
					$pin = $_POST['pin'];
					$dlp = $_POST['dlp'];
					$chip = "";
					$chipdohoa = "";
					$oc = "";
					$tl = "";
					require_once '../U_Model/SuaChiTietDTLT_M.php';
					if ($result == 1) {
						echo "Sửa Thành Công";
					}
					else{
						echo "Sửa Thất Bạt";
					}
				}
			}
			
			break;
		case 'LT':

			require_once '../U_Model/KtraNull_M.php';
			if ($count1 != 1) {
				echo "Bạn chưa thêm chi tiết cho sản phẩm này<br>";
				echo "Hãy thêm chi tiết sản phẩm trước<br>";
				echo "<a href='index.php?act=themchitiet&id=$id&loaisp=$loaisp'>Thêm Chi Tiết</a><br>";
				echo "<a href='index.php?act=themchitietsp'>Quay lại</a>";
			}
			else{
				require_once '../U_Model/HienTTin_M.php';
				require_once '../U_View/SuaChiTietDTLT_V.php';
				if (isset($_POST['suachitietdtlt'])) {
					$mh = $_POST['mh'];
					$hdh = $_POST['hdh'];
					$dpg = $_POST['dpg'];
					$cpu = $_POST['cpu'];
					$camtruoc = "";
					$camsau = "";
					$ram = $_POST['ram'];
					$bnt = $_POST['bnt'];
					$sim = $_POST['sim'];
					$pin = $_POST['pin'];
					$dlp = $_POST['dlp'];
					$chip = $_POST['chip'];
					$chipdohoa = $_POST['chipdohoa'];
					$oc = $_POST['oc'];
					$tl = $_POST['tl'];
					require_once '../U_Model/SuaChiTietDTLT_M.php';
					if ($result == 1) {
						echo "Sửa Thành Công";
					}
					else{
						echo "Sửa Thất Bạt";
					}
				}
			}
			break;
		case 'PK':
			require_once '../U_Model/KtraNull_M.php';
			if ($count2 != 1) {
				echo "Bạn chưa thêm chi tiết cho sản phẩm này<br>";
				echo "Hãy thêm chi tiết sản phẩm trước<br>";
				echo "<a href='index.php?act=themchitiet&id=$id&loaisp=$loaisp'>Thêm Chi Tiết</a><br>";
				echo "<a href='index.php?act=themchitietsp'>Quay lại</a>";
			}
			else{
				require_once '../U_Model/HienTTin_M.php';
				require_once '../U_View/SuaChiTietPK_V.php';
				if (isset($_POST['suachitietpk'])) {
					$tt 	= $_POST['tt'];
					$ckn 	= $_POST['ckn'];
					$tgs 	= $_POST['tgs'];
					$tgsd 	= $_POST['tgsd'];
					$ktkc 	= $_POST['ktkc'];
					$th 	= $_POST['th'];
					$xx 	= $_POST['xx'];
					require_once '../U_Model/SuaChiTietPK_M.php';
					if ($result == 1) {
						echo "Sửa Thành Công";
					}
					else{
						echo "Sửa Thất Bạt";
					}
				}
			}
			break;
		default:
			# code...
			break;
	}
	
?>