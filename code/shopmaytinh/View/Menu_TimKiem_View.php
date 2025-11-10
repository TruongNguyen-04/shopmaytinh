
<div id="menu">
	<ul>
		<li>
			<a href="index.php?action=more">Giảm Giá</a>
		</li>
		<li>
			<a href="index.php?action=support">Hỗ Trợ</a>
		</li>
		<li>
			<?php 
				if (isset($_SESSION['user'])) {
					echo '<a href=".../../Controller/logout.php">Đăng Xuất</a>';
				}
				else{
					echo '<a href="index.php?action=login">Đăng Nhập</a>';
				}
			?>
		</li>
		<li>
			<a href="index.php?action=signup">Đăng Ký</a>
		</li>
		<!-- <li>
			<a href="">Menu 5</a>
		</li> -->
	</ul>

	
</div>
<div id="tim_kiem" style="width: 100%">
	
		<form method="POST" id="form" action="">
		
			<span id="span1" style="width: 5%;">
				<a href="index.php">
					<!-- <i class="fa fa-home"></i> -->
					<img style="height: 40px; width: 70px;position: " src="./Images/tld.jpg">
				</a>
			</span>
			<span style="width: 35%;">
				<input type="text" name="search" style="width: 100%; padding: 3px 10px" required placeholder="Tìm kiếm theo tên sản phẩn...">		
			</span>
			<span>
			<button type="submit" id="submit_timkiem" >Tìm kiếm</button>
			</span>
			<span style="margin-left: 100px">
				<!-- <a href="" id="icon" style=""> -->
					<i class="fa fa-user" style="margin-left: 10px;"></i>
					<small id="tk_gh">
						<?php 
							if (isset($_SESSION['user'])) {
								
								echo "<a href='./User/index.php'>". $_SESSION['user']."</a>";
							}
							else{
								echo "Tài khoản";
								// echo "<small  style='margin-top: 0px;'>Bạn chưa đăng nhập</small>";
							}
						?>

					</small>
			<!-- 	</a> -->
				
			</span>
			<span  style="margin-left: 10px;">
				
				<a class="iconcart" href="./View/GioHang/TrangGioHang_View.php" id="icon" style="">
					<i class="fa fa-shopping-cart"></i>
					<small id="tk_gh">Giỏ hàng</small>
				</a>
				
			</span>
			<span  style="margin-left: 10px;">
				<a href="index.php?action=donhang" id="icon" style="">
					<i class="fa fa-file"></i>
					<small id="tk_gh">Đơn Hàng</small>
				</a>
				
			</span>
		</form>
		<!-- <div id="hide" style="margin-left: 75%;margin-top: 8px;height: 50px;width: 200px;background-color: red;">
			1 Sản phẩm đã được thêm vào giỏ hàng
		</div> -->

	
	
</div>

<script type="text/javascript">
	$(document).ready(function(){
		
		 $(".btn-cart").click(function(){
	        alert("Đã thêm vào giỏ hàng");
    	});
	});
</script>