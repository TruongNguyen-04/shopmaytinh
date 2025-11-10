<?php 
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Giỏ Hàng</title>
	<meta charset="utf-8">	
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="js/jquery-1.11.1.min.js"></script>
	<style type="text/css">
		
		span{
			display: inline-block;
		}
	</style>
</head>
<body>
	<?php 
		if (!empty($_GET['cart'])) {
			switch ($_GET['cart']) {
				case 'emty':
					if (isset($_SESSION['arMua']) && $_SESSION['arMua'] != NULL) {
						unset($_SESSION['arMua']);
					}
					else{
						unset($_SESSION['arMua']);
					}
					break;
				case 'remove':
					if (!empty($_SESSION['arMua'])) {
						foreach ($_SESSION['arMua'] as $key => $value) {
							if ($_GET["id"] == $key) {
								unset($_SESSION['arMua'][$key]);
							}
							if (empty($_SESSION['arMua'])) {
								unset($_SESSION['arMua']);
							}
							
						}
					}
					if (!isset($_SESSION["arMua"])) {
						unset($_SESSION['arMua']);
						$_SESSION['cart'] =0;
					}
					break;
				case 'tangsl':
					if (!empty($_SESSION['arMua'])) {
						foreach ($_SESSION['arMua'] as $key => $value) {
							if ($_GET["id"] == $key) {
								$_SESSION['arMua'][$key]['SoLuong']++;
							}
							
						}
					}
					break;
				case 'giamsl':
					if (!empty($_SESSION['arMua'])) {
						foreach ($_SESSION['arMua'] as $key => $value) {
							if ($_GET["id"] == $key) {
								if ($_SESSION['arMua'][$key]['SoLuong'] == 1) {
									$_SESSION['arMua'][$key]['SoLuong'] == 1;
								}
								if ($_SESSION['arMua'][$key]['SoLuong'] > 1) {
									$_SESSION['arMua'][$key]['SoLuong'] --;
								}
							}
							
						}
					}
					break;
				case 'donhang':
					// First, create customer info
					$tnn = $_POST['tenNguoiNhan'];
					$dc = $_POST['diaChi'];
					$sdt = $_POST['soDienThoai'];
					$email = $_POST['email'] ?? '';
					$tdn = $_SESSION['user'] ?? 'guest';
					
					require_once '../../Controller/GioHang/Form.php'; // This creates $random
					
					// Insert customer info first
					require_once '../../Model/GioHang/ThemVaoTb_nguoidatmua.php';
					
					// Then insert order items
					$ThanhTien = 0;
					if (isset($_SESSION['arMua']) && is_array($_SESSION['arMua'])) {
						foreach ($_SESSION['arMua'] as $id) {
						$ids = $id['id'];
						$tsp = $id['TenSanPham'];
						$sl  = $id['SoLuong'];
						$gt  = $id['GiaTien'];
						$ms  = $id['MauSac'];
						$ThanhTien = $sl * $gt;
						require '../../Model/Giohang/CapNhatSP.php';
						}
					}
					
					// Clear cart after successful order
					unset($_SESSION['arMua']);
					// Redirect to success page
					echo "<script>window.location.href='../../View/ThongBao/DatHangThanhCong_View.php?orderId=$random';</script>";
					exit;
				// else{

					// }
					// require '../../Controller/GioHang/LayLoaiSanPham.php';
					break;
				default:
					
					break;
			}
		}
	?>
<h3 class="text-center">Giỏ hàng của bạn</h3>
<div class="container"> 

 	<?php 
 		if (!isset($_SESSION['arMua'])) {
 			echo "<p style='text-align:center;'>Giỏ Hàng Của Bạn Trống</p><br>";
 			echo '<a href="../../index.php">Trang chủ</a>';
 		}
 		else{			
 	?>
 	<a href="TrangGioHang_View.php?cart=emty" style="float: right;margin-right: 10%">Làm Trống Giỏ Hàng</a>
 	<form method="POST">
 	<table id="cart" class="table table-hover table-condensed"> 

  <thead> 
   <tr> 
    <th style="width: 40%">Tên sản phẩm</th> 
  	<th style="width: 10%">Màu</th>
    <th style="width: 10%">Giá</th> 
    <th style="width: 10%">Số lượng</th> 
    <th style="width: 10%">Thành tiền</th> 
    <th style="width: 20%">Hành Động</th> 
   </tr> 
  </thead> 
  <tbody>
	<?php 
	$TongTien = 0;

		foreach ($_SESSION['arMua'] as $k) {
			// if (isset($_POST['capnhat'])) {
			// 	$k['id'];
   // 					$k['SoLuong'] = $_POST['soluong'];
   // 				}				
			$ThanhTien = $k['GiaTien'] * $k['SoLuong'];
			$TongTien += $ThanhTien;
			$id = $k['id'];
			// require '../../Controller/GioHang/LayLoaiSanPham.php';
		
	?>
  <tr> 
   	<td>
   		<?php echo $k['TenSanPham']; ?>
   		<!-- <img style="width: 70px" src="../../Images/<?php echo $loaisp['Hinh_Anh'] ?>"> -->
   	</td>
   	<td>
   		<?php echo $k['MauSac']; ?>
   	</td>
   	<td>
   		<?php echo number_format($k['GiaTien']) . "đ" ?>
   	</td>
   	<td>
   		<span style="width: 30%"><a href="TrangGioHang_View.php?cart=giamsl&id=<?php echo $k['id'] ?>">-</a>
   		</span>

   		<span style="width: 30%">
   			<?php echo $k['SoLuong'] ?>
   		</span>
		<span style="width: 30%">
   			<a href="TrangGioHang_View.php?cart=tangsl&id=<?php echo $k['id'] ?>">+</a>
   		</span>
   	</td>
   	<td>
   		<?php echo $ThanhTien; ?>
   	</td>
   	<td style="width: 100%">
	   	<span style="width: 22%">
	   		<a href="TrangGioHang_View.php?cart=remove&id=<?php echo $k['id'] ?>">
	   			<img style="height: 50px;" src="../../Images/delete-sign.png">
	   		</a>
	   	</span>
	  <!--  	<span style="width: 68%">
	   		<a href="TrangGioHang_View.php?cart=donhang&id=<?php echo $k['id'] ?>" class="btn btn-success btn-block">
	   			Thêm Vào Đơn Hàng
	   		</a>
	   	</span> -->
	   	
	   		<span style="width: 50%;margin-top: 5px;margin-left: 1%">
	   			<?php require_once '../../Model/KetNoiDb.php'; require_once '../../Model/Giohang/LayLoaiSanPham.php'; ?>
	   		<a href="../../index.php?id=<?php echo $k['id'] ?>&action=xemsp&loaisp=<?php echo $loaisp['Loai_SP'] ?>" class="btn btn-success btn-block">
	   			Xem <i class="fa fa-angle-right"></i>
	   		</a>
	   	</span>
    </td>
  </tr> 
  <?php } ?>
 <tr>
 	 <td colspan="3"><a href="../../index.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
    </td>
      <td colspan="2">
    	<strong><?php if (isset($_SESSION['arMua'])) {
    		echo "Tổng Tiền : ". number_format($TongTien) ."đ";
    	} ?></strong>
    </td> 
    
    <!-- <td><a href="" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>
    </td> -->
 </tr>
 	<tr>
 		<td colspan="6">
 			<span style="width: 100%">
	   		<a href="TransferCart.php" class="btn btn-success btn-block">
	   			Thêm Tất Cả Vào Đơn Hàng
	   		</a>
	   	</span>

 		</td>
 	</tr>

  <tr>

  	<td colspan="6">
  		<h3 style="text-align: center;">Đơn Hàng</h3>

  	</td>
  </tr> 
  <tr>
  	<td colspan="2">
  		
  	</td> 
  	
  </tr>

  </tfoot> 
 </table>

 </form>


 <?php } ?>



</div>
</body>
</html>