<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tài Khoản</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../../Font-awsome/css/font-awsome.min.js">
    <!-- <link rel="stylesheet" type="text/css" href="../Assets/mycss.css"> -->
    <style type="text/css">
    	body{
    		background-color: #E2E2E0;
    	}
    	.container{
    		padding: 10px;

    	}
    	.row{
    		padding: 5px;
    	}

    </style>
  
</head>
<body>
	<div class="container">
		<h3>
			Xin chào : <?php echo $_SESSION['user'] ?>
		</h3>
	
		
		<div class="row">
			<?php require_once '../U_View/TaiKhoan/Index_Cus_V.php'; ?>
			<div class="col-md-9">
				<?php 
					if (isset($_GET['cus'])) {
						switch ($_GET['cus']) {
							case 'taikhoan':
								require_once '../U_Controller/TaiKhoan/TaiKhoan_C.php';
								break;
							case 'qldh':
								require_once '../U_Controller/DonHang_Custommer/XemDonHang_C.php';
								break;
							case 'nhanxet':
								require_once '../U_Controller/NhanXet/NhanXet_C.php';
								break;
							default:
								# code...
								break;
						}
					}
					else{
						require_once '../U_Controller/TaiKhoan/TaiKhoan_C.php';
					}
				?>
			</div>
		</div>
	</div>
	<div class="footer">
		
	</div>
</body>
</html>