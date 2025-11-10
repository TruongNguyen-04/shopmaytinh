<?php require_once '../U_Model/KetNoiDb.php'; session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Nhân Viên</title>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../../Font-awsome/css/font-awsome.min.js">
    <!-- <link rel="stylesheet" type="text/css" href="../Assets/mycss.css"> -->
     <script src="../../jquery-3.5.1.min.js" type="text/javascript" ></script>
 	 <?php require_once '../Assets/cript.php'; ?>
</head>
<body>
	<?php

		require_once '../U_Model/KtraCapDo_M.php'; 
		echo "Cấp độ của bạn là :".$CapDo['CapDo'];
	?>
	<div class="container" style="padding: 10px">
		<div class="row">
			<h3>
				Xin Chào : <?php echo $_SESSION['user'] ?>
			</h3>
		</div>
		<div class="row" style="padding: 8px">
			<div class="col-md-3">
				<?php 
					if ($CapDo['CapDo'] == 'LV1' || $CapDo['CapDo'] == 'LV2' || $CapDo['CapDo'] == 'LV3') {
				?>
				<p>
					<a href="../../index.php">Trang Chủ</a>
				</p>
				<p>
					<a href="index.php?staff=xemsp">
						Xem Sản Phẩm Đang Bán
					</a>
				</p>
				<p>
					<a href="index.php?staff=spgg">
						Xem Sản Phẩm Đang Giảm Giá
					</a>
				</p>
				<?php } ?>
				<?php 
					if ($CapDo['CapDo'] == 'LV2' || $CapDo['CapDo'] == 'LV3') {
				?>
				<p>
					<a href="index.php?staff=themsp">Thêm Sản Phẩm</a>
				</p>
				<p>
					<a href="index.php?staff=themchitietsp">Thêm Chi Tiết Sản Phẩm</a>
				</p>
				<p>
					<a href="index.php?staff=themmausac">Thêm màu, ảnh</a>
				</p>
				<?php } ?>
				<?php 
					if ($CapDo['CapDo'] == 'LV3') {
				?>
				<p>
					<a href="index.php?staff=sspdb">Sửa, Xóa Sản Phẩm</a>
				</p>
				<?php } ?>
			</div>
			<div class="col-md-9">
				<?php 
					if (isset($_GET['staff'])) {
						switch ($_GET['staff']) {
							case 'xemsp':
								require_once '../U_Controller/ToanBoSanPham_C.php';
								break;
							case 'spgg':
								require_once '../U_Controller/SanPhamGiamGia/SanPhamGiamGia_C.php';
								break;
							case 'themsp':
								require_once '../U_Controller/ThemSp_C.php';
								break;
							case 'themchitietsp':
								require_once '../U_Controller/ToanBoSanPham2_C.php';
								break;
							case 'themmausac':
								require_once '../U_Controller/ThemMauSac/HienSp_C.php';
								break;
							case 'sspdb':
								require_once '../U_Controller/SuaToanBoSanPham_C.php';
								break;
							default:
								# code...
								break;
						}
					}
					else{
						echo "Hi !";
					}
				?>
			</div>
		</div>
	</div>
	
	<!-- <?php require_once '../U_View/Footer_V.php'; ?> -->
</body>
</html>