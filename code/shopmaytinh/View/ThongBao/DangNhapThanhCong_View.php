<script type="text/javascript">
	$(document).ready(function(){
		$(".to").hide();
	});
</script>
<div class="container" style="margin-top: 60px;padding: 10px">
	Bạn đã đăng nhập thành công
	<h3>
		Xin Chào : <?php echo $_SESSION['user'] ?>
	</h3>

	
	<div class="row" style="padding: 10px">
		<div class="col-md-3"></div>
		<div class="col-md-3">
			<a href="./index.php" style="font-size: 25px">Trang Chủ</a>
		</div>
		<div class="col-md-3">
			<a href="./User/index.php" style="font-size: 25px">Vào Trang Cá Nhân </a>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>